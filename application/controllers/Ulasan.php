<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Produk_model', 'produk');
    $this->load->model('Ulasan_model', 'ulasan');
}

	public function index()
	{
        $data['ulasan'] = $this->ulasan->getUlasan();
		$data['kategori'] = $this->produk->getKategori();
		$this->load->view('ulasan/header');
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('ulasan/index', $data);
		$this->load->view('main/templates/footer');
		$this->load->view('ulasan/bottom');
	}
}
