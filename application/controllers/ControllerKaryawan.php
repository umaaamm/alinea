<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerKaryawan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$databeranda['menu'] = 'AdminDivisi';
		$databeranda['page'] = 'ListMakalah';
		$databeranda['content']='admin/list-makalah/list-makalah';
		$this->load->view('base/master',$databeranda);
	}

	public function indexListMakalahKaryawan()
	{
		$data['dataListMakalah']= $this->db->query('select * from tb_list_makalah where id_karyawan="200002" ORDER BY id_makalah DESC ')->result_array();
		$data['content']='karyawan/uploadMakalah';
		$this->load->view('base/master',$data);
	}

	public function uploadMakalahMethod(){
		$config['upload_path']          = './upload/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 2048;
		// $config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);

		if ($this->session->userdata('tokenUnicheck') === null) {
			$token = $this->GetTokenUnichek();
			$data = json_decode($token, TRUE);
			$this->session->set_userdata('tokenUnicheck', $data['access_token']);
		}

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data Gagal di Upload, Silahkan ulangi beberapa saat lagi.</div>");
			header('location:'.base_url().'Karyawan/UploadMakalah');

			return;
		}

			//upload to unicheck
		$hasil_unichek = $this->UploadFileUnichekv2($this->upload->data("file_name"));
		$respose_unichek = json_decode($hasil_unichek,true);

		//kondisi error


		//start similarity
		$hasil_similarity_unichek = $this->StartCheckerUnichek($respose_unichek['data']['id']);
		$respose_similarity_unichek = json_decode($hasil_similarity_unichek,true);

		//insert to db
		$data['id_unicheck'] = $respose_unichek['data']['id'];
		$data['id_similarity'] = $respose_similarity_unichek['data']['id'];
		$data['status_simirariti'] = $respose_similarity_unichek['data']['attributes']['state'];
		$data['nama_file_makalah'] = $this->upload->data("file_name");
		$data['judul_makalah'] = $this->input->post('judul_makalah');
		$data['waktu_upload'] = date('Y-m-d H:i:s');
		$data['id_karyawan'] = '200002';
		$this->db->insert('tb_list_makalah',$data);

		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil di Upload</div>");
		header('location:'.base_url().'Karyawan/UploadMakalah');
	}


	public function hasilPlagiat(){
		$data['dataListMakalah']= $this->db->query('select * from tb_list_makalah where id_karyawan="200002" ORDER BY id_makalah DESC ')->result_array();
		$data['content']='karyawan/hasilChecker';
		$this->load->view('base/master',$data);
	}

	public function checkPlagiat(){

		//cekToken
		$token = $this->GetTokenUnichek();
		$dataToken = json_decode($token, TRUE);
		$this->session->set_userdata('tokenUnicheck', $dataToken['access_token']);

		$id=$this->uri->segment(3);

		$query = $this->db->query('select * from tb_list_makalah where id_makalah="'.$id.'"')->result_array();

		// var_dump($query);die();


		$cek = $this->checkHasilSimilariti($query['0']['id_similarity']);
		$respose_cek_unichek = json_decode($cek,true);

		$where=array('id_makalah'=>$id);
		$data['status_simirariti'] = $respose_cek_unichek['data']['attributes']['state'];
		$data['similarity'] = $respose_cek_unichek['data']['attributes']['similarity'];
		$this->RsModel->EditData("tb_list_makalah",$data,$where);

		$this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil Merefesh Data</div>");
		header('location:'.base_url().'Karyawan/HasilPlagiat');
	}


	public function GetTokenUnichek() {
		/* API URL */
		$url = 'https://api.unicheck.com/oauth/access-token';

		/* Init cURL resource */
		$ch = curl_init($url);

		/* Array Parameter Data */
		$data = ['grant_type'=>'client_credentials', 'client_id'=>'ad20206ddf95213c4573','client_secret'=>'c94aff353d3cbeacfbe0c86183393024db827759'];

		/* pass encoded JSON string to the POST fields */
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		/* set the content type json */
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'application/x-www-form-urlencoded',
		));

		/* set return type json */
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		/* execute request */
		$result = curl_exec($ch);

		/* close cURL resource */
		curl_close($ch);

		return $result;
	}

	public function UploadFileUnichekv2($filename){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.unicheck.com/files');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		$cfile = new CURLFile(realpath('./upload/'.$filename));
		$data = array(
			'file' => $cfile,
		);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$headers = array();
		$headers[] = 'Accept: application/vnd.api+json';
		$headers[] = 'Authorization: Bearer '.$this->session->userdata('tokenUnicheck');
		$headers[] = 'Content-Type: multipart/form-data';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		
		return $result;
	}

	public function StartCheckerUnichek($idUnicheck){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.unicheck.com/similarity/checks');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);


		$data = array (
			'data' => 
			array (
				'type' => 'similarityCheck',
				'attributes' => 
				array (
					'search_types' => 
					array (
						'web' => true,
						'library' => false,
					),
					'parameters' => 
					array (
						'sensitivity' => 
						array (
							'percentage' => 0,
							'words_count' => 8,
						),
					),
				),
			),
			'relationships' => 
			array (
				'file' => 
				array (
					'data' => 
					array (
						'id' => $idUnicheck,
						'type' => 'file',
					),
				),
			),
		);

		// var_dump(json_encode($data));die();
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

		$headers = array();
		$headers[] = 'Accept: application/vnd.api+json';
		$headers[] = 'Authorization: Bearer '.$this->session->userdata('tokenUnicheck');
		$headers[] = 'Content-Type: application/vnd.api+json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);

		return $result;
	}

	public function checkHasilSimilariti($idSimirati){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api.unicheck.com/similarity/checks/'.$idSimirati);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		$headers = array();
		$headers[] = 'Accept: application/vnd.api+json';
		$headers[] = 'Authorization: Bearer '.$this->session->userdata('tokenUnicheck');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);

		return $result;
	}

}
