<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model', 'produk');
	}

	public function index()
	{
		$data['kategori'] = $this->produk->getKategori();
		$data['newproduk'] = $this->produk->getNewestProduk();
		$data['products'] = $this->produk->getAllProduct();
		// var_dump($data); die;
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('main/main', $data);
		$this->load->view('main/templates/footer', $data);
		$this->load->view('main/templates/bottom', $data);
	}

	public function search()
	{
		$data['kategori'] = $this->produk->getKategori();
		// $data['produk'] = $this->produk->getProducts(12,30);
		// $data['countAll'] = $this->produk->countAllProduct();

		//PAGINATION
		$this->load->library('pagination');

		//with keyword
		if ($this->input->post('search')) {
			$data['keyword'] = $this->input->post('keyword');
			$data['kategori'] = $this->input->post('kategori');
			echo $data['kategori'];
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		//config
		$this->db->like('nama_produk', $data['keyword']);
		$this->db->from('produk');
		$config['total_rows'] = $this->db->count_all_results();;
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 15;
		
		//init
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['produk'] = $this->produk->getProducts($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('main/templates/header_search');
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('main/search', $data);
		$this->load->view('main/templates/footer');
		$this->load->view('main/templates/bottom_search');
	}

	public function produk($link)
	{
		$data['produk'] = $this->produk->getProductByLink($link);
		$data['kategori'] = $this->produk->getKategori();
		$this->load->view('main/templates/detail/header');
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('main/detail', $data);
		$this->load->view('main/templates/footer');
		$this->load->view('main/templates/detail/bottom');
	}

}
