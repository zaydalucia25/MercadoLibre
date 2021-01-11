<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('MdLogin');
	}

	public function index() {
		// Ocultar elementos
		$arrDatos['bOcultarElementos'] = true;
		// Ocultar footer
		$arrDatos['bOcultarFooter'] = true;
		// Almacenar vista registration en arrDatos
		$arrDatos['strContenido'] = $this->load->view('login', NULL, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista registration
        $this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}

	public function iniciarSesion() {
		/* Validar datos ingresados */
		$this->form_validation->set_rules(
			'strEmail', 'E-mail',
			'required|max_length[100]',
			array(
				'required'      => 'Ingrese un %s.'
			)
		);

		$this->form_validation->set_rules(
			'strContraseña', 'Contraseña',
			'required|max_length[20]',
			array(
				'required'      => 'Ingrese una %s.',
				'max_length'    => 'La %s debe tener un numero maximo de 20 caracteres.'
			)
		);

		// Si no se validaron los datos
		if ($this->form_validation->run() == FALSE) {
			$arrDatos['intExito'] = 0;
			$arrDatos['arrError'] = $this->form_validation->error_array();
		}
		else {
			// Almacenar datos ingresados
			$strEmail = $this->input->post('strEmail');
			$strContraseña = $this->input->post('strContraseña');

			// Iniciar sesion
			$arrDatos['registro'] = $this->MdLogin->iniciarSesion($strEmail, $strContraseña);

			// Si se encontraron los datos
			if(sizeof($arrDatos['registro']) != 0) {
				// Almacenar datos en cookies de sesion
				$data = array(
					'id' => $arrDatos['registro'][0]->id,
					'email' => $arrDatos['registro'][0]->email,
					'nombre' => $arrDatos['registro'][0]->nombre,
					'apellido' => $arrDatos['registro'][0]->apellido,
					'rfc' => $arrDatos['registro'][0]->rfc,
					'razonSocial' => $arrDatos['registro'][0]->razon_social
				);

				$this->session->set_userdata($data);
			}
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($arrDatos));
	}
}
