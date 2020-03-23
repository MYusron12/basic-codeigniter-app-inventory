<?php
class model_barang extends CI_Model {
	public function tampilListData(){
		$query="select * from barang";
		return $this->db->query($query);
	}
	
	public function inputData($data){
		$this->db->insert('barang',$data);
	}
	
	public function ambilData($id){
		$data=array('id_barang'=>$id);
		return $this->db->get_where('barang',$data);
	}
	
	public function editData($data,$id){
		$this->db->where('id_barang',$id);
		$this->db->update('barang',$data);
	}
	
	public function hapusData($id){
		$this->db->where('id_barang',$id);
		$this->db->delete('barang');
	}

}
?>