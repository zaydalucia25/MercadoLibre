<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direcciones extends CI_Controller {

	function __construct(){
    parent::__construct();
    $this->load->model('MdRegistrationAddress');
    }
	public function index()
	{
		$arrDatos['strContenido'] = $this->load->view('Direcciones', NULL, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
		


	}
	public function registrar(){
    $arrDatos['strContenido'] = $this->load->view('Direcciones', NULL, TRUE);
    $this->load->view('pantalla_inicial', $arrDatos);
  }
	public function guardar(){
			$this->form_validation->set_rules(
		      'StrNombre_apellido', 'nombre y apellido','required',
		      array(
		        'required'  => 'Ingrese su %s.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrCodigo_postal', 'codigo postal','required|numeric|exact_length[5]',
		      array(
		        'required'  => 'Ingrese su %s.',
		        'numeric'   => 'El %s debe de ser un número.',
		        'exact_length'   => 'El %s debe tener 5 digitos.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrEstado', 'estado','required',
		      array(
		        'required'  => 'Ingrese el %s.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrMunicipio', 'municipio','required',
		      array(
		        'required'  => 'Ingrese el %s.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrColonia', 'colonia','required',
		      array(
		        'required'  => 'Ingrese la %s.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrCalle', 'calle','required',
		      array(
		        'required'  => 'Ingrese la %s.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrNumero_exterior', 'numero exterior','required|numeric',
		      array(
		        'required'  => 'Ingrese el %s.',
		        'numeric'   => 'El %s debe de ser un número.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrNumero_interior', 'numero interior','numeric',
		      array(
		        'numeric'   => 'El %s debe de ser un número.',
		      )
		    );
		    $this->form_validation->set_rules(
		      'StrTelefono', 'numero de telefono','required|numeric|exact_length[10]',
		      array(
		      	'required'  => 'Ingrese el %s.',
		        'numeric'   => 'El %s debe de ser un número.',
		        'exact_length'   => 'El %s debe tener 10 digitos.',
		      )
		    );
		    $intResultado = 0;
		    if ($this->form_validation->run() == TRUE) {
		    	$strIdUsuario = $this->session->userdata('id');
				$StrNombre_apellido = $this->input->post('StrNombre_apellido');      
			    $StrCodigo_postal = $this->input->post('StrCodigo_postal');
			    $StrEstado = $this->input->post('StrEstado');
			    $StrMunicipio = $this->input->post('StrMunicipio');
			    $StrColonia = $this->input->post('StrColonia');
			    $StrCalle = $this->input->post('StrCalle');
			    $StrNumero_exterior = $this->input->post('StrNumero_exterior');
			    $StrNumero_interior = $this->input->post('StrNumero_interior');
			    $StrEntre_calles = $this->input->post('StrEntre_calles');
			    $StrReferencias = $this->input->post('StrReferencias');
			    $StrTelefono = $this->input->post('StrTelefono');
			    // Se guarda en la variable que se hicieron cambios en la base de datos
			    $intResultado = $this->MdRegistrationAddress->agregar($strIdUsuario,$StrNombre_apellido, $StrCodigo_postal, $StrEstado, $StrMunicipio, $StrColonia, $StrCalle, $StrNumero_exterior, $StrNumero_interior, $StrEntre_calles,$StrReferencias,$StrTelefono);
		    }
		    if($intResultado == 1){
		      redirect('Direcciones');
		    } 
		    else {
		      $this->registrar();
		    }

	    }
}
