<?php
function check_already_login(){
    $CI =& get_instance();
    $user_session = $CI->session->userdata('userid');
    if($user_session){
        redirect('dashboard');
    }
}

function check_not_login(){
        $CI =& get_instance();
        $user_session = $CI->session->userdata('userid');
        if(!$user_session){
            redirect('auth/login');
        }
    }
