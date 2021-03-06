<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Email extends CI_Controller
{
    public function send()
    {
        // Konfigurasi email
        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://mail.mediarraihan.com';
        $config['smtp_user'] = 'no_reply@mediarraihan.com';
        $config['smtp_pass'] = 'mediarraihan';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);
        
        $this->email->set_newline("\r\n");

        $data = $this->db->query('select * from subscriber')->result();
        foreach ($data as $to) {

            $from = "no_reply@mediarraihan.com";
            $subject = "Halo Pelanggan Media Ar-Raihan";
            $data['email'] = $this->db->query('select * from subscriber where id_subscriber=' . $to->id_subscriber)->row_array();
            $data['produk'] = $this->db->query('select *, SUBSTRING(desk_produk, 1, 50) as deskripsi from produk order by id_produk desc limit 3')->result();
            $message = $this->load->view('admin/emailview', $data, true);
            $this->email->from($from, 'Media Ar-Raihan');
            $this->email->to($to->email_subscriber);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Email berhasil Terkirim</b></div>');
            } else {
                echo $this->email->print_debugger();
                die;
                $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Email gagal Terkirim</b></div>');
            }
        }
        redirect('produk/subview/');
    }
}

// $data['email'] = $this->db->query('select * from subscriber where id_subscriber=3')->row_array();
// $data['produk']= $this->db->query('select *, SUBSTRING(desk_produk, 1, 50) as deskripsi from produk order by id_produk desc limit 3')->result();
// $this->load->view('admin/emailview',$data);