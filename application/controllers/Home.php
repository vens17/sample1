<?php 

class Home extends CI_Controller
{	
	function home(){
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
?>