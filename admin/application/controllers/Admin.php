<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
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
        $url = 'https://apiwidyabhakti.parokikatedralmalang.org/api/admin';
        $method = 'GET';
        $session = $this->session->userdata('login_data_admin')['token'];
        
        $res = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($res['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['datadmin'] = $res;
        $data['title'] = "Data Admin";
        $data['menuLink'] = "dataadmin";
        $data['menuName'] = "Data Admin";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('admin', $data);
        $this->load->view('include/footer');
    }

    function tambah()
    {
        $this->Admin_model->tambahAdmin();
    }

    function ubah($id)
    {
        $this->Admin_model->ubahAdmin($id);
    }

    public function hapus($id)
    {
        $this->Admin_model->deleteAdmin($id);
    }
}
