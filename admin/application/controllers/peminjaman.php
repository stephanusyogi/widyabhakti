<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Peminjaman extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Peminjaman_model');
    }

    public function index()
    {
        $session = $this->session->userdata('login_data')['token'];
        $client = new \GuzzleHttp\Client();
        $response = $client->request(
            'GET',
            'http://127.0.0.1:8000/api/peminjaman',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['peminjaman'] = $res;
        $response = $client->request(
            'GET',
            'http://127.0.0.1:8000/api/peminjamanrutin',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['peminjamanrutin'] = $res;
        // $data['count'] = sizeof($res['data']);
        $data['title'] = "Data Peminjaman";
        $data['menuLink'] = "peminjaman";
        $data['menuName'] = "Data Peminjaman";
        $this->load->view('include/header', $data);
        $this->load->view('peminjaman', $data);
        $this->load->view('include/footer');
    }

    function ubah($id)
    {
        $this->Peminjaman_model->ubahPeminjaman($id);
        redirect('peminjaman');
    }

    public function hapus($id)
    {
        $this->Peminjaman_model->deletePeminjaman($id);
        redirect('peminjaman');
    }
}
