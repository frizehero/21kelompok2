<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pesan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_pesan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_pesan",
			'namafileview' 	=> "V_data_pesan",
			'tampil'		=> $this->m_data_pesan->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('data_sekolah');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('data_sekolah');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('data_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 