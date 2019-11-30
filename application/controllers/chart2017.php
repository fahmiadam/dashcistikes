<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2017 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2017');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2017->agamam();
        $data['jeniskelamin'] = $this->model_2017->jenis_kel();
        $data['pilihanprodi'] = $this->model_2017->pilihanprodi();

        $data['status'] = $this->model_2017->status();
        $data['programkuliah'] = $this->model_2017->programkuliah();
        $data['jenjang'] = $this->model_2017->jenjang();
        $data['pembimbing'] = $this->model_2017->pembimbing();
        $data['kurikulum'] = $this->model_2017->kurikulum();
        $data['provinsi'] = $this->model_2017->provinsi();

        $data['kabupaten'] = $this->model_2017->kabupaten();
        $data['jenisekolah'] = $this->model_2017->jenisekolah();
        $data['statuspindahan'] = $this->model_2017->statuspindahan();
    
        $data['penghasilanortu'] = $this->model_2017->penghasilanortu();
        // $data['tahuna'] = $this->model_2017->tahundropdown();
		$this->load->view('mahasiswaa/2017.php', $data);
	}

}
 ?>

