<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */

class Endereco_rede_social_cliente extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Endereco_rede_social_cliente_model');
    }

    /*
     * Listing of endereco_rede_social_cliente
     */
    function index()
    {
        $data['endereco_rede_social_cliente'] = $this->Endereco_rede_social_cliente_model->get_all_endereco_rede_social_cliente();

        $data['_view'] = 'endereco_rede_social_cliente/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new endereco_rede_social_cliente
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'cliente_id' => $this->input->post('cliente_id'),
				'redesocial_id' => $this->input->post('redesocial_id'),
				'cliente_redesocial' => $this->input->post('cliente_redesocial'),
            );

            $endereco_rede_social_cliente_id = $this->Endereco_rede_social_cliente_model->add_endereco_rede_social_cliente($params);
            redirect('endereco_rede_social_cliente/index');
        }
        else
        {
			$this->load->model('Cliente_model');
			$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

			$this->load->model('Redes_sociais_model');
			$data['all_redes_sociais'] = $this->Redes_sociais_model->get_all_redes_sociais();

            $data['_view'] = 'endereco_rede_social_cliente/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a endereco_rede_social_cliente
     */
    function edit($id_endereco_redesocial)
    {
        // check if the endereco_rede_social_cliente exists before trying to edit it
        $data['endereco_rede_social_cliente'] = $this->Endereco_rede_social_cliente_model->get_endereco_rede_social_cliente($id_endereco_redesocial);

        if(isset($data['endereco_rede_social_cliente']['id_endereco_redesocial']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'cliente_id' => $this->input->post('cliente_id'),
					'redesocial_id' => $this->input->post('redesocial_id'),
					'cliente_redesocial' => $this->input->post('cliente_redesocial'),
                );

                $this->Endereco_rede_social_cliente_model->update_endereco_rede_social_cliente($id_endereco_redesocial,$params);
                redirect('endereco_rede_social_cliente/index');
            }
            else
            {
        				$this->load->model('Cliente_model');
        				$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

        				$this->load->model('Redes_sociais_model');
        				$data['all_redes_sociais'] = $this->Redes_sociais_model->get_all_redes_sociais();

                $data['_view'] = 'endereco_rede_social_cliente/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The endereco_rede_social_cliente you are trying to edit does not exist.');
    }

    /*
     * Deleting endereco_rede_social_cliente
     */
    function remove($id_endereco_redesocial)
    {
        $endereco_rede_social_cliente = $this->Endereco_rede_social_cliente_model->get_endereco_rede_social_cliente($id_endereco_redesocial);
        $urlRetorno = $endereco_rede_social_cliente['cliente_id'];

        // check if the endereco_rede_social_cliente exists before trying to delete it
        if(isset($endereco_rede_social_cliente['id_endereco_redesocial']))
        {
            $this->Endereco_rede_social_cliente_model->delete_endereco_rede_social_cliente($id_endereco_redesocial);
            redirect('cliente/edit/'.$urlRetorno);
            // redirect('endereco_rede_social_cliente/index');
        }
        else
            show_error('The endereco_rede_social_cliente you are trying to delete does not exist.');
    }

}
