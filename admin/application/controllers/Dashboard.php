<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require 'vendor/autoload.php';
// use http\Client;
// use http\Client\Request;

class Dashboard extends MY_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function index()
	{
		if (!$this->session->userdata('isLoggedIn_admin')) {
			return redirect(base_url() . 'login');
		}

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

		$data['datapending'] = $requestpeminjamanpending;
		$data['dataaccepted'] = $requestpeminjamanapproved;
		$data['title'] = "Dashboard";
		$data['menuLink'] = "dashboard";
		$data['menuName'] = "Dashboard";
		$this->load->view('include/header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('include/footer');
	}
}
