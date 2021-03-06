<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');
	}
	public function index()
	{
		$data['row'] = $this->user_m->get();

		//load halaman
		$this->template->load('template','user/user_data',$data);
	}

	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s Tidak Sesuai Dengan Password')
		);
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, Silakan Diisi');
		$this->form_validation->set_message('min_length', '{field} Minimal 5 Karakter');
		$this->form_validation->set_message('is_unique', '{field} Sudah Dipakai, Silakan Ganti Yang Lain');

		$this->form_validation->set_error_delimiters('<span class="is-invalid">','</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template','user/user_form_add');
		}
		else
		{
			$post = $this->input->post(null,TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data Berhasil Disimpan!');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		}
	}

	public function edit($id)
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');

		if($this->input->post('password')){
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
				array('matches' => '%s Tidak Sesuai Dengan Password')
			);
		}
		if($this->input->post('passconf')){
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
				array('matches' => '%s Tidak Sesuai Dengan Password')
			);
		}
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s Masih Kosong, Silakan Diisi');
		$this->form_validation->set_message('min_length', '{field} Minimal 5 Karakter');
		$this->form_validation->set_message('is_unique', '{field} Sudah Dipakai, Silakan Ganti Yang Lain');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','user/user_form_edit',$data);
			} else {
				echo "<script>alert('Data Tidak Ditemukan!');</script>";
				echo "<script>window.location='".site_url('user')."';</script>";
			}
			
		}
		else
		{
			$post = $this->input->post(null,TRUE);
			$this->user_m->edit($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data Berhasil Disimpan!');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
		}
	}

	public function del()
	{
		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('Data Berhasil Dihapus!');</script>";
		}
		echo "<script>window.location='".site_url('user')."';</script>";
	}
}
