<?php
class Fungsi
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function user_login()
    {
        $this->CI->load->model('user_m');
        $user_id = $this->CI->session->userdata('userid');
        $user_data = $this->CI->user_m->get($user_id)->row();
        return $user_data;
    }

    public function count_anggota()
    {
        $this->CI->load->model('anggota_m');
        return $this->CI->anggota_m->get()->num_rows();
    }

    public function count_user()
    {
        $this->CI->load->model('user_m');
        return $this->CI->user_m->get()->num_rows();
    }
}
