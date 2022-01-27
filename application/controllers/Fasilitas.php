<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fasilitas extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
		// Get Data Ruangan
		$url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruanganberanda';
        $method = 'GET';
        $ruangan = $this->SendRequest($url, $method);

		// Get Data Fasilitas
		$url_fasilitas = 'https://apiwidyabhakti.parokikatedralmalang.org/api/fasilitasuser';
        $method_fasilitas = 'GET';
        $fasilitas = $this->SendRequest($url_fasilitas, $method_fasilitas);

		// Tampilan
		$data['menuLink'] = "fasilitas";
		$data['ruangan'] = $ruangan;
		$data['fasilitas'] = $fasilitas;
        $this->load->view('v_fasilitas', $data);
	}

    
	public function detailfasilitas($id_ruangan){
		// Get By ID Detail Ruangan
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/detailruangan/'.$id_ruangan,
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
		$data['menuLink'] = "fasilitas";
		$data['detailruangan'] = $res;
        $this->load->view('v_detailfasilitas', $data);
	}


}