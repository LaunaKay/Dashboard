<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoadC extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function load_home()
	{
		$this->load->view('home');
	}

	public function load_signin()
	{
		$this->load->view('signin');
	}

	public function load_register()
	{
		$this->load->view('register');
	}

	public function load_dashboardadmin()
	{
		$this->load->view('dashboardadmin');
	}

	public function load_usernew()
	{
		$this->load->view('usernew');
	}

	public function load_showuser()
	{
		$this->load->view('userinfo');
	}

	public function load_edituser()
	{
		$this->load->view('edituser');
	}

	public function load_dashboard()
	{
		$this->load->view('dashboard');
	}

	public function load_edit_profile()
	{
		$this->load->view('editprofile');
	}

	public function process_registration()

	{
		$login = $this->input->post(NULL, TRUE);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/login');
		}
		else
		{
			$email = $login['email'];
			$this->load->model('loginM');
			$user = $this->loginM->finduseremail($email)->result_array();
			if(count($user) > 0)
				{
					$this->session->set_flashdata('no user', 'This email is already in use');
					$this->load->view('login');
				}
			else
			{
					$this->session->set_userdata('user', $user);
					redirect('/welcome');
			}
		}
	}

	public function process_login()
	{
		$login = $this->input->post(NULL, TRUE);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('/login');
		}
		else
		{
			$email = $login['email'];
			$password = $login['password'];
			$this->load->model('loginM');
			$user = $this->loginM->finduser($email, $password)->result_array();
			if(count($user) == 1)
				{
					$this->session->set_userdata('user', $user);
					redirect('/welcome');
				}
			else
			{
				$this->session->set_flashdata('no user', 'This email and password are not a valid combination');
				$this->load->view('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect("/");
	}
}
