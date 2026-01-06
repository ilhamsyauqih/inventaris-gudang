<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasuk_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('
            barang_masuk.*,
            barang.nama_barang,
            supplier.nama_supplier
        ');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang.id_barang = barang_masuk.id_barang');
        $this->db->join('supplier', 'supplier.id_supplier = barang_masuk.id_supplier');
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('barang_masuk', $data);

        $this->db->set('stok', 'stok + '.$data['jumlah'], FALSE);
        $this->db->where('id_barang', $data['id_barang']);
        $this->db->update('barang');
    }
}
