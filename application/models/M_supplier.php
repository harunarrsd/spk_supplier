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

		function update_alternatif($id,$value,$modul){
			$this->db->where(array("id"=>$id));
			$this->db->update("suppliers",array($modul=>$value));
		}

		function delete_alternatif($id){
			$this->db->where("id",$id);
			$this->db->delete("suppliers");
		}

		function delete_konversi($id){
			$this->db->where("id_supplier",$id);
			$this->db->delete("supplier_konversi");
		}

		function delete_hasil($id){
			$this->db->where("id_supplier_konversi",$id);
			$this->db->delete("hasil");
		}
}
