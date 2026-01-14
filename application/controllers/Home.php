<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/navbar');
		$this->load->view('pages/index');
		$this->load->view('layout/footer');
	}
}
