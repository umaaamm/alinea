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


	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "loginAdmin") {
			redirect(base_url('Login/Admin'));
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

	//Admin
	public function indexAdmin(){
		$databeranda['listUnitKerja'] = $this->db->query('select * from tbl_unit_kerja')->result();
		$databeranda['listAdmin'] = $this->db->query("select * from tbl_admin JOIN tbl_unit_kerja ON tbl_admin.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tbl_admin.id_area = tbl_area.id_area")->result_array();
		$databeranda['content']='admin/admin/admin';
		$this->load->view('base/master',$databeranda);
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
