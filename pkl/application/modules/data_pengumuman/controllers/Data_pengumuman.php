<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengumuman extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_pengumuman');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Data_pengumuman",
			'namafileview' 	=> "V_data_pengumuman",
			'tampil'		=> $this->m_data_pengumuman->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
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
 