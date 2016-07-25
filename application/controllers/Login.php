<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function submit()
	{
		$this->load->library('form_validation');
		$FormRules = array(
			array(
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required|trim'
			),
			 array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
        	),
		);

		$this->form_validation->set_rules($FormRules);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/header');
			$this->load->view('login');
			$this->load->view('template/footer');
		} else
		{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->load->model('user_login');
			$result = $this->user_login->userlogin($user, $pass);

			if ($result) {
				$this->load->helper('url');
				redirect('/home');

			}
			else{
				echo "no";
			}
		}
	}
}
?>
