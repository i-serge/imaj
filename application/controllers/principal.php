<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of principal
 *
 * @author steven
 */
class Principal extends CI_Controller{

	public $data = array();

    public function index(){
		$this->load->database();
		$result = $this->db->query('SELECT * FROM usuarios');
		foreach($result->result() as $row)
		{
			$this->data['nombre'] = $row->Nombre;
			$this->data['usuario'] = $row->Usuario;
			$this->data['contrasena'] = $row->Contrasena;
		}

        $this->load->view( 'index', $this->data);
    }
}

?>
