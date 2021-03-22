<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_jurnal extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_siswa_jurnal');
		 $this->load->library('session');

	}

	
	// index
	function index()
	{

		$datasiswa=  $this->session->userdata('session_id');

		echo "string". $datasiswa;

		$data = array(
			'namamodule' 	=> "siswa_jurnal",
			'namafileview' 	=> "V_siswa_jurnal",
			'tampil'		=> $this->m_siswa_jurnal->tampil($datasiswa),
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
		$this->m_data_pengumuman->tambah();
		redirect('Data_pengumuman');
	}

	function edit()
	{
		$this->m_data_pengumuman->edit();
		redirect('Data_pengumuman');
	}

	function hapus($id)
	{
		$this->m_data_pengumuman->hapus($id);
		redirect('Data_pengumuman');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Data_pengumuman",
			'namafileview' 	=> "V_data_pengumuman",
			'tampil'		=> $this->m_data_pengumuman->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 