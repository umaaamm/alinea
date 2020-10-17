<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSuperAdmin extends CI_Controller {

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


	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "loginSuperAdmin") {
			redirect(base_url('Login/SuperAdmin'));
		}
	}

	public function index()
	{
		// $databeranda['jumlah_pengaduan']=$this->db->query("select count(id_user) as total from tbl_user");
		// $databeranda['jumlah_user']=$this->db->query("select count(id) as total from tbl_kronologi");
		// $databeranda['jumlah_tanggapan']=$this->db->query("select count(id_tanggapan) as total from tbl_tanggapan");
		// // $databeranda['jumlah_sum_masuk']="0";
		// // $databeranda['jumlah_sum_tersedia']="0";
		$databeranda['content']='base/home';
		$this->load->view('base/master',$databeranda);
	}


	//Treshold
	public function indexListTreshold(){
		$databeranda['listTreshold'] = $this->db->query("select * from tbl_treshold")->result_array();
		$databeranda['content']='admin/treshold/list-treshold';
		$this->load->view('base/master',$databeranda);
	}

	public function editTreshold(){
		$data['id_treshold']=$this->input->post("id_treshold");
		$data['treshold_nasional']=$this->input->post("treshold_nasional");
		$data['treshold_area']=$this->input->post("treshold_area");
		$data['treshold_wilayah']=$this->input->post("treshold_wilayah");
		$data['treshold_direktorat']=$this->input->post("treshold_direktorat");
		$data['treshold_divisi']=$this->input->post("treshold_divisi");

		$where=array('id_treshold'=>$this->input->post("id_treshold"));
		$this->RsModel->EditData("tbl_treshold",$data,$where);

		$this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil Merubah Data</div>");
		header('location:'.base_url().'SuperAdmin/Treshold');
	}

	//Juri
	public function indexManajemenJuri(){
		$databeranda['listJuri'] = $this->db->query("select * from tbl_juri")->result_array();
		$databeranda['content']='admin/juri/list-juri';
		$this->load->view('base/master',$databeranda);
	}

	public function SimpanJuri(){
		$data['nama_juri']=$this->input->post("nama_juri");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$data['role']='All';
		$data['tahun']=$this->input->post("tahun");;
		$this->db->insert('tbl_juri',$data);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil di simpan</div>");
		header('location:'.base_url().'SuperAdmin/DataJuri');
	}

	public function HapusDataJuri(){
		$id=$this->uri->segment(3);
		$where=array('id_juri'=>$id);
		$this->RsModel->HapusData('tbl_juri',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data berhasil di hapus</div>");
		header('location:'.base_url().'SuperAdmin/DataJuri');
	}

	public function EditDataJuri(){
		$id_juri=$this->input->post("id_juri");
		$data['nama_juri']=$this->input->post("nama_juri");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$data['tahun']=$this->input->post("tahun");;

		$where=array('id_juri'=>$id_juri);
		$this->RsModel->EditData('tbl_juri',$data,$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dirubah</div>");
		header('location:'.base_url().'SuperAdmin/DataJuri');
	}

	//Admin
	public function indexAdmin(){
		$databeranda['listUnitKerja'] = $this->db->query('select * from tbl_unit_kerja')->result();
		$databeranda['listAdmin'] = $this->db->query("select * from tbl_admin JOIN tbl_unit_kerja ON tbl_admin.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tbl_admin.id_area = tbl_area.id_area")->result_array();
		$databeranda['content']='admin/admin/admin';
		$this->load->view('base/master',$databeranda);
	}

	public function SimpanAdmin(){
		$data['nama']=$this->input->post("nama");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$data['role_admin']=$this->input->post("role_admin");
		$data['id_unit_kerja']=$this->input->post("unit_kerja");
		$data['id_area']=$this->input->post("area");

		$this->db->insert('tbl_admin',$data);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil di simpan</div>");
		header('location:'.base_url().'Admin/ManajemenAdmin');
	}

	public function GetDataAdmin(){
		$databeranda['listUnitKerja'] = $this->db->query('select * from tbl_unit_kerja')->result();
		$id=$this->uri->segment(3);
		$where=array('id_admin'=>$id);
		$databeranda['data_edit']=$this->db->query("select * from tbl_admin where id_admin='".$id."' ")->result_array();
		$databeranda['content']='admin/admin/edit-admin';
		$this->load->view('base/master',$databeranda);
	}

	public function EditDataAdmin(){
		$id_admin=$this->input->post("id_admin");
		$data['nama']=$this->input->post("nama");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$data['role_admin']=$this->input->post("role_admin");
		$where=array('id_admin'=>$id_admin);
		$this->RsModel->EditData('tbl_admin',$data,$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dirubah</div>");
		header('location:'.base_url().'Admin/ManajemenAdmin');
	}

	public function HapusDataAdmin(){
		$id=$this->uri->segment(3);
		$where=array('id_admin'=>$id);
		$this->RsModel->HapusData('tbl_admin',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data berhasil di hapus</div>");
		header('location:'.base_url().'Admin/ManajemenAdmin');
	}

	//Super Admin
	public function indexSuperAdmin(){
		$databeranda['listSuperAdmin'] = $this->db->query("select * from tbl_super_admin")->result_array();
		$databeranda['content']='admin/super-admin/super-admin';
		$this->load->view('base/master',$databeranda);
	}

	public function SimpanSuperAdmin(){
		$data['nama']=$this->input->post("nama");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$this->db->insert('tbl_super_admin',$data);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil di simpan</div>");
		header('location:'.base_url().'SuperAdmin/ManajemenSuperAdmin');
	}

	public function EditDataSuperAdmin(){
		$id_super_admin=$this->input->post("id_super_admin");
		$data['nama']=$this->input->post("nama");
		$data['email']=$this->input->post("email");
		$data['password']=$this->input->post("password");
		$where=array('id_super_admin'=>$id_super_admin);
		$this->RsModel->EditData('tbl_super_admin',$data,$where);
		$this->session->set_flashdata("notif","<div class='alert alert-success'>Data berhasil dirubah</div>");
		header('location:'.base_url().'SuperAdmin/ManajemenSuperAdmin');
	}

	public function HapusDataSuperAdmin(){
		$id=$this->uri->segment(3);
		$where=array('id_super_admin'=>$id);
		$this->RsModel->HapusData('tbl_super_admin',$where);
		$this->session->set_flashdata("notif","<div class='alert alert-danger'>Data berhasil di hapus</div>");
		header('location:'.base_url().'SuperAdmin/ManajemenSuperAdmin');
	}

	//List Makalah
	public function ListMakalahAll(){
		$databeranda['listMakalahAll'] = $this->db->query('SELECT DISTINCT * FROM tb_list_makalah JOIN tbl_unit_kerja ON tb_list_makalah.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tb_list_makalah.id_area = tbl_area.id_area JOIN tbl_cabang ON tb_list_makalah.id_cabang = tbl_cabang.id_cabang JOIN tbl_kategori ON tb_list_makalah.id_kategori = tbl_kategori.id_kategori')->result_array();
		$databeranda['content']='admin/list-makalah/list-makalah';
		$this->load->view('base/master',$databeranda);

	}

	//List Proposal
	public function ListProposalAll(){
		$databeranda['listProposalAll'] = $this->db->query('SELECT DISTINCT * FROM tbl_list_proposal JOIN tbl_unit_kerja ON tbl_list_proposal.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tbl_list_proposal.id_area = tbl_area.id_area JOIN tbl_cabang ON tbl_list_proposal.id_cabang = tbl_cabang.id_cabang JOIN tbl_kategori ON tbl_list_proposal.id_kategori = tbl_kategori.id_kategori')->result_array();
		$databeranda['content']='admin/list-proposal/list-proposal';
		$this->load->view('base/master',$databeranda);

	}

	public function ListResumeAll(){
		$data['listKategori'] = $this->db->query('select * from tbl_kategori')->result();
		$data['listUnitKerja'] = $this->db->query('select * from tbl_unit_kerja')->result();
		$data['listMakalah'] = $this->db->query('select * from tb_list_makalah')->result();
		$data['dataListResume']= $this->db->query('SELECT * from tbl_resume_nasional JOIN tb_list_makalah ON tbl_resume_nasional.id_makalah = tb_list_makalah.id_makalah JOIN tbl_unit_kerja ON tbl_resume_nasional.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tbl_resume_nasional.id_area = tbl_area.id_area
			JOIN tbl_cabang ON tbl_resume_nasional.id_cabang = tbl_cabang.id_cabang
			JOIN tbl_kategori ON tb_list_makalah.id_kategori = tbl_kategori.id_kategori ORDER BY tbl_resume_nasional.id_resume_nasional DESC ')->result_array();
		$data['content']='juri/resume/list-resume';
		$this->load->view('base/master',$data);
	}


	//cek plagiarims super admin
	public function checkPlagiatProposalSuperAdmin(){

		//cekToken
		$tokencheckPlagiatProposalSuperAdmin = $this->GetTokenUnichekSuperAdmin();
		$dataTokencheckPlagiatProposalSuperAdmin = json_decode($token, TRUE);
		$this->session->set_userdata('tokenUnicheck', $dataTokencheckPlagiatProposalSuperAdmin['access_token']);

		$id=$this->uri->segment(3);

		$query = $this->db->query('select * from tbl_list_proposal where id_proposal="'.$id.'"')->result_array();


		$cek = $this->checkHasilSimilaritiSuperAdmin($query['0']['id_similarity']);
		$respose_cek_unichek = json_decode($cek,true);

		$where=array('id_proposal'=>$id);
		$data['status_simirariti'] = $respose_cek_unichek['data']['attributes']['state'];
		$data['similarity'] = $respose_cek_unichek['data']['attributes']['similarity'];
		$this->RsModel->EditData("tbl_list_proposal",$data,$where);

		$this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil Merefesh Data</div>");
		header('location:'.base_url().'SuperAdmin/CekPlagiarismProposal');
	}

	public function checkPlagiatMakalah(){
		//cekToken
		$tokencheckPlagiatMakalah = $this->GetTokenUnichekSuperAdmin();
		$dataTokencheckPlagiatMakalah = json_decode($tokencheckPlagiatMakalah, TRUE);
		$this->session->set_userdata('tokenUnicheck', $dataTokencheckPlagiatMakalah['access_token']);

		$id=$this->uri->segment(3);

		$query = $this->db->query('select * from tb_list_makalah where id_makalah="'.$id.'"')->result_array();


		$cek = $this->checkHasilSimilaritiSuperAdmin($query['0']['id_similarity']);
		$respose_cek_unichek = json_decode($cek,true);

		$where=array('id_makalah'=>$id);
		$data['status_simirariti'] = $respose_cek_unichek['data']['attributes']['state'];
		$data['similarity'] = $respose_cek_unichek['data']['attributes']['similarity'];
		$this->RsModel->EditData("tb_list_makalah",$data,$where);

		$this->session->set_flashdata("notif","<div class='alert alert-success'>Berhasil Merefesh Data</div>");
		header('location:'.base_url().'SuperAdmin/CekPlagiarismMakalah');
	}

	public function hasilPlagiatProposalSuperAdmin(){
		$data['dataListProposal']= $this->db->query('select * from tbl_list_proposal ORDER BY id_proposal DESC ')->result_array();
		$data['content']='admin/checker/proposal/proposal-checker';
		$this->load->view('base/master',$data);
	}

	public function hasilPlagiatSuperAdmin(){
		$data['dataListMakalah']= $this->db->query('select * from tb_list_makalah ORDER BY id_makalah DESC ')->result_array();
		$data['content']='admin/checker/makalah/makalah-checker';
		$this->load->view('base/master',$data);
	}



	//unicheck
	public function checkHasilSimilaritiSuperAdmin($idSimirati){
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

	public function GetTokenUnichekSuperAdmin() {
		/* API URL */
		$url = 'https://api.unicheck.com/oauth/access-token';

		/* Init cURL resource */
		$ch = curl_init($url);

		/* Array Parameter Data */
		$dataGetTokenUnichekSuperAdmin = ['grant_type'=>'client_credentials', 'client_id'=>'ad20206ddf95213c4573','client_secret'=>'c94aff353d3cbeacfbe0c86183393024db827759'];

		/* pass encoded JSON string to the POST fields */
		curl_setopt($ch, CURLOPT_POSTFIELDS, $dataGetTokenUnichekSuperAdmin);

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



}
