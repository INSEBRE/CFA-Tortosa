<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['content']='includes/index';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}

	public function teacher() {
		$data['content']='includes/teacher';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}

	public function contact() {
		$data['content']='includes/contact';

			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
			$this->load->view('templates/body',$data);
			//$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/footer',$data);
	}
}