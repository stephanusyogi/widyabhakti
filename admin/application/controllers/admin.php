<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Admin_model');
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
            'http://127.0.0.1:8000/api/admin',
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $res = json_decode($response->getBody(), true);
        $data['datadmin'] = $res;
        // $data['count'] = sizeof($res['data']);
        $data['title'] = "Data Admin";
        $data['menuLink'] = "dataadmin";
        $data['menuName'] = "Data Admin";
        $this->load->view('include/header', $data);
        $this->load->view('admin', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Admin_model->tambahAdmin();
        redirect('admin');
    }

    function ubah($id)
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Admin_model->ubahAdmin($id);
        redirect('admin');
    }

    public function hapus($id)
    {
        if (!$this->session->userdata('isLoggedIn')) {
			return redirect(base_url() . 'login');
		}
        $this->Admin_model->deleteAdmin($id);
        redirect('admin');
    }
}
