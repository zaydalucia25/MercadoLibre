<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {
	public function index()
	{
		// Almacenar vista "categorias" en arrDatos
		$arrDatos['strContenido'] = $this->load->view('categorias', NULL, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}
}
