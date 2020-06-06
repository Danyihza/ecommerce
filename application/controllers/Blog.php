<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
        $this->load->model('Blog_model', 'blog');
    }

    public function index()
    {
        $data['kategori'] = $this->produk->getKategori();
        $data['artikel'] = $this->blog->getAllBlog();
        $this->load->view('blog/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/bottom', $data);
    }

    public function detail($id = null)
    {
        $data['kategori'] = $this->produk->getKategori();
        $data['artikel'] = $this->blog->getBlogById($id);
        $this->load->view('blog/single/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/single/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/single/bottom', $data);
    }
}
