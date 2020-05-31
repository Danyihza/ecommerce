<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

    public function index()
    {
        if ($this->blog_model->logged_id()) {
            $data['countproduk'] = $this->blog_model->countAllProduct();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/lihatartikel');
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }
}
