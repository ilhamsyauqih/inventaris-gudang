<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Model BarangKeluar
| Mengelola data dan transaksi barang keluar
*/
class BarangKeluar_model extends CI_Model {

    // Mengambil seluruh data barang keluar
    public function get_all()
    {
        $this->db->select('
            barang_keluar.*,
            barang.nama_barang
        ');
        $this->db->from('barang_keluar');
        $this->db->join('barang', 'barang.id_barang = barang_keluar.id_barang');
        $this->db->order_by('tanggal', 'DESC');

        return $this->db->get()->result();
    }

    // Menyimpan transaksi barang keluar
    public function insert($data)
    {
        // Simpan data ke tabel barang_keluar
        $this->db->insert('barang_keluar', $data);

        // Kurangi stok barang sesuai jumlah keluar
        $this->db->set('stok', 'stok - '.$data['jumlah'], FALSE);
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('barang');
    }
}
