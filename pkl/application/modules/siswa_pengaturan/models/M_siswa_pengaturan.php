<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa_pengaturan extends CI_Model {

	function tampil($data_siswa)
	{
		 $this->db->select('*')
			->join('tb_login', 'tb_login.id_siswa = siswa.id_siswa')
			->where('tb_login.id_siswa',$data_siswa);
			$query = $this->db->get('siswa');
			return $query->row_array();
	}
	function oo($data_siswa)
	{
		$this->db->select('*')
		->from('siswa')
					
		->where('id_siswa',$data_siswa);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_dudi()
	{
		return $this->db->get('dudi')->result();
	}
	function eo($data_siswa)
	{
		$this->db->select('*')
			->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
			->where('dudi.id_dudi',$data_siswa);
			$query = $this->db->get('siswa');
			return $query->row_array();
	}
	function edit_siswa()
	{
		$id_siswa			= $this->input->post('id_siswa');




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
					'logo' 					=> $gbr['file_name'],


				);
				$this->db->where('id_siswa',$id_siswa)->update('siswa', $data);

			}	 
		}
	}
	function tambah()
	{
		$judul_pengaturan 		= $this->input->post('judul_pengaturan');
		$tanggal	= $this->input->post('tanggal_pengaturan');
		$isi_pengaturan	= $this->input->post('isi_pengaturan');
		$tertuju	= $this->input->post('tertuju');

		

				$siswa = array(
					'judul_pengaturan'		=> $judul_pengaturan,
					'tanggal'		=> $tanggal,
					'isi_pengaturan' 				=> $isi_pengaturan,
					'tertuju'						=>$tertuju,
					
					
				);
				$this->db->insert('tb_login', $siswa);
			
	
		
	}

	function edit()
	{
		
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password1 					= sha1($password);
		$data = array(
					'username'		=> $username,
					'password'		=> $password1,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
		
	}
	

	function hapus($id)
	{
		$this->db->where('id_pengaturan', $id)->delete('pengaturan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengaturan',$cari)->get('pengaturan')->result();
	}
}