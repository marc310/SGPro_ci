<?php
/*
 * Desenvolvido por
 * Marcelo Motta
 * www.marcelomotta.com
 */
 
class Producao_os extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producao_os_model');
    } 

    /*
     * Listing of producao_os
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('producao_os/index?');
        $config['total_rows'] = $this->Producao_os_model->get_all_producao_os_count();
        $this->pagination->initialize($config);

        $data['producao_os'] = $this->Producao_os_model->get_all_producao_os($params);
        
        $data['_view'] = 'producao_os/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new producao_os
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('material_id','Material Id','required');
		$this->form_validation->set_rules('acabamento_id','Acabamento Id','required');
		$this->form_validation->set_rules('unidade_medida_id','Unidade Medida Id','required');
		$this->form_validation->set_rules('os_id','Os Id','required');
		$this->form_validation->set_rules('quantidade_producao','Quantidade Producao','required|numeric');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'material_id' => $this->input->post('material_id'),
				'os_id' => $this->input->post('os_id'),
				'unidade_medida_id' => $this->input->post('unidade_medida_id'),
				'acabamento_id' => $this->input->post('acabamento_id'),
				'descricao_producao' => $this->input->post('descricao_producao'),
				'tipo_producao' => $this->input->post('tipo_producao'),
				'medida_producao' => $this->input->post('medida_producao'),
				'quantidade_producao' => $this->input->post('quantidade_producao'),
				'status_producao' => $this->input->post('status_producao'),
            );
            
            $producao_os_id = $this->Producao_os_model->add_producao_os($params);
            redirect('producao_os/index');
        }
        else
        {
			$this->load->model('Material_model');
			$data['all_material'] = $this->Material_model->get_all_material();

			$this->load->model('Os_model');
			$data['all_os'] = $this->Os_model->get_all_os();

			$this->load->model('Unidades_medida_model');
			$data['all_unidades_medida'] = $this->Unidades_medida_model->get_all_unidades_medida();

			$this->load->model('Acabamento_model');
			$data['all_acabamento'] = $this->Acabamento_model->get_all_acabamento();
            
            $data['_view'] = 'producao_os/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a producao_os
     */
    function edit($id_producao)
    {   
        // check if the producao_os exists before trying to edit it
        $data['producao_os'] = $this->Producao_os_model->get_producao_os($id_producao);
        
        if(isset($data['producao_os']['id_producao']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('material_id','Material Id','required');
			$this->form_validation->set_rules('acabamento_id','Acabamento Id','required');
			$this->form_validation->set_rules('unidade_medida_id','Unidade Medida Id','required');
			$this->form_validation->set_rules('os_id','Os Id','required');
			$this->form_validation->set_rules('quantidade_producao','Quantidade Producao','required|numeric');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'material_id' => $this->input->post('material_id'),
					'os_id' => $this->input->post('os_id'),
					'unidade_medida_id' => $this->input->post('unidade_medida_id'),
					'acabamento_id' => $this->input->post('acabamento_id'),
					'descricao_producao' => $this->input->post('descricao_producao'),
					'tipo_producao' => $this->input->post('tipo_producao'),
					'medida_producao' => $this->input->post('medida_producao'),
					'quantidade_producao' => $this->input->post('quantidade_producao'),
					'status_producao' => $this->input->post('status_producao'),
                );

                $this->Producao_os_model->update_producao_os($id_producao,$params);            
                redirect('producao_os/index');
            }
            else
            {
				$this->load->model('Material_model');
				$data['all_material'] = $this->Material_model->get_all_material();

				$this->load->model('Os_model');
				$data['all_os'] = $this->Os_model->get_all_os();

				$this->load->model('Unidades_medida_model');
				$data['all_unidades_medida'] = $this->Unidades_medida_model->get_all_unidades_medida();

				$this->load->model('Acabamento_model');
				$data['all_acabamento'] = $this->Acabamento_model->get_all_acabamento();

                $data['_view'] = 'producao_os/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The producao_os you are trying to edit does not exist.');
    } 

    /*
     * Deleting producao_os
     */
    function remove($id_producao)
    {
        $producao_os = $this->Producao_os_model->get_producao_os($id_producao);

        // check if the producao_os exists before trying to delete it
        if(isset($producao_os['id_producao']))
        {
            $this->Producao_os_model->delete_producao_os($id_producao);
            redirect('producao_os/index');
        }
        else
            show_error('The producao_os you are trying to delete does not exist.');
    }
    
}
