<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
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
        $url = 'http://127.0.0.1:8000/api/user';
        $method = 'GET';
        $session = $this->session->userdata('login_data')['token'];
        
        $request = $this->SendWithRequest($url, $method, $session);

        // Cek Auth
        if($request['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        }

        // Tampilan
        $data['datauser'] = $request;
        $data['title'] = "Data User";
        $data['menuLink'] = "datauser";
        $data['menuName'] = "Data User";
        // $data['count'] = sizeof($res['data']);
        $this->load->view('include/header', $data);
        $this->load->view('user', $data);
        $this->load->view('include/footer');
    }

    function ubah($id)
    {
        $this->User_model->ubahUser($id);
    }

    public function hapus($id)
    {
        $this->User_model->deleteUser($id);
    }
}
