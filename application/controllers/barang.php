<?php

class Barang extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model("model_barang");
	}
	
	public function index(){
		$data['tampilListDataBarang'] = $this->model_barang->tampilListData();
		$this->load->view('design/header');
		$this->load->view('barang/tampil_barang',$data);
		$this->load->view('design/footer');
	}
	
	public function tambahDataBarang(){
		if(isset($_POST['submit'])){
			$namaBarang=$this->input->post('nama_barang');
			$stok=$this->input->post('stok');
			$status=$this->input->post('status');
			$data=array('nama_barang'=>$namaBarang,
						'stok'=>$stok,
						'status'=>$status);
			$this->model_barang->inputData($data);
			redirect('barang');
		}else{
			$this->load->view('design/header');
			$this->load->view('barang/input_barang');
			$this->load->view('design/footer');
		}
	}
	
	public function tampilDataEdit(){
		if(isset($_POST['submit'])){
			$id=$this->input->post('id_barang');
			$namaBarang=$this->input->post('nama_barang');
			$stok=$this->input->post('stok');
			$status=$this->input->post('status');
			$data=array('id_barang'=>$id,
						'nama_barang'=>$namaBarang,
						'stok'=>$stok,
						'status'=>$status);
			$this->model_barang->editData($data,$id);
			redirect('barang');
		}else{
			$id=$this->uri->segment(3);
			$data['dataEdit']=$this->model_barang->ambilData($id)->row_array();
			$this->load->view('design/header');
			$this->load->view('barang/edit_barang',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function hapusData(){
		$id=$this->uri->segment(3);
		$this->model_barang->hapusData($id);
		redirect('barang');
	}
}

?>


















