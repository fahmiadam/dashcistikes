<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2012 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2012');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2012->agamam();
        $data['jeniskelamin'] = $this->model_2012->jenis_kel();
        $data['pilihanprodi'] = $this->model_2012->pilihanprodi();

        $data['status'] = $this->model_2012 ->status();
        $data['programkuliah'] = $this->model_2012->programkuliah();
        $data['jenjang'] = $this->model_2012->jenjang();
        $data['pembimbing'] = $this->model_2012->pembimbing();
        $data['kurikulum'] = $this->model_2012->kurikulum();
        $data['provinsi'] = $this->model_2012->provinsi();

        $data['kabupaten'] = $this->model_2012->kabupaten();
        $data['jenisekolah'] = $this->model_2012->jenisekolah();
        $data['statuspindahan'] = $this->model_2012->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2012->penghasilanortu();
        // $data['tahuna'] = $this->model_2012 ->tahundropdown();
		$this->load->view('mahasiswaa/2012.php', $data);
	}

}
 ?>

