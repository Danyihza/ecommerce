<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori',['id_kategori' => $id])->row();
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

    public function getNewProduct()
    {
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get('produk', 20)->result_array();
    }

    public function getMostDiscountProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori');
        $this->db->order_by('diskon_produk', 'DESC');
        return $this->db->get('', 1)->row_array();
    }

    public function countAllProduct()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function getProductsByKategori($limit, $start, $kategori)
    {
        $this->db->where('kategori', $kategori);
        return $this->db->get('produk', $limit, $start)->result_array();
    }

    public function getProducts($limit, $start, $keyword = null, $kategori = null)
    {
        if ($kategori) {
            $this->db->where('kategori', $kategori);
            return $this->db->get('produk', $limit, $start)->result_array();
        }

        if ($keyword) {
            $this->db->like('nama_produk', $keyword);
            return $this->db->get('produk', $limit, $start)->result_array();
        } else {
            return $this->db->get('produk', $limit, $start)->result_array();
        }
    }

    public function getProductByLink($link)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori');
        return $this->db->get_where('', ['link' => $link])->row_array();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
    }
}
