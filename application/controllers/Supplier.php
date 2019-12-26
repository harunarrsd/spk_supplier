<?php

class Supplier extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('m_supplier');
		$this->load->database();
	}

	function index()
	{
		$data['user'] = $this->user->read()->result();
		$data['supplier'] = $this->m_supplier->read();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('create',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function create(){
		echo json_encode(array("id"=>$this->m_supplier->create()));
	}

	function update(){
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->m_supplier->update($id,$value,$modul);
		echo "{}";
	}

	function delete(){
		$id= $this->input->post("id");
		$this->m_supplier->delete($id);
		echo "{}";
	}
}
