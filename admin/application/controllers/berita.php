<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
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
        $url = 'http://127.0.0.1:8000/api/berita';
        $method = 'GET';
        $session = $this->session->userdata('login_data')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['berita'] = $request;
        $data['title'] = "Data Berita & Artikel";
        $data['menuLink'] = "berita";
        $data['menuName'] = "Data Berita & Artikel";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('berita', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        $this->Berita_model->tambahBerita();
    }

    function ubah($id)
    {
        $this->Berita_model->ubahBerita($id);
    }

    public function hapus($id)
    {
        $this->Berita_model->deleteBerita($id);
    }
}
