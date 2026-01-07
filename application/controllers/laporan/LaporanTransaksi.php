<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTransaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // admin & petugas boleh akses
        if (!in_array($this->session->userdata('role'), ['admin', 'petugas'])) {
            show_error('Akses ditolak', 403);
        }

        $this->load->model('laporan/LaporanTransaksi_model');
    }

    public function index()
    {
        $data['transaksi'] = $this->LaporanTransaksi_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('laporan/transaksi/index', $data);
        $this->load->view('templates/footer');
    }
}
