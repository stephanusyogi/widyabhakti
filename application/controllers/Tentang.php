<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class tentang extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		$data['menuLink'] = "tentang";
		// $this->load->view('include/header');
        $this->load->view('v_tentang', $data);
        // $this->load->view('include/footer');
	}


}