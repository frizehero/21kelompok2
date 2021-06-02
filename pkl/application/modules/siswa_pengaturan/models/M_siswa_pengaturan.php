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