<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Ruangan_model');
    }

    public function index()
    {
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruangan';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        $data['ruangan'] = $request;
        $data['title'] = "Data Ruangan";
        $data['menuLink'] = "ruangan";
        $data['menuName'] = "Data Ruangan";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('ruangan', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {   
        $session = $this->session->userdata('login_data_admin')['token'];
        $id_admin = $this->session->userdata('login_data_admin')['userdata']['id'];
        $nama = $this->input->post('nama', true);
        $lantai = $this->input->post('lantai', true);
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
            CURLOPT_URL => 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruangan',
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
            redirect('ruangan');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('ruangan');
		}
    }

    function ubah($id)
    {
        $this->Ruangan_model->ubahRuangan($id);
    }

    public function hapus($id)
    {
        $this->Ruangan_model->deleteRuangan($id);
    }
}
