<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chartkrw extends CI_Controller {
    public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_karyawan');
   }

    public function index()
    {
        $data['agama'] = $this->model_karyawan->agamak();
        $data['jenis_kelamin'] = $this->model_karyawan->jenis_kelamin();
        $data['status'] = $this->model_karyawan->status();
        $data['jabatan'] = $this->model_karyawan->jabatan();
        $data['kota'] = $this->model_karyawan->kota();
        $data['provinsi'] = $this->model_karyawan->provinsi();
        $data['golongan'] = $this->model_karyawan->golongan();
        $this->load->view('karyawann/karyawan.php', $data);
    }

}
 ?>

