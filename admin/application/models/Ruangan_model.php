<?php

class Ruangan_model extends CI_model
{
    // Edit Adv
    public function ubahRuangan($id)
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $id_admin = $this->session->userdata('login_data_admin')['userdata']['id'];
        $id_ruangan = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $lantai = $this->input->post('lantai', true);
        $kapasitas = $this->input->post('kapasitas', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $luas = $this->input->post('luas', true);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruangan/update',
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
                'lantai' => $lantai,
                'kapasitas' => $kapasitas,
                'luas' => $luas,
                'deskripsi' => $deskripsi,
                'id_admin' => $id_admin
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
            redirect('ruangan');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('ruangan');
		}
                
    }

    // Delete Ads
    public function deleteRuangan($id)
    {
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruangan/'. $id,
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
            redirect('ruangan');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('ruangan');
		}
    }

}
