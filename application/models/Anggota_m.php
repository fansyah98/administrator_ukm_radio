<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        if ($id != null) {
            $this->db->where('id_anggota', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $data = [
            'nrp' => $post['nrp'],
            'nama' => $post['nama'],
            'email' => $post['email'],
            'jabatan' => $post['jabatan'],
            'JK' => $post['JK'],
            'status' => $post['status']
        ];
        $this->db->insert('anggota', $data);
    }

    public function edit($post)
    {
        $data = [
            'nrp' => $post['nrp'],
            'nama' => $post['nama'],
            'email' => $post['email'],
            'jabatan' => $post['jabatan'],
            'JK' => $post['JK'],
            'status' => $post['status']
        ];
        $this->db->where('id_anggota', $post['id']);
        $this->db->update('anggota', $data);
    }

    public  function del($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('anggota');
    }
}


/* End of file Anggota_m.php */
