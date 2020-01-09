<?php 

	class M_hasil extends CI_Model{

		function read(){
			$this->db->order_by("k.id","desc");
			$this->db->select('k.konversi_1/(select max(v.konversi_1) from supplier_konversi v) as diskon, 
							   k.konversi_2/(select max(v.konversi_2) from supplier_konversi v) as pelayanan, 
							   k.konversi_3/(select max(v.konversi_3) from supplier_konversi v) as karoseri, 
							   k.konversi_4/(select max(v.konversi_4) from supplier_konversi v) as servis, 
							   k.konversi_5/(select max(v.konversi_5) from supplier_konversi v) as bonus,
							   k.id as id_supplier_konversi,
							   s.nama_supplier as nama');
			$this->db->from('supplier_konversi k');
			$this->db->join('suppliers s','s.id = k.id_supplier');
			$query = $this->db->get();
			return $query;
		}

		function create_hasil($data){
			return $this->db->insert_batch('hasil',$data);
		}

		function update_hasil(){
			$id = $_POST['id_supplier_konversi'];
			$value = $_POST['value'];
			$data_documents = array();
			$index = 0;
			foreach($id as $datadocuments){
				array_push($data_documents, array(
					'id_supplier_konversi' => $datadocuments,
					'value' => $value[$index],
				));
				$index++;
			}
			return $this->db->update_batch('hasil',$data_documents,'id_supplier_konversi');
		}

		function read_ranking(){
			$sql = $this->db->query("SELECT * FROM hasil h JOIN supplier_konversi sk on h.id_supplier_konversi = sk.id JOIN suppliers s on sk.id_supplier = s.id GROUP BY h.id_supplier_konversi ORDER BY h.value desc");
			return $sql;
		}
}
