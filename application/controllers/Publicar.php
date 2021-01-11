<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {
	public function index()
	{
		// Almacenar vista "publicar" en arrDatos
		$arrDatos['strContenido'] = $this->load->view('publicar', NULL, TRUE);

		// Cargar vista pantalla_inicial con el contenido de la vista
		$this->load->view('pantalla_inicial', $arrDatos, FALSE);
	}

	public function subirImagen(){
    // Variable que retornará el nombre de la imagen o los errores
    $resultado = new stdClass();
    // Carpeta donde se guardarán las imagenes
    $directorio = 'img/';
    // Crear el directorio si no existe
    /*
    if (!file_exists($directorio))
      mkdir($directorio);
      */
    $config['upload_path'] = $directorio; // Establecer el directorio de subida
    $config['allowed_types'] = '*'; // Permitir todos los formatos
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('imagen')) { // Indicar si la imagen no se subió
      $resultado->intError = 1;
      $resultado->strMensaje = $this->upload->display_errors();
    }
    else{
      $resultado->strNombreImagen = $this->upload->data()['file_name'];
    }
    $this->output->set_content_type('application/json')->set_output(json_encode($resultado));
  }

  public function subirProducto(){
  	// Retormar parámetros del post
  	$nombre = $this->input->post('nombre');
  	$imagen = $this->input->post('imagen');
  	$subcategoria = $this->input->post('subcategoria');
  	$precio = $this->input->post('precio');
    $vendidos = $this->input->post('vendidos');
  	$stock = $this->input->post('stock');
  	// Guardarlo en la BD
    $this->load->model('MdLista_Productos');
    $resultado = $this->MdLista_Productos->subirProducto($nombre, $imagen, $subcategoria, $precio, $vendidos, $stock);
  	// Retornar el resultado
  	$this->output->set_content_type('application/json')->set_output(json_encode($resultado));
  }
}
