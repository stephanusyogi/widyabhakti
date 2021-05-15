<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class peminjaman extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function informasi(){
		$this->load->view('include/headernomenu');
        $this->load->view('v_informasipeminjaman');
        $this->load->view('include/footer');
	}

	public function formulirpeminjaman(){
		$this->load->view('include/headernomenu');
        $this->load->view('v_createpeminjaman');
        $this->load->view('include/footer');
	}

}