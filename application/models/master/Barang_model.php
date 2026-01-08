<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    // Ambil semua data barang + nama kategori (pakai join)
    public function get_all()
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->order_by('kategori.nama_kategori');

        return $this->db->get()->result();
    }

    // Ambil semua data kategori
    public function get_kategori()
    {
        return $this->db->get('kategori')->result();
    }       

    // Simpan data barang baru
    public function insert($data)
    {
        return $this->db->insert('barang', $data);
    }

    // Ambil satu data barang berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row();
    }

    // Update data barang berdasarkan ID
    public function update($id, $data)
    {
        $this->db->where('id_barang', $id);
        return $this->db->update('barang', $data);
    }

    // Ambil data barang berdasarkan kategori tertentu
    public function get_by_kategori($id_kategori)
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->where('barang.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    // Hapus data barang berdasarkan ID
    public function delete($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete('barang');
    }

}
