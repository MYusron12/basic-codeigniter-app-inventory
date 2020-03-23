<?php
class model_customer extends CI_Model {
	public function tampilListData(){
		$query="select * from customer";
		return $this->db->query($query);
	}
	
	public function inputData($data){
		$this->db->insert('customer',$data);
	}
	
	public function ambilData($id){
		$data=array('id_customer'=>$id);
		return $this->db->get_where('customer',$data);
	}
	
	public function editData($data,$id){
		$this->db->where('id_customer',$id);
		$this->db->update('customer',$data);
	}
	
	public function hapusData($id){
		$this->db->where('id_customer',$id);
		$this->db->delete('customer');
	}

}
?>