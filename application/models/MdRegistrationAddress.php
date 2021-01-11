<?php
    class MdRegistrationAddress extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        public function agregar($strIdUsuario,$StrNombre_apellido, $StrCodigo_postal, $StrEstado, $StrMunicipio, $StrColonia, $StrCalle, $StrNumero_exterior, $StrNumero_interior, $StrEntre_calles,$StrReferencias,$StrTelefono){
        $this->db->set('nombre_apellido', $StrNombre_apellido);
        $this->db->set('id_usuario', $strIdUsuario);
        $this->db->set('codigo_postal', $StrCodigo_postal);
        $this->db->set('estado', $StrEstado);
        $this->db->set('municipio', $StrMunicipio);
        $this->db->set('colonia', $StrColonia);
        $this->db->set('calle', $StrCalle);
        $this->db->set('numero_exterior', $StrNumero_exterior);
        $this->db->set('numero_interior', $StrNumero_interior);
        $this->db->set('entre_calles', $StrEntre_calles);
        $this->db->set('referencias', $StrReferencias);
        $this->db->set('telefono', $StrTelefono);
        //Se ejecuta la instrucción para guardar la información en la tabla 'alumno'. 
        $this->db->insert('direccion');
        return $this->db->affected_rows();
    }

    public function mostrar(){

    }
    }
?>