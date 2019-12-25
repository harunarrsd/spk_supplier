<?php 

class Supplier extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('user');			
		$this->load->helper('url');

	}

	function create(){
		$data['user'] = $this->user->read()->result();
			$this->load->view('layouts/head',$data);
			$this->load->view('layouts/header',$data);
			$this->load->view('create',$data);
			$this->load->view('layouts/footer',$data);
	}

}
