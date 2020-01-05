<?php 

	class M_konversi extends CI_Model{

		function read(){
			$sql = $this->db->query("SELECT * FROM supplier_konversi sk JOIN suppliers s on sk.id_supplier = s.id ORDER BY sk.id desc");
			return $sql;
		}
}
