<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanStok extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // proteksi role
        if ($this->session->userdata('role') != 'admin') {
            show_error('Akses ditolak', 403);
        }

        $this->load->model('laporan/LaporanStok_model');
    }

    public function index()
    {
        $data['title']  = 'Laporan Stok';
        $data['stok'] = $this->LaporanStok_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/stok/index', $data);
        $this->load->view('templates/footer');
    }
}
