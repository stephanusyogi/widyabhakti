<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Galeri_model');
    }

    public function index()
    {
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/galericms';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['galeri'] = $request;
        $data['title'] = "Data Foto & Gallery";
        $data['menuLink'] = "galeri";
        $data['menuName'] = "Data Foto & Gallery";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('galeri', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        $this->Galeri_model->tambahGaleri();
    }

    public function hapus($id)
    {
        $this->Galeri_model->deleteGaleri($id);
    }
}
