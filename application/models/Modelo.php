<?php

class Modelo extends CI_Model {

  function __construct() {
    parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
  }

  function agregar_bancos($result){
      foreach ($result['getBankListResult']['item'] as $key){
          if($key['bankCode'] != 0){
              $this->db->where('bankCode', $key['bankCode']);
              $cons = $this->db->get('bancos');
              if($cons->num_rows() != 0) {
                  $datos = array(
                      'bankName' => $key['bankName']
                  );
                  $this->db->where('bankCode', $key['bankCode']);
                  $this->db->update('bancos', $datos);
              }else{
                  $datos = array(
                      'bankCode' => $key['bankCode'],
                      'bankName' => $key['bankName']
                  );
                  $this->db->insert('bancos', $datos);
              }
          }
      }
  }

  function consultar_bancos(){
      $cons = $this->db->get('bancos');
      return $cons->result();
  }

  function usuarios($datos){
        if($datos['tipo_operacion'] == 0){
            $this->db->select('documentType, document');
            $this->db->where('emailAddress',$datos['correo']);
            $result = $this->db->get('persona');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }
        else{
            $enviar = array(
                'documentType' => $datos['tip_ident'],
                'document' => $datos['document'],
                'firstName' => $datos['nombre'],
                'lastName' => $datos['apellido'],
                'company' => $datos['company'],
                'emailAddress' => $datos['correo'],
                'address' => $datos['direccion'],
                'city' => $datos['ciudad'],
                'province' => $datos['provincia'],
                'country' => $datos['pais'],
                'pregunta' => $datos['pregunta'],
                'respuesta' => $datos['respuesta'],
                'phone' => $datos['tel'],
                'mobile' => $datos['tel']
            );
            $this->db->insert('persona', $enviar);
            if($this->db->insert_id() > 0){
                return true;
            }else{
                return false;
            }
        }
  }

  function person($correo){
      $this->db->select('document, documentType, firstName, lastName, company, emailAddress, address, city, province, country');
      $this->db->where('emailAddress',$correo);
      $result = $this->db->get('persona');
      if($result->num_rows() > 0){
          return $result->result();
      }else{
          return false;
      }
  }

}
?>
