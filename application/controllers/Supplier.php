<?php

class Supplier extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('m_supplier');
		$this->load->model('m_bobot');
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

	function setting()
	{
		$data['user'] = $this->user->read()->result();
		// $data['supplier'] = $this->m_supplier->read();
		$data['bobot'] = $this->m_bobot->read(1)->result();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('setting',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}
	function update_setting()
	{
		$id = $this->input->post('id');
		$bobot_1 = $this->input->post('bobot_1');
		$bobot_2 = $this->input->post('bobot_2');
		$bobot_3 = $this->input->post('bobot_3');
		$bobot_4 = $this->input->post('bobot_4');
		$bobot_5 = $this->input->post('bobot_5');
	
		$data = array(
			'bobot_1' => $bobot_1,
			'bobot_2' => $bobot_2,
			'bobot_3' => $bobot_3,
			'bobot_4' => $bobot_4,
			'bobot_5' => $bobot_5
		);
	
		$where =  $id;
		$this->m_bobot->update($where,$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible"><strong> Berhasil ubah Pengaturan Bobot ! </strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		redirect(base_url('supplier/setting'));
	}
}
