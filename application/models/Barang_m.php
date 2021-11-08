<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('barang');
        if ($id != null) {
            $this->db->where('id_barang', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {

        $data = [
            'barcode' => $post['barcode'],
            'nama' => $post['nama'],
            'jumlah' => $post['jumlah'],
            'kondisi' => $post['kondisi'],
            'tgl_input' => $post['date'],
        ];
        $this->db->insert('barang', $data);
    }

    public function edit($post)
    {
        $data = [
            'barcode' => $post['barcode'],
            'nama' => $post['nama'],
            'jumlah' => $post['jumlah'],
            'kondisi' => $post['kondisi'],
            'tgl_input' => $post['date'],
        ];
        $this->db->where('id_barang', $post['id']);
        $this->db->update('barang', $data);
    }

    public  function del($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
}
