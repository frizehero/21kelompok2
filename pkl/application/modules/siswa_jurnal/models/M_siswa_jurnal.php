<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa_jurnal extends CI_Model {

	function tampil($datasiswa)
	{
		$this->db->select('*')
				 ->from('siswa')
				  ->order_by(`tanggal`, "desc")
				 ->where('id_siswa',$datasiswa);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_data($datasiswa)
	{
		return $this->db->from('jurnal')
		->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$datasiswa)
		->get()
		->result();
	}

	function tambah()
	{
		$id 		= $this->input->post('id_bang');
		$tanggal 	= $this->input->post('tanggal');
		$jurnal	= $this->input->post('jurnal');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_kegiatan']['name'])
        {
            if ($this->upload->do_upload('foto_kegiatan'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'id_siswa'		=> $id,
					'tanggal'		=> $tanggal,
					'kegiatan'		=> $jurnal,
					'foto_kegiatan' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('jurnal', $data);
			
			}	 
		}
		else{
				$data = array(
					'id_siswa'		=> $id,
					'tanggal'		=> $tanggal,
					'kegiatan'		=> $jurnal,
					'foto_kegiatan' 				=> 'kosong1.png',
				);
				$this->db->insert('jurnal', $data);
			}
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
		$this->db->where('id_jurnal', $id)->delete('jurnal');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengumuman',$cari)->get('pengumuman')->result();
	}
}