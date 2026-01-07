<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function login()
{
    if ($this->input->post()) {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', [
            'username' => $username
        ])->row();

        if ($user && password_verify($password, $user->password)) {

            $this->session->set_userdata([
                'id_user'   => $user->id_user,
                'nama'      => $user->nama,
                'role'      => $user->role,
                'logged_in' => true
            ]);

            redirect('dashboard');
        }

        $this->session->set_flashdata('error', 'Username atau password salah');
        redirect('auth/login');
    }

    $this->load->view('auth/login');
}


    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata([
                'id_user'   => $user->id_user,
                'nama'      => $user->nama,
                'role'      => $user->role,
                'logged_in' => TRUE
            ]);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah!');
            redirect('auth/login');
        }
    }

    // ================== REGISTER ==================

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function register_process()
    {
        $data = [
            'nama'     => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role'     => $this->input->post('role')
        ];

        // Cek username
        if ($this->User_model->get_user($data['username'])) {
            $this->session->set_flashdata('error', 'Username sudah digunakan!');
            redirect('auth/register');
        }

        $this->User_model->insert($data);
        $this->session->set_flashdata('success', 'Akun berhasil dibuat. Silakan login.');
        redirect('auth/login');
    }


    public function save_register()
{
    $data = [
        'nama'       => $this->input->post('nama'),
        'username'   => $this->input->post('username'),
        'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role'       => $this->input->post('role'),
        'created_at' => date('Y-m-d H:i:s')
    ];

    // Cek username sudah ada
    $cek = $this->db->get_where('users', ['username' => $data['username']])->row();
    if ($cek) {
        $this->session->set_flashdata('error', 'Username sudah digunakan');
        redirect('auth/register');
    }

    $this->db->insert('users', $data);
    $this->session->set_flashdata('success', 'Pendaftaran berhasil, silakan login');
    redirect('auth/login');
}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
