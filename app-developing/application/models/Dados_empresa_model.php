<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dados_empresa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dados_empresa by id_emissor
     */
    function get_dados_empresa($id_emissor)
    {
        return $this->db->get_where('dados_empresa',array('id_emissor'=>$id_emissor))->row_array();
    }
        
    /*
     * Get all dados_empresa
     */
    function get_all_dados_empresa()
    {
        $this->db->order_by('id_emissor', 'desc');
        return $this->db->get('dados_empresa')->result_array();
    }
        
    /*
     * function to add new dados_empresa
     */
    function add_dados_empresa($params)
    {
        $this->db->insert('dados_empresa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dados_empresa
     */
    function update_dados_empresa($id_emissor,$params)
    {
        $this->db->where('id_emissor',$id_emissor);
        return $this->db->update('dados_empresa',$params);
    }
    
    /*
     * function to delete dados_empresa
     */
    function delete_dados_empresa($id_emissor)
    {
        return $this->db->delete('dados_empresa',array('id_emissor'=>$id_emissor));
    }
}
