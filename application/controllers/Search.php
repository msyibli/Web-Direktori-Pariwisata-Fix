<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
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

    // HALAMAN VIEW
    public function index()
    {
        $this->load->view('components/header/header');

        $kode_prov = $this->input->post('kode_prov');
        $kode_kab = $this->input->post('kode_kab');
        $kode_klasifikasi = $this->input->post('kode_klasifikasi');
        $object = new stdClass();
        $object->status = false;

        if (empty($kode_prov) && empty($kode_kab) && $kode_klasifikasi) {

            $data['result_search'] = $this->search($kode_prov, $kode_kab, $kode_klasifikasi);
            if ($kode_klasifikasi == 'PMM') {
                $data['result_search_pmm'] = $this->search($kode_prov, $kode_kab, 'PMM');
                $data['result_search_akomodasi'] = $object;
                $data['result_search_dtw'] = $object;
            } else if ($kode_klasifikasi == 'akomodasi') {
                $data['result_search_pmm'] = $object;
                $data['result_search_akomodasi'] = $this->search($kode_prov, $kode_kab, 'akomodasi');
                $data['result_search_dtw'] = $object;
            } else if ($kode_klasifikasi == 'DTW') {
                $data['result_search_pmm'] = $object;
                $data['result_search_akomodasi'] = $object;
                $data['result_search_dtw'] = $this->search($kode_prov, $kode_kab, 'DTW');
            } else {
                $data['result_search_pmm'] = $object;
                $data['result_search_akomodasi'] = $object;
                $data['result_search_dtw'] = $object;
            }
        } else {
            $data['result_search'] = $this->search($kode_prov, $kode_kab, $kode_klasifikasi);
            $data['result_search_pmm'] = $this->search($kode_prov, $kode_kab, 'PMM');
            $data['result_search_akomodasi'] = $this->search($kode_prov, $kode_kab, 'akomodasi');
            $data['result_search_dtw'] = $this->search($kode_prov, $kode_kab, 'DTW');
        }
        $data['kode_prov'] = $kode_prov;
        $data['kode_kab'] = $kode_kab;
        $data['kode_klasifikasi'] = $kode_klasifikasi;

        $this->load->view('pages/search/search', $data);
        $this->load->view('components/footer/footer');
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
}
