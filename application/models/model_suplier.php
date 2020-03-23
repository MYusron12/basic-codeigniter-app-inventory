<?php
class model_suplier extends CI_Model {
	public function tampilListData(){
		$query="select * from suplier";
		return $this->db->query($query);
	}
	
	public function inputData($data){
		$this->db->insert('suplier',$data);
	}
	
	public function ambilData($id){
		$data=array('id_suplier'=>$id);
		return $this->db->get_where('suplier',$data);
	}
	
	public function editData($data,$id){
		$this->db->where('id_suplier',$id);
		$this->db->update('suplier',$data);
	}
	
	public function hapusData($id){
		$this->db->where('id_suplier',$id);
		$this->db->delete('suplier');
	}

}
?>