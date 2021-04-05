<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_jurnal extends CI_Model {

	function tampil($limit, $start)
	{
	    $this->db->select('*');

	
		$query = $this->db->get('siswa', $limit, $start);
		return $query->result();

	}
	function get_filter_count($st = NULL)
	{
		if ($st == "NIL") $st = "";
		$this->db->select('*')
			->join('dudi','dudi.id_dudi = siswa.id_dudi')
			// ->where('siswa.id_dudi',$st);
			->like('siswa.id_dudi',$st);
			$query = $this->db->get('siswa');
			return $query->num_rows();

	}
	function cari_tgl($awl,$akr,$idid)
	{
      // return $this->db->query("SELECT * FROM jurnal WHERE tanggal between '$awl' AND '$akr' ORDER BY tanggal ASC");

      return $this->db->from('jurnal')
        ->order_by("tanggal", "asc")
        // ->where('tanggal >=', $awl)
        // ->where('tanggal <=', $akr)
        ->where("tanggal BETWEEN '$awl' AND '$akr'")
        ->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$idid)
		->get()
		->result();	
	}


	function tampil_detail($id)
	{

		$this->db->select('*')
				 ->from('siswa')
				 ->where('id_siswa',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_data($id)
	{
		return $this->db->from('jurnal')
		->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$id)
		->get()
		->result();
	}
	function filter_dudi()
	{
			$this->db->select('*')
		->from('dudi');
		$query = $this->db->get();
		return $query->result();
	}
	

	function tambah()
	{
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('sekolah', $data);
			}
	}

	function edit()
	{
		$id_sekolah = $this->input->post('id_sekolah');
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
	function filter($limit, $start, $st = NULL)
	{ 
		     if ($st == "NIL") $st = "";
			$this->db->select('*')
			->join('dudi','dudi.id_dudi = siswa.id_dudi')
			->where('siswa.id_dudi',$st);
			$query = $this->db->get('siswa',$limit, $start);
			return $query->result();
	}
}