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
	function edit()
	{
		$id_jurnal = $this->input->post('id_jurnal');
		$kegiatan = $this->input->post('kegiatan');
		$tanggal = $this->input->post('tanggal');

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
					'tanggal'		=> $tanggal,
					'kegiatan'		=> $kegiatan,
					'foto_kegiatan' 				=> $gbr['file_name'],

					
					
				);
				$this->db->where('id_jurnal',$id_jurnal)->update('jurnal', $data);
			
			}	 
		}
		else{
				$data = array(
					'tanggal'		=> $tanggal,
					'kegiatan'		=> $kegiatan,
				);
				$this->db->where('id_jurnal',$id_jurnal)->update('jurnal', $data);
			}
		
	}
	function hitung($datasiswa)
	{
		
		$this->db->select('*')
			->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
			->where('siswa.id_siswa',$datasiswa);
			$query = $this->db->get('jurnal');
			return $query->num_rows();
	}
	function tampil_data($datasiswa,$start,$limit)
	{
		
		$this->db->select('*')
				->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
			->where('siswa.id_siswa',$datasiswa);
		$query = $this->db->get('jurnal',$limit, $start);
		return $query->result();
	}
	function tampil_dudi($a)
	{
		$w=25;
		 $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('siswa.id_dudi',$a);
		$query = $this->db->get();
		return $query->result();
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

	

	function hapus($id)
	{
		$this->db->where('id_jurnal', $id)->delete('jurnal');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_jurnal',$cari)->get('jurnal')->result();
	}
}