<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author steven
 */
class Usuarios extends CI_Controller{
    
    public $data = array();
    
    public function login(){
        load_view('login', $this);
    }
}

?>
