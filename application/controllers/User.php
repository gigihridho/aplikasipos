<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		check_not_login();

		//load model
		$this->load->model('user_m');
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

		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('template','user/user_form_add');
		}
		else
		{
			echo "Proses Simpan Data User Baru";
		}

	}
}
