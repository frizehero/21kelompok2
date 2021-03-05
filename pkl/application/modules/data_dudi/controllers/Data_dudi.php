<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dudi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_dudi');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Data_dudi",
			'namafileview' 	=> "V_data_dudi",
			'tampil'		=> $this->m_data_dudi->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_dudi->tambah();
		redirect('data_dudi');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('data_sekolah');
	}

	function hapus($id)
	{
		$this->m_data_dudi->hapus($id);
		redirect('data_dudi');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_dudi",
			'namafileview' 	=> "V_data_dudi",
			'tampil'		=> $this->m_data_dudi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail_dudi($id)
	{
		 $data = array(
			'namamodule' 	=> "Data_jurnal",
			'namafileview' 	=> "V_detail",
			'tampil_detail'		=> $this->m_data_dudi->tampil_detail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 