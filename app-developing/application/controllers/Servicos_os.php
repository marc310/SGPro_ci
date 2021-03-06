<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Servicos_os extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Servicos_os_model');
    } 

    /*
     * Listing of servicos_os
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('servicos_os/index?');
        $config['total_rows'] = $this->Servicos_os_model->get_all_servicos_os_count();
        $this->pagination->initialize($config);

        $data['servicos_os'] = $this->Servicos_os_model->get_all_servicos_os($params);
        
        $data['_view'] = 'servicos_os/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new servicos_os
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('servicos_id','Servicos Id','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'os_id' => $this->input->post('os_id'),
				'servicos_id' => $this->input->post('servicos_id'),
				'sub_total_servico_os' => $this->input->post('sub_total_servico_os'),
            );
            
            $servicos_os_id = $this->Servicos_os_model->add_servicos_os($params);
            redirect('servicos_os/index');
        }
        else
        {
			$this->load->model('Os_model');
			$data['all_os'] = $this->Os_model->get_all_os();

			$this->load->model('Servico_model');
			$data['all_servicos'] = $this->Servico_model->get_all_servicos();
            
            $data['_view'] = 'servicos_os/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a servicos_os
     */
    function edit($id_servicos_os)
    {   
        // check if the servicos_os exists before trying to edit it
        $data['servicos_os'] = $this->Servicos_os_model->get_servicos_os($id_servicos_os);
        
        if(isset($data['servicos_os']['id_servicos_os']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('servicos_id','Servicos Id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'os_id' => $this->input->post('os_id'),
					'servicos_id' => $this->input->post('servicos_id'),
					'sub_total_servico_os' => $this->input->post('sub_total_servico_os'),
                );

                $this->Servicos_os_model->update_servicos_os($id_servicos_os,$params);            
                redirect('servicos_os/index');
            }
            else
            {
				$this->load->model('Os_model');
				$data['all_os'] = $this->Os_model->get_all_os();

				$this->load->model('Servico_model');
				$data['all_servicos'] = $this->Servico_model->get_all_servicos();

                $data['_view'] = 'servicos_os/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The servicos_os you are trying to edit does not exist.');
    } 

    /*
     * Deleting servicos_os
     */
    function remove($id_servicos_os)
    {
        $servicos_os = $this->Servicos_os_model->get_servicos_os($id_servicos_os);

        // check if the servicos_os exists before trying to delete it
        if(isset($servicos_os['id_servicos_os']))
        {
            $this->Servicos_os_model->delete_servicos_os($id_servicos_os);
            redirect('servicos_os/index');
        }
        else
            show_error('The servicos_os you are trying to delete does not exist.');
    }
    
}
