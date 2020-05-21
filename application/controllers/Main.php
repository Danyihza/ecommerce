<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('Produk_model','produk');
		$data['kategori'] = $this->produk->getKategori();
		$data['newproduk'] = $this->produk->getNewestProduk();
		// var_dump($data); die;
		$this->load->view('main/index',$data);
	}
}
