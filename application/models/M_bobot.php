<?php 

	class M_bobot extends CI_Model{
		// function read_data_kas(){
		// 	return $this->db->get('bobot');
		// }
		function read($id){
			$this->db->where("id",$id);
			return $this->db->get('bobot');
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
