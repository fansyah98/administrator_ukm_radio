<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_m_k');
    }

    public function index()
    {
        $data = array(
            'a' => 'data surat keluar',
            'row' => $this->surat_m_k->get()->result()
        );
        $this->template->load('template', 'suratkeluar/data_surat', $data);
    }

    public function add()
    {
        $suratkeluar = new stdClass();
        $suratkeluar->id_surat = null;
        $suratkeluar->nama_surat = null;
        $suratkeluar->perihal = null;
        $suratkeluar->Desposisi = null;
        $suratkeluar->date = null;
        $suratkeluar->nomor_surat = null;
        $data = [
            'page' => 'add',
            'suratkeluar' => $suratkeluar,
        ];
        $this->template->load('template', 'suratkeluar/tambah_data_sura_keluar', $data);
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->surat_m_k->add($post);
        } else if (isset($_POST['edit'])) {
            $this->surat_m_k->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
            alert('Data Berhasil di tambahkan');
            window.location='" . site_url('keluar') . "';
        </script>";
        }
    }

    public function del($id)
    {
        $this->surat_m_k->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script> 
            alert('Data Berhasil di Hapus!!');
            window.location='" . site_url('keluar') . "';
        </script>";
        }
    }

    public function edit($id)
    {
        $query = $this->surat_m_k->get($id);
        if ($query->num_rows() > 0) {
            $surat = $query->row();
            $data = array(
                'a' => 'edit data user ',
                'page' => 'edit',
                'suratkeluar' => $surat
            );
            $this->template->load('template', 'suratkeluar/tambah_data_sura_keluar', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('surat/add_surat');
        }
    }
}
