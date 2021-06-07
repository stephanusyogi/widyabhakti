<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class peminjaman extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function informasi(){
		$this->load->view('include/headernomenu');
        $this->load->view('v_informasipeminjaman');
        $this->load->view('include/footer');
	}

	public function formulir($dateruangan, $idruangan){
        $session = $this->session->userdata('login_data')['token'];
		$id_ruangan = $idruangan;
		$datepeminjaman = $dateruangan;
		// Get Detail Ruangan
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://127.0.0.1:8000/api/dataforform',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array(
				'datepeminjaman' => $datepeminjaman,
				'id_ruangan' => $idruangan
		),
		CURLOPT_HTTPHEADER => array(
			'Accept: application/json',
			'Authorization: Bearer ' . $session
		),
		));

		$request = curl_exec($curl);
		curl_close($curl);
		$ruangan = json_decode($request, true);

        // Cek Auth
        if($ruangan['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url('auth/logout'));
        }

		// Get Waktu terpakai
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://127.0.0.1:8000/api/checkpeminjaman',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array(
				'datepeminjaman' => $datepeminjaman,
				'ruanganpeminjaman' => $idruangan
		),
		CURLOPT_HTTPHEADER => array(
			'Accept: application/json',
			'Authorization: Bearer ' . $session
		),
		));

		$request_waktu = curl_exec($curl);
		curl_close($curl);
		$waktu = json_decode($request_waktu, true);

        // Cek Auth
        if($waktu['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url('auth/logout'));
        }

		// Tampilan
		$data['ruangan'] = $ruangan;
		$data['waktu_terpakai'] = $waktu;
		$data['dateruangan'] = $dateruangan;
        $this->load->view('v_createpeminjaman', $data);
	}

	// Create Peminjaman
	public function create(){
		$session = $this->session->userdata('login_data')['token'];
		$id_user = $this->session->userdata('login_data')['userdata']['id'];
		$nama_kegiatan = $this->input->post('nama_kegiatan', true);
		$pemilik_kegiatan = $this->input->post('organisasi', true);
		$jadwal = $this->input->post('jadwal', true);
		$waktu_mulai = $this->input->post('waktu_mulai', true);
		$waktu_selesai = $this->input->post('waktu_selesai', true);
		$id_ruangan = $this->input->post('idruangan', true);
		$jumlah_ruangan = $this->input->post('jumlah_ruangan', true);
		$deskripsi_kegiatan = $this->input->post('deskripsi', true);
		$keterangan_tambahan = $this->input->post('keterangan_tambahan', true);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://127.0.0.1:8000/api/peminjamanuser',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
				'id_user' => $id_user,
				'nama_kegiatan' => $nama_kegiatan,
				'pemilik_kegiatan' => $pemilik_kegiatan,
				'jadwal' => $jadwal,
				'waktu_mulai' => $waktu_mulai,
				'waktu_selesai' => $waktu_selesai,
				'id_ruangan' => $id_ruangan,
				'jumlah_orang' => $id_user,
				'deskripsi_kegiatan' => $deskripsi_kegiatan,
				'keterangan_tambahan' => $keterangan_tambahan,
			),
			CURLOPT_HTTPHEADER => array(
				'Accept: application/json',
				'Authorization: Bearer ' . $session
			),
		));

		$res = curl_exec($curl);
		
        $response = json_decode($res, true);

		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
            redirect('profil');
		} elseif ($response['message']=='Unauthenticated.'){
            $this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
        } else {
			$this->session->set_flashdata('errorMsg', $response['message']);
            redirect('profil');
		}
		curl_close($curl);
	}

}