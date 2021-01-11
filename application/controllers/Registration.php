<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('MdRegistration');
	}

	public function index() {
		// Ocultar elementos
		$arrDatos['bOcultarElementos'] = true;
		// Almacenar vista registration en arrDatos
		$arrDatos['strContenido'] = $this->load->view('registration', NULL, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista registration
        $this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}

	public function guardar() {
		/* Validar datos ingresados */
		$this->form_validation->set_rules(
			'strEmail', 'E-mail',
			'required|max_length[100]|valid_email|is_unique[usuarios.email]',
			array(
				'required'      => 'Ingrese un %s.',
				'valid_email'   => 'Ingrese un %s valido.',
				'is_unique'     => 'El %s ya existe.'
			)
		);

		$this->form_validation->set_rules(
			'strContraseña', 'Contraseña',
			'required|min_length[6]|max_length[20]',
			array(
				'required'      => 'Ingrese una %s.',
				'min_length'    => 'La %s debe tener un numero minimo de 6 caracteres.',
				'max_length'    => 'La %s debe tener un numero maximo de 20 caracteres.'
			)
		);

		$this->form_validation->set_rules(
			'strNombre', 'Nombre',
			'required|min_length[2]|max_length[30]',
			array(
				'required'      => 'Ingrese un %s.',
				'min_length'    => 'El %s debe tener un numero minimo de 2 caracteres.',
				'max_length'    => 'El %s debe tener un numero maximo de 30 caracteres.'
			)
		);

		$this->form_validation->set_rules(
			'strApellido', 'Apellido',
			'required|min_length[2]|max_length[30]',
			array(
				'required'      => 'Ingrese un %s.',
				'min_length'    => 'El %s debe tener un numero minimo de 2 caracteres.',
				'max_length'    => 'El %s debe tener un numero maximo de 30 caracteres.'
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
			$strNombre = $this->input->post('strNombre');
			$strApellido = $this->input->post('strApellido');

			// Guardar cuenta
			$intIdInsertado = $this->MdRegistration->guardar($strEmail, $strContraseña, $strNombre, $strApellido);

			// Si el id de la cuenta es mayor o igual a 1
			if($intIdInsertado >= 1) {
				$arrDatos['intExito'] = 1;
				$arrDatos['strMensaje'] = 'El registro se guardo correctamente!';
				
				// Almacenar datos en cookies de sesion
				$data = array(
					'id' => $this->db->insert_id(),
					'email' => $strEmail,
					'nombre' => $strNombre,
					'apellido' => $strApellido,
					'rfc' => '',
					'razonSocial' => ''
				);

				$this->session->set_userdata($data);
			}
			else {
				$arrDatos['strMensaje'] = 'No se pudo guardar el registro, intentelo de nuevo!';
			}
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($arrDatos));
	}
}
