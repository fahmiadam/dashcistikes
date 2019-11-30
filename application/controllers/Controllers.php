<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Controllers extends CI_Controller {
    
	public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
                redirect(base_url('login'));
        }
    $this->load->model('ProvinsiModel');
    $this->load->model('model_mahasiswa');
    $this->load->library('form_validation');
   }

	public function index()
	{
        $data["mahasiswa"] = $this->model_mahasiswa->getAll();

        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->model_mahasiswa->search();
        }
		$this->load->view('registrasi/list.php', $data);
	}

	public function inputData()
    {
        $mahasiswa = $this->model_mahasiswa;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        $data['provinsi'] = $this->ProvinsiModel->provinsi();

        $data['pilihanprodi'] = ['Sarjana Keperawatan', 'Diploma 3 Keperawatan', 'Pendidikan Profesi Ners'];
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if($validation->run()) {
            $mahasiswa->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $this->load->view("registrasi/form_input.php", $data);
    }

    public function edit($id = null){
        if(!isset($id)) redirect('calonmahasiswa');

        $mahasiswa = $this->model_mahasiswa;
        $validation = $this->form_validation;
        $validation->set_rules($mahasiswa->rules());

        $data['provinsi'] = $this->ProvinsiModel->provinsi();
        $data['tahunlulus'] = ['2019', '2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010', '2009', '2008', '2007', '2006', '2005', '2004', '2003', '2002', '2001', '2000', '1999', '1998', '1997', '1996', '1995', '1994', '1993', '1992', '1991', '1990'];
        $data['pilihanprodi'] = ['Sarjana Keperawatan', 'Diploma 3 Keperawatan', 'Pendidikan Profesi Ners'];
        $data['agama'] = ['Kristen', 'Katolik', 'Islam', 'Hindu', 'Budha', 'Lainnya'];

        if ($validation->run()) {
            $mahasiswa->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan!');
        }

        $data["mahasiswa"] = $mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();

        $this->load->view("registrasi/edit_form", $data);
    }

    public function delete($id = null) {
        if (!isset($id)) show_404();

        if($this->model_mahasiswa->delete($id)) {
            redirect(site_url('calonmahasiswa'));
        }
    }

    public function detail($id = null)
    {
        $this->load->model('model_mahasiswa');

        $data['mahasiswa'] = $this->model_mahasiswa->getById($id);
        if (!$data["mahasiswa"]) show_404();
        
        $this->load->view('registrasi/detail', $data);
    }

    public function ambil_data()
    {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if($modul == "kabupaten") {
            echo $this->ProvinsiModel->kabupaten($id);
        }
        elseif($modul=="kecamatan"){

        }
        elseif($modul=="kelurahan"){

        }
    }

    public function ambil_prov($id = null) 
    {
        $this->load->model('ProvinsiModel');

        $aa['aa'] = $this->ProvinsiModel->namaProv($id);
        if (!$data["aa"]) show_404();
        
        $this->load->view('registrasi/detail', $aa);
    }

    public function get_by_keyword()
    {
        $this->db->select('*');
        $this->db->from('calonmahasiswa');
        $this->db->like('pilihanprodi','Sarjana Keperawatan');
        $query= $this->db->get('');
        return $query;
    }
    // public function mahasiswac()
//     {
//           $data['graph'] = $this->model_mahasiswa->graph();
//           $data['d3'] = $this->model_mahasiswa->d3();

//         $this->load->view('master/mahasiswa.php', $data);
// }
public function dosenc()
    {
        $data['graph'] = $this->model_mahasiswa->getALL();
        $this->load->view("master/dosen.php",$data);
}
public function karyawanc()
    {
        $data['graph'] = $this->model_mahasiswa->getALL();
        $this->load->view("master/karyawan.php",$data);
}
public function tidakc()
    {
        $data['graph'] = $this->model_mahasiswa->getALL();
        $this->load->view("master/tidaktahu.php",$data);
}
// public function mhscc()
//     {
//         $data['count'] = $this->model_mahasiswa->mhsc();
//         $this->load->view("master/dosen.php",$data);
// }
}