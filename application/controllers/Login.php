<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
	public function index()
	{
		$this->load->view('v_login');
    }
    public function aksi_login(){
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');
        $where = array(
            'nim' => $nim,
            'password' => md5($password)
        );
        $cek =  $this->m_login->cek_login("mahasiswa",$where);
        if($cek->num_rows() > 0){
            $data= $cek->row_array();
            $data_session = array(
                'nama' => $data['nama'],
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('user');
        }else{
            echo "NIM atau password yang anda masukkan salah !";
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}