<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$isi['data']      = $this->db->get('mahasiswa');
		$this->load->view('welcome_message',$isi);
	}

	public function tambah()
	{
		$isi['folder']		='tambah/formtambah';
		$isi['nama']       	=''; 
		$isi['kelas']    	='';
		$isi['angkatan']    ='';
		$isi['fakultas']    ='';
		$this->load->view('tambah/formtambah',$isi);
	}

	public function edit()
	{

		$key=$this->uri->segment(3);
		$this->db->where('id',$key);
		$query=$this->db->get('mahasiswa');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['id']       =$row->id;
				$isi['nama']    =$row->nama;
				$isi['kelas']    =$row->kelas;
				$isi['angkatan']      =$row->angkatan;
				$isi['fakultas']        =$row->fakultas;

			}
		}
		else
		{
			    $isi['id']       ='';
				$isi['nama']    ='';
				$isi['kelas']    ='';
				$isi['angkatan']      ='';
				$isi['fakultas']        ='';
		}
		$this->load->view('tambah/formtambah',$isi);
	}

	public function simpan()
	{

		$key = $this->input->POST('id');
		$data['id']   = $this->input->POST('id');
		$data['nama']      = $this->input->POST('nama');
		$data['kelas']    = $this->input->POST('kelas');
		$data['angkatan']= $this->input->POST('angkatan');
		$data['fakultas']        = $this->input->POST('fakultas');

		$this->load->model('model_crud');
		$query=$this->model_crud->getdata($key);
		echo "$query->num_rows";
		// if($query->num_rows()>0)
		// {
		// 	$this->model_crud->getupdate($key,$data);
		// 	$this->session->set_flashdata('info','Data Sukses di Update');
		// }
		// else
		// {
		// 	$this->model_crud->getinsert($data);
		// 	$this->session->set_flashdata('info','Data Sukses di Tambahkan');

		// }
		// redirect ('Welcome/tambah');
	}

	public function delete()
	{
		$this->load->model('model_crud');

		$key=$this->uri->segment(3);
		$this->db->where('id',$key);
		$query=$this->db->get('mahasiswa');
		if($query->num_rows()>0)
		{
			$this->model_crud->getdelete($key);
		}
		redirect('Welcome'); 


	}
}
