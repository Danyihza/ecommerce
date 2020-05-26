<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getNewestProduk()
    {
        $sql = "SELECT * FROM produk ORDER BY id_produk DESC LIMIT 1";
        $result = $this->db->query($sql)->row_array();
        return $result;
    }

    public function getAllProduct()
    {
        return $this->db->get('produk')->result_array();
    }

    public function countAllProduct()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function getProducts($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('nama_produk',$keyword);
        }
        return $this->db->get('produk', $limit, $start)->result_array();
    }

    public function getProductByLink($link)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori');
        return $this->db->get_where('', ['link' => $link])->row_array();
    }
}
