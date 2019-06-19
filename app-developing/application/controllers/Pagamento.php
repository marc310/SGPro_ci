<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Pagamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pagamento_model');
    } 

    /*
     * Listing of pagamentos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('pagamento/index?');
        $config['total_rows'] = $this->Pagamento_model->get_all_pagamentos_count();
        $this->pagination->initialize($config);

        $data['pagamentos'] = $this->Pagamento_model->get_all_pagamentos($params);
        
        $data['_view'] = 'pagamento/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pagamento
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tipo_pagamento_lancamento' => $this->input->post('tipo_pagamento_lancamento'),
				'tipo_beneficiario' => $this->input->post('tipo_beneficiario'),
				'beneficiario_lancamento' => $this->input->post('beneficiario_lancamento'),
				'descricao_lancamento' => $this->input->post('descricao_lancamento'),
				'total_lancamento' => $this->input->post('total_lancamento'),
				'data_lancamento' => $this->input->post('data_lancamento'),
				'data_vencimento_lancamento' => $this->input->post('data_vencimento_lancamento'),
				'lancamento_faturado' => $this->input->post('lancamento_faturado'),
            );
            
            $pagamento_id = $this->Pagamento_model->add_pagamento($params);
            redirect('pagamento/index');
        }
        else
        {
			$this->load->model('Tipos_pagamento_model');
			$data['all_tipos_pagamento'] = $this->Tipos_pagamento_model->get_all_tipos_pagamento();
            
            $data['_view'] = 'pagamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pagamento
     */
    function edit($id_lancamento)
    {   
        // check if the pagamento exists before trying to edit it
        $data['pagamento'] = $this->Pagamento_model->get_pagamento($id_lancamento);
        
        if(isset($data['pagamento']['id_lancamento']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tipo_pagamento_lancamento' => $this->input->post('tipo_pagamento_lancamento'),
					'tipo_beneficiario' => $this->input->post('tipo_beneficiario'),
					'beneficiario_lancamento' => $this->input->post('beneficiario_lancamento'),
					'descricao_lancamento' => $this->input->post('descricao_lancamento'),
					'total_lancamento' => $this->input->post('total_lancamento'),
					'data_lancamento' => $this->input->post('data_lancamento'),
					'data_vencimento_lancamento' => $this->input->post('data_vencimento_lancamento'),
					'lancamento_faturado' => $this->input->post('lancamento_faturado'),
                );

                $this->Pagamento_model->update_pagamento($id_lancamento,$params);            
                redirect('pagamento/index');
            }
            else
            {
				$this->load->model('Tipos_pagamento_model');
				$data['all_tipos_pagamento'] = $this->Tipos_pagamento_model->get_all_tipos_pagamento();

                $data['_view'] = 'pagamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pagamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting pagamento
     */
    function remove($id_lancamento)
    {
        $pagamento = $this->Pagamento_model->get_pagamento($id_lancamento);

        // check if the pagamento exists before trying to delete it
        if(isset($pagamento['id_lancamento']))
        {
            $this->Pagamento_model->delete_pagamento($id_lancamento);
            redirect('pagamento/index');
        }
        else
            show_error('The pagamento you are trying to delete does not exist.');
    }
    
}
