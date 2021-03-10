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
			'namamodule' 	=> "Data_pesan",
			'namafileview' 	=> "V_data_pesan",
			'tampil'		=> $this->m_data_pesan->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_pesan->tambah();
		redirect('Data_pesan');
	}

	function edit()
	{
		$this->m_data_pesan->edit();
		redirect('Data_pesan');
	}

	function hapus($id)
	{
		$this->m_data_pesan->hapus($id);
		redirect('Data_pesan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Data_pesan",
			'namafileview' 	=> "V_data_pesan",
			'tampil'		=> $this->m_data_pesan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail_pesan($id)
	{

		 $data = array(
			'namamodule' 	=> "Data_pesan",
			'namafileview' 	=> "V_detail_pesan",
			'tampil_detail'		=> $this->m_data_pesan->tampil_detail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 