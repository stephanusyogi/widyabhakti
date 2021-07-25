<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class berita extends MY_Controller {
	
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
        $beritaterkini = $this->SendRequest($url, $method);

		// Berita Page Pertama
		$url = 'http://127.0.0.1:8000/api/beritauser?page=1'; 
        $method = 'GET';
        $berita = $this->SendRequest($url, $method);

		// Tampilan
		$data['menuLink'] = "berita";
		$data['beritaterkini'] = $beritaterkini;
		$data['berita'] = $berita;
        $this->load->view('v_berita', $data);
	}
    
	public function paginateberita($page_now){
		
		// 3 Berita Terkini
        $url = 'http://127.0.0.1:8000/api/beritaberanda';
        $method = 'GET';
        $beritaterkini = $this->SendRequest($url, $method);

		// Berita Page Pertama
		$url = 'http://127.0.0.1:8000/api/beritauser?page='.$page_now; 
        $method = 'GET';
        $berita = $this->SendRequest($url, $method);

		// Tampilan
		$data['menuLink'] = "berita";
		$data['beritaterkini'] = $beritaterkini;
		$data['berita'] = $berita;
        $this->load->view('v_berita', $data);
	}

	public function detailberita($title, $id_berita){

		// 3 Berita Terkini
        $url = 'http://127.0.0.1:8000/api/beritaberanda';
        $method = 'GET';
        $berita = $this->SendRequest($url, $method);

		// Detail berita terpilih
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://127.0.0.1:8000/api/detailberita/'.$id_berita,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$res = json_decode($response, true);

		// Tampilan
		$data['menuLink'] = "berita";
		$data['detailberita'] = $res;
		$data['beritaterkini'] = $berita;
        $this->load->view('v_detailberita', $data);
	}


}