<?php

class Stok_keluar extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model("model_stok_keluar");
		$this->load->model("model_barang");
		$this->load->model("model_customer");
	}
	
	public function index(){
		$data['tampilListDataStokKeluar'] = $this->model_stok_keluar->tampilListDataStokKeluar();
		$this->load->view('design/header');
		$this->load->view('stok_keluar/tampil_stok_keluar',$data);
		$this->load->view('design/footer');
	}
	
	public function tambahDataStokKeluar(){
		if(isset($_POST['submit'])){
			$namaCustomer=$this->input->post('nama_customer');
			$namaBarang=$this->input->post('nama_barang');
			$qty=$this->input->post('qty');
			$tanggal=$this->input->post('tanggal');
			$data=array('id_customer'=>$namaCustomer,
						'id_barang'=>$namaBarang,
						'qty'=>$qty,
						'tanggal'=>$tanggal);
			$this->model_stok_keluar->inputData($data);
			redirect('stok_keluar');
		}else{
			$data['barang']=$this->model_barang->tampilListData();
			$data['customer']=$this->model_customer->tampilListData();
			$this->load->view('design/header');
			$this->load->view('stok_keluar/input_stok_keluar',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function tampilDataEdit(){
		if(isset($_POST['submit'])){
			$id=$this->input->post('id_stok_keluar');
			$namaCustomer=$this->input->post('nama_customer');
			$namaBarang=$this->input->post('nama_barang');
			$qty=$this->input->post('qty');
			$tanggal=$this->input->post('tanggal');
			$data=array('id_stok_keluar'=>$id,
						'id_customer'=>$namaCustomer,
						'id_barang'=>$namaBarang,
						'qty'=>$qty,
						'tanggal'=>$tanggal);
			$this->model_stok_keluar->editData($data,$id);
			redirect('stok_keluar');
		}else{
			$id=$this->uri->segment(3);
			$data['barang']=$this->model_barang->tampilListData();
			$data['customer']=$this->model_customer->tampilListData();
			$data['dataEdit']=$this->model_stok_keluar->ambilData($id)->row_array();
			$this->load->view('design/header');
			$this->load->view('stok_keluar/edit_stok_keluar',$data);
			$this->load->view('design/footer');
		}
	}
	
	public function hapusData(){
		$id=$this->uri->segment(3);
		$this->model_stok_keluar->hapusData($id);
		redirect('stok_keluar');
	}
}

?>


















