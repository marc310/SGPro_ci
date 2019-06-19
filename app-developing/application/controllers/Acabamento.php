<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Acabamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Acabamento_model');
    } 

    /*
     * Listing of acabamento
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('acabamento/index?');
        $config['total_rows'] = $this->Acabamento_model->get_all_acabamento_count();
        $this->pagination->initialize($config);

        $data['acabamento'] = $this->Acabamento_model->get_all_acabamento($params);
        
        $data['_view'] = 'acabamento/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new acabamento
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descricao_acabamento' => $this->input->post('descricao_acabamento'),
				'preco_acabamento' => $this->input->post('preco_acabamento'),
				'nome_acabamento' => $this->input->post('nome_acabamento'),
            );
            
            $acabamento_id = $this->Acabamento_model->add_acabamento($params);
            redirect('acabamento/index');
        }
        else
        {            
            $data['_view'] = 'acabamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a acabamento
     */
    function edit($id_acabamento)
    {   
        // check if the acabamento exists before trying to edit it
        $data['acabamento'] = $this->Acabamento_model->get_acabamento($id_acabamento);
        
        if(isset($data['acabamento']['id_acabamento']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descricao_acabamento' => $this->input->post('descricao_acabamento'),
					'preco_acabamento' => $this->input->post('preco_acabamento'),
					'nome_acabamento' => $this->input->post('nome_acabamento'),
                );

                $this->Acabamento_model->update_acabamento($id_acabamento,$params);            
                redirect('acabamento/index');
            }
            else
            {
                $data['_view'] = 'acabamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The acabamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting acabamento
     */
    function remove($id_acabamento)
    {
        $acabamento = $this->Acabamento_model->get_acabamento($id_acabamento);

        // check if the acabamento exists before trying to delete it
        if(isset($acabamento['id_acabamento']))
        {
            $this->Acabamento_model->delete_acabamento($id_acabamento);
            redirect('acabamento/index');
        }
        else
            show_error('The acabamento you are trying to delete does not exist.');
    }
    
}
