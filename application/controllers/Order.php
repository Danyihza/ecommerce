<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('order_model');
        //$this->load->helper(array('url', 'download'));
    }
    public function index()
    {
        if ($this->order_model->logged_id()) {
            $data['countproduk'] = $this->order_model->countAllProduct();
            $data['transaksi'] = $this->order_model->getAllOrder();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/datatransaksi', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    } 

    public function lihatdetail($id_transaksi)
    {
        if ($this->order_model->logged_id()) {
            $data['countproduk'] = $this->order_model->countAllProduct();
            $data['transaksi'] = $this->order_model->getOrderId($id_transaksi);
            $data['trans'] = $this->order_model->getDetailOrder($id_transaksi);
            var_dump($data['trans']); die;
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/lihatdetail', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function updateStatus($id_transaksi)
    {
        $this->order_model->updateStatus($id_transaksi);
        $array=[];
        foreach ($this->order_model->getDetailOrder($id_transaksi) as $items){
            $data = [
                'id_produk' => $items->id_produk,
                'stok_produk' => $items->stok_produk - $items->jumlah_produk
            ];
            array_push($array, $data);
        }
        $this->db->update_batch('produk', $array, 'id_produk');
        redirect('order');
    }
}