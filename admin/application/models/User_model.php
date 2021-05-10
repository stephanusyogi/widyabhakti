<?php

use GuzzleHttp\Client;

class User_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $session = $this->session->userdata('login_data');
        $this->_client = new Client([
            'base_uri' => 'http://127.0.0.1:8000/api/user',
            'headers' =>
            [
                'Authorization' => "Bearer $session"
            ]
        ]);
    }

    // Edit Adv
    public function ubahUser($id)
    {   
        $session = $this->session->userdata('login_data');
        $id = $this->input->post('id', true);
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $organisasi = $this->input->post('organisasi', true);
        $nohp = $this->input->post('nohp', true);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/user/update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'organisasi' => $organisasi,
                'nohp' => $nohp
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        // die(var_dump($response['message']));
		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
		} else {
			$this->session->set_flashdata('errorMsg', 'TEST2');
		}
                
    }

    // Delete Ads
    public function deleteUser($id)
    {
        $session = $this->session->userdata('login_data');
        $response = $this->_client->request(
            'DELETE', 
            '/api/user/' . $id ,
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
