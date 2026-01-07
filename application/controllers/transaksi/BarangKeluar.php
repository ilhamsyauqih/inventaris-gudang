<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->load->model('transaksi/BarangKeluar_model');
        $this->load->model('master/Barang_model');
    }

    public function index()
    {
        $data['title']  = 'Barang Keluar';
        $data['barang_keluar'] = $this->BarangKeluar_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/barang_keluar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['barang'] = $this->Barang_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('transaksi/barang_keluar/tambah', $data);
        $this->load->view('templates/footer');
    }

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
