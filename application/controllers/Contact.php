<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model', 'produk');
		$this->load->model('Ulasan_model', 'ulasan');
		$this->load->model('Transaksi_model', 'transaksi');
		$this->load->model('Blog_model', 'blog');
		$this->load->model('Contact_model', 'contact');
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

	// ==============================================================================

	function send()
	{

		$name_contact = $this->input->post('name_contact');
		$email_contact = $this->input->post('email_contact');
		$phone_contact = $this->input->post('phone_contact');
		$message_contact = $this->input->post('message_contact');

		$data = [
			'name_contact' => $name_contact,
			'email_contact' => $email_contact,
			'phone_contact' => $phone_contact,
			'message_contact' => $message_contact
		];

		$this->contact->sendData($data);
		$this->session->set_flashdata('contact', 'Terimakasih :)');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
