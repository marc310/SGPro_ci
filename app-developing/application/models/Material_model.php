<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Material_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get material by id_material
     */
    function get_material($id_material)
    {
        return $this->db->get_where('material',array('id_material'=>$id_material))->row_array();
    }
        
    /*
     * Get all material
     */
    function get_all_material()
    {
        $this->db->order_by('id_material', 'desc');
        return $this->db->get('material')->result_array();
    }
        
    /*
     * function to add new material
     */
    function add_material($params)
    {
        $this->db->insert('material',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update material
     */
    function update_material($id_material,$params)
    {
        $this->db->where('id_material',$id_material);
        return $this->db->update('material',$params);
    }
    
    /*
     * function to delete material
     */
    function delete_material($id_material)
    {
        return $this->db->delete('material',array('id_material'=>$id_material));
    }
}
