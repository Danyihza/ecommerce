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
        $sql = "SELECT * FROM produk LIMIT 1";
        $result = $this->db->query($sql)->row_array();
        return $result;
    }
}
