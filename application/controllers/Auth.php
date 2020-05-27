<?php

class Auth extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('m_admin');
    }
    public function index()
    {

            if($this->m_admin->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("admin");

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = md5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->m_admin->check_login('admin', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = [
                            'id_admin'   => $apps->id_admin,
                            'username' => $apps->username,
                            'nama'  => $apps->nama
                        ];
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect('Admin');

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('admin/login', $data);
                }

            }else{

                $this->load->view('admin/login');
            }

        }

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
?>