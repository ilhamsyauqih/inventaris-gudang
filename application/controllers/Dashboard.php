<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dashboard_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['total_barang']   = $this->Dashboard_model->total_barang();
        $data['stok_total']     = $this->Dashboard_model->total_stok();
        $data['barang_masuk']   = $this->Dashboard_model->total_barang_masuk();
        $data['barang_keluar']  = $this->Dashboard_model->total_barang_keluar();

        $role = $this->session->userdata('role');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');

        // ================= ROLE CHECK =================
        if ($role == 'admin') {
            $this->load->view('dashboard/admin', $data);
        } else {
            $this->load->view('dashboard/petugas', $data);
        }

        $this->load->view('templates/footer');
    }
}
