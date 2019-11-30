<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2018 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2018');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2018->agamam();
        $data['jeniskelamin'] = $this->model_2018->jenis_kel();
        $data['pilihanprodi'] = $this->model_2018->pilihanprodi();

        $data['status'] = $this->model_2018->status();
        $data['programkuliah'] = $this->model_2018->programkuliah();
        $data['jenjang'] = $this->model_2018->jenjang();
        $data['pembimbing'] = $this->model_2018->pembimbing();
        $data['kurikulum'] = $this->model_2018->kurikulum();
        $data['provinsi'] = $this->model_2018->provinsi();

        $data['kabupaten'] = $this->model_2018->kabupaten();
        $data['jenisekolah'] = $this->model_2018->jenisekolah();
        $data['statuspindahan'] = $this->model_2018->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2018->penghasilanortu();
        // $data['tahuna'] = $this->model_2018->tahundropdown();
		$this->load->view('mahasiswaa/2018.php', $data);
	}

}
 ?>

