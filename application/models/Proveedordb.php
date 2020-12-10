<?php
  /**
  * Modulo de Usarios.
  *
  * 
  * @package     geasoft/Modulos
  * @copyright   Copyright (c) Leyker Soft - 2016
  * @license     https://www.leyker.com.ar/eb/licencia.txt
  * @version     1.0.0
  * @author      Leyker <dleyendeker@gmail.com>
  *
  * @Date 25-16-2016
  *
  */
Class Proveedordb extends CI_Model
{

    function login($username, $password)
    {
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('proveedores');
        $this->db->where('empresa = ' . "'" . $username . "'");
        $this->db->where('pass = ' . "'" . MD5($password) . "'");
        $this->db->where('activo = ' . "'" . 1 . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {


            return $query->result();
        }
        else
        {
                return false;
        }
    }

    function formulariofyc($idproveedor){
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('formulariofyc');
        $this->db->where('idproveedor = ' . "'" . $idproveedor . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }    
    }

    function formulariot($idproveedor){
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('formulariot');
        $this->db->where('idproveedor = ' . "'" . $idproveedor . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }    
    }

    function doccomercial($idproveedor){
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('doccomercial');
        $this->db->where('idproveedor = ' . "'" . $idproveedor . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }    
    }

    function docingresoobra($idproveedor){
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('docingresoobra');
        $this->db->where('idproveedor = ' . "'" . $idproveedor . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }    
    }

    function docpagos($idproveedor){
        date_default_timezone_set('America/Argentina/Cordoba');
        $this->load->database();    
        $this->db->select('*');
        $this->db->from('docpagos');
        $this->db->where('idproveedor = ' . "'" . $idproveedor . "'");
        $this->db->limit(1);

        $query = $this->db->get();
        $a=$query->result();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
                return false;
        }    
    }

}   