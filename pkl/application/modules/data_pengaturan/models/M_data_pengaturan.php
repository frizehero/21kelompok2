<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pengaturan extends CI_Model {

	function tampil()
	{
		$ee=1;
		$this->db->select('*')
				 ->from('tb_login')
				 ->where('id_siswa',$ee);
		$query = $this->db->get();
		return $query->row_array();
	}
	function kop()
	{
		return $this->db->get('surat')->result();
	}
	function jur()
	{
		$this->db->select('*');
		$query = $this->db->get('jurusan');
		return $query->result();
	}
	function hit($id)
	{
		$this->db->select('*')
				 ->where('id_jurusan',$id);
		$query = $this->db->get('kelas');
		return $query->num_rows();

	}
	function oo($data_siswa)
	{
		$this->db->select('*')
		->from('siswa')
	
		->where('id_siswa',$data_siswa);
		$query = $this->db->get();
		return $query->row_array();
	}
	function edit_kop()
	{
		$id= $this->input->post('id');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 645;
		$config['max_height']		= 135;
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
	function tj()
	{
		$jur 		= $this->input->post('jur');
		$kep	= $this->input->post('kepala');
		

				$data = array(
					'nama'		=> $jur,
					'kepala'		=> $kep,
					
					
				);
				$this->db->insert('jurusan', $data);
			
	
		
	}

	function edit()
	{
		$level = 1;
		$password = $this->input->post('password');
		$password1 	=sha1($password);
		$id = $this->input->post('id_admin');
				

				$data = array(
					
					'password'		=> $password1,
				);
				$this->db->where('id_admin',$id)->update('tb_login', $data);
		
	}
	

	function hapus($id)
	{
		$this->db->where('id_pengaturan', $id)->delete('pengaturan');
	}
	function hapusj($id)
	{
		$this->db->where('id_jurusan', $id)->delete('jurusan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengaturan',$cari)->get('pengaturan')->result();
	}
}