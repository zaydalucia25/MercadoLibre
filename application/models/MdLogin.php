<?php
    class MdLogin extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        public function iniciarSesion($strEmail, $strContraseña) {
            $this->db->select("*");
            $this->db->from('usuarios');
            $this->db->where('email', $strEmail);
            $this->db->where('contrasena', $strContraseña);

            // Retornar resultados
            return $this->db->get()->result();
        }
    }
?>