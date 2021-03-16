<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mlq extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_mlq');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_mlq",
			'namafileview' 	=> "V_data_ml",
			'tampil'		=> $this->m_data_mlq->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_ml->tambah();
		redirect('data_mlq');
	}

	function edit()
	{
		$this->m_data_ml->edit();
		redirect('data_mlq');
	}

	function hapus($id)
	{
		$this->m_data_ml->hapus($id);
		redirect('data_mlq');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_mlq",
			'namafileview' 	=> "V_data_ml",
			'tampil'		=> $this->m_data_ml->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 