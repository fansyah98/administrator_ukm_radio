<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_m_k extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('surat_keluar');
        if ($id != null) {
            $this->db->where('id_surat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $data = [
            'nama_surat' => $post['nama_surat'],
            'perihal' => $post['perihal'],
            'Desposisi' => $post['desposisi'],
            'date' => $post['tgl_keluar'],
            'nomor_surat' => $post['nomor_surat'],
        ];
        $this->db->insert('surat_keluar', $data);
    }

    public function del($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->delete('surat_keluar');
    }

    public function edit($post)
    {
        $data = [
            'nama_surat' => $post['nama_surat'],
            'perihal' => $post['perihal'],
            'Desposisi' => $post['desposisi'],
            'date' => $post['tgl_keluar'],
            'nomor_surat' => $post['nomor_surat'],
        ];
        $this->db->where('id_surat', $post['id']);
        $this->db->update('surat_keluar', $data);
    }
}
