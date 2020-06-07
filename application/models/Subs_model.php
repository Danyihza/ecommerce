<?php
class Subs_model extends CI_Model
{

    public function getAllEmail()
    {
        $this->db->get('subscriber')->result_array();
    }

}
