<?php

class Supplier extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user');
		$this->load->model('m_supplier');
		$this->load->model('m_bobot');
		$this->load->model('m_konversi');
		$this->load->model('m_hasil');
		$this->load->database();
		if($this->session->userdata('status')!='login'){
			redirect('.');
		}
	}

	function index()
	{
		$data['user'] = $this->user->read()->result();
		$data['supplier'] = $this->m_konversi->read()->result_array();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('create',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function create(){
		echo json_encode(array("id"=>$this->m_supplier->create()));
	}

	function update_alternatif(){
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->m_supplier->update_alternatif($id,$value,$modul);
		echo "{}";
	}

	function update_hasil(){
		$this->m_hasil->update_hasil();
		redirect('supplier/ranking');
	}

	function delete_alternatif(){
		$id= $this->input->post("id");
		$id_sk= $this->input->post("id_sk");
		$this->m_supplier->delete_hasil($id_sk);
		$this->m_supplier->delete_konversi($id);
		$this->m_supplier->delete_alternatif($id);
		echo "{}";
	}

	function setting()
	{
		$data['user'] = $this->user->read()->result();
		$data['bobot'] = $this->m_bobot->read()->result();
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

	function normalisasi()
	{
		$data['user'] = $this->user->read()->result();
		$data['konversi'] = $this->m_konversi->read()->result();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('normalisasi',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function hasil()
	{
		$data['user'] = $this->user->read()->result();
		$data['hasil'] = $this->m_hasil->read()->result();
		$data['bobot'] = $this->m_bobot->read()->result();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('hasil',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function ranking()
	{
		$data['user'] = $this->user->read()->result();
		$data['ranking'] = $this->m_hasil->read_ranking()->result();
        $data['header'] = $this->load->view('layouts/header','',true);
        $data['pages'] = $this->load->view('ranking',array('main'=>$data),true);
		$this->load->view('master',array('main'=>$data));
	}

	function create_hasil(){
		$id = $_POST['id_supplier_konversi'];
		$value = $_POST['value'];
		$data_documents = array();
		$index = 0;
		foreach($id as $datadocuments){
			array_push($data_documents, array(
				'id_supplier_konversi' => $datadocuments,
				'value' => $value[$index],
			));
			$index++;
		}
		$this->m_hasil->create_hasil($data_documents);
		redirect('supplier/ranking');
	}
}
