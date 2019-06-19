<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Material extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Material_model');
    } 

    /*
     * Listing of material
     */
    function index()
    {
        $data['material'] = $this->Material_model->get_all_material();
        
        $data['_view'] = 'material/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new material
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nome_material' => $this->input->post('nome_material'),
				'descricao_material' => $this->input->post('descricao_material'),
				'preco_material' => $this->input->post('preco_material'),
            );
            
            $material_id = $this->Material_model->add_material($params);
            redirect('material/index');
        }
        else
        {            
            $data['_view'] = 'material/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a material
     */
    function edit($id_material)
    {   
        // check if the material exists before trying to edit it
        $data['material'] = $this->Material_model->get_material($id_material);
        
        if(isset($data['material']['id_material']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nome_material' => $this->input->post('nome_material'),
					'descricao_material' => $this->input->post('descricao_material'),
					'preco_material' => $this->input->post('preco_material'),
                );

                $this->Material_model->update_material($id_material,$params);            
                redirect('material/index');
            }
            else
            {
                $data['_view'] = 'material/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The material you are trying to edit does not exist.');
    } 

    /*
     * Deleting material
     */
    function remove($id_material)
    {
        $material = $this->Material_model->get_material($id_material);

        // check if the material exists before trying to delete it
        if(isset($material['id_material']))
        {
            $this->Material_model->delete_material($id_material);
            redirect('material/index');
        }
        else
            show_error('The material you are trying to delete does not exist.');
    }
    
}
