<?php
class model_stok_keluar extends CI_Model {
	public function tampilListDataStokKeluar(){
		$query="SELECT
  `stok_keluar`.*,
  `customer`.`nama_customer`,
  `barang`.`nama_barang`
FROM
  `stok_keluar`
  INNER JOIN `customer` ON `stok_keluar`.`id_customer` = `customer`.`id_customer`
  INNER JOIN `barang` ON `stok_keluar`.`id_barang` = `barang`.`id_barang`";
		return $this->db->query($query);
	}
	
	public function inputData($data){
		$this->db->insert('stok_keluar',$data);
	}
	
	public function ambilData($id){
				$query="SELECT
  `stok_keluar`.*,
  `customer`.`nama_customer`,
  `barang`.`nama_barang`
FROM
  `stok_keluar`
  INNER JOIN `customer` ON `stok_keluar`.`id_customer` = `customer`.`id_customer`
  INNER JOIN `barang` ON `stok_keluar`.`id_barang` = `barang`.`id_barang` where id_stok_keluar='$id'";
		return $this->db->query($query);
	}
	
	public function editData($data,$id){
		$this->db->where('id_stok_keluar',$id);
		$this->db->update('stok_keluar',$data);
	}
	
	public function hapusData($id){
		$this->db->where('id_stok_keluar',$id);
		$this->db->delete('stok_keluar');
	}

}
?>