<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('MdLista_Productos');
	}


	/**
	 * Este es el controlador de Inicio.
	 * Se carga por default, como se especificó en:
	 * config/routes.php
	 *
	 * Se puede cargar con las siguientes URL:
	 * http://localhost/TI/
	 * http://localhost/TI/inicio
	 * http://localhost/TI/index.php/inicio/index
	 *
	 * Dado que en la raíz se definió el archivo .htaccess, 
	 * se puede omitir el /index.php/
	 *
	 * El método index() se ejecuta por default, por lo que acceder
	 * a http://localhost/TI/inicio o http://localhost/TI/inicio/index
	 * es lo mismo.
	 */

	public function index()
	{
		//Hacer una consulta a la tabla productos y guardar el resultado en la variable
		$arrDatos['productos'] = $this->MdLista_Productos->ListarProductos();
		// Almacenar vista "lista_productos" en arrDatos
		$arrDatos['strContenido'] = $this->load->view('lista_productos', $arrDatos, TRUE);
		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}
}
