<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Dados_empresa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dados_empresa_model');
    } 

    /*
     * Listing of dados_empresa
     */
    function index()
    {
        $data['dados_empresa'] = $this->Dados_empresa_model->get_all_dados_empresa();
        
        $data['_view'] = 'dados_empresa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new dados_empresa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'endereco_id_emissor' => $this->input->post('endereco_id_emissor'),
				'nome_emissor' => $this->input->post('nome_emissor'),
				'cnpj_emissor' => $this->input->post('cnpj_emissor'),
				'website_emissor' => $this->input->post('website_emissor'),
				'email_emissor' => $this->input->post('email_emissor'),
				'telefone_emissor' => $this->input->post('telefone_emissor'),
				'url_logo' => $this->input->post('url_logo'),
            );
            
            $dados_empresa_id = $this->Dados_empresa_model->add_dados_empresa($params);
            redirect('dados_empresa/index');
        }
        else
        {
			$this->load->model('Endereco_model');
			$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();
            
            $data['_view'] = 'dados_empresa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a dados_empresa
     */
    function edit($id_emissor)
    {   
        // check if the dados_empresa exists before trying to edit it
        $data['dados_empresa'] = $this->Dados_empresa_model->get_dados_empresa($id_emissor);
        
        if(isset($data['dados_empresa']['id_emissor']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'endereco_id_emissor' => $this->input->post('endereco_id_emissor'),
					'nome_emissor' => $this->input->post('nome_emissor'),
					'cnpj_emissor' => $this->input->post('cnpj_emissor'),
					'website_emissor' => $this->input->post('website_emissor'),
					'email_emissor' => $this->input->post('email_emissor'),
					'telefone_emissor' => $this->input->post('telefone_emissor'),
					'url_logo' => $this->input->post('url_logo'),
                );

                $this->Dados_empresa_model->update_dados_empresa($id_emissor,$params);            
                redirect('dados_empresa/index');
            }
            else
            {
				$this->load->model('Endereco_model');
				$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();

                $data['_view'] = 'dados_empresa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The dados_empresa you are trying to edit does not exist.');
    } 

    /*
     * Deleting dados_empresa
     */
    function remove($id_emissor)
    {
        $dados_empresa = $this->Dados_empresa_model->get_dados_empresa($id_emissor);

        // check if the dados_empresa exists before trying to delete it
        if(isset($dados_empresa['id_emissor']))
        {
            $this->Dados_empresa_model->delete_dados_empresa($id_emissor);
            redirect('dados_empresa/index');
        }
        else
            show_error('The dados_empresa you are trying to delete does not exist.');
    }
    
}
