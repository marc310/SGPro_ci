<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Anexo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Anexo_model');
    } 

    /*
     * Listing of anexos
     */
    function index()
    {
        $data['anexos'] = $this->Anexo_model->get_all_anexos();
        
        $data['_view'] = 'anexo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new anexo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'anexo' => $this->input->post('anexo'),
				'thumb' => $this->input->post('thumb'),
				'url' => $this->input->post('url'),
				'caminho_anexo' => $this->input->post('caminho_anexo'),
				'producao_id' => $this->input->post('producao_id'),
            );
            
            $anexo_id = $this->Anexo_model->add_anexo($params);
            redirect('anexo/index');
        }
        else
        {            
            $data['_view'] = 'anexo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a anexo
     */
    function edit($id_anexos)
    {   
        // check if the anexo exists before trying to edit it
        $data['anexo'] = $this->Anexo_model->get_anexo($id_anexos);
        
        if(isset($data['anexo']['id_anexos']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'anexo' => $this->input->post('anexo'),
					'thumb' => $this->input->post('thumb'),
					'url' => $this->input->post('url'),
					'caminho_anexo' => $this->input->post('caminho_anexo'),
					'producao_id' => $this->input->post('producao_id'),
                );

                $this->Anexo_model->update_anexo($id_anexos,$params);            
                redirect('anexo/index');
            }
            else
            {
                $data['_view'] = 'anexo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The anexo you are trying to edit does not exist.');
    } 

    /*
     * Deleting anexo
     */
    function remove($id_anexos)
    {
        $anexo = $this->Anexo_model->get_anexo($id_anexos);

        // check if the anexo exists before trying to delete it
        if(isset($anexo['id_anexos']))
        {
            $this->Anexo_model->delete_anexo($id_anexos);
            redirect('anexo/index');
        }
        else
            show_error('The anexo you are trying to delete does not exist.');
    }
    
}
