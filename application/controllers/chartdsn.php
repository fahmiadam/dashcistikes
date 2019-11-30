<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chartdsn extends CI_Controller {
    public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_dosen');
   }

    public function index()
    {
        $data = [];
        $data['jeniskelamin'] = $this->model_dosen->jenis_kel();
        $data['jenjang_pendidikan'] = $this->model_dosen->jenjang_pendidikan();
        $data['jenis'] = $this->model_dosen->jenis();
        $data['status'] = $this->model_dosen->status();
        $data['jenis'] = $this->model_dosen->jenis();
        $data['golongan'] = $this->model_dosen->golongan();
        $data['program_studi'] = $this->model_dosen->program_studi();
        $data['agama'] = $this->model_dosen->agamad();
        $data['jabatan_struktural'] = $this->model_dosen->jabatan_struktural();
        $data['jabatan_fungsional'] = $this->model_dosen->jabatan_fungsional();
        $data['kota'] = $this->model_dosen->kota();
        $data['provinsi'] = $this->model_dosen->provinsi();
        $this->load->view('dosenn/dosen.php', $data);
    }

}
 ?>

