<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_pengaturan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_siswa_pengaturan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data_siswa=  $this->session->userdata('session_id');


		$data = array(
			'namamodule' 	=> "siswa_pengaturan",
			'namafileview' 	=> "V_siswa_pengaturan",
			'tampil'		=> $this->m_siswa_pengaturan->tampil($data_siswa),
			'te'		=> $this->m_siswa_pengaturan->oo($data_siswa),
			'tampil_dudi'		=> $this->m_siswa_pengaturan->tampil_dudi(),
			'eo'		=> $this->m_siswa_pengaturan->eo($data_siswa),
		
		);
		echo Modules::run('template_siswa/tampilCore', $data);
	}
	function edit_siswa()
	{
		$this->m_siswa_pengaturan->edit_siswa();
		redirect('siswa_pengaturan');
	}

	function tambah()
	{
		$this->m_siswa_pengaturan->tambah();
		redirect('siswa_pengaturan');
	}

	function edit()
	{
		$data_siswa=  $this->session->userdata('session_id');
		$this->m_siswa_pengaturan->edit($data_siswa);
		redirect('siswa_pengaturan');
		
	}

	function hapus($id)
	{
		$this->m_siswa_pengaturan->hapus($id);
		redirect('siswa_pengaturan');
	}

	function cari()
	{
		$siswa = array(
			'namamodule' 	=> "siswa_pengaturan",
			'namafileview' 	=> "V_siswa_pengaturan",
			'tampil'		=> $this->m_siswa_pengaturan->cari(),
		);
		echo Modules::run('template/tampilCore', $siswa);
	}
	
}
 