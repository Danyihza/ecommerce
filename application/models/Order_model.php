<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
  public function getAllOrder()
  {
    return $this->db->from('transaksi')
      ->join('dtransaksi', 'transaksi.id_transaksi = dtransaksi.id_transaksi')
      ->group_by('transaksi.id_transaksi')
      ->get()->result();
  }
  public function getOrderId($id_transaksi)
  {
    return $this->db->select('*, sum(subtotal) as total')
    ->from('transaksi')
      ->join('dtransaksi', 'transaksi.id_transaksi = dtransaksi.id_transaksi')
      ->group_by('transaksi.id_transaksi')
      ->get_where('', ['transaksi.id_transaksi' => $id_transaksi])->result();
  }

  public function getDetailOrder($id_transaksi)
  {
    return $this->db->from('transaksi')
      ->join('dtransaksi', 'transaksi.id_transaksi = dtransaksi.id_transaksi')
      ->join('produk', 'dtransaksi.id_produk = produk.id_produk')
      ->get_where('', ['transaksi.id_transaksi' => $id_transaksi])->result();
  }

  public function rating($id_produk)
  {
    return $this->db->select('*, count(id_ulasan) as jml, round(avg(rating_ulasan),1) as rerata')->from('ulasan')->get_where('', ['ulasan.id_produk' => $id_produk])->result();
  }

  function jmlUlasan()
  {
    return $this->db->select('produk.id_produk, nama_produk, gambar_produk, count(id_ulasan) as jml, round(avg(rating_ulasan),1) as rerata')
      ->from('produk')
      ->join('ulasan', 'produk.id_produk=ulasan.id_produk', 'left')
      ->group_by('produk.id_produk')->get()->result();
  }

  function logged_id()
  {
    return $this->session->userdata('id_admin');
  }

  public function countAllProduct()
  {
    return $this->db->get('produk')->num_rows();
  }
}
