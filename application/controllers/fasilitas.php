<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class fasilitas extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		$data['menuLink'] = "fasilitas";
		$this->load->view('include/header', $data);
        $this->load->view('v_fasilitas');
        $this->load->view('include/footer');
	}

    
	public function detail(){
		$data['menuLink'] = "fasilitas";
		$this->load->view('include/header', $data);
        $this->load->view('v_detailfasilitas');
        $this->load->view('include/footer');
	}


}