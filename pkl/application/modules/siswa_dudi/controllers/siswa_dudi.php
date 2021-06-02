<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_dudi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_siswa_dudi');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$datasiswa=  $this->session->userdata('session_id');
		$data = array(
			'namamodule' 	=> "siswa_dudi",
			'namafileview' 	=> "V_siswa_dudi",
			'tampil'		=> $this->m_siswa_dudi->tampil($datasiswa),
		);
		echo Modules::run('template_siswa/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_siswa_dudi->tambah();
		redirect('siswa_dudi');
	}

	function edit()
	{
		$this->m_siswa_dudi->edit();
		redirect('siswa_dudi');
		
	}

	function hapus($id)
	{
		$this->m_siswa_dudi->hapus($id);
		redirect('siswa_dudi');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "siswa_dudi",
			'namafileview' 	=> "V_siswa_dudi",
			'tampil'		=> $this->m_siswa_dudi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 