<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class Ruangan extends CI_Controller
{
    private $_client;
    function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata('login_data')['token'];
        $this->_client = new Client([
            'base_uri' => 'http://127.0.0.1:8000/api/ruangan',
            'headers' =>
            [
                'Authorization' => "Bearer $session"
            ]
        ]);
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Ruangan_model');
    }

    public function index()
    {
        $session = $this->session->userdata('login_data')['token'];
        $client = new \GuzzleHttp\Client();
        $response = $client->request(
            'GET',
            'http://127.0.0.1:8000/api/ruangan',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['ruangan'] = $res;
        // $data['count'] = sizeof($res['data']);
        $data['title'] = "Data Ruangan";
        $data['menuLink'] = "ruangan";
        $data['menuName'] = "Data Ruangan";
        $this->load->view('include/header', $data);
        $this->load->view('ruangan', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {   
                   
        $session = $this->session->userdata('login_data')['token'];
        $id_admin = $this->session->userdata('login_data')['userdata']['id'];
        $nama = $this->input->post('nama', true);
        $thumbnail = $this->input->post('thumbnail', true);
        $kapasitas = $this->input->post('kapasitas', true);
        $deskripsi = $this->input->post('deskripsi', true);
        $luas = $this->input->post('luas', true);

        // Upload Image Thumbnail

        $config['upload_path']          = './uploads/img_ruangan';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 10991;
		$config['encrypt_name'] 		= true;

        $upload_file_image = $_FILES['file_image_thumbnail'];
        $new_file_image = NULL;
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_image_thumbnail')) {
            $new_file_image = $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/ruangan',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'nama' => $nama,
                'thumbnail' => $new_file_image,
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

        // UPLOAD MULTIPLE IMAGE
        // Get Last ID + 1
        $query = $this->db->query("SELECT MAX(id_ruangan) as id_ruangan FROM table_ruangan;");
        $result = json_decode(json_encode($query->row()), true);
        $id_ruangan = $result['id_ruangan'];

		$this->load->library('upload',$config);
        
		$jumlah_berkas = count($_FILES['file_image']['name']);
		for($i = 0; $i < $jumlah_berkas;$i++)
		{
            if(!empty($_FILES['file_image']['name'][$i])){
 
				$_FILES['file']['name'] = $_FILES['file_image']['name'][$i];
				$_FILES['file']['type'] = $_FILES['file_image']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['file_image']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['file_image']['error'][$i];
				$_FILES['file']['size'] = $_FILES['file_image']['size'][$i];
	   
				if($this->upload->do_upload('file')){
					$uploadData = $this->upload->data();
                    $data['id_ruangan'] = $id_ruangan;
					$data['img_dir'] = $uploadData['file_name'];
					$this->db->insert('table_img_ruangan',$data);
				}
			}
		}

        
        $response = json_decode($response, true);
		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
		} else {
			$this->session->set_flashdata('errorMsg', $response['message']);
		}
        redirect('ruangan');
    }

    function ubah($id)
    {
        $this->Ruangan_model->ubahRuangan($id);
        redirect('ruangan');
    }

    public function hapus($id)
    {
        $this->Ruangan_model->deleteRuangan($id);
        redirect('ruangan');
    }
}
