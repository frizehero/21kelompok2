<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_data_kelas');
		 $this->load->model('login/m_session');
		 $this->load->library('pagination');
	}

	
	// index
	function index()
	{
		
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_data_kelas",
			'filter_jurusan'		=> $this->m_data_kelas->filter_jurusan(),
			'tampil'		=> $this->m_data_kelas->tampil(),
			
			

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->m_data_kelas->tambah();
		redirect('data_kelas');
	}
	function edit_sampul()
	{
		$this->m_data_kelas->edit_sampul();
		redirect('data_kelas');
	}

	function edit()
	{		$this->m_data_kelas->edit();
		redirect('data_kelas');
	}
	function edit_siswa($id)
	{
		$this->m_data_kelas->edit_siswa();
		redirect('data_kelas/detail_kelas/'.$id);
	}
	function edit_siswaa()
	{
		$id=$_GET['id'];
			 	$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_edit",
			'filter_jurusan'		=> $this->m_data_kelas->filter_jurusan(),
			'tampil'		=> $this->m_data_kelas->tampil(),
			'te'		=> $this->m_data_kelas->tampil_edit($id),
			'e'		=> $this->m_data_kelas->user($id),
			'tampil_dudi'		=> $this->m_data_kelas->tampil_dudi(),
			
			

		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus($id)
	{
		$this->m_data_kelas->hapus($id);
		redirect('data_kelas');
	}
	function hapus_siswa($id)
	{
		$this->m_data_kelas->hapus_siswa($id);
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

	function cari_siswa($id)
	{
		$cari_siswa = $this->input->post('cari_siswa');
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_cari",
			'tampil'		=> $this->m_data_kelas->cari_siswa($cari_siswa,$id),
			'tampil_detail'		=> $this->m_data_kelas->tampil_detail($id),
			'tampil_data'		=> $this->m_data_kelas->tampil_data($id),
			'tampil_dudi'		=> $this->m_data_kelas->tampil_dudi(),
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
			'tampil_dudi'		=> $this->m_data_kelas->tampil_dudi(),


		

		);
		echo Modules::run('template/tampilCore', $data);
	}
	function tambah_siswa($id)
	{
		$this->m_data_kelas->tambah_siswa();
		redirect('data_kelas/detail_kelas/'.$id);
	}
	function tambah_siswaa()
	{
		$id=$_GET['id'];
		// $this->m_data_kelas->tambah_siswa();
		// redirect('data_kelas/detail_kelas/'.$id);
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_tambah",
			'tampil_detail'		=> $this->m_data_kelas->tampil_detail($id),
			'tampil_dudi'		=> $this->m_data_kelas->tampil_dudi(),


			// 'filter_jurusan'		=> $this->m_data_kelas->filter_jurusan(),
			// 'tampil'		=> $this->m_data_kelas->tampil(),
			
			

		);
		echo Modules::run('template/tampilCore', $data);
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
