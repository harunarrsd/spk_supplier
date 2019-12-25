<?php

class Supplier extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('m_supplier');
	}

	function index()
	{
		$data['user'] = $this->user->read()->result();
		$data['supplier'] = $this->m_supplier->read()->result();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('create',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}
}
