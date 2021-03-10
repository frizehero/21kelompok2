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
			'filter_jurusan'		=> $this->m_data_kelas->filter_jurusan(),
			

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
	function detail_kelas($id)
	{
		 $data = array(
			'namamodule' 	=> "Data_kelas",
			'namafileview' 	=> "V_detail_kelas",
			'tampil_detail'		=> $this->m_data_kelas->tampil_detail($id),
			'tampil_data'		=> $this->m_data_kelas->tampil_data($id),
		

		);
		echo Modules::run('template/tampilCore', $data);
	}
	function tambah_siswa()
	{
		$this->m_data_kelas->tambah_siswa();
		redirect('data_kelas');
	}

	function filter()
	{

		$jurusan 					= $this->input->post('jurusan');
		// echo $jurusan;

		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_data_kelas",
			'tampil'		=> $this->m_data_kelas->filter($jurusan),
			'filter_jurusan'	=> $this->m_data_kelas->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

}
