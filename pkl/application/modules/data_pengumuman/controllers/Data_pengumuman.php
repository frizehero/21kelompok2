<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sekolah extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('pengumuman');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_pengumuman",
			'namafileview' 	=> "V_data_pengumuman",
			'tampil'		=> $this->pengumuman->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->pengumuman->tambah();
		redirect('data_pengumuman');
	}

	function edit()
	{
		$this->pengumuman->edit();
		redirect('data_pengumuman');
	}

	function hapus($id)
	{
		$this->pengumuman->hapus($id);
		redirect('data_pengumuman');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_pengumuman",
			'namafileview' 	=> "V_data_pengumuman",
			'tampil'		=> $this->pengumuman->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 