<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('administracion_model');		
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

	public function listaUsuarios()
	{
		$allUser = $this->administracion_model->getTodosUsuarios();
		$data['allUser'] = $allUser;
		$this->load->view('administracion/listaUsuarios',$data);
	}

	public function crearUsuario(){	

		$this->load->view('administracion/crearUsuario');	

	}

	public function editarUsuario($id=0)
	{		
		if ($id>0) 
		{
			$data = $this->administracion_model->getUsuario($id);
			
			if($data)
			{				
				$this->load->view('administracion/editarUsuario',$data);
			}else
			{				
				redirect('administracion/listaUsuarios','location');
			}
		}else
		{
			redirect('administracion/listaUsuarios','location');
		}
	}

	public function procesarCrearUsuario(){	
		$this->form_validation->set_rules('email_usu', 'Email', 'trim|required|email|max_length[50]|xss_clean');
		$this->form_validation->set_rules('login_usu', 'Cuenta', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('pass_usu', 'Contraseña', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('tipo_usu', 'Tipo Usuario', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() === TRUE) {
			$datosInsert = array(
								'email_usu' => $this->input->post('email_usu'),
								'login_usu' => $this->input->post('login_usu'),
								'pass_usu' => $this->input->post('pass_usu'),
								'tipo_usu' => $this->input->post('tipo_usu')
								);
			$this->administracion_model->procesarCrearUsuario($datosInsert);
			$this->session->set_flashdata('mensaje', 'Fue Creado correctamente');
			redirect('/administracion/listaUsuarios', 'location');			
		} else {
			echo "Error";
			$this->crearComerciante();
		}		

	}

	public function procesarEditarUsuario($id=0){	

		if($id > 0){

			$this->form_validation->set_rules('email_usu', 'Email', 'trim|required|email|max_length[50]|xss_clean');
			$this->form_validation->set_rules('login_usu', 'Cuenta', 'trim|required|max_length[50]|xss_clean');
			$this->form_validation->set_rules('pass_usu', 'Contraseña', 'trim|required|max_length[50]|xss_clean');
			$this->form_validation->set_rules('tipo_usu', 'Tipo Usuario', 'trim|required|xss_clean');
			
			if ($this->form_validation->run() === TRUE) {
				
				$datosEditar = array(
									'email_usu' => $this->input->post('email_usu'),
									'login_usu' => $this->input->post('login_usu'),
									'pass_usu' => $this->input->post('pass_usu'),
									'tipo_usu' => $this->input->post('tipo_usu')
									);
				// print_r($datosEditar);exit();
				$this->administracion_model->procesarEditarUsuario($id,$datosEditar);
				$this->session->set_flashdata('mensaje', 'Fue Modificado correctamente');
				redirect('/administracion/listaUsuarios', 'location');	
		
			} else {
						
				redirect('/administracion/editarUsuario/'.$id, 'location');
		
			}	
		
		}else{

			redirect('/administracion/listaUsuarios', 'location');

		}
				

	}

	public function verUsuario($id='')
	{
		if ($id>0) {

			$usuario = $this->administracion_model->verUsuario($id);
			if (count($usuario)>0) {
				// $data = $usuario;
				$data = array(
					            'id_usu' => $usuario['id_usu'],
					            'login_usu' => $usuario['login_usu'],
					            'pass_usu' => $usuario['pass_usu'],
					            'email_usu' => $usuario['email_usu'],
					            'tipo_usu' => $usuario['tipo_usu']
					            );
				$this->load->view('administracion/verUsuario',$data);
			} else {
				redirect('/administracion/listaUsuarios', 'location');
			}

		} else {
			redirect('/administracion/listaUsuarios', 'location');
		}

	}

	public function eliminarUsuario($id='')
	{
		
		if($id != ''){

			$this->administracion_model->eliminarUsuario($id);
			$this->session->set_flashdata('mensaje', 'Fue eliminado correctamente');
			redirect('/administracion/listaUsuarios', 'location');
			
		}else{
			
			redirect('/administracion/listaUsuarios', 'location');
		
		}

	}



}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */