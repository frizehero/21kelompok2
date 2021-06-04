<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pengaturan extends CI_Model {

	function tampil()
	{
		return $this->db->get('tb_login')->result();
	}
	function kop()
	{
		return $this->db->get('surat')->result();
	}
	function edit_kop()
	{
		$id= $this->input->post('id');

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
					'foto_surat' 			=> $gbr['file_name'],


				);
				$this->db->where('id_surat',$id)->update('surat', $data);

			}
		}

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
		$username =$this->input->post('username');
		$password = $this->input->post('password');
		$password1 	=sha1($password);
		$id = $this->input->post('id_admin');
				

				$data = array(
					
					'password'		=> $password1,
					'username'		=> $username,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
		
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