<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller {

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


	// function __construct(){
	// parent::__construct();
	
	// 		if($this->session->userdata('status') != "login"){
	// 		redirect(base_url('User'));
	// 	}
	// }

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




}
