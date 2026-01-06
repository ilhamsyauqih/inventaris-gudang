<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori');
        $this->db->order_by('kategori.nama_kategori');

        return $this->db->get()->result();
    }

    public function get_kategori()
    {
        return $this->db->get('kategori')->result();
    }       

    public function insert($data)
    {
        return $this->db->insert('barang', $data);
    }

    public function get_by_id($id)
{
    return $this->db->get_where('barang', ['id_barang' => $id])->row();
}

public function update($id, $data)
{
    $this->db->where('id_barang', $id);
    return $this->db->update('barang', $data);
}

}
