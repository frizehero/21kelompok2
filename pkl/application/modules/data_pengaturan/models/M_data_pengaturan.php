<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pengaturan extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_login')->result();
	}

	function tambah()
	{
		$judul_pengaturan 		= $this->input->post('judul_pengaturan');
		$tanggal	= $this->input->post('tanggal_pengaturan');
		$isi_pengaturan	= $this->input->post('isi_pengaturan');
		$tertuju	= $this->input->post('tertuju');

		

				$data = array(
					'judul_pengaturan'		=> $judul_pengaturan,
					'tanggal'		=> $tanggal,
					'isi_pengaturan' 				=> $isi_pengaturan,
					'tertuju'						=>$tertuju,
					
					
				);
				$this->db->insert('tb_login', $data);
			
	
		
	}

	function edit()
	{
		$level = 1;
		$baru = sha1($this->input->post('baru'));
		

				$data = array(
					
					'password'		=> $baru,
				);
				$this->db->where('level',$level)->update('tb_login', $data);
		
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