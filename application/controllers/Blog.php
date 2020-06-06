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
        $data['komentar1'] = $this->blog->getCmnByIdP($id);
        $data['artikel1'] = $this->blog->getJustDataById($id);
        $data['count'] = $this->blog->countCmtById($id);
        $data['kategori'] = $this->produk->getKategori();
        $data['artikel'] = $this->blog->getBlogById($id);
        $this->load->view('blog/single/header', $data);
        $this->load->view('main/templates/topbar', $data);
        $this->load->view('blog/single/index', $data);
        $this->load->view('main/templates/footer', $data);
        $this->load->view('blog/single/bottom', $data);
    }

    // -----------------------------------------------------------------------------------------

    function tambahkomen()
    {
        $id_artikel = $this->input->post('id_artikel');
        $namakomen = $this->input->post('namakomen');
        $emailkomen = $this->input->post('emailkomen');
        $isikomen = $this->input->post('isikomen');
        
        $data = [
            'id_artikel' => $id_artikel,
            'nama_kmn' => $namakomen,
            'email_kmn' => $emailkomen,
            'status_kmn' => 0,
            'waktu_kmn' => '@' . time(),
            'isi_kmn' => $isikomen
        ];
        
        $this->blog->input_data($data, 'komentar');
        redirect('blog/detail/' . $id_artikel . '#komentar');
    }
    
    function balaskomen()
    {
        $id_artikel = $this->input->post('id_artikel');
        $status_kmn = $this->input->post('status_kmn');
        $namakomen = $this->input->post('namakomen');
        $emailkomen = $this->input->post('emailkomen');
        $isikomen = $this->input->post('isikomen');

        $data = [
            'id_artikel' => $id_artikel,
            'nama_kmn' => $namakomen,
            'email_kmn' => $emailkomen,
            'status_kmn' => $status_kmn,
            'waktu_kmn' => '@' . time(),
            'isi_kmn' => $isikomen
        ];

        $this->blog->input_data($data, 'komentar');
        redirect('blog/detail/' . $id_artikel . '#komentar');
    }
}
