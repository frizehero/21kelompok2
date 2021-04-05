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
		 //konfigurasi pagination
        $config['base_url'] = site_url('data_kelas/index'); //site url
        $config['total_rows'] = $this->db->count_all('kelas'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);


		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_data_kelas",
			'filter_jurusan'		=> $this->m_data_kelas->filter_jurusan(),
			'row'			=> $this->m_data_kelas->tampil($config["per_page"], $data['page']),
			'pagination' 	=> $this->pagination->create_links(),

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
	{
		$this->m_data_kelas->edit();
		redirect('data_kelas');
	}
	function edit_siswa($id)
	{
		$this->m_data_kelas->edit_siswa();
		redirect('data_kelas/detail_kelas/'.$id);
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

	function cari_siswa()
	{
		$data = array(
			'namamodule' 	=> "data_kelas",
			'namafileview' 	=> "V_detail_kelas",
			'tampil'		=> $this->m_data_kelas->cari_siswa(),
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
	function tambah_siswa($id)
	{
		$this->m_data_kelas->tambah_siswa();
		redirect('data_kelas/detail_kelas/'.$id);
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
