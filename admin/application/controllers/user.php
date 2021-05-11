<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('User_model');
    }

    public function index()
    {
        $session = $this->session->userdata('login_data')['token'];
        $client = new \GuzzleHttp\Client();
        $response = $client->request(
            'GET',
            'http://127.0.0.1:8000/api/user',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['datauser'] = $res;
        // $data['count'] = sizeof($res['data']);
        $data['title'] = "Data User";
        $data['menuLink'] = "datauser";
        $data['menuName'] = "Data User";
        $this->load->view('include/header', $data);
        $this->load->view('user', $data);
        $this->load->view('include/footer');
    }

    function ubah($id)
    {
        $this->User_model->ubahUser($id);
        redirect('user');
    }

    public function hapus($id)
    {
        $this->User_model->deleteUser($id);
        redirect('user');
    }
}
