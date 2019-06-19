<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Os extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Os_model');
    } 

    /*
     * Listing of os
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('os/index?');
        $config['total_rows'] = $this->Os_model->get_all_os_count();
        $this->pagination->initialize($config);

        $data['os'] = $this->Os_model->get_all_os($params);
        
        $data['_view'] = 'os/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new os
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('cliente_id','Cliente Id','required');
		$this->form_validation->set_rules('data_inicio','Data Inicio','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'cliente_id' => $this->input->post('cliente_id'),
				'tipo_os' => $this->input->post('tipo_os'),
				'data_inicio' => $this->input->post('data_inicio'),
				'data_final' => $this->input->post('data_final'),
				'status_os' => $this->input->post('status_os'),
				'total_os' => $this->input->post('total_os'),
				'os_faturada' => $this->input->post('os_faturada'),
				'descricao_os' => $this->input->post('descricao_os'),
            );
            
            $os_id = $this->Os_model->add_os($params);
            redirect('os/index');
        }
        else
        {
			$this->load->model('Cliente_model');
			$data['all_clientes'] = $this->Cliente_model->get_all_clientes();
            
            $data['_view'] = 'os/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a os
     */
    function edit($id_os)
    {   
        // check if the os exists before trying to edit it
        $data['os'] = $this->Os_model->get_os($id_os);
        
        if(isset($data['os']['id_os']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('cliente_id','Cliente Id','required');
			$this->form_validation->set_rules('data_inicio','Data Inicio','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'cliente_id' => $this->input->post('cliente_id'),
					'tipo_os' => $this->input->post('tipo_os'),
					'data_inicio' => $this->input->post('data_inicio'),
					'data_final' => $this->input->post('data_final'),
					'status_os' => $this->input->post('status_os'),
					'total_os' => $this->input->post('total_os'),
					'os_faturada' => $this->input->post('os_faturada'),
					'descricao_os' => $this->input->post('descricao_os'),
                );

                $this->Os_model->update_os($id_os,$params);            
                redirect('os/index');
            }
            else
            {
				$this->load->model('Cliente_model');
				$data['all_clientes'] = $this->Cliente_model->get_all_clientes();

                $data['_view'] = 'os/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The os you are trying to edit does not exist.');
    } 

    /*
     * Deleting os
     */
    function remove($id_os)
    {
        $os = $this->Os_model->get_os($id_os);

        // check if the os exists before trying to delete it
        if(isset($os['id_os']))
        {
            $this->Os_model->delete_os($id_os);
            redirect('os/index');
        }
        else
            show_error('The os you are trying to delete does not exist.');
    }
    
}
