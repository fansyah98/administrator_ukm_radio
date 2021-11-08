<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_m');
    }

    public function index()
    {

        $data = [
            'a' => 'Data surat ukm radio',
            'b' => 'views data surat',
            'row' => $this->surat_m->get(),

        ];
        $this->template->load('template', 'surat/data_surat', $data);
    }

    public function add()
    {
        $surat = new stdClass();
        $surat->id_surat = null;
        $surat->nama_surat = null;
        $surat->perihal = null;
        $surat->Desposisi = null;
        $surat->tgl_masuk = null;
        $data = [
            'page' => 'add',
            'a' => 'tambah data surat',
            'surat' => $surat
        ];
        $this->template->load('template', 'surat/add_surat', $data);
    }

    public function edit($id)
    {
        $query = $this->surat_m->get($id);
        if ($query->num_rows() > 0) {
            $surat = $query->row();
            $data = array(
                'a' => 'edit data user ',
                'page' => 'edit',
                'surat' => $surat
            );
            $this->template->load('template', 'surat/add_surat', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('surat/add_surat');
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->surat_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->surat_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di tambahkan');
        }
        redirect('surat', 'refresh');
    }

    public function delete($id)
    {
        $this->surat_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di hapus ');
        }
        redirect('surat');
    }


    public function detail($id)
    {
        $data = [
            'a'  => 'data detail surat',
            'row' => $this->surat_m->get($id)
        ];
        $this->template->load('template', 'surat/detail_surat', $data);
    }
}

/* End of file surat.php */
