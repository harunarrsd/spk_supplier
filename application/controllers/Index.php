<?php 

class Index extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('user');			
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->user->read()->result();
			$this->load->view('layouts/header',$data);
			$this->load->view('index',$data);
			$this->load->view('layouts/footer',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->user->input_data($data,'user');
		redirect('crud/index');
	}
	
	function hapus($id){
		$where = array('id' => $id);
		$this->user->hapus_data($where, 'user');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->user->edit_data($where, 'user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
	
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->user->update_data($where,$data,'user');
		redirect('crud/index');
	}
	// function logout(){
	// 	$this->session->sess_destroy();
	// 	redirect(base_url('login'));
	// }
}
