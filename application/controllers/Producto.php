<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function index()
	{
		// Recibir el id del producto a buscar
		$intProductoId = $this->input->get('id'); 
		// Si se asignó un id del producto, buscar sus datos
		if($intProductoId)
		{
			// Cargar el modelo para consultar productos
			$this->load->model('MdLista_Productos');
			// Buscar el producto por su id
			$datos['producto'] = $this->MdLista_Productos->BuscarProductoPorId($intProductoId)[0];
			// Almacenar vista "producto" en arrDatos
			$arrDatos['strContenido'] = $this->load->view('producto', $datos, TRUE);
			// Cargar vista pantalla_inicial con el contenido de la vista
			$this->load->view('pantalla_inicial', $arrDatos, FALSE);
		}
		// Si no se especificó el id, regresar a la página inicial
		else
		{
			redirect('Inicio');
		}
	}
}
