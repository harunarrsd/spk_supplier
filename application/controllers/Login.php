<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin');
	}

	function index(){
		$this->load->view('login');
	}

	function action(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->admin->cek_login("users",$where)->num_rows();
		if($cek > 0){
			$login = $this->admin->cek_login("users",$where)->row();
			$data_session = array(
				'id' => $login->id,
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('home');
			
		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-danger alert-dismissible mx-4 font-kedua">Username atau Password Anda Salah !!<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
			redirect('.');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('.');
	}

}
