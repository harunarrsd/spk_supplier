<?php 

	class M_supplier extends CI_Model{
		function read(){
			$this->db->order_by("id","desc");
			$query=$this->db->get("suppliers");
			return $query->result_array();
		}

		function create(){
			$this->db->insert("suppliers",array("nama_supplier"=>""));
			return $this->db->insert_id();
		}

		function delete(){
			$id= $this->input->post("id");
			$this->crud_model->delete($id);
			echo "{}";
		}

		function update(){
			$id= $this->input->post("id");
			$value= $this->input->post("value");
			$modul= $this->input->post("modul");
			$this->m_supplier->update($id,$value,$modul);
			echo "{}";
		}

		function update_alternatif($id,$value,$modul){
			$this->db->where(array("id"=>$id));
			$this->db->update("suppliers",array($modul=>$value));
		}

		function delete_alternatif($id){
			$this->db->where("id",$id);
			$this->db->delete("suppliers");
		}
}
