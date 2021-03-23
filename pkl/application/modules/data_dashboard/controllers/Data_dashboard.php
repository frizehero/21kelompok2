<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_dashboard');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_dashboard",
			'namafileview' 	=> "V_data_dashboard",
			'tampil'		=> $this->M_data_dashboard->tampil(),
			'tampil_dudi'		=> $this->M_data_dashboard->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_dashboard->tambah();
		redirect('data_dashboard');
	}

	function edit()
	{
		$this->M_data_dashboard->edit();
		redirect('data_dashboard');
	}

	function hapus($id)
	{
		$this->M_data_dashboard->hapus($id);
		redirect('data_dashboard');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_dashboard",
			'namafileview' 	=> "V_data_dashboard",
			'tampil'		=> $this->M_data_dashboard->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 