<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2008 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2008');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2008->agamam();
        $data['jeniskelamin'] = $this->model_2008->jenis_kel();
        $data['pilihanprodi'] = $this->model_2008->pilihanprodi();

        $data['status'] = $this->model_2008 ->status();
        $data['programkuliah'] = $this->model_2008->programkuliah();
        $data['jenjang'] = $this->model_2008->jenjang();
        $data['pembimbing'] = $this->model_2008->pembimbing();
        $data['kurikulum'] = $this->model_2008->kurikulum();
        $data['provinsi'] = $this->model_2008->provinsi();

        $data['kabupaten'] = $this->model_2008->kabupaten();
        $data['jenisekolah'] = $this->model_2008->jenisekolah();
        $data['statuspindahan'] = $this->model_2008->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2008->penghasilanortu();
        // $data['tahuna'] = $this->model_2008 ->tahundropdown();
		$this->load->view('mahasiswaa/2008.php', $data);
	}

}
 ?>

