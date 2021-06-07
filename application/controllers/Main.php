<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Main extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		$data['menuLink'] = "main";
		$this->load->view('include/header', $data);
        $this->load->view('v_index');
        $this->load->view('include/footer');
	}

}