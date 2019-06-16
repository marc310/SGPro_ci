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
        $this->load->model('Enderecos_cliente_model');
        $this->load->model('Endereco_rede_social_cliente_model');

    }

    /*
     * Listing of clientes
     */
    function index()
    {
        $params['limit'] = 20;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('cliente/index?');
        $config['total_rows'] = $this->Cliente_model->get_all_clientes_count();
        $config['per_page'] = 20;

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
      // $this->form_validation->set_rules('email','Email Cliente','validEmail');

      if($this->form_validation->run())
      {
        $params = array(
          'nome_cliente' => $this->input->post('nome_cliente'),
          'tipo_pessoa' => $this->input->post('tipo_pessoa'),
          'documento' => $this->input->post('documento'),
          'telefone' => $telefone,
          'celular' => $celular,
          'email' => $this->input->post('email'),
          'data_cadastro_cliente' => $this->input->post('data_cadastro_cliente'),
        );

        //$cliente_id = $this->Cliente_model->add_cliente($params);
        //redirect('cliente/index');
        if ( is_numeric($cliente_id = $this->Cliente_model->add_cliente($params, true)) ) {
            redirect('cliente/edit/'.$cliente_id);

        } else {

            $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';
        }
      }
      else
      {
        $this->load->model('Endereco_model');
        $data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();


        //
        //$data['_view'] = 'cliente/add';
        $this->load->view('cliente/add');
      }
    }


    /*
    * Adding a new cliente
    */
    function SalvaESai()
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
      // $this->form_validation->set_rules('email','Email Cliente','validEmail');

      if($this->form_validation->run())
      {
        $params = array(
          'nome_cliente' => $this->input->post('nome_cliente'),
          'tipo_pessoa' => $this->input->post('tipo_pessoa'),
          'documento' => $this->input->post('documento'),
          'telefone' => $telefone,
          'celular' => $celular,
          'email' => $this->input->post('email'),
          'data_cadastro_cliente' => $this->input->post('data_cadastro_cliente'),
        );

        //$cliente_id = $this->Cliente_model->add_cliente($params);
        //redirect('cliente/index');
        if ( is_numeric($cliente_id = $this->Cliente_model->add_cliente($params, true)) ) {
            redirect('cliente/index');

        } else {

            $this->data['custom_error'] = '<div class="form_error"><p>An Error Occured.</p></div>';
        }
      }
      else
      {
        $this->load->model('Endereco_model');
        $data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();


        //
        //$data['_view'] = 'cliente/add';
        $this->load->view('cliente/add');
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
                //redireciona pela url atual
                $redirecionamento = $this->uri->segment(3);
                redirect('cliente/edit/'.$redirecionamento);
            }
            else
            {

            $this->load->model('Cliente_model');
      			$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

      			$this->load->model('Redes_sociais_model');
      			$data['all_redes_sociais'] = $this->Redes_sociais_model->get_all_redes_sociais();

            $this->load->model('Endereco_rede_social_cliente_model');
            $data['endereco_rede_social_cliente'] = $this->Endereco_rede_social_cliente_model->get_redesPeloId_Cliente($id_cliente);

            $this->load->model('Enderecos_cliente_model');
            $data['enderecos_cliente'] = $this->Enderecos_cliente_model->get_all_enderecos_ByClienteID($id_cliente);

            // LISTA DE ENDEREÇOS DO CLIENTE
            $params['limit'] = 20;
            $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
            $config = $this->config->item('pagination');
            $config['base_url'] = site_url('enderecos_cliente/index?');
            $config['total_rows'] = $this->Enderecos_cliente_model->get_all_enderecos_cliente_count();
            $config['per_page'] = 20;
            $this->pagination->initialize($config);
            //
            //
                $data['_view'] = 'cliente/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('O Cliente que você tentou editar parece que não existir ou aconteceu algum problema nos registros.');
    }


    /*
     * Ler produto
     */
    // public function read($idP)
    // {
    //     if($this->session->userdata('nomeusuario') == '')
    //        {
    //             redirect(site_url('login'));
    //        }
    //     $row = $this->Produto_model->produtosPorID($idP);
    //     if ($row) {
    //         $data = array(
    //             'idP' => $row->idP,
    //             'nome' => $row->nome,
    //             'descricao' => $row->descricao,
    //             'modeloID' => $row->modeloID,
    //             'modelo' => $row->modelo,
    //             'categoriaID' => $row->categoriaID,
    //             'categoria' => $row->categoria
    //                 );
    //         $this->load->model('Tamanhos_produto_model');
    //         $data['tamanhos_produtos'] = $this->Tamanhos_produto_model->lista_tamanhos_produto($idP);
    //
    //     $this->load->view('common/header');
    //     $this->load->view('common/menu');
    //     $this->load->view('produto/produto_read', $data);
    //     $this->load->view('common/footer');
    //     } else {
    //         $this->session->set_flashdata('message', 'Record Not Found');
    //         redirect(site_url('produtos'));
    //     }
    // }


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


    /*
     * Editing a enderecos_cliente
     */
    function editarEndereco($id_endereco)
    {

        // check if the enderecos_cliente exists before trying to edit it
        $data['enderecos_cliente'] = $this->Enderecos_cliente_model->get_enderecos_cliente($id_endereco);
        $redirecionamento = $data['enderecos_cliente']['cliente_id'];

        if(isset($data['enderecos_cliente']['id_endereco']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('numero','Numero','numeric');
			$this->form_validation->set_rules('uf','Uf','required');
			$this->form_validation->set_rules('rua','Rua','required');
			$this->form_validation->set_rules('cep','Cep','numeric');
			$this->form_validation->set_rules('cliente_id','Cliente Id','required');

			if($this->form_validation->run())
            {
                $params = array(
        					'cliente_id' => $this->input->post('cliente_id'),
        					'rua' => $this->input->post('rua'),
        					'bairro' => $this->input->post('bairro'),
        					'cidade' => $this->input->post('cidade'),
        					'complemento' => $this->input->post('complemento'),
        					'numero' => $this->input->post('numero'),
        					'uf' => $this->input->post('uf'),
        					'cep' => $this->input->post('cep'),
                );

                $this->Enderecos_cliente_model->update_enderecos_cliente($id_endereco,$params);

                redirect('cliente/edit/'.$redirecionamento.'#enderecoCliente');
            }
            else
            {
				$this->load->model('Cliente_model');
				$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

                // $data['_view'] = 'enderecos_cliente/edit';
                $this->load->view('enderecos_cliente/edit',$data);
            }
        }
        else
            show_error('The enderecos_cliente you are trying to edit does not exist.');
    }
    //
    //
    /*
     * Deleting enderecos_cliente
     */
    function removerEndereco($id_endereco)
    {
        $enderecos_cliente = $this->Enderecos_cliente_model->get_enderecos_cliente($id_endereco);

        // check if the enderecos_cliente exists before trying to delete it
        if(isset($enderecos_cliente['id_endereco']))
        {
            $this->Enderecos_cliente_model->delete_enderecos_cliente($id_endereco);
            $redirecionamento = $enderecos_cliente['cliente_id'];
            redirect('cliente/edit/'.$redirecionamento.'#enderecoCliente');
        }
        else
            show_error('The enderecos_cliente you are trying to delete does not exist.');
    }
    //
    //

    /*
     * Editing a endereco_rede_social_cliente
     */
    function editaRedesocial($id_endereco_redesocial)
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

                // $data['_view'] = 'endereco_rede_social_cliente/edit';
                $this->load->view('endereco_rede_social_cliente/edit',$data);
            }
        }
        else
            show_error('The endereco_rede_social_cliente you are trying to edit does not exist.');
    }
    //
    //
    /*
     * Deleting endereco_rede_social_cliente
     */
    function removeRedesocial($id_endereco_redesocial)
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
