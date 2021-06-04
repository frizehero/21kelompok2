<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_cetak extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengumuman')->result();
	}
	function ewo()
	{
		$e=1;
		$this->db->select('*')
		->from('surat')
		->where('id_surat',$e);
		$query = $this->db->get();
		return $query->row_array();
	}

	function tambah()
	{
		$judul_pengumuman 		= $this->input->post('judul_pengumuman');
		$tanggal	= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

		

				$data = array(
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman' 				=> $isi_pengumuman,
					'tertuju'						=>$tertuju,
					
					
				);
				$this->db->insert('pengumuman', $data);
			
	
		
	}
	

	function edit()
	{
		$id_pengumuman = $this->input->post('id_pengumuman');
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$tanggal		= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

				$data = array(
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
		
	}

	function hapus($id)
	{
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');
	}

	function cari($awl,$akr,$datasiswa)
	{
      // return $this->db->query("SELECT * FROM jurnal WHERE tanggal between '$awl' AND '$akr' ORDER BY tanggal ASC");

      return $this->db->from('jurnal')
        ->order_by("tanggal", "asc")
        // ->where('tanggal >=', $awl)
        // ->where('tanggal <=', $akr)
        ->where("tanggal BETWEEN '$awl' AND '$akr'")
        ->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$datasiswa)
		->get()
		->result();	
	}
}