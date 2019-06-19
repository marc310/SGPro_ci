<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */

class Fornecedor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fornecedor_model');
    } 

    /*
     * Listing of fornecedores
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('fornecedor/index?');
        $config['total_rows'] = $this->Fornecedor_model->get_all_fornecedores_count();
        $this->pagination->initialize($config);

        $data['fornecedores'] = $this->Fornecedor_model->get_all_fornecedores($params);
        
        $data['_view'] = 'fornecedore/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fornecedor
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'endereco_id_fornecedor' => $this->input->post('endereco_id_fornecedor'),
				'nome_fornecedor' => $this->input->post('nome_fornecedor'),
				'cnpj_fornecedor' => $this->input->post('cnpj_fornecedor'),
				'website_fornecedor' => $this->input->post('website_fornecedor'),
				'email_fornecedor' => $this->input->post('email_fornecedor'),
				'telefone_fornecedor' => $this->input->post('telefone_fornecedor'),
				'url_logo_fornecedor' => $this->input->post('url_logo_fornecedor'),
            );
            
            $fornecedor_id = $this->Fornecedor_model->add_fornecedor($params);
            redirect('fornecedor/index');
        }
        else
        {
			$this->load->model('Endereco_model');
			$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();
            
            $data['_view'] = 'fornecedore/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fornecedor
     */
    function edit($id_fornecedor)
    {   
        // check if the fornecedor exists before trying to edit it
        $data['fornecedor'] = $this->Fornecedor_model->get_fornecedor($id_fornecedor);
        
        if(isset($data['fornecedor']['id_fornecedor']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'endereco_id_fornecedor' => $this->input->post('endereco_id_fornecedor'),
					'nome_fornecedor' => $this->input->post('nome_fornecedor'),
					'cnpj_fornecedor' => $this->input->post('cnpj_fornecedor'),
					'website_fornecedor' => $this->input->post('website_fornecedor'),
					'email_fornecedor' => $this->input->post('email_fornecedor'),
					'telefone_fornecedor' => $this->input->post('telefone_fornecedor'),
					'url_logo_fornecedor' => $this->input->post('url_logo_fornecedor'),
                );

                $this->Fornecedor_model->update_fornecedor($id_fornecedor,$params);            
                redirect('fornecedor/index');
            }
            else
            {
				$this->load->model('Endereco_model');
				$data['all_enderecos'] = $this->Endereco_model->get_all_enderecos();

                $data['_view'] = 'fornecedore/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fornecedor you are trying to edit does not exist.');
    } 

    /*
     * Deleting fornecedor
     */
    function remove($id_fornecedor)
    {
        $fornecedor = $this->Fornecedor_model->get_fornecedor($id_fornecedor);

        // check if the fornecedor exists before trying to delete it
        if(isset($fornecedor['id_fornecedor']))
        {
            $this->Fornecedor_model->delete_fornecedor($id_fornecedor);
            redirect('fornecedor/index');
        }
        else
            show_error('The fornecedor you are trying to delete does not exist.');
    }
    
}
