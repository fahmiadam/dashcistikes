<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_dosen extends CI_Model {
    var $table = 'calonmahasiswa';
    var $dosen = 'dosen';
    var $karyawan = 'karyawan';
    // var $alls = 'calonmahasiswa','dosen','karyawan';
    private $_table = "calonmahasiswa";

    public function agamad() {

        // $this->db->distinct();
        $this->db->select('agama,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('agama'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function jenis_kel() {

        // $this->db->distinct();
        $this->db->select('jenis_kelamin,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('jenis_kelamin');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function jenjang_pendidikan() {

        // $this->db->distinct();
        $this->db->select('jenjang,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('jenjang');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }  

    public function jenis() {

        // $this->db->distinct();
        $this->db->select('jenis,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('jenis');
        // $this->db->where('tahun ='2017'') 
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
        $this->db->from($this->dosen);
        $this->db->group_by('status');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function golongan() {

        // $this->db->distinct();
        $this->db->select('golongan,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('golongan');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function program_studi() {

        // $this->db->distinct();
        $this->db->select('programstud,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('programstud');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function jabatan_struktural() {

        // $this->db->distinct();
        $this->db->select('jabatan,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('jabatan');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function jabatan_fungsional() {

        // $this->db->distinct();
        $this->db->select('jabatan_fungsi,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('jabatan_fungsi');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }

    public function kota() {

        // $this->db->distinct();
        $this->db->select('kota,count(*) as jumlah');
        $this->db->from($this->dosen);
        $this->db->group_by('kota');
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
        $this->db->from($this->dosen);
        $this->db->group_by('provinsi');
        // $this->db->where('tahun ='2017'') 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    }


}