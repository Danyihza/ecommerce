<?php
class Transaksi_model extends CI_Model
{
    function getId()
    {
        $today = date("Ymd");
        $query = "SELECT MAX(id_transaksi) AS last FROM transaksi WHERE id_transaksi LIKE '$today%'";
        $data = $this->db->query($query)->row_array();

        $lastNoTransaksi = $data['last'];

        $lastNoUrut = substr($lastNoTransaksi, 8, 4);

        $nextNoUrut = $lastNoUrut + 1;

        return $nextNoTransaksi = $today . sprintf('%04s', $nextNoUrut);
    }

    function addTransaksi($data){
        $this->db->insert('transaksi', $data);
    }
}
