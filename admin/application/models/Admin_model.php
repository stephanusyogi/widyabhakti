<?php

class Admin_model extends CI_model
{

    public function tambahAdmin()
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $name = $this->input->post('name', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        
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
                'backup_psw' => $password
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);

		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
            redirect('admin');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('admin');
		}
                
    }

    // Edit Adv
    public function ubahAdmin($id)
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $id = $this->input->post('id', true);
        $name = $this->input->post('name', true);
        $username = $this->input->post('username', true);
        
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
                'username' => $username
            ),
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);

		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
            redirect('admin');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('admin');
		}
                
    }

    // Delete Ads
    public function deleteAdmin($id)
    {
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/admin/'. $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);

		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
            redirect('admin');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('admin');
		}

    }

}
