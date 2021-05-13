<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		$this->load->view('include/header');
        $this->load->view('v_index');
        $this->load->view('include/footer');
	}

	// public function tentang(){
	// 	$this->load->view('v_tentang');
	// }

	// public function fasilitas(){
	// 	$this->load->view('v_fasilitas');
	// }

	// public function detailfasilitas(){
	// 	$this->load->view('v_detailfasilitas');
	// }

	// public function berita(){
	// 	$this->load->view('v_berita');
	// }

	// public function detailberita(){
	// 	$this->load->view('v_detailberita');
	// }

}