<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('Produk_model', 'produk');
    }
	public function index()
	{
        $data['kat'] = $this->produk->getAllKategori();
        $data['kategori'] = $this->produk->getKategori();
        $data['produk'] = $this->produk->getProductDiscount();
        $this->load->view('main/templates/header_search');
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('sale/sale', $data);
		$this->load->view('main/templates/footer');
		$this->load->view('main/templates/bottom_search');
		$this->load->view('templates/cart');
	}
}
