<?php
    class MdRegistration extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        public function guardar($strEmail, $strContraseña, $strNombre, $strApellido) {
            $this->db->set('email', $strEmail);
            $this->db->set('contrasena', $strContraseña);
            $this->db->set('nombre', $strNombre);
            $this->db->set('apellido', $strApellido);
            $this->db->insert('usuarios');

            // Retornar id insertado
            return $this->db->insert_id();
        }
    }
?>