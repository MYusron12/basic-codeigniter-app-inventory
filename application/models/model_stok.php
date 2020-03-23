<?php
class model_stok extends CI_Model {
	public function tampilListDataStok(){
		$query="SELECT
  `barang`.`nama_barang` AS `nama_barang1`,
  `barang`.`stok` AS `stok1`,
  `stok_masuk`.`qty`,
  `stok_keluar`.`qty` AS `qty1`
FROM
  `barang`
  LEFT JOIN `stok_masuk` ON `barang`.`id_barang` = `stok_masuk`.`id_suplier`
  LEFT JOIN `stok_keluar` ON `barang`.`id_barang` = `stok_keluar`.`id_customer`";
		return $this->db->query($query);
	}
}
?>