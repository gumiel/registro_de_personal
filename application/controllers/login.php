<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata('usuario');
		$this->session->sess_destroy();
		$this->session->userdata('item');
		$this->load->view('login/inicio');
	}

	public function procesar()
	{
		$usu = $this->input->post('usuario');
		$this->form_validation->set_rules('usuario', 'Cuenta', 'trim|required|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[5]|max_length[20]|xss_clean|callback_verificarPassword['.$usu.']');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe ser mayor a %s digitos');
		$this->form_validation->set_message('max_length', 'El campo %s debe ser menor a %s digitos');

		if($this->form_validation->run() === TRUE)
		{
			$usuario = $this->devolverDatosUsuario($this->input->post('usuario'),$this->input->post('password'));			
			$array = array(
				'usuario' => $usuario['login_usu'],
				'tipo' => $usuario['tipo_usu']
			);			
			$this->session->set_userdata( $array );
			redirect('comerciantes/listaComerciantes');
		}else
		{
			$this->index();			
		}
	}

	public function verificarPassword($password,$usuario)
	{		
		$this->load->model('usuarios_model');
		$usuarioRes = $this->usuarios_model->verificarAcceso($usuario,$password);

		if($usuarioRes)
		{
			if($usuarioRes['login_usu'] == $usuario AND $usuarioRes['pass_usu'] == $password) 
			{
				return TRUE;
			}else 
			{
				$this->form_validation->set_message('verificarPassword', 'Su cuenta no esta registrada');
				return FALSE;
			}

		}else{
			$this->form_validation->set_message('verificarPassword', 'Su cuenta no esta registrada');
			return FALSE;
		}

	}

	public function devolverDatosUsuario($usuario,$password)
	{		
		$this->load->model('usuarios_model');
		return $this->usuarios_model->devolverDatosUsuario($usuario,$password);

	}
}