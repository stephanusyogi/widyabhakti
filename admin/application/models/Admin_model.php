<?php

use GuzzleHttp\Client;

class Admin_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $session = $this->session->userdata('login_data')['token'];
        $this->_client = new Client([
            'base_uri' => 'http://127.0.0.1:8000/api/admin',
            'headers' =>
            [
                'Authorization' => "Bearer $session"
            ]
        ]);
    }

    public function tambahAdmin()
    {   
        $session = $this->session->userdata('login_data')['token'];
        $name = $this->input->post('name', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $status = $this->input->post('status', true);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/admin',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'username' => $username,
                'password' => $password,
                'status' => $status
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

    // Edit Adv
    public function ubahAdmin($id)
    {   
        $session = $this->session->userdata('login_data')['token'];
        $id = $this->input->post('id', true);
        $name = $this->input->post('name', true);
        $username = $this->input->post('username', true);
        $status = $_POST['status'];
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/admin/update',
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
                'username' => $username,
                'status' => $status
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
    public function deleteAdmin($id)
    {
        $session = $this->session->userdata('login_data')['token'];
        $response = $this->_client->request(
            'DELETE', 
            '/api/admin/' . $id ,
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
