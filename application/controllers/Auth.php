<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['login'])) {
            $this->load->model('user_m', 'user');
            $query = $this->user->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->id_user,
                    'level'  => $row->level
                );
                $this->session->set_userdata($params);
                echo "<script> 
                    alert('Selamat Login Anda Berhasil ');
                    window.location='" . site_url('dashboard') . "';
                </script>";
            } else {
                echo "<script> 
                alert('Login gagal , Username / password salah');
                window.location='" . site_url('auth/login') . "';
            </script>";
            }
        }
    }

    public function keluar()
    {
        $params = array(
            'userid',
            'level'
        );
        $this->session->unset_userdata($params);
        echo "<script> 
                alert('Selamat Anda Berhasil Keluar ');
                window.location='" . site_url('auth/login') . "';
            </script>";
    }
}

/* End of file Auth.php */
