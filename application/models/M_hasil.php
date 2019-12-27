<?php 

	class M_hasil extends CI_Model{

		function read(){
			$this->db->order_by("h.ranking","asc");
			$this->db->select('h.value as value, h.ranking as ranking, s.nama_supplier as nama');
			$this->db->from('hasil h');
			$this->db->join('supplier_konversi k','k.id = h.id_supplier_konversi');
			$this->db->join('suppliers s','s.id = k.id_supplier');
			$query = $this->db->get();
			return $query;
		}
}
