<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getAllKategori()
    {
        $sql = "SELECT COUNT(id_produk)AS count, id_kategori, nama_kategori FROM `produk` INNER JOIN kategori ON produk.kategori = kategori.id_kategori  GROUP BY kategori";
        return $this->db->query($sql)->result_array();
        
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row();
    }

    public function getPalingBaru()
    {
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get('produk', 1)->row_array();
    }

    public function getNewestProduk()
    {
        
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get('produk', 2,1)->result_array();
    }

    public function getAllProduct()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getNewProduct($limit)
    {
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get('produk', $limit)->result_array();
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

    public function getProductById($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori');
        return $this->db->get_where('', ['id_produk' => $id_produk])->row_array();
    }

    public function allProduct()
    {
        return $this->db->from('produk')
            ->join('kategori', 'kategori.id_kategori = produk.kategori')
            ->get()->result();
    }

    //aksi menambahkan data
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    //untuk menghapus data
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //untuk menampilkan data berdasarkan id
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    //mengubah data
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function jmlProduk()
    {
        $this->db->select('count(id_produk) as jmlpr');
        $hasil = $this->db->get('produk');
        return $hasil;
    }

    public function data_ulasan($id_produk)
    {
        return $this->db->select('*')->from('ulasan')->get_where('', ['ulasan.id_produk' => $id_produk])->result();
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
}
