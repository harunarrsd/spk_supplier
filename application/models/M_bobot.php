<?php 

	class M_bobot extends CI_Model{
		
		function read(){
			$sql = $this->db->query("SELECT * FROM bobot where id = 1");
			return $sql;
		}
		function update($id,$data){
			$this->db->where("id",$id);
			$this->db->update('bobot',$data);
		}
		function delete($id){
			$this->db->where("id", $id);
			$this->db->delete('bobot', array('id' => $id));
		}
}
