<?php

class Stok_masuk extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model("model_stok_masuk");
		$this->load->model("model_barang");
		$this->load->model("model_suplier");
	}
	
	public function index(){
		$data['tampilListDataStokMasuk'] = $this->model_stok_masuk->tampilListDataStokMasuk();
		$this->load->view('design/header');
		$this->load->view('stok_masuk/tampil_stok_masuk',$data);
		$this->load->view('design/footer');
	}
	
	public function tambahDataStokMasuk(){
		if(isset($_POST['submit'])){
			$namaSuplier=$this->input->post('nama_suplier');
			$namaBarang=$this->input->post('nama_barang');
			$qty=$this->input->post('qty');
			$tanggal=$this->input->post('tanggal');
			$data=array('id_suplier'=>$namaSuplier,
						'id_barang'=>$namaBarang,
						'qty'=>$qty,
						'tanggal'=>$tanggal);
			$this->model_stok_masuk->inputData($data);
			redirect('stok_masuk');
		}else{
			$data['barang']=$this->model_barang->tampilListData();
			$data['suplier']=$this->model_suplier->tampilListData();
			$this->load->view('design/header');
			$this->load->view('stok_masuk/input_stok_masuk',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function tampilDataEdit(){
		if(isset($_POST['submit'])){
			$id=$this->input->post('id_stok_masuk');
			$namaSuplier=$this->input->post('nama_suplier');
			$namaBarang=$this->input->post('nama_barang');
			$qty=$this->input->post('qty');
			$tanggal=$this->input->post('tanggal');
			$data=array('id_stok_masuk'=>$id,
						'id_suplier'=>$namaSuplier,
						'id_barang'=>$namaBarang,
						'qty'=>$qty,
						'tanggal'=>$tanggal);
			$this->model_stok_masuk->editData($data,$id);
			redirect('stok_masuk');
		}else{
			$id=$this->uri->segment(3);
			$data['barang']=$this->model_barang->tampilListData();
			$data['suplier']=$this->model_suplier->tampilListData();
			$data['dataEdit']=$this->model_stok_masuk->ambilData($id)->row_array();
			$this->load->view('design/header');
			$this->load->view('stok_masuk/edit_stok_masuk',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function hapusData(){
		$id=$this->uri->segment(3);
		$this->model_stok_masuk->hapusData($id);
		redirect('stok_masuk');
	}
}

?>


















