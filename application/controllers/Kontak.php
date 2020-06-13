<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data['kategori'] = $this->produk->getKategori();
        $data['artikel'] = $this->blog->getAllBlog();
        $this->load->view('blog/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/bottom', $data);
        $this->load->view('templates/cart');
	}
}
