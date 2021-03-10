<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_profil');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_profil",
			'namafileview' 	=> "V_data_profil",
			'tampil'		=> $this->m_data_profil->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_profil->tambah();
		redirect('data_profil');
	}

	function edit()
	{
		$this->m_data_profil->edit();
		redirect('data_profil');
	}

	function hapus($id)
	{
		$this->m_data_profil->hapus($id);
		redirect('data_profil');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_profil",
			'namafileview' 	=> "V_data_profil",
			'tampil'		=> $this->m_data_profil->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
