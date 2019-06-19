<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Tipos_pagamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tipos_pagamento_model');
    } 

    /*
     * Listing of tipos_pagamento
     */
    function index()
    {
        $data['tipos_pagamento'] = $this->Tipos_pagamento_model->get_all_tipos_pagamento();
        
        $data['_view'] = 'tipos_pagamento/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tipos_pagamento
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nome_tipo_pagamento' => $this->input->post('nome_tipo_pagamento'),
				'descricao_tipo_pagamento' => $this->input->post('descricao_tipo_pagamento'),
            );
            
            $tipos_pagamento_id = $this->Tipos_pagamento_model->add_tipos_pagamento($params);
            redirect('tipos_pagamento/index');
        }
        else
        {            
            $data['_view'] = 'tipos_pagamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tipos_pagamento
     */
    function edit($id_tipo_pagamento)
    {   
        // check if the tipos_pagamento exists before trying to edit it
        $data['tipos_pagamento'] = $this->Tipos_pagamento_model->get_tipos_pagamento($id_tipo_pagamento);
        
        if(isset($data['tipos_pagamento']['id_tipo_pagamento']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nome_tipo_pagamento' => $this->input->post('nome_tipo_pagamento'),
					'descricao_tipo_pagamento' => $this->input->post('descricao_tipo_pagamento'),
                );

                $this->Tipos_pagamento_model->update_tipos_pagamento($id_tipo_pagamento,$params);            
                redirect('tipos_pagamento/index');
            }
            else
            {
                $data['_view'] = 'tipos_pagamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tipos_pagamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting tipos_pagamento
     */
    function remove($id_tipo_pagamento)
    {
        $tipos_pagamento = $this->Tipos_pagamento_model->get_tipos_pagamento($id_tipo_pagamento);

        // check if the tipos_pagamento exists before trying to delete it
        if(isset($tipos_pagamento['id_tipo_pagamento']))
        {
            $this->Tipos_pagamento_model->delete_tipos_pagamento($id_tipo_pagamento);
            redirect('tipos_pagamento/index');
        }
        else
            show_error('The tipos_pagamento you are trying to delete does not exist.');
    }
    
}
