<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_dudi extends CI_Model {

	function tampil()
	{
		return $this->db->from('dudi')
		->join('jurusan', 'jurusan.id_jurusan = dudi.id_jurusan')
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
		->from('dudi')
		->where('id_dudi',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_data($id)
	{
		return $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('kelas.id_kelas',$id)
		->get()
		->result();
	}

	function tambah()
	{
		$nama 				= $this->input->post('nama_dudi');
		$telepon			= $this->input->post('telepon_dudi');
		$email 				= $this->input->post('email_dudi');
		$jurusan 			= $this->input->post('jurusan_dudi');
		$nama_pembimbing 	= $this->input->post('nama_pembimbing');
		$lat = $this->input->post('lat');
		$lon = $this->input->post('lon');
		$alamat = $this->input->post('alamat');
		$tentang=  $this->input->post('tentang');





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
					'nama_dudi'			=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 		=> $jurusan,
					'id_jurusan' 		=> $jurusan,
					'email_dudi' 			=> $email,
					'nama_pembimbing' 	=> $nama_pembimbing,
					'lon'				=> $lon,
					'lat'				=> $lat,
					'alamat_dudi'			=> $alamat,
					'tentang'			=> $tentang,


					'logo_dudi' 				=> $gbr['file_name'],
					'foto_dudi'			=> 'kosong1.png',
					
					
				);
				$this->db->insert('dudi', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_dudi'			=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 		=> $jurusan,
					'alamat' 			=> $alamat,
					'id_jurusan' 		=> $jurusan,
					'email_dudi' 			=> $email,
					'nama_pembimbing' 	=> $nama_pembimbing,
					'lon'				=> $lon,
					'lat'				=> $lat,
					'alamat_dudi'			=> $alamat,
					'tentang'			=> $tentang,
					'foto_dudi'			=> 'kosong1.png',





				);
				$this->db->insert('dudi', $data);
			}
	}

	function edit()
	{
		$id_dudi	= $this->input->post('id_dudi');
		$nama 				= $this->input->post('nama_dudi');
		$telepon			= $this->input->post('telepon_dudi');
		$email 				= $this->input->post('email_dudi');
		$jurusan 			= $this->input->post('jurusan_dudi');
		$nama_pembimbing 	= $this->input->post('nama_pembimbing');
		$lat = $this->input->post('lat');
		$lon = $this->input->post('lon');
		$alamat = $this->input->post('alamat_dudi');
		$tentang=  $this->input->post('tentang');





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
					'id_dudi'		=> $id_dudi,
					'nama_dudi'			=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 		=> $jurusan,
					'id_jurusan' 		=> $jurusan,
					'email_dudi' 			=> $email,
					'nama_pembimbing' 	=> $nama_pembimbing,
					'logo_dudi' 				=> $gbr['file_name'],
					'lon'				=> $lon,
					'lat'				=> $lat,
					'alamat_dudi'			=> $alamat,
					'tentang'			=> $tentang,
					
					
				);
				$this->db->where('id_dudi',$id_dudi)->update('dudi', $data);
			
			}	 
		}
		else{
				$data = array(
					'id_dudi'		=> $id_dudi,
					'nama_dudi'			=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 		=> $jurusan,
					'alamat_dudi' 			=> $alamat,
					'id_jurusan' 		=> $jurusan,
					'email_dudi' 			=> $email,
					'nama_pembimbing' 	=> $nama_pembimbing,
					'lon'				=> $lon,
					'lat'				=> $lat,
					'tentang'			=> $tentang,



				);
				$this->db->where('id_dudi',$id_dudi)->update('dudi', $data);
			}
	}
	function edit1($id)
	{
      $this->db->select('*')
		->from('dudi')
		->where('id_dudi',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	function edit_sampul()
	{
		$id_dudi 		= $this->input->post('id_dudi');


		echo $id_dudi;
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto_dudi']['name'])
		{
			if ($this->upload->do_upload('foto_dudi'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'foto_dudi' 			=> $gbr['file_name'],


				);
				$this->db->where('id_dudi',$id_dudi)->update('dudi', $data);

			}
		}
	}

	function hapus($id)
	{
		$this->db->where('id_dudi', $id)->delete('dudi');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_dudi',$cari)
		->select('*')
		->join('jurusan', 'jurusan.id_jurusan = dudi.id_jurusan')
		->get('siswa')->result();


	}
	function cari_jurusan()
	{
		$cari_jurusan	= $this->input->post('cari_jurusan');
		return $this->db->like('jurusan',$cari)
		->select('*')
		->join('nama_dudi', 'nama_dudi.id_dudi = jurusan.id_jurusan')
		->get('dudi')->result();


	}

	function filter ($jurusan)
	{

		 $this->db->select('*')
		->from ('dudi')
		->join('jurusan', 'jurusan.id_jurusan = dudi.id_jurusan')
		->like('nama',$jurusan);
	
		$query = $this->db->get();
		return $query->result();
	}
}