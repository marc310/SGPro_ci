<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Redes_sociais extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Redes_sociais_model');
    } 

    /*
     * Listing of redes_sociais
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('redes_sociais/index?');
        $config['total_rows'] = $this->Redes_sociais_model->get_all_redes_sociais_count();
        $this->pagination->initialize($config);

        $data['redes_sociais'] = $this->Redes_sociais_model->get_all_redes_sociais($params);
        
        $data['_view'] = 'redes_sociais/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new redes_sociais
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nome_redesocial' => $this->input->post('nome_redesocial'),
				'url_base_redesocial' => $this->input->post('url_base_redesocial'),
				'tag_redesocial' => $this->input->post('tag_redesocial'),
            );
            
            $redes_sociais_id = $this->Redes_sociais_model->add_redes_sociais($params);
            redirect('redes_sociais/index');
        }
        else
        {            
            $data['_view'] = 'redes_sociais/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a redes_sociais
     */
    function edit($id_redesocial)
    {   
        // check if the redes_sociais exists before trying to edit it
        $data['redes_sociais'] = $this->Redes_sociais_model->get_redes_sociais($id_redesocial);
        
        if(isset($data['redes_sociais']['id_redesocial']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nome_redesocial' => $this->input->post('nome_redesocial'),
					'url_base_redesocial' => $this->input->post('url_base_redesocial'),
					'tag_redesocial' => $this->input->post('tag_redesocial'),
                );

                $this->Redes_sociais_model->update_redes_sociais($id_redesocial,$params);            
                redirect('redes_sociais/index');
            }
            else
            {
                $data['_view'] = 'redes_sociais/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The redes_sociais you are trying to edit does not exist.');
    } 

    /*
     * Deleting redes_sociais
     */
    function remove($id_redesocial)
    {
        $redes_sociais = $this->Redes_sociais_model->get_redes_sociais($id_redesocial);

        // check if the redes_sociais exists before trying to delete it
        if(isset($redes_sociais['id_redesocial']))
        {
            $this->Redes_sociais_model->delete_redes_sociais($id_redesocial);
            redirect('redes_sociais/index');
        }
        else
            show_error('The redes_sociais you are trying to delete does not exist.');
    }
    
}
