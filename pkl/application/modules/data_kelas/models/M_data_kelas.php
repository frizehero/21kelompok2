<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_kelas extends CI_Model {

	function tampil()
	{
		$this->db->select('*')
		->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan')
		 ->order_by(`nama_kelas`, "desc");
	
		$query = $this->db->get('kelas');
		return $query->result();
	}
	function filter_jurusan()
	{
		return $this->db->get('jurusan')->result();
	}
	function tampil_dudi()
	{
		return $this->db->get('dudi')->result();
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

		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		

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
					'logo_kelas' 			=> $gbr['file_name'],
					'id_jurusan' =>$jurusan,


				);
				$this->db->insert('kelas', $data);

			}	 
		}
		else{
			$data = array(
				'nama_kelas'			=> $nama_kelas,
				'logo_kelas' 				=> 'kosong1.png',
				'id_jurusan' =>$jurusan,
			);
			$this->db->insert('kelas', $data);
		}
	}
	function edit_sampul()
	{
		$id_kelas 		= $this->input->post('id_kelas');


		echo $id_kelas;
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
	}

	function tambah_siswa()
	{
		$nama_siswa 		= $this->input->post('nama_siswa');
		$nisn 				= $this->input->post('nisn');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$dudi 				= $this->input->post('dudi');
		$masuk_p            = $this->input->post('masuk_p');
		$keluar_p           = $this->input->post('keluar_p');
		$kelas              = $this->input->post('kelas');
		$email              = $this->input->post('email');
		$telepon            = $this->input->post('telepon');
		$alamat				= $this->input->post('alamat');
		$gelombang			= $this->input->post('gelombang');

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
					'id_dudi'				=> $dudi,
					'masuk_p'               => $masuk_p,
					'keluar_p'              => $keluar_p,
					'id_kelas'              => $kelas,
					'no_telepon'			=> $telepon,
					'email'					=> $email,
					'alamat'				=> $alamat,
					'gelombang'				=> $gelombang,
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
				'id_dudi'					=> $dudi,
				'masuk_p'               => $masuk_p,
			    'keluar_p'              => $keluar_p,
			    'id_kelas'              => $kelas,
			    'no_telepon'			=> $telepon,
				'email'					=> $email,
				'alamat'				=> $alamat,
				'gelombang'				=> $gelombang,
				'logo' 				=> 'kosong1.png',
			);
			$this->db->insert('siswa', $data);
		}
		$insert_id = $this->db->insert_id();
 		$id_user					= $this->input->post('id_admin');
 		$username					= $this->input->post('username');
 		$password 					= $this->input->post('password');
 		$password1 					= sha1($password);
 		$level 						= $this->input->post('level');

 		$data = array(
 			'id_admin'				=> $id_user,
 			'id_siswa'				=> $insert_id,
 			'username'				=> $username,
 			'password'				=> $password1,
 			'level'					=> $level,

 		);

 		$this->db->insert('tb_login', $data);
 		$insert_id = $this->db->insert_id();
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
					'logo_kelas' 			=> $gbr['file_name'],
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
	function hapus_siswa($id)
	{
		$this->db->where('id_siswa', $id)->delete('siswa');
	}


	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_kelas',$cari)->get('kelas')->result();
	}

	function cari_siswa($cari_siswa,$id)
	{
		$this->db->select('*')
		->where('id_kelas',$id)
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->like('nama_siswa',$cari_siswa);
		$query = $this->db->get('siswa');
		return $query->result();
	}

	function filter ($jurusan)
	{

		 $this->db->select('*')
		->from ('kelas')
		->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan')
		->like('nama',$jurusan);
	
		$query = $this->db->get();
		return $query->result();
	}
	
	function edit_siswa()
	{	
		$id_siswa			= $this->input->post('id_siswa');
		$nama_siswa 		= $this->input->post('nama_siswa');
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
				$this->db->where('id_siswa',$id_siswa)->update('siswa', $data);

			}	 
		}
		else{
			$data = array(
				'nama_siswa'			=> $nama_siswa,
					'nisn'					=> $nisn,
					'jenis_kelamin'			=> $jenis_kelamin,
					'dudi'					=> $dudi,
					'id_kelas'              => $kelas,
			);
			$this->db->where('id_siswa',$id_siswa)->update('siswa', $data);
		}
	}
	
}