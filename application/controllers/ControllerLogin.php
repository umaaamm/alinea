<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLogin extends CI_Controller {

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
	public function index(){

	}

	public function LoginSuperAdmin(){
		$this->load->view('login/LoginSuperAdmin');
	}

	public function LoginKaryawan(){
		$this->load->view('login/LoginKaryawan');
	}

	public function LoginJuri(){
		$this->load->view('login/LoginJuri');
	}

	public function LoginAdmin(){
		$this->load->view('login/LoginAdmin');
	}

	public function loginSuperAdminCek(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->db->query("SELECT * FROM tbl_super_admin WHERE email='$email' AND password='$password' ");

		if ($cek->num_rows() > 0) {
			foreach($cek->result() as $key){
				$nama = $key->nama;
				$id_superAdmin = $key->id_super_admin;
			}

			$data_session = array(
				'id_super_admin' => $id_super_admin,
				'nama' => $nama,
				'status' => "loginSuperAdmin",
				'logout' => "LogoutSuperAdmin",
				'role_admin' => '0',
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
				redirect('ControllerSuperAdmin');
		}else{
			$this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Username anda Salah</div>");
				redirect('Login/SuperAdmin');
		}

	}

	public function loginAdminCek(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->db->query("SELECT * FROM tbl_admin WHERE email='$email' AND password='$password' ");

		if ($cek->num_rows() > 0) {
			foreach($cek->result() as $key){
				$nama = $key->nama;
				$id_admin = $key->id_admin;
				$role_admin = $key->role_admin;
				$id_unit_kerja = $key->id_unit_kerja;
				$id_area = $key->id_area;
			}

			$data_session = array(
				'id_admin' => $id_admin,
				'nama' => $nama,
				'status' => "loginAdmin",
				'logout' => "LogoutAdmin",
				'role_admin' => $role_admin,
				'id_unit_kerja' => $id_unit_kerja,
				'id_area' =>$key->id_area,
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
				redirect('ControllerAdmin');
		}else{
			$this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Username anda Salah</div>");
				redirect('Login/Admin');
		}

	}

	public function loginJuriCek(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->db->query("SELECT * FROM tbl_juri WHERE email='$email' AND password='$password' ");

		if ($cek->num_rows() > 0) {
			foreach($cek->result() as $key){
				$nama = $key->nama_juri;
				$id_juri = $key->id_juri;
			}

			$data_session = array(
				'id_juri' => $id_juri,
				'nama' => $nama,
				'status' => "loginJuri",
				'logout' => "LogoutJuri",
				'role_admin' => '7',
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
				redirect('ControllerJuri');
		}else{
			$this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Username anda Salah</div>");
				redirect('Login/Juri');
		}

	}

	public function loginKaryawanCek(){
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$cek = $this->db->query("SELECT * FROM tbl_karyawan WHERE nik='$nik' AND password='$password' ");

		if ($cek->num_rows() > 0) {
			foreach($cek->result() as $key){
				$nama = $key->nama_karyawan;
				$id_karyawan = $key->id_karyawan;
				$nik = $key->nik;
			}

			$data_session = array(
				'id_karyawan' => $id_karyawan,
				'nik' => $nik,
				'nama' => $nama,
				'status' => "loginKaryawan",
				'logout' => "LogoutKaryawan",
				'role_admin' => '6',
				);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("notif_l","<div class='alert alert-success'>Selamat Anda Berhasil Login</div>");
				redirect('ControllerKaryawan');
		}else{
			$this->session->set_flashdata("notif_l","<div class='alert alert-danger'>Password atau Username anda Salah</div>");
				redirect('Login/Karyawan');
		}

	}

	function logoutKaryawan(){
		$this->session->sess_destroy();
		redirect(base_url().'Login/Karyawan');
	
	}

	function logoutJuri(){
		$this->session->sess_destroy();
		redirect(base_url().'Login/Juri');
	
	}

	function logoutAdmin(){
		$this->session->sess_destroy();
		redirect(base_url().'Login/Admin');
	
	}

	function logoutSuperAdmin(){
		$this->session->sess_destroy();
		redirect(base_url().'Login/SuperAdmin');
	
	}

}