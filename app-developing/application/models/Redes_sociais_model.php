<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Redes_sociais_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get redes_sociais by id_redesocial
     */
    function get_redes_sociais($id_redesocial)
    {
        return $this->db->get_where('redes_sociais',array('id_redesocial'=>$id_redesocial))->row_array();
    }
    
    /*
     * Get all redes_sociais count
     */
    function get_all_redes_sociais_count()
    {
        $this->db->from('redes_sociais');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all redes_sociais
     */
    function get_all_redes_sociais($params = array())
    {
        $this->db->order_by('id_redesocial', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('redes_sociais')->result_array();
    }
        
    /*
     * function to add new redes_sociais
     */
    function add_redes_sociais($params)
    {
        $this->db->insert('redes_sociais',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update redes_sociais
     */
    function update_redes_sociais($id_redesocial,$params)
    {
        $this->db->where('id_redesocial',$id_redesocial);
        return $this->db->update('redes_sociais',$params);
    }
    
    /*
     * function to delete redes_sociais
     */
    function delete_redes_sociais($id_redesocial)
    {
        return $this->db->delete('redes_sociais',array('id_redesocial'=>$id_redesocial));
    }
}
