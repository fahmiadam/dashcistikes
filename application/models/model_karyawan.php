<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Model_karyawan extends CI_Model {
    var $table = 'calonmahasiswa';
    var $dosen = 'dosen';
    var $karyawan = 'karyawan';
    // var $alls = 'calonmahasiswa','dosen','karyawan';
    private $_table = "calonmahasiswa";
    
    public function agamak() {
        // $this->db->distinct();
        $this->db->select('agama,count(*) as jumlah');
        $this->db->from($this->karyawan);
        $this->db->group_by('agama'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    } 

    public function jenis_kelamin() {
        // $this->db->distinct();
        $this->db->select('jenis_kelamin,count(*) as jumlah');
        $this->db->from($this->karyawan);
        $this->db->group_by('jenis_kelamin'); 
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
        $this->db->from($this->karyawan);
        $this->db->group_by('status'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    } 

    public function jabatan() {
        // $this->db->distinct();
        $this->db->select('jabatan,count(*) as jumlah');
        $this->db->from($this->karyawan);
        $this->db->group_by('jabatan'); 
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
        $this->db->from($this->karyawan);
        $this->db->group_by('kota'); 
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
        $this->db->from($this->karyawan);
        $this->db->group_by('provinsi'); 
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
        $this->db->from($this->karyawan);
        $this->db->group_by('golongan'); 
        $query = $this->db->get();
        $hasil = array();
        foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
    } 
} 