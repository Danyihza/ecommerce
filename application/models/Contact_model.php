<?php

class Contact_model extends CI_Model
{
    
    function sendData($data)
    {
        $this->db->insert('contact', $data);
    }

}
