<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        $this->load->model('transaksi/BarangMasuk_model');
        $this->load->model('master/Barang_model');
        $this->load->model('master/Supplier_model');
    }

    public function index()
    {
        $data['barang_masuk'] = $this->BarangMasuk_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('transaksi/barang_masuk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['barang']   = $this->Barang_model->get_all();
        $data['supplier'] = $this->Supplier_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('transaksi/barang_masuk/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_barang'   => $this->input->post('id_barang'),
            'id_supplier' => $this->input->post('id_supplier'),
            'jumlah'      => $this->input->post('jumlah'),
            'tanggal'     => $this->input->post('tanggal'),
            'keterangan'  => $this->input->post('keterangan')
        ];

        $this->BarangMasuk_model->insert($data);

        redirect('transaksi/barangmasuk');
    }
}
