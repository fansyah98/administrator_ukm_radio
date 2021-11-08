<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('anggota_m');
    }

    public function index()
    {

        $data = [
            'a' => 'Data Anggota ukm radio',
            'b' => 'views data anggota',
            'row' => $this->anggota_m->get(),

        ];
        $this->template->load('template', 'anggota/data_anggota', $data);
    }

    public function add()
    {
        $anggota = new stdClass();
        $anggota->id_anggota = null;
        $anggota->nrp = null;
        $anggota->nama = null;
        $anggota->email = null;
        $anggota->jabatan = null;
        $anggota->JK = null;
        $anggota->status = null;
        $data = [
            'page' => 'add',
            'a' => 'tambah data anggota',
            'anggota' => $anggota
        ];
        $this->template->load('template', 'anggota/add_anggota', $data);
    }

    public function edit($id)
    {
        $query = $this->anggota_m->get($id);
        if ($query->num_rows() > 0) {
            $anggota = $query->row();
            $data = array(
                'a' => 'edit data user ',
                'page' => 'edit',
                'anggota' => $anggota
            );
            $this->template->load('template', 'anggota/add_anggota', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('anggota/add_anggota');
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->anggota_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->anggota_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
            alert('Data Berhasil di tambahkan');
            window.location='" . site_url('anggota') . "';
        </script>";
        }
    }

    public function delete($id)
    {
        $this->anggota_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
                    alert('Data berhasil di hapus ');
                    window.location='" . site_url('anggota') . "';
                </script>";
        }
    }


    public function detail($id)
    {
        $data = [
            'a'  => 'data detail anggota',
            'row' => $this->anggota_m->get($id)
        ];
        $this->template->load('template', 'anggota/detail_anggota', $data);
    }
}

/* End of file Anggota.php */
