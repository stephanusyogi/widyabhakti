<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Peminjaman extends MY_Controller
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
        // Peminjaman All
        $url = 'http://127.0.0.1:8000/api/peminjaman';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjaman = $this->SendWithRequest($url, $method, $session);
        
        // die(var_dump($requestpeminjaman));
        // Cek Auth
        if($requestpeminjaman['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Peminjaman Rutin
        $url = 'http://127.0.0.1:8000/api/peminjamanrutin';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjamanrutin = $this->SendWithRequest($url, $method, $session);
        // Cek Auth
        if($requestpeminjamanrutin['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['peminjaman'] = $requestpeminjaman;
        $data['peminjamanrutin'] = $requestpeminjamanrutin;
        $data['title'] = "Data Peminjaman";
        $data['menuLink'] = "peminjaman";
        $data['menuName'] = "Data Peminjaman";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('peminjaman', $data);
        $this->load->view('include/footer');
    }

    public function editPeminjaman($id){
        // Peminjaman By Id
        $url = 'http://127.0.0.1:8000/api/peminjamanById/'.$id;
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjaman = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($requestpeminjaman['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
            return redirect(base_url() . 'login');
        }

        // All Ruangan
        $url = 'http://127.0.0.1:8000/api/ruangan/';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestruangan = $this->SendWithRequest($url, $method, $session);

        // All User
        $url = 'http://127.0.0.1:8000/api/user/';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestuser = $this->SendWithRequest($url, $method, $session);

        // Tampilan
        $data['peminjaman'] = $requestpeminjaman;
        $data['ruangan'] = $requestruangan;
        $data['user'] = $requestuser;
        $data['title'] = "Edit Data Peminjaman";
        $data['menuLink'] = "peminjaman";
        $data['menuName'] = "Edit Data Peminjaman";
        $this->load->view('include/header', $data);
        $this->load->view('edit_peminjaman', $data);
        $this->load->view('include/footer');
    }

    function ubah($id)
    {
        $this->Peminjaman_model->ubahPeminjaman($id);
    }

    public function hapus($id)
    {
        $this->Peminjaman_model->deletePeminjaman($id);
    }
}