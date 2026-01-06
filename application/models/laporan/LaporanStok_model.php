<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanStok_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('
            barang.kode_barang,
            barang.nama_barang,
            kategori.nama_kategori,
            barang.satuan,
            barang.stok
        ');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->order_by('barang.nama_barang', 'ASC');

        return $this->db->get()->result();
    }
}
