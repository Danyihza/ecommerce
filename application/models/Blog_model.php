<?php

class Blog_model extends CI_Model
{
    function logged_id()
    {
        return $this->session->userdata('id_admin');
    }

    public function countAllProduct()
    {
        return $this->db->get('produk')->num_rows();
    }
}
