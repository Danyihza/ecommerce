<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model', 'produk');
		$this->load->model('Ulasan_model', 'ulasan');
		$this->load->model('Transaksi_model', 'transaksi');
	}

	public function index()
	{
		// var_dump($this->cart->contents()); die;
		$data['ulasan'] = $this->ulasan->getUlasan();
		$data['kategori'] = $this->produk->getKategori();
		$data['newproduk'] = $this->produk->getNewestProduk();
		$data['products'] = $this->produk->getNewProduct(20);
		$data['produk'] = $this->produk->getNewProduct(8);
		$data['diskon'] = $this->produk->getMostDiscountProduct();
		// var_dump($data['ulasan']); die;
		$this->load->view('main/templates/header', $data);
		$this->load->view('main/templates/topbar', $data);
		$this->load->view('main/main', $data);
		$this->load->view('main/templates/footer', $data);
		$this->load->view('main/templates/bottom', $data);
	}

	public function search()
	{
		// $data['produk'] = $this->produk->getProducts(12,30);
		// $data['countAll'] = $this->produk->countAllProduct();

		//PAGINATION
		$this->load->library('pagination');

		//with keyword
		if ($this->input->post('search2')) {
			$data['search2'] = $this->input->post('search2');
			$this->session->set_userdata('keyword', $data['search2']);
			if ($this->session->userdata('bykategori')) {
				$this->session->unset_userdata('bykategori');
			}
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		if ($this->input->post('search')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
			$this->session->set_userdata('search', 'ini search');
			if ($this->session->userdata('bykategori')) {
				$this->session->unset_userdata('bykategori');
			}
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		//with category
		if ($this->input->post('button_kategori')) {
			$data['bykategori'] = $this->input->post('form_sidebar');
			$this->session->set_userdata('bykategori', $data['bykategori']);
			$this->session->set_userdata('search', 'ini kategori');
			if ($this->session->userdata('keyword')) {
				$this->session->unset_userdata('keyword');
			}
		} else {
			$data['bykategori'] = $this->session->userdata('bykategori');
		}
		//config
		if ($data['keyword'] || $this->input->post('search')) {
			$this->db->like('nama_produk', $data['keyword']);
			$this->db->from('produk');
		} elseif ($this->session->userdata('search') == 'ini search') {
			$this->db->like('nama_produk', $data['keyword']);
			$this->db->from('produk');
		}

		if ($this->input->post('button_kategori')) {
			$this->db->where('kategori', $data['bykategori']);
			$this->db->from('produk');
		} elseif ($this->session->userdata('search') == 'ini kategori') {
			$this->db->where('kategori', $data['bykategori']);
			$this->db->from('produk');
		}
		// var_dump($this->session->userdata('search'));
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 15;

		//init
		$this->pagination->initialize($config);
		$data['kat'] = $this->produk->getAllKategori();
		$data['kategori'] = $this->produk->getKategori();
		$data['start'] = $this->uri->segment(3);
		if ($data['bykategori']) {
			$data['kategoribyid'] = $this->produk->getKategoriById($data['bykategori']);
		}
		$data['produk'] = $this->produk->getProducts($config['per_page'], $data['start'], $data['keyword'], $data['bykategori']);

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

	function add_to_cart()
	{ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('produk_id'),
			'name' => $this->input->post('produk_nama'),
			'price' => $this->input->post('produk_harga'),
			'qty' => $this->input->post('quantity'),
			'image' => $this->input->post('produk_gambar')
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('toast', 'ini toast');
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart()
	{ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		$kosong = '';
		if (empty($this->cart->contents())) {
			$kosong .= '
			<tr>
				<th class="text-center" colspan="7">
					<h3>Keranjang Kosong</h3>
				</th>
			</tr>
			';
			return $kosong;
		}
		foreach ($this->cart->contents() as $items) {
			$max_qty = $this->produk->getProductById($items['id']);
			$no++;
			$output .= '
                <tr>
                    <td>' . $no . '</td>
                    <td><img src="' . base_url('assets/images/') . $items['image'] . '" width="60px"></td>
                    <td>' . $items['name'] . '</td>
                    <td>Rp. ' . number_format($items['price']) . '</td>
					<td>
						<input class="kuantitas" id="' . $items['rowid'] . '" type="number" min="1" max="' . $max_qty['stok_produk'] . '" value="' . $items['qty'] . '">
					</td>
                    <td>Rp. ' . number_format($items['subtotal']) . '</td>
                    <td><a href="javascript:void(0)" id="' . $items['rowid'] . '" class="hapus_cart text-danger"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            ';
		}
		$output .= '
            <tr>
                <th colspan="5">Total</th>
                <th colspan="2">' . 'Rp ' . number_format($this->cart->total()) . '</th>
            </tr>
        ';
		return $output;
	}

	function load_cart()
	{ //load data cart
		echo $this->show_cart();
	}

	function update_cart()
	{
		//update data cart
		$data = [
			'rowid' => $this->input->post('row_id'),
			'qty' => $this->input->post('qty')
		];
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function hapus_cart()
	{ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);
		$this->cart->update($data);
		$this->session->set_flashdata('modal', 'ini modal');
		echo $this->show_cart();
	}

	function checkout()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$provinsi = $this->input->post('provinsi');
		$kota = $this->input->post('kabkota');
		$kecamatan = $this->input->post('kecamatan');
		$no_hp = $this->input->post('no_hp');

		$message = '
*MEDIA AR-RAIHAN*

Nama : ' . $nama . '
Email : ' . $email . '
Provinsi : ' . $provinsi . '
Kab/Kota : ' . $kota . '
Kecamatan : ' . $kecamatan . '
Alamat Lengkap : ' . $alamat . '
No Whatsapp : ' . $no_hp . '
----------------------------------------
List Pembelian 
----------------------------------------
';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$message .= ++$no . '. ' . $items['name'] . ' ' . $items['qty'] . 'pcs ' . '@Rp ' . number_format($items['price'], 0, '.', '.') . ' = ' . '*Rp ' . number_format($items['price'] * $items['qty'], 0, '.', '.') . "*\n";
		};
		$message .= '----------------------------------------
Total Harga = *Rp ' . number_format($this->cart->total(), 0, '.', '.') . '*';
		$message = urlencode($message);

		// //INSERT INTO transaksi
		$idtransaksi = $this->transaksi->getId();
		$dataku = [
			'id_transaksi' => $idtransaksi,
			'status_transaksi' => 0,
			'tanggal_transaksi' => date('Ymd'),
			'nama_pembeli' => $nama,
			'email_pembeli' => $email,
			'alamat_pembeli' => $alamat,
			'prov_pembeli' => $provinsi,
			'kab_pembeli' => $kota,
			'kec_pembeli' => $kecamatan,
			'no_pembeli' => $no_hp
		];
		$this->transaksi->addTransaksi($dataku);
		$data2 = [];

		foreach ($this->cart->contents() as $items) {
			$mydata = [
				'id_transaksi' => $idtransaksi,
				'id_produk' => $items['id'],
				'jumlah_produk'	=> $items['qty'],
				'subtotal' => $items['price'] * $items['qty']
			];
			array_push($data2, $mydata);
		};
		$this->db->insert_batch('dtransaksi', $data2);

		$this->cart->destroy();
		redirect("https://wa.me/6282331147549?text=$message");
	}

	function destroy(){
		$this->cart->destroy();
		redirect('main');
	}
}
