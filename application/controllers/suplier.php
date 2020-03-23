<?php

class Suplier extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model("model_suplier");
	}
	
	public function index(){
		$data['tampilListDataSuplier'] = $this->model_suplier->tampilListData();
		$this->load->view('design/header');
		$this->load->view('suplier/tampil_suplier',$data);
		$this->load->view('design/footer');
	}
	
	public function tambahDataSuplier(){
		if(isset($_POST['submit'])){
			$namaSuplier=$this->input->post('nama_suplier');
			$alamat=$this->input->post('alamat');
			$noTelp=$this->input->post('no_telpon');
			$data=array('nama_suplier'=>$namaSuplier,
						'alamat'=>$alamat,
						'no_telpon'=>$noTelp);
			$this->model_suplier->inputData($data);
			redirect('suplier');
		}else{
			$this->load->view('design/header');
			$this->load->view('suplier/input_suplier');
			$this->load->view('design/footer');
		}
	}
	
	public function tampilDataEdit(){
		if(isset($_POST['submit'])){
			$id=$this->input->post('id_suplier');
			$namaSuplier=$this->input->post('nama_suplier');
			$alamat=$this->input->post('alamat');
			$noTelp=$this->input->post('no_telpon');
			$data=array('id_suplier'=>$id,
						'nama_suplier'=>$namaSuplier,
						'alamat'=>$alamat,
						'no_telpon'=>$noTelp);
			$this->model_suplier->editData($data,$id);
			redirect('suplier');
		}else{
			$id=$this->uri->segment(3);
			$data['dataEdit']=$this->model_suplier->ambilData($id)->row_array();
			$this->load->view('design/header');
			$this->load->view('suplier/edit_suplier',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function hapusData(){
		$id=$this->uri->segment(3);
		$this->model_suplier->hapusData($id);
		redirect('suplier');
	}
}

?>


















