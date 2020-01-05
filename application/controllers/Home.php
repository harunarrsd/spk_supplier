<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('user');			
		$this->load->helper('url');
		if($this->session->userdata('status')!='login'){
			redirect('.');
		}
	}

	function index(){
		$data['user'] = $this->user->read()->result();
		$data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('index',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

}
