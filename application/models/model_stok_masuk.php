<?php
class model_stok_masuk extends CI_Model {
	public function tampilListDataStokMasuk(){
		$query="SELECT
  `stok_masuk`.*,
  `suplier`.`nama_suplier`,
  `barang`.`nama_barang`
FROM
  `stok_masuk`
  INNER JOIN `suplier` ON `stok_masuk`.`id_suplier` = `suplier`.`id_suplier`
  INNER JOIN `barang` ON `stok_masuk`.`id_barang` = `barang`.`id_barang`";
		return $this->db->query($query);
	}
	
	public function inputData($data){
		$this->db->insert('stok_masuk',$data);
	}
	
	public function ambilData($id){
				$query="SELECT
  `stok_masuk`.*,
  `suplier`.`nama_suplier`,
  `barang`.`nama_barang`
FROM
  `stok_masuk`
  INNER JOIN `suplier` ON `stok_masuk`.`id_suplier` = `suplier`.`id_suplier`
  INNER JOIN `barang` ON `stok_masuk`.`id_barang` = `barang`.`id_barang` where id_stok_masuk='$id'";
		return $this->db->query($query);
	}
	
	public function editData($data,$id){
		$this->db->where('id_stok_masuk',$id);
		$this->db->update('stok_masuk',$data);
	}
	
	public function hapusData($id){
		$this->db->where('id_stok_masuk',$id);
		$this->db->delete('stok_masuk');
	}

}
?>