<?php

use GuzzleHttp\Client;

class Peminjaman_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $session = $this->session->userdata('login_data')['token'];
        $this->_client = new Client([
            'base_uri' => 'http://127.0.0.1:8000/api/peminjaman',
            'headers' =>
            [
                'Authorization' => "Bearer $session"
            ]
        ]);
    }

    // Edit Adv
    public function ubahPeminjaman($id)
    {   
        $session = $this->session->userdata('login_data')['token'];
        $id_admin = $this->session->userdata('login_data')['userdata']['id'];
        $id_peminjaman = $this->input->post('id_peminjaman', true);
        $nama_kegiatan = $this->input->post('nama_kegiatan', true);
        $pemilik_kegiatan = $this->input->post('pemilik_kegiatan', true);
        $jadwal = $this->input->post('jadwal', true);
        $waktu = $this->input->post('waktu', true);
        $id_user = $this->input->post('id_user', true);
        $id_ruangan = $this->input->post('id_ruangan', true);
        $jumlah_orang = $this->input->post('jumlah_orang', true);
        $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan', true);
        $keterangan_tambahan = $this->input->post('keterangan_tambahan', true);
        $rutin = $this->input->post('rutin', true);
        $hiddenrutin = $this->input->post('hiddenrutin', true);
        $finalrutin = null;
        if(empty($rutin)){
            $finalrutin = $hiddenrutin;
        }else{
            $finalrutin = $rutin;
        }
        $status = $this->input->post('status', true);
        $hiddenstatus = $this->input->post('hiddenstatus', true);
        $finalstatus = null;
        if(empty($status)){
            $finalstatus = $hiddenstatus;
        }else{
            $finalstatus = $status;
        }
        $pesan_admin = $this->input->post('pesan_admin', true);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/peminjaman/update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'nama_kegiatan' => $nama_kegiatan,
                'pemilik_kegiatan' => $pemilik_kegiatan,
                'jadwal' => $jadwal,
                'waktu' => $waktu,
                'jumlah_orang' => $jumlah_orang,
                'deskripsi_kegiatan' => $deskripsi_kegiatan,
                'keterangan_tambahan' => $keterangan_tambahan,
                'rutin' => $finalrutin,
                'id_ruangan' => $id_ruangan,
                'id_user' => $id_user,
                'id_admin' => $id_admin,
                'status' => $finalstatus,
                'pesan_admin' => $pesan_admin,
                'id_peminjaman' => $id_peminjaman,
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $session
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
		if ($response['success']) {
			$this->session->set_flashdata('successMsg', $response['message']);
		} else {
			$this->session->set_flashdata('errorMsg', $response['message']);
		}
                
    }

    // Delete Ads
    public function deletePeminjaman($id)
    {
        $session = $this->session->userdata('login_data')['token'];
        $response = $this->_client->request(
            'DELETE', 
            '/api/peminjaman/' . $id ,
            [
                'headers' =>
                [
                    'Authorization' => "Bearer $session"
                ]
            ]
        );
        $result = json_decode($response->getBody()->getContents(), true);
		if ($result['success']) {
			$this->session->set_flashdata('successMsg', $result['message']);
		} else {
			$this->session->set_flashdata('errorMsg', $result['message']);
		}
        return $result;
    }

}
