<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitasumum extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model('Fasilitasumum_model');
    }

    public function index()
    {
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/fasilitas';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['fasilitasumum'] = $request;
        $data['title'] = "Data Fasilitas Umum";
        $data['menuLink'] = "fasilitasumum";
        $data['menuName'] = "Data Fasilitas Umum";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('fasilitasumum', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        $this->Fasilitasumum_model->tambahFasilitas();
    }

    public function hapus($id)
    {
        $this->Fasilitasumum_model->deleteFasilitas($id);
    }
}
