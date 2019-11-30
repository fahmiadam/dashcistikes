<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2014 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2014');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2014->agamam();
        $data['jeniskelamin'] = $this->model_2014->jenis_kel();
        $data['pilihanprodi'] = $this->model_2014->pilihanprodi();

        $data['status'] = $this->model_2014 ->status();
        $data['programkuliah'] = $this->model_2014->programkuliah();
        $data['jenjang'] = $this->model_2014->jenjang();
        $data['pembimbing'] = $this->model_2014->pembimbing();
        $data['kurikulum'] = $this->model_2014->kurikulum();
        $data['provinsi'] = $this->model_2014->provinsi();

        $data['kabupaten'] = $this->model_2014->kabupaten();
        $data['jenisekolah'] = $this->model_2014->jenisekolah();
        $data['statuspindahan'] = $this->model_2014->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2014->penghasilanortu();
        // $data['tahuna'] = $this->model_2014 ->tahundropdown();
		$this->load->view('mahasiswaa/2014.php', $data);
	}

}
 ?>

