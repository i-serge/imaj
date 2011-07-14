<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ajax
 *
 * @author steven
 */
class Ajax extends CI_Controller{
    
    public function index( ){
        $this->load->view( 'index' );
    }
    
    public function load( $view ){
        $this->load->view( $view );
    }
}

?>
