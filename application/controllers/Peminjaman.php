<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');
	}

	public function informasi(){
		$url = 'http://apiwidyabhakti.parokikatedralmalang.org/api/ruanganpeminjaman';
        $method = 'GET';
        $request = $this->SendRequest($url, $method);

		$data['dataruangan'] = $request;

		$this->load->view('include/headernomenu');
        $this->load->view('v_informasipeminjaman', $data);
        $this->load->view('include/footer');
	}

	public function formulirpeminjaman(){
		$url = 'http://apiwidyabhakti.parokikatedralmalang.org/api/ruanganpeminjaman';
        $method = 'GET';
        $request = $this->SendRequest($url, $method);

		$data['dataruangan'] = $request;

		$this->load->view('include/headernomenu');
        $this->load->view('v_formulir', $data);
        $this->load->view('include/footer');
	}

	public function formulir($dateruangan, $idruangan){
        $session = $this->session->userdata('login_data_user')['token'];
		$id_ruangan = $idruangan;
		$datepeminjaman = $dateruangan;
		// Get Detail Ruangan
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://apiwidyabhakti.parokikatedralmalang.org/api/dataforform',
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
		CURLOPT_URL => 'http://apiwidyabhakti.parokikatedralmalang.org/api/checkpeminjaman',
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
		$nama_kegiatan = $this->input->post('nama_kegiatan', true);
		$nama_peminjam = $this->input->post('nama_peminjam', true);
		$nohp = $this->input->post('nohp', true);
		$pemilik_kegiatan = $this->input->post('pemilik_kegiatan', true);
		$jadwal = $this->input->post('jadwal', true);
		$waktu_mulai = $this->input->post('waktu_mulai', true);
		$waktu_selesai = $this->input->post('waktu_selesai', true);
		$id_ruangan = $this->input->post('id_ruangan', true);
		$jumlah_ruangan = $this->input->post('jumlah_ruangan', true);
		$jumlah_orang = $this->input->post('jumlah_orang', true);
		$deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan', true);
		$keterangan_tambahan = $this->input->post('keterangan_tambahan', true);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://apiwidyabhakti.parokikatedralmalang.org/api/peminjamanuser',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array(
				'nama_kegiatan' => $nama_kegiatan,
				'nama_peminjam' => $nama_peminjam,
				'nohp' => $nohp,
				'pemilik_kegiatan' => $pemilik_kegiatan,
				'jadwal' => $jadwal,
				'waktu_mulai' => $waktu_mulai,
				'waktu_selesai' => $waktu_selesai,
				'id_ruangan' => $id_ruangan,
				'jumlah_orang' => $jumlah_orang,
				'deskripsi_kegiatan' => $deskripsi_kegiatan,
				'keterangan_tambahan' => $keterangan_tambahan,
			),
			CURLOPT_HTTPHEADER => array(
				'Accept: application/json'
			),
		));

		$res = curl_exec($curl);
		
        $response = json_decode($res, true);

		if ($response['success']) {
			$this->session->set_flashdata('successMsg', 'Peminjaman Berhasil Diajukan');
            redirect('peminjaman/informasi');
		} else {
			$this->session->set_flashdata('errorMsg', 'Peminjaman Gagal Diajukan');
            redirect('peminjaman/informasi');
		}
		curl_close($curl);
	}

}