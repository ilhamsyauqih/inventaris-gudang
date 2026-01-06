<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTransaksi_model extends CI_Model {

    public function get_all()
    {
        $sql = "
            SELECT 
                bm.tanggal,
                b.nama_barang,
                bm.jumlah,
                s.nama_supplier AS keterangan,
                'Barang Masuk' AS jenis
            FROM barang_masuk bm
            JOIN barang b ON b.id_barang = bm.id_barang
            JOIN supplier s ON s.id_supplier = bm.id_supplier

            UNION ALL

            SELECT
                bk.tanggal,
                b.nama_barang,
                bk.jumlah,
                bk.tujuan AS keterangan,
                'Barang Keluar' AS jenis
            FROM barang_keluar bk
            JOIN barang b ON b.id_barang = bk.id_barang

            ORDER BY tanggal DESC
        ";

        return $this->db->query($sql)->result();
    }
}
