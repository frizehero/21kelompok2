<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_form extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_form');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_form",
			'namafileview' 	=> "V_data_form",
			'tampil'		=> $this->m_data_form->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_form->tambah();
		redirect('data_form');
	}

	function edit()
	{
		$this->m_data_form->edit();
		redirect('data_form');
	}

	function hapus($id)
	{
		$this->m_data_form->hapus($id);
		redirect('data_form');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_form",
			'namafileview' 	=> "V_data_form",
			'tampil'		=> $this->m_data_form->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 