<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Funcionario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Funcionario_model');
    } 

    /*
     * Listing of funcionarios
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('funcionario/index?');
        $config['total_rows'] = $this->Funcionario_model->get_all_funcionarios_count();
        $this->pagination->initialize($config);

        $data['funcionarios'] = $this->Funcionario_model->get_all_funcionarios($params);
        
        $data['_view'] = 'funcionario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new funcionario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'endereco_id_funcionario' => $this->input->post('endereco_id_funcionario'),
				'nome_funcionario' => $this->input->post('nome_funcionario'),
				'doc_funcionario' => $this->input->post('doc_funcionario'),
				'email_funcionario' => $this->input->post('email_funcionario'),
				'telefone_funcionario' => $this->input->post('telefone_funcionario'),
				'celular_funcionario' => $this->input->post('celular_funcionario'),
				'data_cadastro_funcionario' => $this->input->post('data_cadastro_funcionario'),
            );
            
            $funcionario_id = $this->Funcionario_model->add_funcionario($params);
            redirect('funcionario/index');
        }
        else
        {
			$this->load->model('Endereco_model');
			$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();
            
            $data['_view'] = 'funcionario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a funcionario
     */
    function edit($id_funcionario)
    {   
        // check if the funcionario exists before trying to edit it
        $data['funcionario'] = $this->Funcionario_model->get_funcionario($id_funcionario);
        
        if(isset($data['funcionario']['id_funcionario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'endereco_id_funcionario' => $this->input->post('endereco_id_funcionario'),
					'nome_funcionario' => $this->input->post('nome_funcionario'),
					'doc_funcionario' => $this->input->post('doc_funcionario'),
					'email_funcionario' => $this->input->post('email_funcionario'),
					'telefone_funcionario' => $this->input->post('telefone_funcionario'),
					'celular_funcionario' => $this->input->post('celular_funcionario'),
					'data_cadastro_funcionario' => $this->input->post('data_cadastro_funcionario'),
                );

                $this->Funcionario_model->update_funcionario($id_funcionario,$params);            
                redirect('funcionario/index');
            }
            else
            {
				$this->load->model('Endereco_model');
				$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();

                $data['_view'] = 'funcionario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The funcionario you are trying to edit does not exist.');
    } 

    /*
     * Deleting funcionario
     */
    function remove($id_funcionario)
    {
        $funcionario = $this->Funcionario_model->get_funcionario($id_funcionario);

        // check if the funcionario exists before trying to delete it
        if(isset($funcionario['id_funcionario']))
        {
            $this->Funcionario_model->delete_funcionario($id_funcionario);
            redirect('funcionario/index');
        }
        else
            show_error('The funcionario you are trying to delete does not exist.');
    }
    
}
