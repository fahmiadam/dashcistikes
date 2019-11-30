<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2015 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2015');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2015->agamam();
        $data['jeniskelamin'] = $this->model_2015->jenis_kel();
        $data['pilihanprodi'] = $this->model_2015->pilihanprodi();

        $data['status'] = $this->model_2015 ->status();
        $data['programkuliah'] = $this->model_2015->programkuliah();
        $data['jenjang'] = $this->model_2015->jenjang();
        $data['pembimbing'] = $this->model_2015->pembimbing();
        $data['kurikulum'] = $this->model_2015->kurikulum();
        $data['provinsi'] = $this->model_2015->provinsi();

        $data['kabupaten'] = $this->model_2015->kabupaten();
        $data['jenisekolah'] = $this->model_2015->jenisekolah();
        $data['statuspindahan'] = $this->model_2015->statuspindahan();
       
        $data['penghasilanortu'] = $this->model_2015->penghasilanortu();
        // $data['tahuna'] = $this->model_2015 ->tahundropdown();
		$this->load->view('mahasiswaa/2015.php', $data);
	}

}
 ?>

