<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	function __construct(){
    parent::__construct();
    $this->load->model('MdPerfil');
    }
	public function index()
	{
		// Recibir el id del usuario a buscar
		$intUsuarioId = $this->input->get('id'); 
		// Si se asignó un id del usuario, buscar sus datos
		if($intUsuarioId)
		{
			// Buscar el usuario por su id
			$datos['usuario'] = $this->MdPerfil->BuscarUsuarioId($intUsuarioId)[0];
			// Almacenar vista "perfil" en arrDatos
			$arrDatos['strContenido'] = $this->load->view('perfil', $datos, TRUE);
			// Cargar vista pantalla_inicial con el contenido de la vista
			$this->load->view('pantalla_inicial', $arrDatos, FALSE);
		}
		// Si no se especificó el id, regresar a la página inicial
		else
		{
			redirect('Inicio');
		}
	}

	public function VistaModificarUsuario()
	{
		// Recibir el id del usuario a buscar
		$intUsuarioId = $this->input->get('id'); 
		// Si se asignó un id del usuario, buscar sus datos
		if($intUsuarioId)
		{
			// Buscar el usuario por su id
			$datos['usuario'] = $this->MdPerfil->BuscarUsuarioId($intUsuarioId)[0];
			// Almacenar vista "modificarUsuario" en arrDatos
			$arrDatos['strContenido'] = $this->load->view('modificarUsuario', $datos, TRUE);
			// Cargar vista pantalla_inicial con el contenido de la vista
			$this->load->view('pantalla_inicial', $arrDatos, FALSE);
		}
		// Si no se especificó el id, regresar a la página inicial
		else
		{
			redirect('Inicio');
		}
	}

	public function ModificarUsuario()
	{
		$id = $this->input->post('id');
		$StrUsuario = $this->input->post('strUsuario');
		$intResultado = $this->MdPerfil->MdModificarUsuario($id,$StrUsuario);

		if($intResultado == 1)
		{
		  
		 redirect('Inicio');
			
		} 
		 // Si no se especificó el id, regresar a la página inicial
		else
		{
			redirect('Inicio');
		}
	}

	public function VistaModificarEmail()
	{
		// Recibir el id del usuario a buscar
		$intUsuarioId = $this->input->get('id'); 
		// Si se asignó un id del usuario, buscar sus datos
		if($intUsuarioId)
		{
			// Buscar el usuario por su id
			$datos['usuario'] = $this->MdPerfil->BuscarUsuarioId($intUsuarioId)[0];
			// Almacenar vista "modificarUsuario" en arrDatos
			$arrDatos['strContenido'] = $this->load->view('modificarEmail', $datos, TRUE);
			// Cargar vista pantalla_inicial con el contenido de la vista
			$this->load->view('pantalla_inicial', $arrDatos, FALSE);
		}
		// Si no se especificó el id, regresar a la página inicial
		else
		{
			redirect('Inicio');
		}
	}

	public function ActualizarEmail()
	{
		$id = $this->input->post('id');
		$StrEmail = $this->input->post('strEmail');
		$intResultado = $this->MdPerfil->ActualizarEmail($id,$StrEmail);

		if($intResultado == 1)
		{
		  
		 redirect('Inicio');
			
		} 
		 else {
			redirect('Inicio');
		 }
	}


}