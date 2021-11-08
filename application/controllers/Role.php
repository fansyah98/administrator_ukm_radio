<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('role_m');
    }


    public function index()
    {
        $data  = array(
            'a' => 'data role user ',
            'row' => $this->role_m->get(),
        );
        $this->template->load('template', 'role/role_data', $data);
    }

    public function del($id)
    {
        $this->role_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
            alert('Data berhasi; di hapus');
            window.location='" . site_url('role') . "';
        </script>";
        }
    }

    public function edit($id)
    {
        $query = $this->role_m->get($id);
        if ($query->num_rows() > 0) {
            $role = $query->row();
            $data = array(
                'a' => 'edit data user ',
                'page' => 'edit',
                'role' => $role
            );
            $this->template->load('template', 'role/role_edit_data', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('anggota/add_anggota');
        }
    }

    public function add()
    {

        $role = new stdClass();
        $role->role_id = null;
        $role->nama = null;
        $data = [
            'page' => 'add',
            'a' => 'tambah data anggota',
            'role' => $role
        ];
        $this->template->load('template', 'role/role_edit_data', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->role_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->role_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
            alert('Data berhasil di tambahkan');
            window.location='" . site_url('role') . "';
        </script>";
        }
    }
}
