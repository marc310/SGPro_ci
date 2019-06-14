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



}
