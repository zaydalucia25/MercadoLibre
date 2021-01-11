<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	function __construct() {
		parent::__construct();
		// Cargar el modelo para consultar productos
		$this->load->model('MdLista_Productos');
	}

	public function index()
	{
		// Recibir el id del producto a buscar
		$strNombre = $this->input->get('nombre'); 
		
		//Hacer una consulta a la tabla productos y guardar el resultado en la variable
		$arrDatos['productos'] = $this->MdLista_Productos->BuscarProductoPorNombre($strNombre);
		// Almacenar vista "lista_productos" en arrDatos
		$arrDatos['strContenido'] = $this->load->view('lista_productos', $arrDatos, TRUE);
		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}
}
