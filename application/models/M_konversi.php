<?php 

	class M_konversi extends CI_Model{

		function read(){
			$this->db->order_by("k.id","asc");
			$this->db->select('k.konversi_1/(select max(v.konversi_1) from supplier_konversi v) as diskon, 
							   k.konversi_2/(select max(v.konversi_2) from supplier_konversi v) as pelayanan, 
							   k.konversi_3/(select max(v.konversi_3) from supplier_konversi v) as karoseri, 
							   k.konversi_4/(select max(v.konversi_4) from supplier_konversi v) as servis, 
							   k.konversi_5/(select max(v.konversi_5) from supplier_konversi v) as bonus, 
							   s.nama_supplier as nama');
			$this->db->from('supplier_konversi k');
			$this->db->join('suppliers s','s.id = k.id_supplier');
			$query = $this->db->get();
			return $query;
		}
}
