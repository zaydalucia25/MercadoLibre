<?php
    class MdRegistrationCompany extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        public function guardar($strEmail, $strContraseña, $strRFC, $strRazonSocial) {
            $this->db->set('email', $strEmail);
            $this->db->set('contrasena', $strContraseña);
            $this->db->set('rfc', $strRFC);
            $this->db->set('razon_social', $strRazonSocial);
            $this->db->insert('usuarios');

            // Retornar id insertado
            return $this->db->insert_id();
        }
    }
?>