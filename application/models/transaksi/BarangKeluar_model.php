<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar_model extends CI_Model {

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

    public function insert($data)
    {
        // simpan transaksi keluar
        $this->db->insert('barang_keluar', $data);

        // kurangi stok barang
        $this->db->set('stok', 'stok - '.$data['jumlah'], FALSE);
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('barang');
    }
}
