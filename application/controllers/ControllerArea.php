<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerArea extends CI_Controller {

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

	public function indexListMakalah()
	{
		$databeranda['listMakalahAll'] = $this->db->query('SELECT DISTINCT * FROM tb_list_makalah JOIN tbl_unit_kerja ON tb_list_makalah.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tb_list_makalah.id_area = tbl_area.id_area JOIN tbl_cabang ON tb_list_makalah.id_cabang = tbl_cabang.id_cabang JOIN tbl_kategori ON tb_list_makalah.id_kategori = tbl_kategori.id_kategori')->result_array();
		$databeranda['content']='direktorat/makalah/list-makalah';
		$this->load->view('base/master',$databeranda);
	}

	public function indexListProposal(){
		$databeranda['listProposalAll'] = $this->db->query('SELECT DISTINCT * FROM tbl_list_proposal JOIN tbl_unit_kerja ON tbl_list_proposal.id_unit_kerja = tbl_unit_kerja.id_unit_kerja JOIN tbl_area ON tbl_list_proposal.id_area = tbl_area.id_area JOIN tbl_cabang ON tbl_list_proposal.id_cabang = tbl_cabang.id_cabang JOIN tbl_kategori ON tbl_list_proposal.id_kategori = tbl_kategori.id_kategori')->result_array();
		$databeranda['content']='direktorat/proposal/list-proposal';
		$this->load->view('base/master',$databeranda);
	}
	
}
