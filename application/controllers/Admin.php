<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->helper('url');
	}
	public function index()
	{
        $data['admin_peminjaman'] = $this->m_admin->tampil_data()->result();
		$this->load->view('admin',$data);
    }
    public function tambah(){
        $this->load->view('v_input_admin');
    }
    public function proses_tambah(){
        $nim = $this->input->post('nim');
        $mahasiswa = $this->input->post('mahasiswa');
        $dosen = $this->input->post('dosen');
        $makul = $this->input->post('makul');
        $tanggal = $this->input->post('tanggal');
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $jam = $this->input->post('jam');
        $kelas = $this->input->post('kelas');
        $data = array(
            "id_user" => $nim,
            "nama_peminjam" =>$mahasiswa,
            "nama_dosen" => $dosen,
            "nama_makul" => $makul,
            "tanggal" =>$tanggal,
            "jam" =>$jam,
            "nama_ruangkelas"=>$kelas
        );
        $this->m_admin->input_data($data,"peminjaman");
        redirect("admin/index");
    }
	public function edit($id){
        $where = array('id_peminjaman' => $id);
        $data['admin'] = $this->m_admin->edit_data($where,'peminjaman')->result();
        $this->load->view('v_edit_admin',$data);
    }
    public function update(){
        $id = $this->input->post('id');
        $nim = $this->input->post('nim');
        $nama_mahasiswa = $this->input->post('mahasiswa');
        $nama_dosen = $this->input->post('dosen');
        $nama_makul = $this->input->post('makul');
        $tanggal = $this->input->post('tanggal');
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $jam = $this->input->post('jam');
        $kelas = $this->input->post('kelas');

        $data= array(
            "id_user" => $nim,
			"nama_peminjam" => $nama_mahasiswa,
			"nama_dosen" => $nama_dosen,
			"nama_makul" => $nama_makul,
			"tanggal" => $tanggal,
			"jam" => $jam,
			"nama_ruangkelas" =>$kelas 
        );
        $where = array(
            'id_peminjaman' => $id
        );
        $this->m_admin->update_data($where,$data,"peminjaman");
        redirect("admin/index");
    }
    public function hapus($id){
        $where = array('id_peminjaman' => $id);
        $this->m_admin->hapus_data($where,"peminjaman");
        redirect('admin/index');
    }
}
