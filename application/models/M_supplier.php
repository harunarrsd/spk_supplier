<?php 

class M_supplier extends CI_Model{

		function __construct(){
			parent::__construct();		
		}

		function read(){
			$this->db->order_by("id","desc");
			$query=$this->db->get("suppliers");
			return $query->result_array();
		}

		function create(){
			$this->db->insert("suppliers",array("nama_supplier"=>""));
			return $this->db->insert_id();
		}

		function delete($id){
			$this->db->where("id",$id);
			$this->db->delete("suppliers");
		}

		function update($id,$value,$modul){
			$this->db->where(array("id"=>$id));
			$this->db->update("suppliers",array($modul=>$value));
		}
}
