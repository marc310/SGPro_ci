<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Unidades_medida extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Unidades_medida_model');
    } 

    /*
     * Listing of unidades_medida
     */
    function index()
    {
        $data['unidades_medida'] = $this->Unidades_medida_model->get_all_unidades_medida();
        
        $data['_view'] = 'unidades_medida/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new unidades_medida
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'simbolo_unidade' => $this->input->post('simbolo_unidade'),
				'nome_unidade' => $this->input->post('nome_unidade'),
				'grandeza' => $this->input->post('grandeza'),
            );
            
            $unidades_medida_id = $this->Unidades_medida_model->add_unidades_medida($params);
            redirect('unidades_medida/index');
        }
        else
        {            
            $data['_view'] = 'unidades_medida/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a unidades_medida
     */
    function edit($id_unidade_medida)
    {   
        // check if the unidades_medida exists before trying to edit it
        $data['unidades_medida'] = $this->Unidades_medida_model->get_unidades_medida($id_unidade_medida);
        
        if(isset($data['unidades_medida']['id_unidade_medida']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'simbolo_unidade' => $this->input->post('simbolo_unidade'),
					'nome_unidade' => $this->input->post('nome_unidade'),
					'grandeza' => $this->input->post('grandeza'),
                );

                $this->Unidades_medida_model->update_unidades_medida($id_unidade_medida,$params);            
                redirect('unidades_medida/index');
            }
            else
            {
                $data['_view'] = 'unidades_medida/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The unidades_medida you are trying to edit does not exist.');
    } 

    /*
     * Deleting unidades_medida
     */
    function remove($id_unidade_medida)
    {
        $unidades_medida = $this->Unidades_medida_model->get_unidades_medida($id_unidade_medida);

        // check if the unidades_medida exists before trying to delete it
        if(isset($unidades_medida['id_unidade_medida']))
        {
            $this->Unidades_medida_model->delete_unidades_medida($id_unidade_medida);
            redirect('unidades_medida/index');
        }
        else
            show_error('The unidades_medida you are trying to delete does not exist.');
    }
    
}
