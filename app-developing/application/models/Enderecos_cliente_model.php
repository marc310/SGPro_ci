<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Enderecos_cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get enderecos_cliente by id_endereco
     */
    function get_enderecos_cliente($id_endereco)
    {
        return $this->db->get_where('enderecos_cliente',array('id_endereco'=>$id_endereco))->row_array();
    }

    /*
     * Get all enderecos_cliente count
     */
    function get_all_enderecos_cliente_count()
    {
        $this->db->from('enderecos_cliente');
        return $this->db->count_all_results();
    }


    /*
     * Busca todos os endereços pelo id de cliente
     */
    function get_all_enderecos_ByClienteID($cliente_id)
    {
        $this->db->select('*');
        $this->db->order_by('id_endereco', 'desc');
        $this->db->where('cliente_id',$cliente_id);

        return $this->db->get('enderecos_cliente')->result_array();
    }

    /*
     * Get all enderecos_cliente
     */
    function get_all_enderecos_cliente($params = array())
    {
        $this->db->order_by('id_endereco', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('enderecos_cliente')->result_array();
    }

    /*
     * function to add new enderecos_cliente
     */
    function add_enderecos_cliente($params)
    {
        $this->db->insert('enderecos_cliente',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update enderecos_cliente
     */
    function update_enderecos_cliente($id_endereco,$params)
    {
        $this->db->where('id_endereco',$id_endereco);
        return $this->db->update('enderecos_cliente',$params);
    }

    /*
     * function to delete enderecos_cliente
     */
    function delete_enderecos_cliente($id_endereco)
    {
        return $this->db->delete('enderecos_cliente',array('id_endereco'=>$id_endereco));
    }
}
