<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Endereco_rede_social_cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get endereco_rede_social_cliente by id_endereco_redesocial
     */
    function get_endereco_rede_social_cliente($id_endereco_redesocial)
    {
        return $this->db->get_where('endereco_rede_social_cliente',array('id_endereco_redesocial'=>$id_endereco_redesocial))->row_array();
    }

    /*
     * Get all endereco_rede_social_cliente
     */
     function get_redesPeloId_Cliente($IDCliente){
       $this->db->order_by('id_endereco_redesocial', 'desc');
       $this->db->where('cliente_id', $IDCliente);
       $this->db->join('redes_sociais','endereco_rede_social_cliente.redesocial_id = redes_sociais.id_redesocial');
       // $this->db->join('modelos','produtos.modeloID = modelos.id');

       return $this->db->get('endereco_rede_social_cliente')->result_array();
     }
    /*
     * Get all endereco_rede_social_cliente
     */
    function get_all_endereco_rede_social_cliente()
    {
        $this->db->order_by('id_endereco_redesocial', 'desc');
        return $this->db->get('endereco_rede_social_cliente')->result_array();
    }

    /*
     * function to add new endereco_rede_social_cliente
     */
    function add_endereco_rede_social_cliente($params)
    {
        $this->db->insert('endereco_rede_social_cliente',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update endereco_rede_social_cliente
     */
    function update_endereco_rede_social_cliente($id_endereco_redesocial,$params)
    {
        $this->db->where('id_endereco_redesocial',$id_endereco_redesocial);
        return $this->db->update('endereco_rede_social_cliente',$params);
    }

    /*
     * function to delete endereco_rede_social_cliente
     */
    function delete_endereco_rede_social_cliente($id_endereco_redesocial)
    {
        return $this->db->delete('endereco_rede_social_cliente',array('id_endereco_redesocial'=>$id_endereco_redesocial));
    }
}
