<?php

use GuzzleHttp\Client;

class Ruangan_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $session = $this->session->userdata('login_data')['token'];
        $this->_client = new Client([
            'base_uri' => 'http://127.0.0.1:8000/api/ruangan',
            'headers' =>
            [
                'Authorization' => "Bearer $session"
            ]
        ]);
    }

    // Edit Adv
    public function ubahRuangan($id)
    {   
        $session = $this->session->userdata('login_data')['token'];
        $id_admin = $this->session->userdata('login_data')['userdata']['id'];
        $id_ruangan = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $kapasitas = $this->input->post('kapasitas', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $luas = $this->input->post('luas', true);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/ruangan/update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'id_ruangan' => $id_ruangan,
                'nama' => $nama,
                'kapasitas' => $kapasitas,
                'luas' => $luas,
                'deskripsi' => $deskripsi,
                'id_admin' => $id_admin
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
		} else {
			$this->session->set_flashdata('errorMsg', $response['message']);
		}
                
    }

    // Delete Ads
    public function deleteRuangan($id)
    {
        $session = $this->session->userdata('login_data')['token'];
        $response = $this->_client->request(
            'DELETE', 
            '/api/ruangan/' . $id ,
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
		if ($result['success']) {
			$this->session->set_flashdata('successMsg', $result['message']);
		} else {
			$this->session->set_flashdata('errorMsg', $result['message']);
		}
        return $result;
    }

}
