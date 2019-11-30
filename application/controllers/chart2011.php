<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2011 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2011');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2011->agamam();
        $data['jeniskelamin'] = $this->model_2011->jenis_kel();
        $data['pilihanprodi'] = $this->model_2011->pilihanprodi();

        $data['status'] = $this->model_2011 ->status();
        $data['programkuliah'] = $this->model_2011->programkuliah();
        $data['jenjang'] = $this->model_2011->jenjang();
        $data['pembimbing'] = $this->model_2011->pembimbing();
        $data['kurikulum'] = $this->model_2011->kurikulum();
        $data['provinsi'] = $this->model_2011->provinsi();

        $data['kabupaten'] = $this->model_2011->kabupaten();
        $data['jenisekolah'] = $this->model_2011->jenisekolah();
        $data['statuspindahan'] = $this->model_2011->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2011->penghasilanortu();
        // $data['tahuna'] = $this->model_2011 ->tahundropdown();
		$this->load->view('mahasiswaa/2011.php', $data);
	}

}
 ?>

