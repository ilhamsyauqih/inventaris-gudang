<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function total_barang()
    {
        return $this->db->count_all('barang');
    }

    public function total_stok()
    {
        $this->db->select_sum('stok');
        $query = $this->db->get('barang');
        return $query->row()->stok ?? 0;
    }

    public function total_barang_masuk()
    {
        return $this->db->count_all('barang_masuk');
    }

    public function total_barang_keluar()
    {
        return $this->db->count_all('barang_keluar');
    }
}
