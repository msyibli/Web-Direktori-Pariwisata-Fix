<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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
		$this->load->view('components/header/header.php');

		$data['akomodasi_ringkas'] = $this->akomodasi_ringkas();
		$data['DTW_ringkas'] = $this->DTW_ringkas();
		$data['PMM_ringkas'] = $this->PMM_ringkas();
		$data['data_direktori_ringkas'] = $this->data_direktori_ringkas();
		$data['akomodasi_filter'] = $this->akomodasi_filter();

		$this->load->view('pages/home/home', $data);

		$this->load->view('components/footer/footer.php');
	}

	// public function home_search_result()
	// {
	// 	$this->load->view('components/header/header');
	// 	$this->load->view('pages/home/home_search_result');
	// 	$this->load->view('components/footer/footer');
	// }

	public function akomodasi_ringkas()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->API_URL . 'api/direktori/akomodasi_ringkas',
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

	public function DTW_ringkas()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->API_URL . 'api/direktori/DTW_ringkas',
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

	public function PMM_ringkas()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->API_URL . 'api/direktori/PMM_ringkas',
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

	public function data_direktori_ringkas()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->API_URL . 'api/direktori/data_direktori_ringkas',
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

	public function akomodasi_filter()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->API_URL . 'api/direktori/akomodasi_filter?kode-prov=&kode-kab=&nama-komersial=',
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

	public function search($coba)
	{
		echo $coba;

		// ambil data dari get api

		// return ke halaman provinsi dengan data jsonnya


	}
}
