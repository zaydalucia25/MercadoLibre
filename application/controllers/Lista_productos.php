<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_productos extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('MdLista_Productos');
	}


	public function index()
	{
		//Hacer una consulta a la tabla productos y guardar el resultado en la variable
		$arrDatos['productos'] = $this->MdLista_Productos->ListarProductos();

		// Almacenar vista "producto" en arrDatos
		$arrDatos['strContenido'] = $this->load->view('lista_productos', $arrDatos, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}
}

