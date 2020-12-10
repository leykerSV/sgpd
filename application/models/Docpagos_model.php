<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Docpagos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get doccomercial by iddoccomercial
     */
    function get_Docpagos($idproveedor)
    {
        return $this->db->get_where('docpagos',array('idproveedor'=>$idproveedor))->row_array();
    }
        
    /*
     * Get all doccomercial
     */
    function get_all_Docpagos()
    {
        $this->db->order_by('iddocpagos', 'desc');
        return $this->db->get('docpagos')->result_array();
    }
        
    /*
     * function to add new doccomercial
     */
    function add_Docpagos($params)
    {
        $this->db->insert('docpagos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update doccomercial
     */
    function update_Docpagos($iddocpagos,$params)
    {
        $this->db->where('iddocpagos',$iddocpagos);
        return $this->db->update('doccomercial',$params);
    }
    
    /*
     * function to delete doccomercial
     */
    function delete_Docpagos($iddocpagos)
    {
        return $this->db->delete('docpagos',array('iddocpagos'=>$idDocpagos));
    }
}