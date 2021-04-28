<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa_dashboard extends CI_Model {

	function tampil($data_siswa)
	{
		$this->db->select('*')
				 ->from('siswa')
				 ->join('dudi', 'dudi.id_dudi = siswa.id_dudi')

				  				 ->where('id_siswa',$data_siswa);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampilp()
	{
		return $this->db->get('pengumuman')->result();
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

        {
            if ($this->upload->do_upload(''))
            {
				$data = array(
					'id_pengumuman'		=> $id_pengumuman,
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
			
			}
			else{
			$data = array(
				'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
			);
			$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
		}	 
		}
		
	}

	function hapus($id)
	{
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengumuman',$cari)->get('pengumuman')->result();
	}
}