<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model', 'produk');
		$this->load->model('Ulasan_model', 'ulasan');
		$this->load->model('Transaksi_model', 'transaksi');
		$this->load->model('Blog_model', 'blog');
	}

	public function index()
	{
		$data['kategori'] = $this->produk->getKategori();
        $data['artikel'] = $this->blog->getAllBlog();
        $this->load->view('contact/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('contact/contact', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('contact/bottom', $data);
        $this->load->view('templates/cart');
	}
}
