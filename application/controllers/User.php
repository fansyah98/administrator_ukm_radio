<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_m');
    }

    public function index()
    {
        $data = [
            'a' => 'data user admin aktif',
            'b' => 'Data User',
            'row' => $this->user_m->get(),
        ];
        $this->template->load('template', 'user/user_data', $data);
    }

    public function del($id)
    {
        $this->user_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di hapus ');
        }
        redirect('user');
    }


    public  function add()
    {
        
    }
}

/* End of file User.php */
