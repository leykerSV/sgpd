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
Class Userdb extends CI_Model
{

    function login($username, $password)
    {
        date_default_timezone_set('America/Argentina/Cordoba');
        $db2 = $this->load->database('otradb',TRUE);    
        $db2->select('id, nombre, email, username, password, nivel, habilitado');
        $db2->from('users');
        $db2->where('username = ' . "'" . $username . "'");
        $db2->where('password = ' . "'" . MD5($password) . "'");
        $db2->where('habilitado = ' . "'" . 1 . "'");
        $db2->limit(1);

        $query = $db2->get();
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