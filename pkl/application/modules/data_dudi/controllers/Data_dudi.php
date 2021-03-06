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
			'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah1()
	{
		// $this->m_data_dudi->tambah();
		// redirect('data_dudi');
		 $data = array(
			'namamodule' 	=> "data_dudi",
			'namafileview' 	=> "V_tambah_dudi",
			'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
			
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
		$this->m_data_dudi->edit();
		redirect('data_dudi');
	}
	function edit1($id)
	{
		// $this->m_data_dudi->tambah();
		// redirect('data_dudi');
		 $data = array(
			'namamodule' 	=> "data_dudi",
			'namafileview' 	=> "V_edit_dudi",
			'tampil'		=> $this->m_data_dudi->edit1($id),
			'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
			
		);
		echo Modules::run('template/tampilCore', $data);

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
			'namamodule' 	=> "data_dudi",
			'namafileview' 	=> "V_detail",
			'tampil_detail'		=> $this->m_data_dudi->tampil_detail($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
	function edit_sampul()
	{
		$this->m_data_dudi->edit_sampul();
		redirect('data_dudi');
	}

	function filter()
	{

		$jurusan 					= $this->input->post('jurusan');
		// echo $jurusan;

		$data = array(
			'namamodule' 	=> "data_dudi",
			'namafileview' 	=> "V_data_dudi",
			'tampil'		=> $this->m_data_dudi->filter($jurusan),
			'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
 