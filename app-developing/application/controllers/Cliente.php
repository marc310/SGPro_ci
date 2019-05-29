<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */

class Cliente extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
    }

    /*
     * Listing of clientes
     */
    function index()
    {
        $params['limit'] = 15;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('cliente/index?');
        $config['total_rows'] = $this->Cliente_model->get_all_clientes_count();
        $config['per_page'] = 15;

        $this->pagination->initialize($config);

        $data['clientes'] = $this->Cliente_model->get_all_clientes($params);

        $data['_view'] = 'cliente/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cliente
     */
    function add()
    {

      $telefone = $this->input->post('telefone');
      $celular = $this->input->post('celular');

      if ($celular == "+55(__)9 ____-____"){
        $celular = "";
      }
      if ($telefone == "+55(__)____-____"){
        $telefone = "";
      }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome_cliente','Nome Cliente','required');
	      $this->form_validation->set_rules('email','Email Cliente','validEmail');

		if($this->form_validation->run())
        {
            $params = array(
				'endereco_id_cliente' => $this->input->post('endereco_id_cliente'),
				'nome_cliente' => $this->input->post('nome_cliente'),
				'sexo' => $this->input->post('sexo'),
				'tipo_pessoa' => $this->input->post('tipo_pessoa'),
				'documento' => $this->input->post('documento'),
				'telefone' => $telefone,
				'celular' => $celular,
				'email' => $this->input->post('email'),
				'data_cadastro_cliente' => $this->input->post('data_cadastro_cliente'),
            );

            $cliente_id = $this->Cliente_model->add_cliente($params);
            redirect('cliente/index');
        }
        else
        {
			$this->load->model('Endereco_model');
			$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();

      // LISTA DE ENDEREÇOS DO CLIENTE
      $params['limit'] = RECORDS_PER_PAGE;
      $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
      $config = $this->config->item('pagination');
      $config['base_url'] = site_url('endereco/index?');
      $config['total_rows'] = $this->Endereco_model->get_all_enderecos_count();
      $this->pagination->initialize($config);
      $data['enderecos'] = $this->Endereco_model->get_all_enderecos($params);
      //

            //$data['_view'] = 'cliente/add';
            $this->load->view('cliente/add',$data);
        }
    }

    /*
     * Editing a cliente
     */
    function edit($id_cliente)
    {
      $telefone = $this->input->post('telefone');
      $celular = $this->input->post('celular');

      if ($celular == "+55(__)9 ____-____"){
        $celular = "";
      }
      if ($telefone == "+55(__)____-____"){
        $telefone = "";
      }
        // check if the cliente exists before trying to edit it
        $data['cliente'] = $this->Cliente_model->get_cliente($id_cliente);

        if(isset($data['cliente']['id_cliente']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nome_cliente','Nome Cliente','required');

			if($this->form_validation->run())
            {
                $params = array(
					'endereco_id_cliente' => $this->input->post('endereco_id_cliente'),
					'nome_cliente' => $this->input->post('nome_cliente'),
					'sexo' => $this->input->post('sexo'),
					'tipo_pessoa' => $this->input->post('tipo_pessoa'),
					'documento' => $this->input->post('documento'),
					'telefone' => $telefone,
					'celular' => $celular,
					'email' => $this->input->post('email'),
					'data_cadastro_cliente' => $this->input->post('data_cadastro_cliente'),
                );

                $this->Cliente_model->update_cliente($id_cliente,$params);
                redirect('cliente/index');
            }
            else
            {
				$this->load->model('Endereco_model');
				$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();

                //$data['_view'] = 'cliente/edit';
                $this->load->view('cliente/edit',$data);
            }
        }
        else
            show_error('O Cliente que você tentou editar parece que não existir ou aconteceu algum problema nos registros.');
    }

    /*
     * Deleting cliente
     */
    function remove($id_cliente)
    {
        $cliente = $this->Cliente_model->get_cliente($id_cliente);

        // check if the cliente exists before trying to delete it
        if(isset($cliente['id_cliente']))
        {
            $this->Cliente_model->delete_cliente($id_cliente);
            redirect('cliente/index');
        }
        else
            show_error('O Cliente que você tentou remover parece que não existe.');
    }



}
