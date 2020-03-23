<?php

class Stok extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model("model_stok");
	}
	
	public function index(){
		$data['tampilListDataStok'] = $this->model_stok->tampilListDataStok();
		$this->load->view('design/header');
		$this->load->view('stok/tampil_stok',$data);
		$this->load->view('design/footer');
	}
}

?>


















