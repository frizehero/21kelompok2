<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengaturan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_pengaturan');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Data_pengaturan",
			'namafileview' 	=> "V_data_pengaturan",
			'tampil'		=> $this->m_data_pengaturan->tampil(),
			'kop'		=> $this->m_data_pengaturan->kop(),
			'jur'		=> $this->m_data_pengaturan->jur(),

			);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_pengaturan->tambah();
		redirect('Data_pengaturan');
	}
	function tj()
	{
		$this->m_data_pengaturan->tj();
		redirect('Data_pengaturan');
	}

	function edit()
	{
		$this->m_data_pengaturan->edit();
		redirect('Data_pengaturan');
		
	}
	function edit_kop()
	{
		$this->m_data_pengaturan->edit_kop();
		redirect('Data_pengaturan');
		// $foto= $this->input->post('foto');
		// $idd= $this->input->post('id');
		// echo $idd;
		// echo $foto;
		
	}

	function hapus($id)
	{
		$this->m_data_pengaturan->hapus($id);
		redirect('Data_pengaturan');
	}
	function hapusj($id)
	{
		$this->m_data_pengaturan->hapusj($id);
		redirect('Data_pengaturan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Data_pengaturan",
			'namafileview' 	=> "V_data_pengaturan",
			'tampil'		=> $this->m_data_pengaturan->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 