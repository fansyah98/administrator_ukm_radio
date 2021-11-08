<?php
class Template
{

    //ini fungsi diguanakan untuk menangkap template
    var $template_data = array();

    //fungsi ini digunakan untuk set template
    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    // ini fungsi yang di gunakan untuk load template
    function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
