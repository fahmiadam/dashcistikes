<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_2006 extends CI_Model {
	var $table = 'calonmahasiswa';
	var $dosen = 'dosen';
	var $karyawan = 'karyawan';
	public function agamam() {

      	// $this->db->distinct();
        $this->db->select('agama,count(*) as jumlah');
        $this->db->from($this->table);
        $this->db->group_by('agama');
        $this->db->where('tahun','2006');
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006');
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006'); 
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
        $this->db->where('tahun','2006');
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }
}