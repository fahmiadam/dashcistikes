<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2016 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2016');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2016->agamam();
        $data['jeniskelamin'] = $this->model_2016->jenis_kel();
        $data['pilihanprodi'] = $this->model_2016->pilihanprodi();

        $data['status'] = $this->model_2016->status();
        $data['programkuliah'] = $this->model_2016->programkuliah();
        $data['jenjang'] = $this->model_2016->jenjang();
        $data['pembimbing'] = $this->model_2016->pembimbing();
        $data['kurikulum'] = $this->model_2016->kurikulum();
        $data['provinsi'] = $this->model_2016->provinsi();

        $data['kabupaten'] = $this->model_2016->kabupaten();
        $data['jenisekolah'] = $this->model_2016->jenisekolah();
        $data['statuspindahan'] = $this->model_2016->statuspindahan();
    
        $data['penghasilanortu'] = $this->model_2016->penghasilanortu();
        // $data['tahuna'] = $this->model_2016->tahundropdown();
		$this->load->view('mahasiswaa/2016.php', $data);
	}

}
 ?>

