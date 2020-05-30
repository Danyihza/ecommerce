<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
    }

    public function index()
    {
        $data['kategori'] = $this->produk->getKategori();
        $this->load->view('blog/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/bottom', $data);
    }

    public function detail($link = null)
    {
        $data['kategori'] = $this->produk->getKategori();
        $this->load->view('blog/single/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/single/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/single/bottom', $data);
    }
}
