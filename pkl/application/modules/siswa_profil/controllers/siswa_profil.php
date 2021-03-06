<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('m_siswa_profil');
		
		$this->load->model('login/m_session');

	}


	
	// index
	function index()
	{
		$this->load->library('pagination');
        $datasiswa=  $this->session->userdata('session_id');
        $config['base_url'] 		= site_url('siswa_profil/index'); //site url
        $config['total_rows'] 		= $this->m_siswa_profil->hitung($datasiswa); //total row
         $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
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
			'namamodule' 	=> "siswa_profil",
			'namafileview' 	=> "V_siswa_profil",
			'tampil'		=> $this->m_siswa_profil->tampil($datasiswa),
			'tampil_data'	=> $this->m_siswa_profil->tampil_data($config["per_page"], $data['page'],$datasiswa),
			'hitung' 		=> $this->m_siswa_profil->hitung($datasiswa),
            'tampid'       => $this->m_siswa_profil->tampild($datasiswa),

			'pagination' 	=> $this->pagination->create_links(),

		);
        echo Modules::run('template_siswa/tampilCore', $data);
		// $data = array(
		// 	'namamodule' 	=> "siswa_profil",
		// 	'namafileview' 	=> "V_siswa_profil",
		// 	'tampil'		=> $this->m_siswa_profil->tampil(),
		// );
		// echo Modules::run('template/tampilCore', $data);

    }


    function tambah()
    {
    	$this->m_siswa_profil->tambah();
    	echo "<script>alert ('data telah ditambahkan') </script>";
    	redirect('siswa_profil');
    }

    function edit()
    {
    	$this->m_siswa_profil->edit();
    	redirect('siswa_profil');
    }

    function hapus($id)
    {
    	$this->m_siswa_profil->hapus($id);
    	redirect('siswa_profil');
    }

    function cari()
    {
    	$data = array(
    		'namamodule' 	=> "Data_profil",
    		'namafileview' 	=> "V_data_profil",
    		'tampil'		=> $this->m_data_profil->cari(),
    	);
    	echo Modules::run('template/tampilCore', $data);
    }

}
