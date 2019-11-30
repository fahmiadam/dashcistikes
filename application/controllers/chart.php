<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_mahasiswa');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_mahasiswa->agamam();
        $data['jeniskelamin'] = $this->model_mahasiswa->jenis_kel();
        $data['pilihanprodi'] = $this->model_mahasiswa->pilihanprodi();

        $data['status'] = $this->model_mahasiswa->status();
        $data['programkuliah'] = $this->model_mahasiswa->programkuliah();
        $data['jenjang'] = $this->model_mahasiswa->jenjang();
        $data['pembimbing'] = $this->model_mahasiswa->pembimbing();
        $data['kurikulum'] = $this->model_mahasiswa->kurikulum();
        $data['provinsi'] = $this->model_mahasiswa->provinsi();

        $data['kabupaten'] = $this->model_mahasiswa->kabupaten();
        $data['jenisekolah'] = $this->model_mahasiswa->jenisekolah();
        $data['statuspindahan'] = $this->model_mahasiswa->statuspindahan();
        $data['tahun'] = $this->model_mahasiswa->tahun();
        $data['penghasilanortu'] = $this->model_mahasiswa->penghasilanortu();
        // $data['tahuna'] = $this->model_mahasiswa->tahundropdown();
		$this->load->view('mahasiswaa/mahasiswa.php', $data);
	}

}
 ?>

