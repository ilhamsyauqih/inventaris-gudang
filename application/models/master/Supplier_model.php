<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

    // Ambil semua data supplier
    public function get_all()
    {
        return $this->db->get('supplier')->result();
    }

    // Simpan data supplier baru
    public function insert($data)
    {
        return $this->db->insert('supplier', $data);
    }

    // Ambil satu data supplier berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where('supplier', ['id_supplier' => $id])->row();
    }

    // Update data supplier berdasarkan ID
    public function update($id, $data)
    {
        $this->db->where('id_supplier', $id);
        return $this->db->update('supplier', $data);
    }

}
