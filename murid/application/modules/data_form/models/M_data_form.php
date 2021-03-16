<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_form extends CI_Model {

	function tampil()
	{
		return $this->db->get('form')->result();
	}

	function tambah()
	{
		$nama 		= $this->input->post('nama');
		$mantra 		= $this->input->post('mantra');
		$jenis_hero		= $this->input->post('jenis_hero');
		$tipe_skin		= $this->input->post('tipe_skin');
		$tanggal		= $this->input->post('tanggal');
		


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
					'nama'			=> $nama,
					'mantra'		=> $mantra,
					'jenis_hero'	=> $jenis_hero,
					'tipe_skin'		=> $tipe_skin,
					'tanggal'		=> $tanggal,
					'logo' 			=> $gbr['file_name'],
						
				);
				$this->db->insert('form', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama'			=> $nama,
					'mantra'		=> $mantra,
					'jenis_hero'	=> $jenis_hero,
					'tipe_skin'		=> $tipe_skin,
					'tanggal'		=> $tanggal,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('form', $data);
			}
	}

	function edit()
	{
		$id_form 		= $this->input->post('id_form');
		$nama 			= $this->input->post('nama');
		$mantra 		= $this->input->post('mantra');
		$jenis_hero		= $this->input->post('jenis_hero');
		$tipe_skin		= $this->input->post('tipe_skin');
		$tanggal		= $this->input->post('tanggal');


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
					'nama'			=> $nama,
					'mantra'		=> $mantra,
					'jenis_hero'	=> $jenis_hero,
					'tipe_skin'		=> $tipe_skin,
					'tanggal'		=> $tanggal,
					'logo' 			=> $gbr['file_name'],
				);
				$this->db->where('id_form',$id_form)->update('form', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama'			=> $nama,
					'mantra'		=> $mantra,
					'jenis_hero'	=> $jenis_hero,
					'tipe_skin'		=> $tipe_skin,
					'tanggal'		=> $tanggal,
				);
				$this->db->where('id_form',$id_form)->update('form', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_form', $id)->delete('form');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_hotel',$cari)->get('form')->result();
	}
}