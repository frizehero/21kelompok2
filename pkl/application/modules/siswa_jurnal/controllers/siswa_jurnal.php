<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_jurnal extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_siswa_jurnal');
		 $this->load->model('login/m_session');

	}

	
	// index
	function index()
	{

		$datasiswa=  $this->session->userdata('session_id');


		$data = array(
			'namamodule' 	=> "siswa_jurnal",
			'namafileview' 	=> "V_siswa_jurnal",
			'tampil'		=> $this->m_siswa_jurnal->tampil($datasiswa),
			'tampil_data'		=> $this->m_siswa_jurnal->tampil_data($datasiswa),
		);
		echo Modules::run('template_siswa/tampilCore', $data);
		// $data = array(
		// 	'namamodule' 	=> "siswa_jurnal",
		// 	'namafileview' 	=> "V_siswa_jurnal",
		// 	'tampil'		=> $this->m_siswa_jurnal->tampil(),
		// );
		// echo Modules::run('template/tampilCore', $data);
		
	}


	function tambah()
	{
		$this->m_siswa_jurnal->tambah();
		echo "<script>alert ('data telah ditambahkan') </script>";
		redirect('siswa_jurnal');
	}

	function edit()
	{
		$this->M_siswa_jurnal->edit();
		redirect('siswa_jurnal');
	}

	function hapus($id)
	{
		$this->m_siswa_jurnal->hapus($id);
		redirect('siswa_jurnal');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Data_jurnal",
			'namafileview' 	=> "V_data_jurnal",
			'tampil'		=> $this->m_data_jurnal->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 