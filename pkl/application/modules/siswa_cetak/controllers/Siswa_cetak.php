<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_cetak extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_cetak');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Siswa_cetak",
			'namafileview' 	=> "V_data_cetak",
			'tampil'		=> $this->m_data_cetak->tampil(),
			

		);
		echo Modules::run('template_siswa/tampilCore', $data);
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
		$awl = $this->input->post('awl');
		$akr = $this->input->post('akr');
		$datasiswa=  $this->session->userdata('session_id');
		$data = array(
			'namamodule' 	=> "Siswa_cetak",
			'namafileview' 	=> "V_data",
			'tt'		=> $this->m_data_cetak->cari($awl,$akr,$datasiswa),
		);
		echo Modules::run('template_siswa/tampilCore', $data);
	}
	
}
 