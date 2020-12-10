<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Docingresoobra_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get doccomercial by iddoccomercial
     */
    function get_docingresoobra($idproveedor)
    {
        return $this->db->get_where('docingresoobra',array('idproveedor'=>$idproveedor))->row_array();
    }
        
    /*
     * Get all doccomercial
     */
    function get_all_docingresoobra()
    {
        $this->db->order_by('iddocingresoobra', 'desc');
        return $this->db->get('docingresoobra')->result_array();
    }
        
    /*
     * function to add new doccomercial
     */
    function add_docingresoobra($params)
    {
        $this->db->insert('docingresoobra',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update doccomercial
     */
    function update_docingresoobra($iddocingresoobra,$params)
    {
        $this->db->where('iddocingresoobra',$iddocingresoobra);
        return $this->db->update('doccomercial',$params);
    }
    
    /*
     * function to delete doccomercial
     */
    function delete_docingresoobra($iddocingresoobra)
    {
        return $this->db->delete('docingresoobra',array('iddocingresoobra'=>$iddocingresoobra));
    }
}
