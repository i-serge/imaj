<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_url_helper
 *
 * @author steven
 */
function load_view($view, $CI) {
    if (@file_exists(APPPATH . "views/$view.php"))
        $CI->data['view'] = $view;
    else
        $CI->data['view'] = "index";

    $CI->load->view('template', $CI->data);
}