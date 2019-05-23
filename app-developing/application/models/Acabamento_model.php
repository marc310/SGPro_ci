<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Acabamento_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get acabamento by id_acabamento
     */
    function get_acabamento($id_acabamento)
    {
        return $this->db->get_where('acabamento',array('id_acabamento'=>$id_acabamento))->row_array();
    }
    
    /*
     * Get all acabamento count
     */
    function get_all_acabamento_count()
    {
        $this->db->from('acabamento');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all acabamento
     */
    function get_all_acabamento($params = array())
    {
        $this->db->order_by('id_acabamento', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('acabamento')->result_array();
    }
        
    /*
     * function to add new acabamento
     */
    function add_acabamento($params)
    {
        $this->db->insert('acabamento',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update acabamento
     */
    function update_acabamento($id_acabamento,$params)
    {
        $this->db->where('id_acabamento',$id_acabamento);
        return $this->db->update('acabamento',$params);
    }
    
    /*
     * function to delete acabamento
     */
    function delete_acabamento($id_acabamento)
    {
        return $this->db->delete('acabamento',array('id_acabamento'=>$id_acabamento));
    }
}
