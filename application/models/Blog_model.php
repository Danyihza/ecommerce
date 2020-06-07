<?php

class Blog_model extends CI_Model
{
    function logged_id()
    {
        return $this->session->userdata('id_admin');
    }

    public function getAllBlog()
    {
        return $this->db->get('artikel')->result_array();
    }

    public function getTwoBlog()
    {
        $this->db->order_by('id_artikel', 'DESC');
        return $this->db->get('artikel')->result_array();
    }

    public function getThreeNewestBlog()
    {
        return $this->db->get('artikel', 3)->result_array();
    }

    public function getBlogById($id)
    {
        return $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();
    }

    public function countAllProduct()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function getAllData()
    {
        return $this->db->select('artikel.id_artikel, judul_artikel, foto_artikel, status_artikel, tanggal_artikel, count(id_kmn) as jml')
            ->from('artikel')
            ->join('komentar', 'artikel.id_artikel=komentar.id_artikel', 'left')
            ->group_by('artikel.id_artikel')->get()->result();
    }

    public function getCmnByIdP($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        return $this->db->get_where('', ['komentar.id_artikel' => $id_artikel, 'status_kmn' => 0])->result();
    }

    public function getCmnByIdC($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('komentar');
        return $this->db->get_where('', ['komentar.id_artikel' => $id_artikel, 'status_kmn' => 1])->result();
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

    public function getJustDataById($id_artikel)
    {
        $this->db->select('*');
        $this->db->from('artikel');
        return $this->db->get_where('', ['id_artikel' => $id_artikel])->row_array();
    }

    public function countCmtById($id_artikel)
    {
        $this->db->select('count(id_kmn) as jmlkmn');
        $this->db->from('komentar');
        return $this->db->get_where('', ['id_artikel' => $id_artikel])->row_array();
    }
}
