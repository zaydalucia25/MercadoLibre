<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salir extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('MdLogin');
	}

	public function index() {
		// Destruir sesion
		$this->session->sess_destroy();

		// Pagina de inicio
		redirect('/');
	}
}
