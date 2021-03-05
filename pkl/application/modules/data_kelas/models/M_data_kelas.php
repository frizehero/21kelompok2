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
		$this->db->where('id_kelas', $id_kelas)->delete('kelas');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_kelas',$cari)->get('kelas')->result();
	}
}