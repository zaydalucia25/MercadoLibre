<?php
	class MdLista_Productos extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function ListarProductos() {
			$this->db->select("*");
			$this->db->from('productos');
			
			// Retornar resultados
			return $this->db->get()->result();
		}
		public function BuscarProductoPorId($intProductoId){
			$this->db->select("*");
			$this->db->from('productos');
			$this->db->where('id', $intProductoId);
			// Retornar resultados
			return $this->db->get()->result();
		}
		
		public function BuscarProductoPorNombre($strNombre){
			$this->db->select("*");
			$this->db->from('productos');
			$this->db->like('nombre', $strNombre);
			// Retornar resultados
			return $this->db->get()->result();
		}

		public function subirProducto($nombre, $imagen, $subcategoria, $precio, $vendidos, $stock) {
      $this->db->set('nombre', $nombre);
      $this->db->set('imagen', $imagen);
      $this->db->set('subcategoria', $subcategoria);
      $this->db->set('precio', $precio);
      $this->db->set('vendidos', $vendidos);
      $this->db->set('stock', $stock);
      $this->db->insert('productos');
      // Retornar id insertado
      return $this->db->insert_id();
		}
	}
?>