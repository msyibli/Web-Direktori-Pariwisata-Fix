<?php

class Direktori_model extends CI_Model
{
    public function __construct()
    {
        $db = $this->load->database();
    }

    function get_akomodasi_all()
    {
        $query = $this->db->query('
		SELECT * FROM direktori_new
		WHERE kategori = "akomodasi"
	');

        return $query->result();
    }

    function get_PMM_all()
    {
        $query = $this->db->query('
            SELECT * FROM direktori_new
            WHERE kategori = "PMM"
        ');

        return $query->result();
    }

    function get_DTW_all()
    {
        $query = $this->db->query('
                SELECT * FROM direktori_new
                WHERE kategori = "DTW"
                ');

        return $query->result();
    }

    function get_akomodasi_filter($kode_prov, $kode_kab, $nama_komersial)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "akomodasi"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }
        if ($nama_komersial != null) {
            $query_db .= ' and nama_komersial LIKE "%' . $nama_komersial . '%"';
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_PMM_filter($kode_prov, $kode_kab, $nama_komersial)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "PMM"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }
        if ($nama_komersial != null) {
            $query_db .= ' and nama_komersial LIKE "%' . $nama_komersial . '%"';
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_DTW_filter($kode_prov, $kode_kab, $nama_komersial)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "DTW"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }
        if ($nama_komersial != null) {
            $query_db .= ' and nama_komersial LIKE "%' . $nama_komersial . '%"';
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_search($kode_prov, $kode_kab, $kategori, $nama_komersial)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE 1=1';
        $array_condition = [];
        if ($kode_prov != null) {

            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {

            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }
        if ($kategori != null) {

            $query_db .= ' and kategori = ?';
            array_push($array_condition, $kategori);
        }
        if ($nama_komersial != null) {

            $query_db .= ' and nama_komersial LIKE "%' . $nama_komersial . '%"';
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
        // return strpos((string) $query_db, "WHERE") . " " . $query_db;
    }

    function get_detail($id)
    {
        $query = $this->db->query("SELECT * FROM direktori_new WHERE id='$id'");

        return $query->result();
    }

    function get_akomodasi_sekitar($kode_prov, $kode_kab)
    {

        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "akomodasi"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_PMM_sekitar($kode_prov, $kode_kab)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "PMM"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_DTW_sekitar($kode_prov, $kode_kab)
    {
        $query_db = 'SELECT * FROM direktori_new WHERE kategori = "DTW"';
        $array_condition = [];
        if ($kode_prov != null) {
            $query_db .= ' and kode_prov = ?';
            array_push($array_condition, $kode_prov);
        }
        if ($kode_kab != null) {
            $query_db .= ' and kode_kab = ?';
            array_push($array_condition, $kode_kab);
        }

        $query = $this->db->query($query_db, $array_condition);

        return $query->result();
    }

    function get_ringkas_akomodasi($kode_prov, $nama_prov)
    {
        $query = $this->db->query('
                SELECT kode_prov, nama_prov, photo_url,
                COUNT(id) AS jumlah 
                FROM `direktori_new` 
                WHERE kategori = "akomodasi" 
                GROUP BY kode_prov
            ', array($kode_prov, $nama_prov));

        return $query->result();
    }

    function get_ringkas_PMM($kode_prov, $nama_prov)
    {
        $query = $this->db->query('
                SELECT kode_prov, nama_prov,photo_url, 
                COUNT(id) AS jumlah 
                FROM `direktori_new` 
                WHERE kategori = "PMM" 
                GROUP BY kode_prov
            ', array($kode_prov, $nama_prov));

        return $query->result();
    }

    function get_ringkas_DTW($kode_prov, $nama_prov)
    {
        $query = $this->db->query('
                SELECT kode_prov, nama_prov, photo_url,
                COUNT(id) AS jumlah 
                FROM `direktori_new` 
                WHERE kategori = "DTW" 
                GROUP BY kode_prov
            ', array($kode_prov, $nama_prov));

        return $query->result();
    }

    function get_ringkas_data_direktori($kode_prov, $nama_prov, $kategori)
    {
        $query = $this->db->query('
                SELECT kode_prov, nama_prov, kategori, 
                COUNT(id) AS jumlah 
                FROM `direktori_new` 
                GROUP BY kode_prov, kategori
            ', array($kode_prov, $nama_prov, $kategori));

        return $query->result();
    }
}
