<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengumuman')->result();
	}

	function tambah()
	{
		$id_pengumuman 		= $this->input->post('id_pengumuman');
		$id_user	= $this->input->post('id_user');
		$tanggal	=> $this->input->post('tanggal');
		$isi_pengumuman		=> $this->input->post('isi_pengumuman');


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
					'id_pengumuman'		=> $id_pengumuman,
					'id_user'			=> $id_user,
					'keterangan'		=> $keterangan,
					'tanggal'			=> $tanggal,
					'isi_pengumuman'	=> $isi_pengumuman,
					
					
				);
				$this->db->insert('pengumuman', $data);
			
			}	 
		}
		else{
				$data = array(
					'id_pengumuman'		=> $id_pengumuman,
					'id_user'		=> $id_user,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'	=> $isi_pengumuman,				
				);
				$this->db->insert('pengumuman', $data);
			}
	}

	function edit()
	{
		$id_pengumuman = $this->input->post('id_pengumuman');
		$id_user	= $this->input->post('id_user');
		$tanggal	= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');



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
					'id_pengumuman'		=> $id_pengumuman,
					'id_user'		=> $id_user,
					'tanggal'			=>$tanggal,
					'isi_pengumuman'	=>$isi_pengumuman
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
			
			}	 
		}
		else{
				$data = array(
					'id_pengumuman'		=> $id_pengumuman,
					'id_user'		=> $id_user,
					'tanggal'			=>$tanggal,
					'isi_pengumuman'	=>$isi_pengumuman
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('id_pengumuman',$cari)->get('pengumuman')->result();
	}
}