<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2013 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2013');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2013->agamam();
        $data['jeniskelamin'] = $this->model_2013->jenis_kel();
        $data['pilihanprodi'] = $this->model_2013->pilihanprodi();

        $data['status'] = $this->model_2013 ->status();
        $data['programkuliah'] = $this->model_2013->programkuliah();
        $data['jenjang'] = $this->model_2013->jenjang();
        $data['pembimbing'] = $this->model_2013->pembimbing();
        $data['kurikulum'] = $this->model_2013->kurikulum();
        $data['provinsi'] = $this->model_2013->provinsi();

        $data['kabupaten'] = $this->model_2013->kabupaten();
        $data['jenisekolah'] = $this->model_2013->jenisekolah();
        $data['statuspindahan'] = $this->model_2013->statuspindahan();
       
        $data['penghasilanortu'] = $this->model_2013->penghasilanortu();
        // $data['tahuna'] = $this->model_2013 ->tahundropdown();
		$this->load->view('mahasiswaa/2013.php', $data);
	}

}
 ?>

