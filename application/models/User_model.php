<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Ambil satu data user berdasarkan username
    public function get_user($username)
    {
        return $this->db->get_where('users', [
            'username' => $username
        ])->row();
    }

    // Simpan data user baru
    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

}
