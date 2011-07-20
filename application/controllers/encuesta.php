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

	public $data;

    public function index(){
		session_start();
		$this->load->library('PFBC/Form');

		$formEncuesta = new Form('formEncuesta', 752);
		$formEncuesta->configure(array(
				'action' => 'encuesta/process',
				'style' => 'font-size:.8em;',
				'view' => new View_Grid(array(1,2,3,1,1,1,3,3,2,2,2,2,2))
		));
		$formEncuesta->addElement(new Element_Hidden('formH', 'formEncuesta'));
		$formEncuesta->addElement(new Element_Textbox('Nombre del encuestador', 'txtEncuestador'));
		$formEncuesta->addElement(new Element_HTMLExternal('<fieldset><legend><h2>Datos personales</h2></legend>'));
		$formEncuesta->addElement(new Element_Textbox('Edad', 'txtEdad'));
		$formEncuesta->addElement(new Element_Select('Genero','selGenero', array(
						'Masculino','Femenino'
						)));
		$formEncuesta->addElement(new Element_Select('Estado civil','selEstadoCivil', array(
						'Soltero',
						'Casado',
						'Viudo',
						'Divorciado',
						'Unión Libre'
						)));
		$formEncuesta->addElement(new Element_Select('Escolaridad (terminada)','selEscolaridad', array(
						'Primaria',
						'Secundaria',
						'Preparatoria',
						'Licenciatura',
						'Maestría'
						)));
		$formEncuesta->addElement(new Element_Select('Ocupación','selOcupacon', array(
						'Estudiante',
						'Empleado',
						'Ambos',
						'Ninguna'
						)));
		$formEncuesta->addElement(new Element_HTMLExternal('</fieldset>'));
		$formEncuesta->addElement(new Element_HTMLExternal('<fieldset><legend><h2>Imagen Política</h2></legend>'));
		$formEncuesta->addElement(new Element_Textbox('¿Sabe usted que partido político gobierna actualmente su municipio?','txtPartidoPolitico', array(
						'description' => 'Si no sabe, deje el campo en blanco. De lo contrario escriba el nombre.'
						)));
		$formEncuesta->addElement(new Element_Textbox('¿Conoce el nombre de su presidente municipal?','txtPresidenteMunicipal', array(
						'description' => 'Si no sabe, deje el campo en blanco. De lo contrario escriba el nombre.'
						)));
		$formEncuesta->addElement(new Element_Textbox('¿Sabe usted a que distrito electoral pertenece?','txtDistrito', array(
						'description' => 'Si no sabe, deje el campo en blanco. De lo contrario escriba el nombre del partido político'
						)));
		/*///////////
		$formEncuesta->addElement(new Element_Sort('Ordene en grado de importancia los siguientes problemas de acuerdo a su comunidad','sortProblemas', array(
						'Alumbrado público',
						'Pavimentación',
						'Recolección de basura',
						'Seguridad pública',
						'Bandalismo',
						'Drenaje/Alcantarillado'), array(
						'description' => 'La opción que coloque en la parte superior será la de mayor importancia y la que coloque en lo parte inferior la de menor importancia.'
						)));
		*///////////
		$formEncuesta->addElement(new Element_HTMLExternal('<h3>Considera los siguientes problemas en tu comunidad y ordenalos del 1 al 6 por importancia, siendo el 1 el más importante</h3>'));
		$formEncuesta->addElement(new Element_Select('Alumbrado público', 'selAlumbrado', array(
						1,2,3,4,5,6
						)));
		$formEncuesta->addElement(new Element_Select('Pavimentación', 'selPavimentacion', array(
						1,2,3,4,5,6
						)));
		$formEncuesta->addElement(new Element_Select('Recolección de basura', 'selBasura', array(
						1,2,3,4,5,6
						)));
		$formEncuesta->addElement(new Element_Select('Seguridad pública', 'selSeguridad', array(
						1,2,3,4,5,6
						)));
		$formEncuesta->addElement(new Element_Select('Bandalismo', 'selBandalismo', array(
						1,2,3,4,5,6
						)));
		$formEncuesta->addElement(new Element_Select('Drenaje/Alcantarillado', 'selDrenaje', array(
						1,2,3,4,5,6
						)));
		////////////
		$formEncuesta->addElement(new Element_Select('¿Cuenta con algún seguro médico?','selSeguro', array(
						'IMSS',
						'ISSSTE',
						'Seguro Popular',
						'Privado',
						'Ninguno'
						)));
		$formEncuesta->addElement(new Element_Checkbox('¿Participa en alguna de las siguientes actividades?','selActividades', array(
						'Militante de partido político',
						'Asociación civil',
						'Fundación',
						'Junta de Colonos',
						'Otra'
						)));
		$formEncuesta->addElement(new Element_Select('¿Qué desempeño tiene su presidente municipal?','selDesempeno', array(
						'Muy bueno',
						'Bueno',
						'Regular',
						'Malo',
						'Muy malo'
						)));
		$formEncuesta->addElement(new Element_Select('¿Qué motiva su voto por algún candidato?','selMotiva', array(
						'Partido Político',
						'Imagen del candidato',
						'Propuestas del candidato'
						)));
		$formEncuesta->addElement(new Element_Select('¿Cree que la política es necesaria para solucionar los problemas de tu comunidad y/o municipio?','selPoliticaNecesaria', array(
						'Si',
						'No'
						)));
		$formEncuesta->addElement(new Element_Select('¿Participarías en la política en alguna forma?','selParticiparias', array(
						'Partido político',
						'Asociación civil',
						'Participación ciudadana',
						'Junta de colonos',
						'No participaría'
						)));
		$formEncuesta->addElement(new Element_HTMLExternal('</fieldset>'));
		$formEncuesta->addElement(new Element_HTMLExternal('<fieldset><legend><h2>Información laboral</h2></legend>'));
		$formEncuesta->addElement(new Element_Select('¿Trabaja dentro del municipio en donde habita?','selTrabaja', array(
						'Si',
						'No'
						)));
		$formEncuesta->addElement(new Element_Select('Su trabajo es:','selLapsoTrabajo', array(
						'Permanente',
						'Temporal',
						'Por eventos'
						)));
		$formEncuesta->addElement(new Element_Select('¿Has sido beneficiario de algún programa de tu gobierno?','selBeneficiario', array(
						'Si',
						'No'
						)));
		$formEncuesta->addElement(new Element_Textbox('¿De cuál?','txtBeneficiario'));
		$formEncuesta->addElement(new Element_HTMLExternal('</fieldset>'));
		$formEncuesta->addElement(new Element_Button('Enviar'));
		$this->data['form'] = $formEncuesta;
        $this->load->view('view_encuesta', $this->data);
    }

	public function process()
	{
		/*
		$this->load->library('validation');

		$fields['txtEncuestador'] = 'txtEncuestador';
		$fields['txtEdad'] = 'txtEdad';
		$this->validation->set_fields($fields);

		$rules['txtEncuestador'] = 'required';
		$rules['txtEdad'] = 'required';
		$this->validation->set_rules($rules);*/
		print($this->input->post('txtEncuestador'));
	}
}
