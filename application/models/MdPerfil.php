<?php
	class MdPerfil extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		public function BuscarUsuarioId($intUsuarioId){
			$this->db->select("*");
			$this->db->from('usuarios');
			$this->db->where('id', $intUsuarioId);
			// Retornar resultados
			return $this->db->get()->result();
		}

		public function MdModificarUsuario($id,$strUsuario)
		{
			$this->db->set('nombre', $strUsuario);
			$this->db->where('id',$id);
			$this->db->update('usuarios');
			return $this->db->affected_rows();
		}

		public function ActualizarEmail($id,$strEmail)
		{
			$this->db->set('email', $strEmail);
			$this->db->where('id',$id);
			$this->db->update('usuarios');
			return $this->db->affected_rows();
		}		
		
	}
?>