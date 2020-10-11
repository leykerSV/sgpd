<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Formulariot_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get formulariot by idformularioT
     */
    function get_formulariot($idformularioT)
    {
        return $this->db->get_where('formulariot',array('idformularioT'=>$idformularioT))->row_array();
    }
        
    /*
     * Get all formulariot
     */
    function get_all_formulariot()
    {
        $this->db->order_by('idformularioT', 'desc');
        return $this->db->get('formulariot')->result_array();
    }
        
    /*
     * Get formulariofyc by idformulariofyc
     */
    function get_formulariot_prov($idproveedor)
    {
        return $this->db->get_where('formulariot',array('idproveedor'=>$idproveedor))->row_array();
    }


    /*
     * function to add new formulariot
     */
    function add_formulariot($params)
    {
        $this->db->insert('formulariot',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update formulariot
     */
    function update_formulariot($idformularioT,$params)
    {
        $this->db->where('idformularioT',$idformularioT);
        return $this->db->update('formulariot',$params);
    }
    
    /*
     * function to delete formulariot
     */
    function delete_formulariot($idformularioT)
    {
        return $this->db->delete('formulariot',array('idformularioT'=>$idformularioT));
    }
}
