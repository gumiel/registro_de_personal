<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubro extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('rubro_model');		
		if (!$this->session->userdata('usuario')) 
		{
			redirect('login');
		}
		else
		{
			if( $this->session->userdata('tipo') > 1 )
			{
				// http_redirect()('comerciantes/listaComerciantes', 301);
			}
		}
	}

	public function listaRubro()
	{
		$allRubros = $this->rubro_model->getTodosRubros();
		$data['allRubro'] = $allRubros;
		$this->load->view('rubro/listaRubro',$data);
	}

	public function crearRubro(){	

		$this->load->view('rubro/crearRubro');	

	}

	public function procesarCrearRubro(){	
		$this->form_validation->set_rules('nombre_rubro', 'Rubro', 'trim|required|email|max_length[50]|xss_clean');

		
		if ($this->form_validation->run() === TRUE) {
			$datosInsert = array(
								'nombre_rubro' => $this->input->post('nombre_rubro')
								);
			$this->rubro_model->procesarCrearRubro($datosInsert);
			$this->session->set_flashdata('mensaje', 'Fue Creado correctamente');
			redirect('/rubro/listaRubro', 'location');			
		} else {
			echo "Error";
			$this->crearComerciante();
		}		

	}

	public function verRubro($id='')
	{
		if ($id>0) {

			$rubro = $this->rubro_model->getRubro($id);
			if (count($rubro)>0) 
			{				
				$data = array(
					            'nombre_rubro' => $rubro['nombre_rubro']
					            );
				$this->load->view('rubro/verRubro',$data);
			} else {
				redirect('/rubro/listaRubro', 'location');
			}

		} else {
			redirect('/rubro/listaUsualistaRubrorios', 'location');
		}

	}

	public function editarRubro($id=0)
	{		
		if ($id>0) 
		{
			$data = $this->rubro_model->getRubro($id);
			
			if($data)
			{				
				$this->load->view('rubro/editarRubro',$data);
			}else
			{				
				redirect('rubro/listaRubro','location');
			}
		}else
		{
			redirect('rubro/listaRubro','location');
		}
	}

	public function procesarEditarRubro($id=0){	

		if($id > 0){

			$this->form_validation->set_rules('nombre_rubro', 'Rubro', 'trim|required|email|max_length[50]|xss_clean');
			
			if ($this->form_validation->run() === TRUE) {
				
				$datosEditar = array(
									'nombre_rubro' => $this->input->post('nombre_rubro')
									);
				// print_r($datosEditar);exit();
				$this->rubro_model->procesarEditarRubro($id,$datosEditar);
				$this->session->set_flashdata('mensaje', 'Fue Modificado correctamente');
				redirect('/rubro/listaRubro', 'location');	
		
			} else {
						
				redirect('/rubro/editarRubro/'.$id, 'location');
		
			}	
		
		}else{

			redirect('/rubro/listaRubro', 'location');

		}
				

	}

	public function eliminarRubro($id='')
	{
		
		if($id != ''){

			$this->rubro_model->eliminarRubro($id);
			$this->session->set_flashdata('mensaje', 'Fue eliminado correctamente');
			redirect('/rubro/listaRubro', 'location');
			
		}else{
			
			redirect('/rubro/listaRubro', 'location');
		
		}

	}

}

/* End of file rubro */
/* Location: ./application/controllers/rubro */