<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_detaildudi extends CI_Model {

	function tampil()
	{
		return $this->db->from('detaildudi')
		
		->get() 
		->result();
	}

	function tambah()
	{
		$nama 		= $this->input->post('nama_dudi');
		$telepon	= $this->input->post('telepon_dudi');
		$alamat  	= $this->input->post('alamat');
		$email 		= $this->input->post('email_dudi');
		$jurusan 	= $this->input->post('jurusan_dudi');





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
					'nama_dudi'		=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 	=> $jurusan,
					'alamat' 	=> $alamat,
					'id_jurusan' 	=> $jurusan,
					'email' 	=> $email,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('dudi', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_dudi'		=> $nama,
					'no_telepon'		=> $telepon,
					'id_jurusan' 	=> $jurusan,
					'alamat' 	=> $alamat,
					'id_jurusan' 	=> $jurusan,
					'email' 	=> $email,




				);
				$this->db->insert('dudi', $data);
			}
	}

	function edit()
	{
		$id_sekolah = $this->input->post('id_sekolah');
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


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
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
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
		->get('dudi')->result();


	}
	function cari_jurusan()
	{
		$cari_jurusan	= $this->input->post('cari_jurusan');
		return $this->db->like('jurusan',$cari)
		->select('*')
		->join('nama_dudi', 'nama_dudi.id_dudi = jurusan.id_jurusan')
		->get('dudi')->result();


	}
}