<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daya_tarik_wisata extends CI_Controller
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
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->API_URL = 'http://localhost/web-direktori-pariwisata-rest-api-3.1.10/index.php/';
        // $this->API_URL = 'https://api.dirpas.zaverna.web.id/index.php/';
    }

    public function index()
    {
        $kode_prov = $this->input->post('kode_prov');
        $kode_kab = $this->input->post('kode_kab');

        $data['kode_prov'] = $kode_prov;
        $data['kode_kab'] = $kode_kab;

        if ($kode_prov || $kode_kab) {
            $data['result_dtw'] = $this->search($kode_prov, $kode_kab, 'dtw');
        } else {
            $data['result_dtw'] = $this->DTW_all();
        }

        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search', $data);
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_search_result()
    {
        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search_result');
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_search_result_by_provinsi()
    {
        $kode_prov = $this->uri->segment('3');
        $kode_kab = $this->input->post('kode_kab');

        $data['kode_prov'] = $kode_prov;
        $data['kode_kab'] = $kode_kab;

        if ($kode_kab) {
            $data['result_dtw'] = $this->search($kode_prov, $kode_kab, 'dtw');
        } else {
            $data['result_dtw'] = $this->search($kode_prov, null, 'dtw');
        }

        if ($data['result_dtw']->status) {
            $data['first_data'] = $data['result_dtw']->data[0];
        } else {
            $data['first_data'] = false;
        }

        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search_result_by_provinsi', $data);
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_detail()
    {
        $id = $this->uri->segment('3');
        $result = $this->detail($id);
        $data['d_d'] = $result->data[0];

        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_detail', $data);
        $this->load->view('components/footer/footer');
    }

    public function dtw_download()
    {
        $id = $this->uri->segment('3');
        $result = $this->detail($id);
        $data['d_a'] = $result->data[0];
        $data['nama_file'] = 'daya_tarik_wisata';

        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_download', $data);
    }

    public function daya_tarik_wisata_sekitar()
    {
        $kode_prov = $this->uri->segment('3');
        $kode_kab = $this->uri->segment('4');
        $kode_klasifikasi = $this->input->post('kode_klasifikasi');

        $data['result_search_dtw'] = $this->search($kode_prov, $kode_kab, 'DTW');
        if ($data['result_search_dtw']->status) {
            $data['first_data'] = $data['result_search_dtw']->data[0];
        } else {
            $data['first_data'] = false;
        }
        $data['kode_prov'] = $kode_prov;
        $data['kode_kab'] = $kode_kab;

        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_sekitar', $data);
        $this->load->view('components/footer/footer');
    }

    public function DTW_all()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->API_URL . 'api/direktori/DTW_all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic c2FuZGhpa2E6d3B1MTIz'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        return $response;
    }

    public function search($kode_prov = null, $kode_kab = null, $kode_klasifikasi = null)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->API_URL . 'api/direktori/search?kode-prov=' . $kode_prov . '&kode-kab=' . $kode_kab . '&kategori=' . $kode_klasifikasi . '',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic c2FuZGhpa2E6d3B1MTIz'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        return $response;
    }

    public function detail($id = null)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->API_URL . 'api/direktori/detail?id=' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic c2FuZGhpa2E6d3B1MTIz'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        return $response;
    }
}
