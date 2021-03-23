<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_siswa_dashboard');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Siswa_dashboard",
			'namafileview' 	=> "V_siswa_dashboard",
			'tampil'		=> $this->M_siswa_dashboard->tampil(),
		);
		echo Modules::run('template_siswa/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_siswa_dashboard->tambah();
		redirect('Siswa_dashboard');
	}

	function edit()
	{
		$this->M_siswa_dashboard->edit();
		redirect('Siswa_dashboard');
	}

	function hapus($id)
	{
		$this->M_siswa_dashboard->hapus($id);
		redirect('Siswa_dashboard');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Siswa_dashboard",
			'namafileview' 	=> "V_siswa_dashboard",
			'tampil'		=> $this->M_siswa_dashboard->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 