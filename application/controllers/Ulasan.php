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
		$this->load->view('templates/cart');
	}

	public function kirimulasan()
	{
		$id_produk = $this->input->post('id_produk_ulasan');
		$namaulasan = $this->input->post('namaulasan');
		$ratingulasan = $this->input->post('ratingulasan');
		$isiulasan = $this->input->post('isiulasan');

		$data = [
			'id_produk' => $id_produk,
			'nama_ulasan' => $namaulasan,
			'rating_ulasan' => $ratingulasan,
			'isi_ulasan' => $isiulasan,
			'timestamp' => '@' . time()
		];

		$this->ulasan->addUlasan($data);
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}
}
