<?php

class Fasilitasumum_model extends CI_model
{
    public function tambahFasilitas()
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $nama = $this->input->post('nama', true);

        // Upload Image
        $upload_file_image = $_FILES['file_image'];
        $new_file_image = NULL;
        
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = '10991';
        $config['upload_path']   = './uploads/img_ruangan';
        $this->load->library('upload', $config);

        if ($upload_file_image) {

            if ($this->upload->do_upload('file_image')) {
                $new_file_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/fasilitas',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'nama' => $nama,
                'img_dir' => $new_file_image
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
            redirect('fasilitasumum');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('fasilitasumum');
		}
                
    }

    // Delete Ads
    public function deleteFasilitas($id)
    {
        $session = $this->session->userdata('login_data_admin')['token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/fasilitas/'. $id,
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
            redirect('fasilitasumum');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('fasilitasumum');
		}
    }

}
