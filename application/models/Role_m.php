<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('role_id');
        if ($id != null) {
            $this->db->where('role_id',  $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('role_id', $id);
        $this->db->delete('role_id');
    }

    public function add($post)
    {

        $data = [
            'nama' => $post['nama'],
        ];
        $this->db->insert('role_id', $data);
    }

    public function edit($post)
    {
        $data = [
            'nama' => $post['nama'],
        ];
        $this->db->where('role_id', $post['id']);
        $this->db->update('role_id', $data);
    }
}
