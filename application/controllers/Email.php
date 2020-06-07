

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
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'arinimobelegen@gmail.com';
        $config['smtp_pass'] = 'arini1608';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $data = $this->db->query('select * from subscriber')->result();
        foreach ($data as $to) {
            $from = "arinimobelegen@gmail.com";
            $subject = "Halo Pelanggan Media Ar-Raihan";
            $message = "
            <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
            <head>
                <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i' rel='stylesheet'>
                            
            
            </head>
            <body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;'>
                <center style='width: 100%; background-color: #f1f1f1;'>
                <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
                    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                </div>
                <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
                    <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
                        <tr>
                            <td class='bg_white logo' style='padding: 1em 2.5em; text-align: center'>
                                <h1><a href='#'>Media Ar-Raihan</a></h1>
                            </td>
                        </tr>
                        <tr>
                            <td valign='middle' class='hero' style='background-image: url(".base_url('assets/templates/images/924.jpg')."); background-size: cover; height: 400px;'>
                                <table>
                                    <tr>
                                        <td>
                                            <div class='text' style='padding: 0 3em; text-align: center;''>
                                                <h2>Check Out Our New Products</h2>
                                                <p>Halo " . $to->email_subscriber . " , Terima kasih telah berlangganan di Website kami. Klik link di bawah ini untuk melihat produk baru kami. </p>
                                                <p><a href='".base_url('main')."' class='btn btn-primary'>Get Your Product Here!</a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                </table>
            </div>
        <body>
            ";


            // $m = "Halo " . $to->email_subscriber . " Kami baru saja menambahkan produk baru.<br><br> Klik <strong><a class='btn btn-primary' href='" . base_url('main') . "' target='_blank' rel='noopener'>Kunjungi Website</a></strong> untuk melihat produk baru.";

            // Load library email dan konfigurasinya
            $this->email->from($from, 'Media Ar-Raihan');
            $this->email->to($to->email_subscriber);
            // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Email berhasil Terkirim</b></div>');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Email gagal Terkirim</b></div>');

            }
        }
        redirect('produk/subview/');
    }
}
