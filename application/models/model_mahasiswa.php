<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_Mahasiswa extends CI_Model {
	var $table = 'calonmahasiswa';
	var $dosen = 'dosen';
	var $karyawan = 'karyawan';
	// var $alls = 'calonmahasiswa','dosen','karyawan';
	private $_table = "calonmahasiswa";

	public $id;
	public $tanggal;
	public $pmbid;
	public $gelombang;
	public $tahap;
	public $email;
	public $pilihanprodi;
	public $namalengkap;
	public $foto = "default.jpg";
	public $tempatlahir;
	public $tanggallahir;
	public $jeniskelamin;
	public $tinggi;
	public $berat;
	public $agama;
	public $kewarganegaraan;
	public $jalan;
	public $provinsi;
	public $kabupaten;
	public $kodepos;
	public $notelpon;
	public $namaibukandung;
	public $asalsekolah;
	public $jalansekolah;
	public $provinsisekolah;
	public $kabupatensekolah;
	public $tahunlulus;
	public $jurusan;
	public $namawali;
	public $jalanwali;
	public $provinsiwali;
	public $kabupatenwali;
	public $notelponwali;
	public $pekerjaanwali;
	public $sumbangan;
	public $ujikes;
	public $tpa;
	public $wawancara;
	public $pewawancara;
	public $hasil;

	public function rules()
	{
		return [
			['field' => 'email',
			'label' => 'Email',
			'rules' => 'required|valid_email'],

			['field' => 'namalengkap',
			'label' => 'Nama Lengkap',
			'rules' => 'required'],

			['field' => 'tempatlahir',
			'label' => 'Tempat Lahir',
			'rules' => 'required'],

			['field' => 'jalan',
			'label' => 'Alamat',
			'rules' => 'required'],

			['field' => 'provinsi',
			'label' => 'Provinsi',
			'rules' => 'required'],

			

			['field' => 'kodepos',
			'label' => 'Kode Pos',
			'rules' => 'numeric'],

			['field' => 'notelpon',
			'label' => 'No. Telpon',
			'rules' => 'required|numeric'],

			['field' => 'sumbangan',
			'label' => 'Sumbangan',
			'rules' => 'required|numeric']
		];
	}

    public function getAll() {
        return $this->db->get($this->table)->result();
    }
       public function getdsn() {
        return $this->db->get($this->dosen)->result();
    }
   public function getkrw() {
        return $this->db->get($this->karyawan)->result();
    }
    public function getalls() {
        return $this->db->get($this->alls)->result();
    }

    public function getById($id) {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

	public function save() {
		$post = $this->input->post();
		$this->tanggal = $post["tanggal"];
		$this->pmbid = $post["pmbid"];
		$this->gelombang = $post["gelombang"];
		$this->tahap = $post["tahap"];
		$this->email = $post["email"];
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->namalengkap = $post["namalengkap"];
		$this->foto = $this->_uploadImage();
		$this->tempatlahir = $post["tempatlahir"];
		$this->tanggallahir = $post["tanggallahir"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->tinggi = $post["tinggi"];
		$this->berat = $post["berat"];
		$this->agama = $post["agama"];
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->jalan = $post["jalan"];
		$this->provinsi = $post["provinsi"];
		$this->kabupaten = $post["kabupaten"];
		$this->kodepos = $post["kodepos"];
		$this->notelpon = $post["notelpon"];
		$this->namaibukandung = $post["namaibukandung"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->jalansekolah = $post["jalansekolah"];
		$this->provinsisekolah = $post["provinsisekolah"];
		$this->kabupatensekolah = $post["kabupatensekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->namawali = $post["namawali"];
		$this->jalanwali = $post["jalanwali"];
		$this->provinsiwali = $post["provinsiwali"];
		$this->kabupatenwali = $post["kabupatenwali"];
		$this->notelponwali = $post["notelponwali"];
		$this->pekerjaanwali = $post["pekerjaanwali"];
		$this->sumbangan = $post["sumbangan"];
		$this->ujikes = $post["ujikes"];
		$this->tpa = $post["tpa"];
		$this->wawancara = $post["wawancara"];
		$this->pewawancara = $post["pewawancara"];
		$this->hasil = $post["hasil"];
		$this->db->insert($this->_table, $this);
	}

	public function update() {
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->tanggal = $post["tanggal"];
		$this->pmbid = $post["pmbid"];
		$this->gelombang = $post["gelombang"];
		$this->tahap = $post["tahap"];
		$this->email = $post["email"];
		$this->pilihanprodi = $post["pilihanprodi"];
		$this->namalengkap = $post["namalengkap"];

		if (!empty($_FILES["foto"]["name"])) {
		    $this->foto = $this->_uploadImage();
		} else {
		    $this->foto = $post["old_image"];
		}

		$this->tempatlahir = $post["tempatlahir"];
		$this->tanggallahir = $post["tanggallahir"];
		$this->jeniskelamin = $post["jeniskelamin"];
		$this->tinggi = $post["tinggi"];
		$this->berat = $post["berat"];
		$this->agama = $post["agama"];
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->jalan = $post["jalan"];
		$this->provinsi = $post["provinsi"];
		$this->kabupaten = $post["kabupaten"];
		$this->kodepos = $post["kodepos"];
		$this->notelpon = $post["notelpon"];
		$this->namaibukandung = $post["namaibukandung"];
		$this->asalsekolah = $post["asalsekolah"];
		$this->jalansekolah = $post["jalansekolah"];
		$this->provinsisekolah = $post["provinsisekolah"];
		$this->kabupatensekolah = $post["kabupatensekolah"];
		$this->tahunlulus = $post["tahunlulus"];
		$this->jurusan = $post["jurusan"];
		$this->namawali = $post["namawali"];
		$this->jalanwali = $post["jalanwali"];
		$this->provinsiwali = $post["provinsiwali"];
		$this->kabupatenwali = $post["kabupatenwali"];
		$this->notelponwali = $post["notelponwali"];
		$this->pekerjaanwali = $post["pekerjaanwali"];
		$this->sumbangan = $post["sumbangan"];
		$this->ujikes = $post["ujikes"];
		$this->tpa = $post["tpa"];
		$this->wawancara = $post["wawancara"];
		$this->pewawancara = $post["pewawancara"];
		$this->hasil = $post["hasil"];
		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id){
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

     private function _uploadImage() {
    	$config['upload_path'] = './upload/mahasiswa';
    	$config['allowed_types'] = 'jpg|png';
    	$config['file_name'] = $this->namalengkap;
    	$config['override'] = true;
    	$config['max_size'] = 1024;
    	// $config['max_width'] = 1024;
    	// $config['max_height'] = 768;

    	$this->load->library('upload', $config);

    	if($this->upload->do_upload('foto')) {
    		return $this->upload->data("file_name");
    	}

    	return "default.jpg";
    }

    private function _deleteImage($id) {
    	$mahasiswa = $this->getById($id);
    	if($mahasiswa->foto != "default.jpg") {
    		$filename = explode(".", $mahasiswa->foto)[0];
    		return array_map('unlink', glob(FCPATH."upload/mahasiswa/$filename.*"));
    	}
    }

    public function proses_tampil()
    {
    	$sql = $this->db->get('calonmahasiswa');
    	return $sql;
    }

    public function get_detail($id = null)
    {
    	$query = $this->db->get_where('calonmahasiswa', array('id' => $id))->row();
		return $query;
    }

    public function search() {
    	$keyword = $this->input->post('keyword', true);
    	$this->db->like('namalengkap', $keyword);
    	return $this->db->get($this->_table)->result();
    }

    public function upload_excel($filename){
    $this->load->library('upload'); // Load librari upload
    
    $config['upload_path'] = './excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '2048';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;
  
    $this->upload->initialize($config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
       
    public function agamam() {

      	// $this->db->distinct();
        $this->db->select('agama,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('agama');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function jenis_kel() {

      	// $this->db->distinct();
        $this->db->select('jeniskelamin,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('jeniskelamin');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function pilihanprodi() {

        // $this->db->distinct();
        $this->db->select('pilihanprodi,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('pilihanprodi'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function status() {

      	// $this->db->distinct();
        $this->db->select('status,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('status');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            
            return $hasil;
    }
    public function programkuliah() {

      	// $this->db->distinct();
        $this->db->select('programkuliah,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('programkuliah');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function jenjang() {

      	// $this->db->distinct();
        $this->db->select('jenjang,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('jenjang');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
     public function pembimbing() {

      	// $this->db->distinct();
        $this->db->select('pembimbing,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('pembimbing');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function kurikulum() {

      	// $this->db->distinct();
        $this->db->select('kurikulum,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('kurikulum');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function provinsi() {

      	// $this->db->distinct();
        $this->db->select('provinsi,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('provinsi');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function kabupaten() {

      	// $this->db->distinct();
        $this->db->select('kabupaten,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('kabupaten');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function jenisekolah() {

      	// $this->db->distinct();
        $this->db->select('jenisekolah,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('jenisekolah');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function statuspindahan() {

      	// $this->db->distinct();
        $this->db->select('statuspindahan,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('statuspindahan');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function tahun() {

      	// $this->db->distinct();
        $this->db->select('tahun,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('tahun');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
    public function penghasilanortu() {

      	// $this->db->distinct();
        $this->db->select('penghasilanortu,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('penghasilanortu');
        // $this->db->like('tahun','2017');
        // $this->db->where('tahun ','2017');
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
}
