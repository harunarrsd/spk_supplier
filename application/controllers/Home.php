<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('user');			
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->user->read()->result();
			$this->load->view('layouts/head',$data);
			$this->load->view('layouts/header',$data);
			$this->load->view('index',$data);
			$this->load->view('layouts/footer',$data);
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
