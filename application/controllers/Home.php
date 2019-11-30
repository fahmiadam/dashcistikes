<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('login'));
        }
        //load model admin
        $this->load->model('ModelAdmin');
        $this->load->model('model_mahasiswa');

        
    }

	public function index()
    {
            $mahasiswa = count($this->model_mahasiswa->getAll());
            $dosen = count($this->model_mahasiswa->getdsn());
            $karyawan = count($this->model_mahasiswa->getkrw());
            // $alls = count($this->model_mahasiswa->getalls());
            $data = [];
            $data['mahasiswa'] = $mahasiswa;
            $data['dosen'] = $dosen;
            $data['karyawan'] = $karyawan;
            // $data['alls'] = $alls;
            $this->load->view("home/index",$data);         

        }
}