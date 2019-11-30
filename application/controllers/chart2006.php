<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2006 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2006');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2006->agamam();
        $data['jeniskelamin'] = $this->model_2006->jenis_kel();
        $data['pilihanprodi'] = $this->model_2006->pilihanprodi();

        $data['status'] = $this->model_2006 ->status();
        $data['programkuliah'] = $this->model_2006->programkuliah();
        $data['jenjang'] = $this->model_2006->jenjang();
        $data['pembimbing'] = $this->model_2006->pembimbing();
        $data['kurikulum'] = $this->model_2006->kurikulum();
        $data['provinsi'] = $this->model_2006->provinsi();

        $data['kabupaten'] = $this->model_2006->kabupaten();
        $data['jenisekolah'] = $this->model_2006->jenisekolah();
        $data['statuspindahan'] = $this->model_2006->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2006->penghasilanortu();
        // $data['tahuna'] = $this->model_2006 ->tahundropdown();
		$this->load->view('mahasiswaa/2006.php', $data);
	}

}
 ?>

