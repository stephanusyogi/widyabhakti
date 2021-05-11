<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Ruangan extends CI_Controller
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

    // function tambah()
    // {
    //     $this->Berita_model->tambahBerita();
    //     redirect('berita');
    // }

    // function ubah($id)
    // {
    //     $this->Berita_model->ubahBerita($id);
    //     redirect('berita');
    // }

    // public function hapus($id)
    // {
    //     $this->Berita_model->deleteBerita($id);
    //     redirect('berita');
    // }
}
