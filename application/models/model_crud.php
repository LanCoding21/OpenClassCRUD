<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil=$this->db->get('mahasiswa');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('nama',$key);
		$this->db->update('mahasiswa',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('mahasiswa', $data);
	}

	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('mahasiswa');
	}

	
}
