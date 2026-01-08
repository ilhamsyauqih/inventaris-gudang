<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    // Constructor
    // Cek login, cek role admin, dan load model supplier
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Akses khusus admin
        if ($this->session->userdata('role') != 'admin') {
            show_error('Akses ditolak', 403);
        }

        $this->load->model('master/Supplier_model');
    }

    // Menampilkan daftar semua supplier
    public function index()
    {
        $data['title']    = 'Data Supplier';
        $data['supplier'] = $this->Supplier_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('master/supplier/index', $data);
        $this->load->view('templates/footer');
    }

    // Menampilkan form tambah supplier
    public function tambah()
    {
        $data['title'] = 'Tambah Supplier';

        $this->load->view('templates/header', $data);
        $this->load->view('master/supplier/tambah');
        $this->load->view('templates/footer');
    }

    // Menyimpan data supplier baru
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

    // Menampilkan form edit supplier
    public function edit($id)
    {
        $data['title']    = 'Edit Supplier';
        $data['supplier'] = $this->Supplier_model->get_by_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('master/supplier/edit', $data);
        $this->load->view('templates/footer');
    }

    // Menyimpan perubahan data supplier
    public function update()
    {
        $id = $this->input->post('id_supplier');

        $data = [
            'nama_supplier' => $this->input->post('nama_supplier'),
            'alamat'        => $this->input->post('alamat'),
            'telepon'       => $this->input->post('telepon')
        ];

        $this->Supplier_model->update($id, $data);
        redirect('master/supplier');
    }

}
