<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author steven
 */
class login extends CI_Controller {

    public $data = array();
    
    public function index() {
        $this->load->view('login');
    }

    public function validate() {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM usuarios WHERE usuario="'.$_POST['usuario'].'" AND contrasena="'.$_POST['password'].'"' );
        if( $query->num_rows()== 1 ){
            redirect( 'principal');
        }else{
            $this->data['error']="Usuario y/o password no son validos";
            $this->load->view( 'login' , $this->data );
        }
    }
}

?>
