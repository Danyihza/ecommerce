<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_admin');
    }
	public function index()
	{
		if($this->m_admin->logged_id()){

			$this->load->view('admin/header');
			$this->load->view('admin/navbar');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}else{
			redirect("auth");
		}
	}
}
