<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Proveedore_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get proveedor by idproveedor
     */
    function get_proveedor($idproveedor)
    {
        return $this->db->get_where('proveedores',array('idproveedor'=>$idproveedor))->row_array();
    }
        
    /*
     * Get all proveedores
     */
    function get_all_proveedores()
    {
        $this->db->order_by('idproveedor', 'desc');
        return $this->db->get('proveedores')->result_array();
    }

    function get_all_proveedores_backoffice()
    {
        return $this->db->get('formularios_proveedores')->result_array();
    }

    function get_all_proveedores_backoffice_prov($idproveedor)
    {
        return $this->db->query('select * from formularios_proveedor where idproveedor='.$idproveedor)->result_array();

    }
        
    /*
     * function to add new proveedor
     */
    function add_proveedor($params)
    {
        $this->db->insert('proveedores',$params);
        $vuelta = $this->db->insert_id();
        return $vuelta;
    }

    function add_formularios($idproveedor)
    {
        $a= 'insert into formulariofyc (idproveedor) values ('.$idproveedor.')';
        $query = $this->db->query($a);
        $a= 'insert into formulariot (idproveedor) values ('.$idproveedor.')';
        $query = $this->db->query($a);
        $a= 'insert into doccomercial (idproveedor) values ('.$idproveedor.')';
        $query = $this->db->query($a);
        $a= 'insert into docingresoobra (idproveedor) values ('.$idproveedor.')';
        $query = $this->db->query($a);
        $a= 'insert into docpagos (idproveedor) values ('.$idproveedor.')';
        $query = $this->db->query($a);
    }
    
    /*
     * function to update proveedor
     */
    function update_proveedor($idproveedor,$params)
    {
        $this->db->where('idproveedor',$idproveedor);
        return $this->db->update('proveedores',$params);
    }
    
    /*
     * function to delete proveedor
     */
    function delete_proveedor($idproveedor)
    {
        return $this->db->delete('proveedores',array('idproveedor'=>$idproveedor));
    }
}
