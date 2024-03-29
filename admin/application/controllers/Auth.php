<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require 'vendor/autoload.php';
// use http\Client;
// use http\Client\Request;

class Auth extends CI_Controller
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
    protected $_apiURL;
    function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
        $this->_apiURL = 'https://apiwidyabhakti.parokikatedralmalang.org/';
    }

    public function login()
    {
        // die(var_dump('test'));
        // if ($this->session->userdata('isLoggedIn')) {
        //     return redirect(base_url());
        // }
        $this->load->view('login');
    }

    public function auth()
    {
        // if ($this->session->userdata('isLoggedIn')) {
        //     return redirect(base_url());
        // }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->_apiURL . "api/loginadmin",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"username\": \"$username\",\n    \"password\": \"$password\"\n}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Cookie: __cfduid=d0a7bba63bb01822738d4fc7e27d68d801603760780"
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        if ($response['success']) {
            $this->session->set_userdata('login_data_admin', $response['data']);
            $this->session->set_userdata('isLoggedIn_admin', true);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('err', $response['error']);
            redirect(base_url() . 'login');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url() . 'login');
    }
}
