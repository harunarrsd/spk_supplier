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

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect('supplier');
			
		}else{
			redirect(base_url("login"));
			echo '<script type="text/javascript">alert("Username dan password salah !!");</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('.');
	}
}
