<?php

defined('BASEPATH') or exit('No direct script access allowed');

class surat_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
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
            'tgl_masuk' => $post['tgl_masuk']
        ];
        $this->db->insert('surat_masuk', $data);
    }

    public function edit($post)
    {
        $data = [
            'nama_surat' => $post['nama_surat'],
            'perihal' => $post['perihal'],
            'Desposisi' => $post['desposisi'],
            'tgl_masuk' => $post['tgl_masuk']
        ];
        $this->db->where('id_surat', $post['id']);
        $this->db->update('surat_masuk', $data);
    }

    public function del($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->delete('surat_masuk');
    }
}


/* End of file surat_m.php */
