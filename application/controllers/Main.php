<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Main extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		// 3 Berita Terkini
        $url = 'http://127.0.0.1:8000/api/beritaberanda';
        $method = 'GET';
        $berita = $this->SendRequest($url, $method);

		// Thumbnail Ruangan
        $url_ruangan = 'http://127.0.0.1:8000/api/ruanganberanda';
        $method_ruangan = 'GET';
        $ruangan = $this->SendRequest($url_ruangan, $method_ruangan);
		
		// Tampilan
		$data['menuLink'] = "main";
		$data['ruanganberanda'] = $ruangan;
		$data['beritaberanda'] = $berita;
        $this->load->view('v_index', $data);
	}

}