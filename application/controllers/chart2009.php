<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2009 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2009');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2009->agamam();
        $data['jeniskelamin'] = $this->model_2009->jenis_kel();
        $data['pilihanprodi'] = $this->model_2009->pilihanprodi();

        $data['status'] = $this->model_2009 ->status();
        $data['programkuliah'] = $this->model_2009->programkuliah();
        $data['jenjang'] = $this->model_2009->jenjang();
        $data['pembimbing'] = $this->model_2009->pembimbing();
        $data['kurikulum'] = $this->model_2009->kurikulum();
        $data['provinsi'] = $this->model_2009->provinsi();

        $data['kabupaten'] = $this->model_2009->kabupaten();
        $data['jenisekolah'] = $this->model_2009->jenisekolah();
        $data['statuspindahan'] = $this->model_2009->statuspindahan();
       
        $data['penghasilanortu'] = $this->model_2009->penghasilanortu();
        // $data['tahuna'] = $this->model_2009 ->tahundropdown();
		$this->load->view('mahasiswaa/2009.php', $data);
	}

}
 ?>

