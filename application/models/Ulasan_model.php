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

    public function getCount($id) 
    {
        return $this->db->select('*, count(id_ulasan) as jml, round(avg(rating_ulasan),1) as rerata')->from('ulasan')->get_where('', ['ulasan.id_produk' => $id])->row_array();
    }

    public function getUlasanByIdProduk($id)
    {
        return $this->db->get_where('ulasan', ['id_produk' => $id])->result_array();
    }

    public function addUlasan($data)
    {
        $this->db->insert('ulasan', $data);
    }
}
