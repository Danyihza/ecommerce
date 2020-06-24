<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogAdmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

    public function index()
    {
        if ($this->blog_model->logged_id()) {
            $data['countproduk'] = $this->blog_model->countAllProduct();
            $data['artikel'] = $this->blog_model->getAllData();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/datartikel', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function tambahview()
    {
        if ($this->blog_model->logged_id()) {
            $data['countproduk'] = $this->blog_model->countAllProduct();
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahartikel');
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function simpan()
    {
        $judul_artikel = $this->input->post('judul_artikel');
        $tanggal_artikel = time();
        $status_artikel = 1;
        $isi_artikel = $this->input->post('isi_artikel');

        $uploadgambar = $_FILES['foto_artikel']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/images/blog/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_artikel')) {
                # code...
                $img = $this->upload->data('file_name');
                $this->db->set('foto_artikel', $img);
            } else {
                echo $this->upload->displays_errors();
            }
        }

        $data = array(
            'judul_artikel' => $judul_artikel,
            'tanggal_artikel' => $tanggal_artikel,
            'status_artikel' => $status_artikel,
            'isi_artikel' => $isi_artikel
        );

        $this->blog_model->input_data($data, 'artikel');
        redirect('BlogAdmin');
    }

    public function updateview($id_artikel)
    {
        if ($this->blog_model->logged_id()) {
            $data['countproduk'] = $this->blog_model->countAllProduct();
            $data['artikel'] = $this->blog_model->getJustDataById($id_artikel);
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/ubahartikel', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function update()
    {
        $id_artikel = $this->input->post('id_artikel');
        $judul_artikel = $this->input->post('judul_artikel');
        $tanggal_artikel = time();
        $status_artikel = 1;
        $isi_artikel = $this->input->post('isi_artikel');

        $uploadgambar = $_FILES['foto_artikel']['name'];

        if ($uploadgambar) {
            # code...
            $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
            $config['max_size'] = '5000';
            $config['upload_path'] = './assets/images/blog/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_artikel')) {
                # code...
                $img = $this->upload->data('file_name');
                $this->db->set('foto_artikel', $img);
            } else {
                echo $this->upload->displays_errors();
            }
        }

        $data = array(
            'judul_artikel' => $judul_artikel,
            'tanggal_artikel' => $tanggal_artikel,
            'status_artikel' => $status_artikel,
            'isi_artikel' => $isi_artikel
        );

        $where = array(
            'id_artikel' => $id_artikel
        );
        $this->blog_model->update_data($where, $data, 'artikel');
        redirect('BlogAdmin');
    }

    public function hapus($id_artikel)
    {
        $db_debug = $this->db->db_debug; //save setting
        $this->db->db_debug = FALSE; //disable debugging for queries
        $where = array('id_artikel' => $id_artikel);
        $this->blog_model->hapus_data($where, 'artikel');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES HAPUS GAGAL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('BlogAdmin/');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES HAPUS BERHASIL!</b> </div>');
            $this->db->db_debug = $db_debug;
            redirect('BlogAdmin/');
        }
    }

    public function aktif($id_artikel)
    {
        $status = 1;
        $data = array(
            'status_artikel' => $status
        );
        $where = array(
            'id_artikel' => $id_artikel
        );
        $this->blog_model->update_data($where, $data, 'artikel');
        redirect('BlogAdmin');
    }
    public function nonaktif($id_artikel)
    {
        $status = 0;
        $data = array(
            'status_artikel' => $status
        );
        $where = array(
            'id_artikel' => $id_artikel
        );
        $this->blog_model->update_data($where, $data, 'artikel');
        redirect('BlogAdmin');
    }

    public function lihatartikel($id_artikel)
    {
        if ($this->blog_model->logged_id()) {
            $data['countproduk'] = $this->blog_model->countAllProduct();
            $data['komentar1'] = $this->blog_model->getCmnByIdP($id_artikel);
            // $data['komentar2'] = $this->blog_model->getCmnByIdC($id_artikel);
            $data['artikel'] = $this->blog_model->getJustDataById($id_artikel);
            $data['count'] = $this->blog_model->countCmtById($id_artikel);
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/lihatartikel', $data);
            $this->load->view('admin/footer');
        } else {
            redirect("auth");
        }
    }

    public function kirimkomen()
    {
        $id_artikel = $this->input->post('id_artikel');
        $nama_kmn = $this->input->post('nama_kmn');
        $email_kmn = $this->input->post('email_kmn');
        $status_kmn = $this->input->post('status_kmn');
        $isi_kmn = $this->input->post('isi_kmn');

        $data = array(
            'id_artikel' => $id_artikel,
            'nama_kmn' => $nama_kmn,
            'email_kmn' => $email_kmn,
            'status_kmn' => $status_kmn,
            'waktu_kmn' => '@' . time(),
            'isi_kmn' => $isi_kmn
        );

        $this->blog_model->input_data($data, 'komentar');
        redirect('BlogAdmin/lihatartikel/' . $id_artikel);
    }

    public function kirimbalas()
    {
        $id_artikel = $this->input->post('id_artikel');
        $nama_kmn = $this->input->post('nama_kmn');
        $email_kmn = $this->input->post('email_kmn');
        $status_kmn = $this->input->post('status_kmn');
        $isi_kmn = $this->input->post('isi_kmn');

        $data = array(
            'id_artikel' => $id_artikel,
            'nama_kmn' => $nama_kmn,
            'email_kmn' => $email_kmn,
            'status_kmn' => $status_kmn,
            'waktu_kmn' => '@' . time(),
            'isi_kmn' => $isi_kmn
        );

        $this->blog_model->input_data($data, 'komentar');
        redirect('BlogAdmin/lihatartikel/' . $id_artikel);
    }
}
