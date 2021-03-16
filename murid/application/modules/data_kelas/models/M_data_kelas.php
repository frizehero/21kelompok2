<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_kelas extends CI_Model {

	function tampil()
	{
		return $this->db->from('kelas')
		->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan')
		->get()
		->result();
	}
	function filter_jurusan()
	{
			return $this->db->get('jurusan')->result();
	}
	function tampil_detail($id)
	{

		$this->db->select('*')
		->from('kelas')
		->where('id_kelas',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_data($id)
	{
		return $this->db->from('siswa')
		->join('kelas', 'kelas.id_kelas = siswa.id_kelas')
		->where('kelas.id_kelas',$id)
		->get()
		->result();
	}

	function tambah()
	{
		$nama_kelas 		= $this->input->post('nama_kelas');
		$jurusan 		= $this->input->post('jurusan');


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
					'nama_kelas'			=> $nama_kelas,
					'logo' 			=> $gbr['file_name'],
					'id_jurusan' =>$jurusan,


				);
				$this->db->insert('kelas', $data);

			}	 
		}
		else{
			$data = array(
				'nama_kelas'			=> $nama_kelas,
				'logo' 				=> 'kosong1.png',
				'id_jurusan' =>$jurusan,
			);
			$this->db->insert('kelas', $data);
		}
	}
	function edit_sampul()
	{
		$id_kelas 		= $this->input->post('id_kelas');
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
		{
			if ($this->upload->do_upload('foto'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'foto' 			=> $gbr['file_name'],


				);
				$this->db->where('id_kelas',$id_kelas)->update('kelas', $data);

			}
		}
		else{
			$gbr = $this->upload->data();
				$data = array(
					'foto' 			=> $gbr['file_name'],


				);
			$this->db->where('id_kelas',$id_kelas)->update('kelas', $data);
		}

	}

	function tambah_siswa()
	{
		$$nama_siswa 		= $this->input->post('nama_siswa');
		$nisn 				= $this->input->post('nisn');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$dudi 				= $this->input->post('dudi');
		$kelas              = $this->input->post('kelas');

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
					'id_kelas'              => $kelas,
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
				'id_kelas'              => $kelas,
				'logo' 				=> 'kosong1.png',
			);
			$this->db->insert('siswa', $data);
		}
	}

	function edit()
	{
		$id_kelas 		= $this->input->post('id_kelas');
		$nama_kelas 			= $this->input->post('nama_kelas');

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
					'nama_kelas'			=> $nama_kelas,
					'logo' 			=> $gbr['file_name'],
				);
				$this->db->where('id_kelas',$id_kelas)->update('kelas', $data);

			}	 
		}
		else{
			$data = array(
				'nama_kelas'			=> $nama_kelas,
			);
			$this->db->where('id_kelas',$id_kelas)->update('kelas', $data);
		}
	}

	function hapus($id)
	{
		$this->db->where('id_kelas', $id)->delete('kelas');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_kelas',$cari)->get('kelas')->result();
	}
	function filter ($jurusan)
	{

			$this->db->select('*')
			->join('jurusan','jurusan.id_jurusan = kelas.id_jurusan')
			->where('kelas.id_jurusan',$jurusan);
			$query = $this->db->get('kelas');
			return $query->result();
	}
	
	
}