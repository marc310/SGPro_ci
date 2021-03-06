<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Servico extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Servico_model');
    } 

    /*
     * Listing of servicos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('servico/index?');
        $config['total_rows'] = $this->Servico_model->get_all_servicos_count();
        $this->pagination->initialize($config);

        $data['servicos'] = $this->Servico_model->get_all_servicos($params);
        
        $data['_view'] = 'servico/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new servico
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nome_servico','Nome Servico','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nome_servico' => $this->input->post('nome_servico'),
				'descricao_servico' => $this->input->post('descricao_servico'),
				'preco_servico' => $this->input->post('preco_servico'),
            );
            
            $servico_id = $this->Servico_model->add_servico($params);
            redirect('servico/index');
        }
        else
        {            
            $data['_view'] = 'servico/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a servico
     */
    function edit($id_servicos)
    {   
        // check if the servico exists before trying to edit it
        $data['servico'] = $this->Servico_model->get_servico($id_servicos);
        
        if(isset($data['servico']['id_servicos']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nome_servico','Nome Servico','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nome_servico' => $this->input->post('nome_servico'),
					'descricao_servico' => $this->input->post('descricao_servico'),
					'preco_servico' => $this->input->post('preco_servico'),
                );

                $this->Servico_model->update_servico($id_servicos,$params);            
                redirect('servico/index');
            }
            else
            {
                $data['_view'] = 'servico/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The servico you are trying to edit does not exist.');
    } 

    /*
     * Deleting servico
     */
    function remove($id_servicos)
    {
        $servico = $this->Servico_model->get_servico($id_servicos);

        // check if the servico exists before trying to delete it
        if(isset($servico['id_servicos']))
        {
            $this->Servico_model->delete_servico($id_servicos);
            redirect('servico/index');
        }
        else
            show_error('The servico you are trying to delete does not exist.');
    }
    
}
