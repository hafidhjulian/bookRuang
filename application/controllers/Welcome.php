<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('portal');
	}
	public function login(){
		$this->load->view('pageLogin');
	}
	public function orma(){
		$this->load->view('pageOrmawa');
	}
	public function ruang(){
		$this->load->view('pageRuang');
	}
	public function beranda(){
		$this->load->view('pageBeranda');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
	public function ceklogin(){
		if(isset($_POST['submit'])){
			$nim = $this->input->post('nim',true);
			$password = $this->input->post('password',true);
			$cek = array(
				"nim" => $nim,
				"password" => md5($password)
			);
			$hasil = $this->Login_model->proseslogin("user",$cek)->num_rows();
			if($hasil > 0){
				$login = $this->db->get_where("user",$cek)->row();
				if($login->level == "admin"){
					$data_session = array(
						"nim" => $nim,
						"status" => "login"
					);
					$this->session->set_userdata($data_session);
					redirect("welcome/admin");
				}elseif($login->level == "mahasiswa"){
					$data_session = array(
						"nim" => $nim,
						"status" => "login"
					);
					$this->session->set_userdata($data_session);
					redirect("welcome/beranda");
				}else{
					$data_session = array(
						"nim" => $nim,
						"status" => "login"
					);
					$this->session->set_userdata($data_session);
					redirect("welcome/ormawa");
				}
			}else{
				redirect("welcome/index");
			}
		}
	}
	//belum jadi untuk admin
	public function admin(){
		echo "Hai Admin";
	}
	//belum jadi untuk ormawa
	public function ormawa(){
		echo "Hai Ormawa";
	}
}
