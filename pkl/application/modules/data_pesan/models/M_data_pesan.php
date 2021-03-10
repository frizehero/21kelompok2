<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_pesan extends CI_Model {

	function tampil()
	{
		return $this->db->get('pesan')->result();
	}

	function tambah()
	{
		$nama 		= $this->input->post('nama_pesan');
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
					'nama_pesan'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
					
					
				);
				$this->db->insert('pesan', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_pesan'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('pesan', $data);
			}
	}

	function edit()
	{
		$id_pesan = $this->input->post('id_pesan');
		$nama 		= $this->input->post('nama_pesan');
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
					'nama_pesan'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_pesan',$id_pesan)->update('pesan', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_pesan'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_pesan',$id_pesan)->update('pesan', $data);
			}
	}

	function hapus($id)
	{
		$this->db->where('id_pesan', $id)->delete('pesan');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_pesan',$cari)->get('pesan')->result();
	}
	function tampil_detail($id)
	{
        $this->db->select('*')
				 ->from('pesan')
				 ->where('id_pesan',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
}