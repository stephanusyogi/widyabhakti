<?php

class Berita_model extends CI_model
{
    public function tambahBerita()
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $id_admin = $this->session->userdata('login_data_admin')['userdata']['id'];
        $publisher = $this->session->userdata('login_data_admin')['userdata']['name'];
        $title = $this->input->post('title', true);
        $excerpt = $this->input->post('excerpt', true);
        $content = $this->input->post('content', true);

        // Upload Image
        $upload_file_image = $_FILES['file_image'];
        $new_file_image = NULL;
        
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = '10991';
        $config['upload_path']   = './uploads/img_thumbnail_berita';
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
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/berita',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'title' => $title,
                'excerpt' => $excerpt,
                'id_admin' => $id_admin,
                'content' => $content,
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
            redirect('berita');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('berita');
		}
                
    }

    // Edit Adv
    public function ubahBerita($id)
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $id_admin = $this->session->userdata('login_data_admin')['userdata']['id'];
        $publisher = $this->session->userdata('login_data_admin')['userdata']['name'];
        $id_berita = $this->input->post('id', true);
        $title = $this->input->post('title', true);
        $excerpt = $this->input->post('excerpt', true);
        $content = $this->input->post('content', true);

        // Upload Image
        $upload_file_image = $_FILES['file_image_edit'];
        // die(var_dump($upload_file_image));
        $new_file_image = NULL;
        
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = '10991';
        $config['upload_path']   = './uploads/img_thumbnail_berita';
        $this->load->library('upload', $config);

        if ($upload_file_image['size']) {

            if ($this->upload->do_upload('file_image')) {
                $new_file_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }else{
            $new_file_image = $this->input->post('thumbnail', true);
        }
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/berita/update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'id_berita' => $id_berita,
                'title' => $title,
                'excerpt' => $excerpt,
                'id_admin' => $id_admin,
                'content' => $content,
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
            redirect('berita');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('berita');
		}
                
    }

    // Delete Ads
    public function deleteBerita($id)
    {
        $session = $this->session->userdata('login_data_admin')['token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/berita/'. $id,
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
            redirect('berita');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('berita');
		}
    }

}
