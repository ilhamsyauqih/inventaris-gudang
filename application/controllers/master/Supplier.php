<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Hanya ADMIN
        if ($this->session->userdata('role') != 'admin') {
            show_error('Akses ditolak', 403);
        }

        $this->load->model('master/Supplier_model');
    }

    public function index()
    {
        $data['title']    = 'Data Supplier';
        $data['supplier'] = $this->Supplier_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('master/supplier/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Supplier';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('master/supplier/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'nama_supplier' => $this->input->post('nama_supplier'),
            'alamat'        => $this->input->post('alamat'),
            'telepon'       => $this->input->post('telepon')
        ];

        $this->Supplier_model->insert($data);
        redirect('master/supplier');
    }
}
