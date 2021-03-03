<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_kelas');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_data_kelas",
			'tampil'		=> $this->m_data_kelas->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_kelas->tambah();
		redirect('data_kelas');
	}

	function edit()
	{
		$this->m_data_kelas->edit();
		redirect('data_kelas');
	}

	function hapus($id)
	{
		$this->m_data_kelas->hapus($id);
		redirect('data_kelas');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_data_kelas",
			'tampil'		=> $this->m_data_kelas->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}