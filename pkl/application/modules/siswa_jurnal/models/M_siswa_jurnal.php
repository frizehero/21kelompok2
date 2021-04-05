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
		$foto_kegiatan		= $this->input->post('foto_kegiatan');

        {
            if ($this->upload->do_upload(''))
            {
				$data = array(
					'id_jurnal'		=> $id_jurnal,
					'kegiatan'		=> $kegiatan,
					'foto_kegiatan'		=> $foto_kegiatan,
				);
				$this->db->where('id_jurnal',$id_jurnal)->update('jurnal', $data);
			
			}
			else{
			$data = array(
					'kegiatan'		=> $kegiatan,
			);
			$this->db->where('id_jurnal',$id_jurnal)->update('jurnal', $data);
		}	 
		}
		
	}
	function tampil_data($datasiswa)
	{
		return $this->db->from('jurnal')
		->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$datasiswa)
		->get()
		->result();
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