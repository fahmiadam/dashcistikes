<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2007 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2007');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2007->agamam();
        $data['jeniskelamin'] = $this->model_2007->jenis_kel();
        $data['pilihanprodi'] = $this->model_2007->pilihanprodi();

        $data['status'] = $this->model_2007 ->status();
        $data['programkuliah'] = $this->model_2007->programkuliah();
        $data['jenjang'] = $this->model_2007->jenjang();
        $data['pembimbing'] = $this->model_2007->pembimbing();
        $data['kurikulum'] = $this->model_2007->kurikulum();
        $data['provinsi'] = $this->model_2007->provinsi();

        $data['kabupaten'] = $this->model_2007->kabupaten();
        $data['jenisekolah'] = $this->model_2007->jenisekolah();
        $data['statuspindahan'] = $this->model_2007->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2007->penghasilanortu();
        // $data['tahuna'] = $this->model_2007 ->tahundropdown();
		$this->load->view('mahasiswaa/2007.php', $data);
	}

}
 ?>

