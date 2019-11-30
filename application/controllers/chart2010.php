<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2010 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2010');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2010->agamam();
        $data['jeniskelamin'] = $this->model_2010->jenis_kel();
        $data['pilihanprodi'] = $this->model_2010->pilihanprodi();

        $data['status'] = $this->model_2010 ->status();
        $data['programkuliah'] = $this->model_2010->programkuliah();
        $data['jenjang'] = $this->model_2010->jenjang();
        $data['pembimbing'] = $this->model_2010->pembimbing();
        $data['kurikulum'] = $this->model_2010->kurikulum();
        $data['provinsi'] = $this->model_2010->provinsi();

        $data['kabupaten'] = $this->model_2010->kabupaten();
        $data['jenisekolah'] = $this->model_2010->jenisekolah();
        $data['statuspindahan'] = $this->model_2010->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2010->penghasilanortu();
        // $data['tahuna'] = $this->model_2010 ->tahundropdown();
		$this->load->view('mahasiswaa/2010.php', $data);
	}

}
 ?>

