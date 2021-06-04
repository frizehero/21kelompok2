<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_jurnal extends CI_Model {

	function tampil()
	{
	    return $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->get()
		->result();


	}
	function get_filter_count($st = NULL)
	{
		if ($st == "NIL") $st = "";
		$this->db->select('*')
			->join('dudi','dudi.id_dudi = siswa.id_dudi')
			// ->where('siswa.id_dudi',$st);
			->like('siswa.id_dudi',$st);
			$query = $this->db->get('siswa');
			return $query->num_rows();

	}
	function tampild($a)
	{
		$this->db->select('*')
			->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
			->where('dudi.id_dudi',$a);
			$query = $this->db->get('siswa');
			return $query->row_array();
	}

	function cari_tgl($awl,$akr,$idid)
	{
      // return $this->db->query("SELECT * FROM jurnal WHERE tanggal between '$awl' AND '$akr' ORDER BY tanggal ASC");

      return $this->db->from('jurnal')
        ->order_by("tanggal", "asc")
        // ->where('tanggal >=', $awl)
        // ->where('tanggal <=', $akr)
        ->where("tanggal BETWEEN '$awl' AND '$akr'")
        ->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$idid)
		->get()
		->result();	
	}


	function tampil_detail($id)
	{

		$this->db->select('*')
				 ->from('siswa')
				 ->join('kelas', 'kelas.id_kelas = siswa.id_kelas')
				 ->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
				 ->where('id_siswa',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tampil_d($a)
	{
		 $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('siswa.id_dudi',$a);
		$query = $this->db->get();
		return $query->result();

	}
	function tampil_dd($aa)
	{
		 $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('siswa.id_dudi',$aa);
		$query = $this->db->get();
		return $query->num_rows();

	}
	function tampil_data($idd)
	{
		return $this->db->from('jurnal')
		->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$idd)
		->get()
		->result();
	}
	function tampil_dudi()
	{
		return $this->db->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('dudi.id_dudi')
		->get()
		->result();
	}
	function filter_dudi()
	{
		$this->db->select('*')
		->from('dudi');
		$query = $this->db->get();
		return $query->result();
	}
	

	function tambah()
	{
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
				$this->db->insert('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('sekolah', $data);
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
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
	function filter($dudi)
	{ 
		$query = $this->db->get('siswa');
		return $this->db->like('nama_dudi',$dudi)
 		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->get('siswa')->result();
	}



	// function chartsenin()
	// {
	// 	$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 0 AND 0 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_siswa");

	// 	return $query->num_rows();
	// }

	// function chartselasa()
	// {
	// 	$query = $this->db->query("SELECT * FROM jurnal WHERE_NOT_IN (tanggal)");
	// 	return $query->num_rows();
	// }
	function isi($idd)
	{
			return $this->db->from('jurnal')
		->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		->where('siswa.id_siswa',$idd)
		->get()
		->num_rows();
	}

	function isisi($idd)
	{
		$this->db->select('*')
		->from('siswa')
		->where('id_dudi',$idd);
		$query = $this->db->get();
		return $query->num_rows();
		// return $this->db->from('jurnal')
		// ->join('siswa', 'siswa.id_siswa = jurnal.id_siswa')
		// ->where('siswa.id_siswa',$idd)
		// ->get()
		// ->num_rows();
	}
	
}