<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Direktori extends CI_Controller
{

    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__resTraitConstruct();

        $this->load->model('Direktori_model');
    }

    public function akomodasi_all_get()
    {
        $direktori = $this->Direktori_model->get_akomodasi_all();

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function PMM_all_get()
    {
        $direktori = $this->Direktori_model->get_PMM_all();

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function DTW_all_get()
    {
        $direktori = $this->Direktori_model->get_DTW_all();

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function akomodasi_filter_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');
        $nama_komersial = $this->get('nama-komersial');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_akomodasi_filter($kode_prov, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_akomodasi_filter($kode_prov, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_akomodasi_filter($kode_prov, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_akomodasi_filter($kode_prov, null, null);
                }
            }
        } else {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_akomodasi_filter(null, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_akomodasi_filter(null, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_akomodasi_filter(null, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_akomodasi_filter(null, null, null);
                }
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function PMM_filter_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');
        $nama_komersial = $this->get('nama-komersial');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_PMM_filter($kode_prov, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_PMM_filter($kode_prov, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_PMM_filter($kode_prov, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_PMM_filter($kode_prov, null, null);
                }
            }
        } else {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_PMM_filter(null, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_PMM_filter(null, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_PMM_filter(null, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_PMM_filter(null, null, null);
                }
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function DTW_filter_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');
        $nama_komersial = $this->get('nama-komersial');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_DTW_filter($kode_prov, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_DTW_filter($kode_prov, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_DTW_filter($kode_prov, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_DTW_filter($kode_prov, null, null);
                }
            }
        } else {
            if ($kode_kab != null) {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_DTW_filter(null, $kode_kab, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_DTW_filter(null, $kode_kab, null);
                }
            } else {
                if ($nama_komersial != null) {
                    $direktori = $this->Direktori_model->get_DTW_filter(null, null, $nama_komersial);
                } else {
                    $direktori = $this->Direktori_model->get_DTW_filter(null, null, null);
                }
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function akomodasi_sekitar_get()
    {

        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_akomodasi_sekitar($kode_prov, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_akomodasi_sekitar($kode_prov, null);
            }
        } else {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_akomodasi_sekitar(null, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_akomodasi_sekitar(null, null);
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function PMM_sekitar_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_PMM_sekitar($kode_prov, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_PMM_sekitar($kode_prov, null);
            }
        } else {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_PMM_sekitar(null, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_PMM_sekitar(null, null);
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function DTW_sekitar_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');

        if ($kode_prov != null) {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_DTW_sekitar($kode_prov, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_DTW_sekitar($kode_prov, null);
            }
        } else {
            if ($kode_kab != null) {
                $direktori = $this->Direktori_model->get_DTW_sekitar(null, $kode_kab);
            } else {
                $direktori = $this->Direktori_model->get_DTW_sekitar(null, null);
            }
        }

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function akomodasi_ringkas_get()
    {
        $kode_prov = $this->get('kode-prov');
        $nama_prov = $this->get('nama-prov');

        $direktori = $this->Direktori_model->get_ringkas_akomodasi($kode_prov, $nama_prov);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function PMM_ringkas_get()
    {
        $kode_prov = $this->get('kode-prov');
        $nama_prov = $this->get('nama-prov');

        $direktori = $this->Direktori_model->get_ringkas_PMM($kode_prov, $nama_prov);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function DTW_ringkas_get()
    {
        $kode_prov = $this->get('kode-prov');
        $nama_prov = $this->get('nama-prov');

        $direktori = $this->Direktori_model->get_ringkas_DTW($kode_prov, $nama_prov);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function data_direktori_ringkas_get()
    {
        $kode_prov = $this->get('kode-prov');
        $nama_prov = $this->get('nama-prov');
        $kategori = $this->get('kategori');

        $direktori = $this->Direktori_model->get_ringkas_data_direktori($kode_prov, $nama_prov, $kategori);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function search_get()
    {
        $kode_prov = $this->get('kode-prov');
        $kode_kab = $this->get('kode-kab');
        $kategori = $this->get('kategori');
        $nama_komersial = $this->get('nama-komersial');

        $direktori = $this->Direktori_model->get_search($kode_prov, $kode_kab, $kategori, $nama_komersial);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }

    public function detail_get()
    {
        $id = $this->get('id');

        $direktori = $this->Direktori_model->get_detail($id);

        if ($direktori) {
            $this->response([
                'status' => true,
                'data' => $direktori
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'data not found'
            ], 404);
        }
    }
}