<?php

/**
 * Description of sesion
 *
 * @author steven
 */
class sesion {
    public function check_login(){
        /*
        if( !isset( $_SESSION['logged'] ) ){
            $CI = &get_instance();
            if( $CI->uri->segment(1)!='login' )
                redirect('login');
        }*/
        $CI = &get_instance();
        if ( !$CI->session->userdata('logged_in') ) {
            if( $CI->uri->segment(1)!='login' )
                redirect( login );
        }
    }
}

?>
