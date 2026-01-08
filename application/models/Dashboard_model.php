<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    // Menghitung jumlah total barang
    public function total_barang()
    {
        return $this->db->count_all('barang');
    }

    // Menjumlahkan seluruh stok barang
    public function total_stok()
    {
        $this->db->select_sum('stok');
        $query = $this->db->get('barang');

        // Kalau tabel kosong, hasilnya 0
        return $query->row()->stok ?? 0;
    }

    // Menghitung jumlah transaksi barang masuk
    public function total_barang_masuk()
    {
        return $this->db->count_all('barang_masuk');
    }

    // Menghitung jumlah transaksi barang keluar
    public function total_barang_keluar()
    {
        return $this->db->count_all('barang_keluar');
    }
}
