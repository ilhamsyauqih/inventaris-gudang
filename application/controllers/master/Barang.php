<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Proteksi role ADMIN
        if ($this->session->userdata('role') != 'admin') {
            show_error('Akses ditolak', 403);
        }

        $this->load->model('master/Barang_model');
    }

    public function index()
    {
        $data['title']  = 'Data Barang';
        $data['barang'] = $this->Barang_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('master/barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title']    = 'Tambah Barang';
        $data['kategori'] = $this->Barang_model->get_kategori();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('master/barang/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'kode_barang' => $this->input->post('kode_barang'),
            'nama_barang' => $this->input->post('nama_barang'),
            'satuan'      => $this->input->post('satuan'),
            'stok'        => 0
        ];

        $this->Barang_model->insert($data);
        redirect('master/barang');
    }
}
