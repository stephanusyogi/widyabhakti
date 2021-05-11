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

    public function tambahRuangan()
    {   
        
                
    }

    // Edit Adv
    // public function ubahBerita($id)
    // {   
    //     $session = $this->session->userdata('login_data')['token'];
    //     $id_admin = $this->session->userdata('login_data')['userdata']['id'];
    //     $publisher = $this->session->userdata('login_data')['userdata']['name'];
    //     $id_berita = $this->input->post('id', true);
    //     $title = $this->input->post('title', true);
    //     $excerpt = $this->input->post('excerpt', true);
    //     $content = $this->input->post('content', true);

    //     // Upload Image
    //     $upload_file_image = $_FILES['file_image_edit'];
    //     // die(var_dump($upload_file_image));
    //     $new_file_image = NULL;
        
    //     $config['allowed_types'] = 'jpg|jpeg|png';
    //     $config['max_size']      = '10991';
    //     $config['upload_path']   = './uploads/img_thumbnail_berita';
    //     $this->load->library('upload', $config);

    //     if ($upload_file_image['size']) {

    //         if ($this->upload->do_upload('file_image')) {
    //             $new_file_image = $this->upload->data('file_name');
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     }else{
    //         $new_file_image = $this->input->post('thumbnail', true);
    //     }
        
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'http://127.0.0.1:8000/api/berita/update',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => array(
    //             'id_berita' => $id_berita,
    //             'title' => $title,
    //             'excerpt' => $excerpt,
    //             'id_admin' => $id_admin,
    //             'content' => $content,
    //             'img_dir' => $new_file_image
    //         ),
    //         CURLOPT_HTTPHEADER => array(
    //             'Authorization: Bearer ' . $session
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     curl_close($curl);
    //     $response = json_decode($response, true);
	// 	if ($response['success']) {
	// 		$this->session->set_flashdata('successMsg', $response['message']);
	// 	} else {
	// 		$this->session->set_flashdata('errorMsg', $response['message']);
	// 	}
                
    // }

    // Delete Ads
    // public function deleteBerita($id)
    // {
    //     $session = $this->session->userdata('login_data')['token'];
    //     $response = $this->_client->request(
    //         'DELETE', 
    //         '/api/berita/' . $id ,
    //         [
    //             'headers' =>
    //             [
    //                 'Authorization' => "Bearer $session"
    //             ]
    //         ]
    //     );
    //     $result = json_decode($response->getBody()->getContents(), true);
	// 	if ($result['success']) {
	// 		$this->session->set_flashdata('successMsg', $result['message']);
	// 	} else {
	// 		$this->session->set_flashdata('errorMsg', $result['message']);
	// 	}
    //     return $result;
    // }

}
