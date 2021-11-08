<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('barang_m');
    }

    public function index()
    {

        $data = [
            'a' => 'Data barang ukm radio',
            'row' => $this->barang_m->get(),

        ];
        $this->template->load('template', 'barang/data_barang', $data);
    }

    public function add()
    {
        $barang = new stdClass();
        $barang->id_barang = null;
        $barang->barcode = null;
        $barang->nama = null;
        $barang->jumlah = null;
        $barang->tgl_input = null;
        $barang->kondisi = null;
        $data = [
            'page' => 'add',
            'a' => 'tambah data barang',
            'barang' => $barang
        ];
        $this->template->load('template', 'barang/add_data_barang', $data);
    }

    public function edit($id)
    {
        $query = $this->barang_m->get($id);
        if ($query->num_rows() > 0) {
            $barang = $query->row();
            $data = array(
                'a' => 'edit data user ',
                'page' => 'edit',
                'barang' => $barang
            );
            $this->template->load('template', 'barang/add_data_barang', $data);
        } else {
            $this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('barang/add_barang');
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->barang_m->add($post);
        } else if (isset($_POST['edit'])) {
            $this->barang_m->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di tambahkan');
        }
        redirect('barang', 'refresh');
    }

    public function del($id)
    {
        $this->barang_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil di hapus ');
        }
        redirect('barang');
    }


    public function detail($id)
    {
        $data = [
            'a'  => 'data detail barang',
            'row' => $this->barang_m->get($id)
        ];
        $this->template->load('template', 'barang/detail_barang', $data);
    }
}

/* End of file barang.php */
