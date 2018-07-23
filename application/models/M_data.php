<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function tampil_data(){
       return $this->db->get("ruang_kelas");
    }
    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    public function tampil_history($id){
        return $this->db->query("SELECT * FROM peminjaman WHERE id_user = '$id'");
    }
    public function tampil_peminjaman(){
        return $this->db->get("peminjaman");
    }
}