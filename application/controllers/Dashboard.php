<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        // Dummy data (ganti query nanti)
        $data['total_barang'] = 125;
        $data['stok_total']   = 3420;
        $data['barang_masuk'] = 28;
        $data['barang_keluar']= 17;

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
