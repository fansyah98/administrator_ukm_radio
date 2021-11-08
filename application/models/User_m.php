<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('role_id', 'role_id.role_id  = user.level');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $data = $this->db->get();
        return $data;
    }

    public function login($post)
    {

        $this->db->select('*');
        $this->db->from('user', 'dec');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {

        $this->db->where('id_user' , $id );
        $this->db->delete('user');

    }
}

/* End of file User_m.php */
