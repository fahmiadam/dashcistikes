<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAdmin');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->ModelAdmin->cek_login("admin",$where)->num_rows();
        if($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );

            $this->session->set_userdata($data_session);

            redirect(base_url());
        }
        else {
            $data['error'] = '<div class="text-danger mx-auto mb-3"> <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
            $this->load->view('login', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }
}