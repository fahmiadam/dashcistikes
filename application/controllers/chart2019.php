<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart2019 extends CI_Controller {
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('model_2019');
   }

	public function index()
	{
		// $data = [];
        $data['agama'] = $this->model_2019->agamam();
        $data['jeniskelamin'] = $this->model_2019->jenis_kel();
        $data['pilihanprodi'] = $this->model_2019->pilihanprodi();

        $data['status'] = $this->model_2019->status();
        $data['programkuliah'] = $this->model_2019->programkuliah();
        $data['jenjang'] = $this->model_2019->jenjang();
        $data['pembimbing'] = $this->model_2019->pembimbing();
        $data['kurikulum'] = $this->model_2019->kurikulum();
        $data['provinsi'] = $this->model_2019->provinsi();

        $data['kabupaten'] = $this->model_2019->kabupaten();
        $data['jenisekolah'] = $this->model_2019->jenisekolah();
        $data['statuspindahan'] = $this->model_2019->statuspindahan();
        
        $data['penghasilanortu'] = $this->model_2019->penghasilanortu();
        // $data['tahuna'] = $this->model_2019->tahundropdown();
		$this->load->view('mahasiswaa/2019.php', $data);
	}

}
 ?>

