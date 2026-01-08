<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Controller BarangKeluar
| Mengelola proses transaksi barang keluar
*/
class BarangKeluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Cek login, jika belum maka arahkan ke halaman login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Load model yang dibutuhkan
        $this->load->model('transaksi/BarangKeluar_model');
        $this->load->model('master/Barang_model');
    }

    // Menampilkan daftar barang keluar
    public function index()
    {
        $data['title']  = 'Barang Keluar';
        $data['barang_keluar'] = $this->BarangKeluar_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/barang_keluar/index', $data);
        $this->load->view('templates/footer');
    }

    // Menampilkan form tambah barang keluar
    public function tambah()
    {
        $data['barang'] = $this->Barang_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('transaksi/barang_keluar/tambah', $data);
        $this->load->view('templates/footer');
    }

    // Menyimpan data barang keluar
    public function simpan()
    {
        $data = [
            'id_barang' => $this->input->post('id_barang'),
            'jumlah'    => $this->input->post('jumlah'),
            'tanggal'   => $this->input->post('tanggal'),
            'tujuan'    => $this->input->post('tujuan')
        ];

        $this->BarangKeluar_model->insert($data);

        redirect('transaksi/barangkeluar');
    }
}
