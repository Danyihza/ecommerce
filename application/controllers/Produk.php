<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('produk_model');
        $this->load->model('Subs_model', 'subs');
        $this->load->helper(array('url', 'download'));
        $data['jml'] = $this->produk_model->jmlProduk()->result();
    }
    public function index()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['produk'] = $this->produk_model->allProduct();
            $data['kategori'] = $this->produk_model->getKategori();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/dataproduk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function download()
    {
        force_download('assets/filexcel/Templates.xlsx', NULL);
    }


    public function ubahview($id_produk)
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['produk'] = $this->produk_model->getProductById($id_produk);
            $data['kategori'] = $this->produk_model->getKategori();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/ubahproduk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function tambahproduk()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['kategori'] = $this->produk_model->getKategori();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahproduk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function simpan()
    {
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok_produk = $this->input->post('stok_produk');
        $diskon_produk = $this->input->post('diskon_produk');
        $desk_produk = $this->input->post('desk_produk');
        $kategori = $this->input->post('kategori');

        $uploadgambar = $_FILES['gambar_produk']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/images/produk/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_produk')) {
                # code...
                $img = $this->upload->data('file_name');
                $this->db->set('gambar_produk', $img);
            } else {
                echo $this->upload->displays_errors();
            }
        }

        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'stok_produk' => $stok_produk,
            'diskon_produk' => $diskon_produk,
            'desk_produk' => $desk_produk,
            'kategori' => $kategori,
            'link' => strtolower(str_replace(' ', '-', $nama_produk))
        );

        $this->produk_model->input_data($data, 'produk');
        redirect('produk/send/');
    }

    private function _sendemail()
    {
        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://mail.belenjehyu.site';
        $config['smtp_user'] = 'pendaftaran.pedagang@belenjehyu.site';
        $config['smtp_pass'] = 'belenjehyu24?';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $pesan = `
        cek
        `;

        $this->email->from('pendaftaran.pedagang@belenjehyu.site', 'BelenjehYu');
        $email = $this->subs->getAllEmail();
        $this->email->to($email);
        $this->email->subject('Halo, Ada Pedagang yang ingin Daftar nih');
        $this->email->message($pesan);

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function hapus($id_produk)
    {
        $db_debug = $this->db->db_debug; //save setting
        $this->db->db_debug = FALSE; //disable debugging for queries
        $where = array('id_produk' => $id_produk);
        $this->produk_model->hapus_data($where, 'produk');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES HAPUS GAGAL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('produk/');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES HAPUS BERHASIL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('produk/');
        }
    }

    public function update()
    {
        $id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $stok_produk = $this->input->post('stok_produk');
        $diskon_produk = $this->input->post('diskon_produk');
        $desk_produk = $this->input->post('desk_produk');
        $kategori = $this->input->post('kategori');

        $uploadgambar = $_FILES['gambar_produk']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/images/produk/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_produk')) {
                # code...
                $img = $this->upload->data('file_name');
                $this->db->set('gambar_produk', $img);
            } else {
                echo $this->upload->displays_errors();
            }
        }

        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'stok_produk' => $stok_produk,
            'diskon_produk' => $diskon_produk,
            'desk_produk' => $desk_produk,
            'kategori' => $kategori,
            'link' => strtolower(str_replace(' ', '-', $nama_produk))
        );

        $where = array(
            'id_produk' => $id_produk
        );
        $this->produk_model->update_data($where, $data, 'produk');
        redirect('produk');
    }

    public function updatestok($id_produk)
    {
        $stok_produk = $this->input->post('stok_produk');


        $data = array(
            'stok_produk' => $stok_produk
        );

        $where = array(
            'id_produk' => $id_produk
        );
        $this->produk_model->update_data($where, $data, 'produk');
        redirect('produk');
    }

    public function updatediskon($id_produk)
    {
        $diskon_produk = $this->input->post('diskon_produk');

        $data = array(
            'diskon_produk' => $diskon_produk
        );

        $where = array(
            'id_produk' => $id_produk
        );
        $this->produk_model->update_data($where, $data, 'produk');
        redirect('produk');
    }

    public function tambahkat()
    {
        $nama = $this->input->post('nama_kategori');
        $data = [
            'nama_kategori' => $nama
        ];
        $this->produk_model->input_data($data, 'kategori');
        redirect('produk');
    }
    public function hapuskat($id_kategori)
    {
        $where = array('id_kategori' => $id_kategori);
        $this->produk_model->hapus_data($where, 'kategori');
        redirect('produk');
    }

    public function excelview()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahexcel');
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function gambarview()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahgambar');
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function ulasanview()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['ulasan'] = $this->produk_model->jmlUlasan();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/dataulasan', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function lihatulasan($id_produk)
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['ulas'] = $this->produk_model->data_ulasan($id_produk);
            $data['rating'] = $this->produk_model->rating($id_produk);
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/lihatulasan', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function uploadexcel()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('assets/filexcel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> ' . $this->upload->display_errors() . '</div>');
            //redirect halaman
            redirect('produk/excelview/');
        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('assets/filexcel/' . $data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

            $data = array();

            $numrow = 1;
            foreach ($sheet as $row) {
                if ($numrow > 7) {
                    array_push($data, array(
                        'nama_produk' => $row['A'],
                        'harga_produk' => $row['B'],
                        'stok_produk' => $row['C'],
                        'diskon_produk' => $row['D'],
                        'kategori' => $row['E'],
                        'gambar_produk' => $row['F'],
                    ));
                }
                $numrow++;
            }
            $this->db->insert_batch('produk', $data);
            //delete file from server
            unlink(realpath('assets/filexcel/' . $data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('produk/excelview/');
        }
    }

    // Upload and Extract zip file
    public function extract()
    {

        // Check form submit or not 
        if ($this->input->post('submit') != NULL) {

            if (!empty($_FILES['file']['name'])) {
                // Set preference 
                $config['upload_path'] = 'assets/images/uploads/';
                $config['allowed_types'] = 'zip';
                $config['max_size'] = '5120'; // max_size in kb (5 MB) 
                $config['file_name'] = $_FILES['file']['name'];

                // Load upload library 
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];

                    ## Extract the zip file ---- start
                    $zip = new ZipArchive;
                    $res = $zip->open("assets/images/uploads/" . $filename);
                    if ($res === TRUE) {

                        // Unzip path
                        $extractpath = "assets/images/produk/";

                        // Extract file
                        $zip->extractTo($extractpath);
                        $zip->close();

                        $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES UPLOAD BERHASIL!</b> Data berhasil diimport!</div>');
                        redirect('produk/gambarview/');
                    } else {
                        $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES UPLOAD GAGAL!</b> ' . $this->upload->display_errors() . '</div>');
                        redirect('produk/gambarview/');
                    }
                    ## ---- end

                } else {
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES UPLOAD GAGAL!</b> ' . $this->upload->display_errors() . '</div>');
                    redirect('produk/gambarview/');
                }
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES UPLOAD GAGAL!</b> ' . $this->upload->display_errors() . '</div>');
                redirect('produk/gambarview/');
            }
        }
    }

    public function subview()
    {
        if ($this->produk_model->logged_id()) {
            $data['countproduk'] = $this->produk_model->countAllProduct();
            $data['datas'] = $this->db->query('select * from subscriber')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/subscriber', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function hapusl($id_subscriber)
    {
        $db_debug = $this->db->db_debug; //save setting
        $this->db->db_debug = FALSE; //disable debugging for queries
        $where = array('id_subscriber' => $id_subscriber);
        $this->produk_model->hapus_data($where, 'subscriber');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES HAPUS GAGAL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('produk/subview/');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES HAPUS BERHASIL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('produk/subview/');
        }
    }

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
                            <td valign='middle' class='hero' style='background-image: url(" . base_url('assets/templates/images/924.jpg') . "); background-size: cover; height: 400px;'>
                                <table>
                                    <tr>
                                        <td>
                                            <div class='text' style='padding: 0 3em; text-align: center;''>
                                                <h2>Check Out Our New Products</h2>
                                                <p>Halo " . $to->email_subscriber . " , Terima kasih telah berlangganan di Website kami. Klik link di bawah ini untuk melihat produk baru kami. </p>
                                                <p><a href='" . base_url('main') . "' class='btn btn-primary'>Get Your Product Here!</a></p>
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
                $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Data Tersimpan dan Email berhasil Terkirim</b></div>');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Data Tersimpan dan Email gagal Terkirim</b></div>');
            }
        }
        redirect('produk/');
    }
}
