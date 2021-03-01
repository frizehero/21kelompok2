<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_siswa extends CI_Model {

	function tampil()
	{
		return $this->db->get('siswa')->result();
	}

	function tambah()
	{
		$nama_siswa 		= $this->input->post('nama_siswa');
		$nisn 				= $this->input->post('nisn');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$dudi 				= $this->input->post('dudi');

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
					'nama_siswa'			=> $nama_siswa,
					'nisn'					=> $nisn,
					'jenis_kelamin'			=> $jenis_kelamin,
					'dudi'					=> $dudi,
					'logo' 					=> $gbr['file_name'],

				);
				$this->db->insert('siswa', $data);

			}	 
		}
		else{
			$data = array(
				'nama_siswa'			=> $nama_siswa,
				'nisn'					=> $nisn,
				'jenis_kelamin'			=> $jenis_kelamin,
				'dudi'					=> $dudi,
				'logo' 				=> 'kosong1.png',
			);
			$this->db->insert('siswa', $data);
		}
	}

	function edit()
	{
		$id_siswa 		= $this->input->post('id_siswa');
		$nama_siswa 		= $this->input->post('nama_siswa');
		$nisn 				= $this->input->post('nisn');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$dudi 				= $this->input->post('dudi');

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
					'nama_siswa'			=> $nama_siswa,
					'nisn'					=> $nisn,
					'jenis_kelamin'			=> $jenis_kelamin,
					'dudi'					=> $dudi,
					'logo' 			=> $gbr['file_name'],
				);
				$this->db->where('id_siswa',$id_siswa)->update('siswa', $data);

			}	 
		}
		else{
			$data = array(
				'nama_siswa'			=> $nama_siswa,
				'nisn'					=> $nisn,
				'jenis_kelamin'			=> $jenis_kelamin,
				'dudi'					=> $dudi,
			);
			$this->db->where('id_siswa',$id_siswa)->update('siswa', $data);
		}
	}

	function hapus($id)
	{
		$this->db->where('id_siswa', $id)->delete('siswa');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_siswa',$cari)->get('siswa')->result();
	}
}