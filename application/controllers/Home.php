<?php
class Accounting_settings extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	function home(){
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
?>
