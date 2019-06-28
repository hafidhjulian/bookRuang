<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('portal');
	}
	public function login(){
		$this->load->view('pageLogin');
	}
	public function inputPeminjaman(){
		$data['peminjaman'] = $this->m_data->tampil_data()->result();
		$this->load->view('pageInput',$data);
	}
	public function ruangH3(){
		$this->load->view('pageRuangH3');
	}
	public function beranda(){
		$id=$this->session->userdata("nim");
		$data['history_peminjaman'] = $this->m_data->tampil_history($id)->result();
		$this->load->view('pageBeranda',$data);
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
					redirect("admin/index");
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
		$this->load->view('admin');
	}
	//belum jadi untuk ormawa
	public function ormawa(){
		echo "Hai Ormawa";
	}
	public function pesan(){
		$this->load->view('peminjamanRuang');
	}
	public function proses_pesan(){
		if(isset($_POST['submit'])){
			$id_user = $this->input->post('id_user');
			$nama = $this->input->post('nama');
			$dosen = $this->input->post('dosen');
			$makul = $this->input->post('makul');
			$tanggal = $this->input->post('tanggal');
			$tanggal = date('Y-m-d',strtotime($tanggal));
			$jam = $this->input->post('jam');
			$ruang = $this->input->post('ruangkelas');

			$data = array(
				"id_user" => $id_user,
				"nama_peminjam" => $nama,
				"nama_dosen" => $dosen,
				"nama_makul" => $makul,
				"tanggal" => $tanggal,
				"jam" => $jam,
				"nama_ruangkelas" =>$ruang 
			);
			$this->m_data->input_data($data,"peminjaman");
        	redirect("welcome/beranda");
		}
	}
	public function cetak($id){
		$this->load->library('Pdf');
		$where = array('id_peminjaman' => $id);
		$data['produk'] = $this->M_pdf->get_produk($where,'peminjaman')->result();
		$this->load->view('makepdf',$data);
	}
	public function lihat(){
		$data['lihat_peminjaman'] = $this->m_data->tampil_peminjaman()->result();
		$this->load->view('lihatPeminjaman',$data);
	}
}
