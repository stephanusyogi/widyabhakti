<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Berita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Berita_model');
    }

    public function index()
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $session = $this->session->userdata('login_data')['token'];
        $client = new \GuzzleHttp\Client();
        $response = $client->request(
            'GET',
            'http://127.0.0.1:8000/api/berita',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['berita'] = $res;
        // $data['count'] = sizeof($res['data']);
        $data['title'] = "Data Berita & Artikel";
        $data['menuLink'] = "berita";
        $data['menuName'] = "Data Berita & Artikel";
        $this->load->view('include/header', $data);
        $this->load->view('berita', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Berita_model->tambahBerita();
        redirect('berita');
    }

    function ubah($id)
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Berita_model->ubahBerita($id);
        redirect('berita');
    }

    public function hapus($id)
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Berita_model->deleteBerita($id);
        redirect('berita');
    }
}
