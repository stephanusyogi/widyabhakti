<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class profil extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index(){
        $url = 'http://127.0.0.1:8000/api/ruanganpeminjaman';
        $method = 'GET';
        $session = $this->session->userdata('login_data')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url('auth/logout'));
        }

        $id_user = $this->session->userdata('login_data')['userdata']['id'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/datapeminjamanuser',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('id_user' => $id_user),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer '.$session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $datapeminjaman = json_decode($response, true);
        
        // Tampilan
        $data['datapeminjaman'] = $datapeminjaman;
        $data['dataruangan'] = $request;
        $this->load->view('v_profil',$data);
	}


}