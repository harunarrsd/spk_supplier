<?php 

	class User extends CI_Model{
		function read(){
			return $this->db->get('users');
		}

		function insert($data,$table){
			$this->db->insert($table,$data);
		}

		function delete($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function edit($where,$table){		
			return $this->db->get_where($table,$where);
		}

		function update($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	
}
