<?php
class Ulasan_model extends CI_Model
{
    public function getUlasan()
    {
        $this->db->select('*');
        $this->db->from('ulasan');
        $this->db->join('produk', 'produk.id_produk = ulasan.id_produk');
        return $this->db->get('',5)->result_array();
    }
}
