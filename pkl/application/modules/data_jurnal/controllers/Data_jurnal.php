<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jurnal extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('m_data_jurnal');
		$this->load->model('login/m_session');
		$this->load->library('pagination');
	}

	
	// index
	function index()
	{
		$config['base_url'] = site_url('data_jurnal/index'); //site url
        $config['total_rows'] = $this->db->count_all('siswa'); //total row
        $config['per_page'] = 8;  //show record per halaman
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
        	'namamodule' 	=> "Data_jurnal",
        	'namafileview' 	=> "V_data_jurnal",

        	'filter_dudi'		=> $this->m_data_jurnal->filter_dudi(),
        	'row'			=> $this->m_data_jurnal->tampil($config["per_page"], $data['page']),
        	'pagination' 	=> $this->pagination->create_links(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
    function tgl()
    {
        $awl = $this->input->post('awl');
        $akr = $this->input->post('akr');
        $idid=  $this->input->post('idid');
        $data = array(
            'namamodule'    => "Data_jurnal",
            'namafileview'  => "V_cari",
            'tt'        => $this->m_data_jurnal->cari_tgl($awl,$akr,$idid),
            'tampil_detail'     => $this->m_data_jurnal->tampil_detail($idid),
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
    	$this->m_data_sekolah->edit();
    	redirect('data_sekolah');
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
    function detail_jurnal($id)
    {
    	$data = array(
    		'namamodule' 	=> "Data_jurnal",
    		'namafileview' 	=> "V_detail",
    		'tampil_detail'		=> $this->m_data_jurnal->tampil_detail($id),
    		'tampil_data'		=> $this->m_data_jurnal->tampil_data($id),

    	);
    	echo Modules::run('template/tampilCore', $data);
    }
    function tambah_siswa()
    {
    	$this->m_data_dudi->tambah_siswa();
    	redirect('data_dudi');
    }
	// function filter()
	// {

	// 	$dudi 					= $this->input->post('dudi');
	// 	echo "ss".$dudi;

	// 	$dudi = ($this->uri->segment(4)) ? $this->uri->segment(4) : $dudi;
 //        	// pagination settings
	// 		$config = array();
	// 		$config['base_url'] = site_url("data_jurnal/filter/$dudi");
	// 		$config['total_rows'] = $this->m_data_jurnal->get_filter_count($dudi);
	// 		$vavu= $this->m_data_jurnal->get_filter_count($dudi);
	// 		echo $vavu;


	// 	$config['per_page'] = "2";
	// 	$config["uri_segment"] = 4;
	// 	$choice = $config["total_rows"]/$config["per_page"];
	// 	$config["num_links"] = floor($choice);


	// 	$config['first_link']       = 'First';
	// 	$config['last_link']        = 'Last';
	// 	$config['next_link']        = 'Next';
	// 	$config['prev_link']        = 'Prev';
	// 	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	// 	$config['full_tag_close']   = '</ul></nav></div>';
	// 	$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	// 	$config['num_tag_close']    = '</span></li>';
	// 	$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	// 	$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	// 	$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	// 	$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	// 	$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	// 	$config['prev_tagl_close']  = '</span>Next</li>';
	// 	$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	// 	$config['first_tagl_close'] = '</span></li>';
	// 	$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	// 	$config['last_tagl_close']  = '</span></li>';

	// 	$this->pagination->initialize($config);

	// 	$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

	// 	$data = array(
	// 		'namamodule' 	=> "data_jurnal",
	// 		'namafileview' 	=> "V_data_jurnal",
	// 		'filter_dudi'	=> $this->m_data_jurnal->filter_dudi(),
	// 		'row'			=> $this->m_data_jurnal->filter($config["per_page"], $data['page'],$dudi),
	// 		'pagination' 	=> $this->pagination->create_links(),
	// 	);
	// 	echo Modules::run('template/tampilCore', $data);
	// }

    function filter()
    {
		$dudi = ($this->input->post("dudi"))? $this->input->post("dudi") : "NIL";

        $dudi = ($this->uri->segment(4)) ? $this->uri->segment(4) : $dudi;
    	// $dudi 						= $this->input->post('dudi');
   	     $dudis =$this->input->post("dudi"); 
    	// $dudi = ($this->uri->segment(4)) ? $this->uri->segment(4) : $dudi;
        	// pagination settings
    	$config = array();
    	$config['base_url'] = site_url("data_jurnal/filter/$dudi/");
    	$config['total_rows'] = $this->m_data_jurnal->get_filter_count($dudi);
    	$d=$this->m_data_jurnal->get_filter_count($dudi);
    	echo $d;


    	$config['per_page'] = "2";
    	$config["uri_segment"] = 4;
    	$choice = $config["total_rows"]/$config["per_page"];
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

    	$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

    	$data = array(
    		'namamodule' 	=> "data_jurnal",
    		'namafileview' 	=> "V_data_jurnal",
    		'filter_dudi'	=> $this->m_data_jurnal->filter_dudi(),
    		'row'			=> $this->m_data_jurnal->filter($config["per_page"], $data['page'],$dudi),
    		'pagination' 	=> $this->pagination->create_links(),
    		'dudi_fil'		=> $dudis,
    	);
    	echo Modules::run('template/tampilCore', $data);
    }

}
