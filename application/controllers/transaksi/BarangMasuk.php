<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Controller BarangMasuk
| Mengelola transaksi barang masuk
*/
class BarangMasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // Cek login user
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Load model yang dibutuhkan
        $this->load->model('transaksi/BarangMasuk_model');
        $this->load->model('master/Barang_model');
        $this->load->model('master/Supplier_model');
    }

    // Menampilkan data barang masuk
    public function index()
    {
        $data['title'] = 'Barang Masuk';
        $data['barang_masuk'] = $this->BarangMasuk_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/barang_masuk/index', $data);
        $this->load->view('templates/footer');
    }

    // Menampilkan form dan menyimpan data barang masuk
    public function tambah()
    {
        // Jika form disubmit
        if ($this->input->post()) {
            $data_simpan = [
                'id_barang'   => $this->input->post('id_barang'),
                'id_supplier' => $this->input->post('id_supplier'),
                'jumlah'      => $this->input->post('jumlah'),
                'tanggal'     => $this->input->post('tanggal'),
                'keterangan'  => $this->input->post('keterangan')
            ];

            $this->BarangMasuk_model->insert($data_simpan);
            $this->session->set_flashdata('pesan', 'Data berhasil disimpan!');
            redirect('transaksi/barangmasuk');
        }

        // Data untuk form
        $data['barang'] = $this->Barang_model->get_all();
        $data['supplier'] = $this->Supplier_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('transaksi/barang_masuk/tambah', $data);
        $this->load->view('templates/footer');
    }
}
