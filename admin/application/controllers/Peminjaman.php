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
        // Peminjaman Accepted
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/peminjamanapproved';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjamanapproved = $this->SendWithRequest($url, $method, $session);
        
        // Cek Auth
        if($requestpeminjamanapproved['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Peminjaman Pending
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/peminjamanpending';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjamanpending = $this->SendWithRequest($url, $method, $session);
        // Cek Auth
        if($requestpeminjamanpending['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Peminjaman Rejected
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/peminjamanrejected';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjamanrejected = $this->SendWithRequest($url, $method, $session);
        // Cek Auth
        if($requestpeminjamanrejected['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Get All Ruangan
		$url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruanganpeminjaman';
        $method = 'GET';
        $dataruangan = $this->SendRequest($url, $method);

        // Tampilan
        $data['peminjamanapproved'] = $requestpeminjamanapproved;
        $data['peminjamanpending'] = $requestpeminjamanpending;
        $data['peminjamanrejected'] = $requestpeminjamanrejected;
        $data['dataruangan'] = $dataruangan;
        $data['title'] = "Data Peminjaman";
        $data['menuLink'] = "peminjaman";
        $data['menuName'] = "Data Peminjaman";
        $this->load->view('include/header', $data);
        $this->load->view('peminjaman', $data);
        $this->load->view('include/footer');
    }

    public function editPeminjaman($id){
        // Peminjaman By Id
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/peminjamanById/'.$id;
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestpeminjaman = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($requestpeminjaman['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
            return redirect(base_url() . 'login');
        }

        // All Ruangan
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/ruangan/';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        $requestruangan = $this->SendWithRequest($url, $method, $session);

        // All User
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/user/';
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

    function tambah()
    {
        $this->Peminjaman_model->tambahPeminjaman();
    }

    public function hapus($id)
    {
        $this->Peminjaman_model->deletePeminjaman($id);
    }
}

