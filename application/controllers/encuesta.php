<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of encuesta
 *
 * @author steven
 */
class encuesta extends CI_Controller{
    
    public function index(){
        load_view( 'encuesta', $this);
    }
}
