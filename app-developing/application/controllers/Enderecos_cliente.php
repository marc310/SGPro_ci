<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */

class Enderecos_cliente extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Enderecos_cliente_model');
    }

    /*
     * Listing of enderecos_cliente
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('enderecos_cliente/index?');
        $config['total_rows'] = $this->Enderecos_cliente_model->get_all_enderecos_cliente_count();
        $this->pagination->initialize($config);

        $data['enderecos_cliente'] = $this->Enderecos_cliente_model->get_all_enderecos_cliente($params);

        $data['_view'] = 'enderecos_cliente/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new enderecos_cliente
     */
    function add()
    {
      $inputCep = $this->input->post('cep');
      $cep = str_replace('-', '', $inputCep);


        $this->load->library('form_validation');

		$this->form_validation->set_rules('numero','Numero','numeric');
		$this->form_validation->set_rules('uf','Uf','required');
		$this->form_validation->set_rules('rua','Rua','required');
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
    				'cep' => $cep,
            );

            $enderecos_cliente_id = $this->Enderecos_cliente_model->add_enderecos_cliente($params);
            redirect('enderecos_cliente/index');
        }
        else
        {
			$this->load->model('Cliente_model');
			$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

            $data['_view'] = 'enderecos_cliente/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a enderecos_cliente
     */
    function edit($id_endereco)
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

                $data['_view'] = 'enderecos_cliente/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The enderecos_cliente you are trying to edit does not exist.');
    }

    /*
     * Deleting enderecos_cliente
     */
    function remove($id_endereco)
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

}
