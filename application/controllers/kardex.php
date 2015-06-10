<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kardex extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kardex_model');
	}

	public function index()
	{
	}

	public function listaComerciantes()
	{
		$allComer = $this->kardex_model->getTodosComerciantes();
		$data['allComer'] = $allComer;
		$this->load->view('kardex/listaComerciantes',$data);
	}

	public function crearComerciante()
	{
		$this->load->view('kardex/crear_comerciante');
	}

	public function procesarCrearComerciante()
	{
		$this->form_validation->set_rules('nombres_kardex', 'Nombres', 'trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('codigo_afiliado_kardex', 'Codigo Afiliado', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('codigo_licencia_kardex', 'Codigo Licencia', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('lugar_nacimiento_kardex', 'Lugar de Nacimiento', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('nacimiento_kardex', 'Nacimiento', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('ci_kardex', 'CI', 'trim|max_length[15]|xss_clean');
		$this->form_validation->set_rules('estado_civil_kardex', 'Estado Civil', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('profesion_kardex', 'Profesion', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('conyugue_kardex', 'Conyuge', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('hijos_kardex', 'Hijos', 'trim|max_length[10]|xss_clean');
		$this->form_validation->set_rules('procedencia_kardex', 'Procedencia', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('antiguedad_kardex', 'Antiguedad', 'trim|max_length[10]|xss_clean');
		$this->form_validation->set_rules('domicilio_kardex', 'Domicilio', 'trim|max_length[150]|xss_clean');
		$this->form_validation->set_rules('telefonos_kardex', 'Telefonos', 'trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('comercializa_kardex', 'Comercializa', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('ubicacion_puesto_kardex', 'Ubicacion Puesto', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('caseta_numero_kardex', 'Caseta', 'trim|max_length[15]|xss_clean');
		$this->form_validation->set_rules('mesa_en_kardex', 'Mesa', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('fecha_kardex', 'Fecha', 'trim|max_length[20]|xss_clean');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe ser mayor a %s digitos');
		$this->form_validation->set_message('max_length', 'El campo %s debe ser menor a %s digitos');

		if($this->form_validation->run() == TRUE)
		{
			$dato = array(
							'codigo_afiliado_kardex' => $this->input->post('codigo_afiliado_kardex'),
							'nombres_kardex' => $this->input->post('nombres_kardex'),
							'codigo_licencia_kardex' => $this->input->post('codigo_licencia_kardex'),
							'lugar_nacimiento_kardex' => $this->input->post('lugar_nacimiento_kardex'),
							'nacimiento_kardex' => $this->convertirFechaABd($this->input->post('nacimiento_kardex')),
							'ci_kardex' => $this->input->post('ci_kardex'),
							'estado_civil_kardex' => $this->input->post('estado_civil_kardex'),
							'profesion_kardex' => $this->input->post('profesion_kardex'),
							'conyugue_kardex' => $this->input->post('conyugue_kardex'),
							'hijos_kardex' => $this->input->post('hijos_kardex'),
							'procedencia_kardex' => $this->input->post('procedencia_kardex'),
							'antiguedad_kardex' => $this->convertirFechaABd($this->input->post('antiguedad_kardex')),
							'domicilio_kardex' => $this->input->post('domicilio_kardex'),
							'telefonos_kardex' => $this->input->post('telefonos_kardex'),
							'comercializa_kardex' => $this->input->post('comercializa_kardex'),
							'ubicacion_puesto_kardex' => $this->input->post('ubicacion_puesto_kardex'),
							'caseta_numero_kardex' => $this->input->post('caseta_numero_kardex'),
							'mesa_en_kardex' => $this->input->post('mesa_en_kardex'),
							'fecha_kardex' => $this->convertirFechaABd($this->input->post('fecha_kardex'))
						);
			$cantidadRes = $this->kardex_model->insertarNuevoKardex($dato);

			if($cantidadRes>0)
			{
				$this->session->set_flashdata('mensaje', 'Fue Creado correctamente');
				redirect('kardex/listaComerciantes');
			}else
			{
				$this->session->set_flashdata('mensaje', 'Existe un error en sus datos ingresado.');
				redirect('kardex/crearComerciante');				
			}			
		}else
		{
			$this->session->set_flashdata('mensaje', 'Existe un error en sus datos ingresado.');
			redirect('kardex/crearComerciante');
		}
	}

	public function editarComerciante($id=0)
	{
		if($id>0)
		{
			$comerciante = $this->kardex_model->verComerciante($id);

			if (count($comerciante)) 
			{
				$data = array(
								'id_kardex' => $comerciante['id_kardex'],
								'nombres_kardex' => $comerciante['nombres_kardex'],
								'codigo_afiliado_kardex' => $comerciante['codigo_afiliado_kardex'],
								'codigo_licencia_kardex' => $comerciante['codigo_licencia_kardex'],
								'lugar_nacimiento_kardex' => $comerciante['lugar_nacimiento_kardex'],
								'nacimiento_kardex' => $this->convertirFechaAVista($comerciante['nacimiento_kardex']),
								'ci_kardex' => $comerciante['ci_kardex'],
								'estado_civil_kardex' => $comerciante['estado_civil_kardex'],
								'profesion_kardex' => $comerciante['profesion_kardex'],
								'conyugue_kardex' => $comerciante['conyugue_kardex'],
								'hijos_kardex' => $comerciante['hijos_kardex'],
								'procedencia_kardex' => $comerciante['procedencia_kardex'],
								'antiguedad_kardex' => $this->convertirFechaAVista($comerciante['antiguedad_kardex']),
								'domicilio_kardex' => $comerciante['domicilio_kardex'],
								'telefonos_kardex' => $comerciante['telefonos_kardex'],
								'comercializa_kardex' => $comerciante['comercializa_kardex'],
								'ubicacion_puesto_kardex' => $comerciante['ubicacion_puesto_kardex'],
								'caseta_numero_kardex' => $comerciante['caseta_numero_kardex'],
								'mesa_en_kardex' => $comerciante['mesa_en_kardex'],
								'fecha_kardex' => $this->convertirFechaAVista($comerciante['fecha_kardex'])
								);				
				$this->load->view('kardex/editarComerciante',$data);
			}else
			{
				redirect('kardex/listaComerciantes');				
			}
		}else
		{
			redirect('kardex/listaComerciantes');
		}
	}

	public function procesarEditarComerciante()
	{
		$this->form_validation->set_rules('id_kardex', 'id_kardex', 'trim|required|max_length[100]|xss_clean');
		$this->form_validation->set_rules('nombres_kardex', 'Nombres', 'trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('codigo_afiliado_kardex', 'Codigo Afiliado', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('codigo_licencia_kardex', 'Codigo Licencia', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('lugar_nacimiento_kardex', 'Lugar de Nacimiento', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('nacimiento_kardex', 'Nacimiento', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('ci_kardex', 'CI', 'trim|max_length[15]|xss_clean');
		$this->form_validation->set_rules('estado_civil_kardex', 'Estado Civil', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('profesion_kardex', 'Profesion', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('conyugue_kardex', 'Conyuge', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('hijos_kardex', 'Hijos', 'trim|max_length[10]|xss_clean');
		$this->form_validation->set_rules('procedencia_kardex', 'Procedencia', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('antiguedad_kardex', 'Antiguedad', 'trim|max_length[10]|xss_clean');
		$this->form_validation->set_rules('domicilio_kardex', 'Domicilio', 'trim|max_length[150]|xss_clean');
		$this->form_validation->set_rules('telefonos_kardex', 'Telefonos', 'trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('comercializa_kardex', 'Comercializa', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('ubicacion_puesto_kardex', 'Ubicacion Puesto', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('caseta_numero_kardex', 'Caseta', 'trim|max_length[15]|xss_clean');
		$this->form_validation->set_rules('mesa_en_kardex', 'Mesa', 'trim|max_length[20]|xss_clean');
		$this->form_validation->set_rules('fecha_kardex', 'Fecha', 'trim|max_length[20]|xss_clean');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe ser mayor a %s digitos');
		$this->form_validation->set_message('max_length', 'El campo %s debe ser menor a %s digitos');

		if($this->form_validation->run() == TRUE)
		{
			$id_kardex =  $this->input->post('id_kardex');
			$dato = array(
							'codigo_afiliado_kardex' => $this->input->post('codigo_afiliado_kardex'),
							'nombres_kardex' => $this->input->post('nombres_kardex'),
							'codigo_licencia_kardex' => $this->input->post('codigo_licencia_kardex'),
							'lugar_nacimiento_kardex' => $this->input->post('lugar_nacimiento_kardex'),
							'nacimiento_kardex' => $this->convertirFechaABd($this->input->post('nacimiento_kardex')),
							'ci_kardex' => $this->input->post('ci_kardex'),
							'estado_civil_kardex' => $this->input->post('estado_civil_kardex'),
							'profesion_kardex' => $this->input->post('profesion_kardex'),
							'conyugue_kardex' => $this->input->post('conyugue_kardex'),
							'hijos_kardex' => $this->input->post('hijos_kardex'),
							'procedencia_kardex' => $this->input->post('procedencia_kardex'),
							'antiguedad_kardex' => $this->convertirFechaABd($this->input->post('antiguedad_kardex')),
							'domicilio_kardex' => $this->input->post('domicilio_kardex'),
							'telefonos_kardex' => $this->input->post('telefonos_kardex'),
							'comercializa_kardex' => $this->input->post('comercializa_kardex'),
							'ubicacion_puesto_kardex' => $this->input->post('ubicacion_puesto_kardex'),
							'caseta_numero_kardex' => $this->input->post('caseta_numero_kardex'),
							'mesa_en_kardex' => $this->input->post('mesa_en_kardex'),
							'fecha_kardex' => $this->convertirFechaABd($this->input->post('fecha_kardex'))
						);
			$cantidadRes = $this->kardex_model->editarKardex($dato,$id_kardex);
			$this->session->set_flashdata('mensaje', 'Fue Editado correctamente');
			redirect('kardex/listaComerciantes');
		}else
		{
			$this->session->set_flashdata('mensaje', 'Existe un error en sus datos ingresado.');
			redirect('kardex/editarComerciante/'.$id_kardex);
		}
	}

	public function verComerciante($id=0)
	{
		if($id>0)
		{
			$comerciante = $this->kardex_model->verComerciante($id);
			if (count($comerciante)) 
			{
				$data = array(
								'nombres_kardex' => $comerciante['nombres_kardex'],
								'codigo_afiliado_kardex' => $comerciante['codigo_afiliado_kardex'],
								'codigo_licencia_kardex' => $comerciante['codigo_licencia_kardex'],
								'lugar_nacimiento_kardex' => $comerciante['lugar_nacimiento_kardex'],
								'nacimiento_kardex' => $this->fechaLiteral($comerciante['nacimiento_kardex']),
								'ci_kardex' => $comerciante['ci_kardex'],
								'estado_civil_kardex' => $comerciante['estado_civil_kardex'],
								'profesion_kardex' => $comerciante['profesion_kardex'],
								'conyugue_kardex' => $comerciante['conyugue_kardex'],
								'hijos_kardex' => $comerciante['hijos_kardex'],
								'procedencia_kardex' => $comerciante['procedencia_kardex'],
								'antiguedad_kardex' => $comerciante['antiguedad_kardex'],
								'domicilio_kardex' => $comerciante['domicilio_kardex'],
								'telefonos_kardex' => $comerciante['telefonos_kardex'],
								'comercializa_kardex' => $comerciante['comercializa_kardex'],
								'ubicacion_puesto_kardex' => $comerciante['ubicacion_puesto_kardex'],
								'caseta_numero_kardex' => $comerciante['caseta_numero_kardex'],
								'mesa_en_kardex' => $comerciante['mesa_en_kardex'],
								'fecha_kardex' => $comerciante['fecha_kardex']
								);
				$this->load->view('kardex/ver_Comerciante',$data);
			}else
			{
				redirect('kardex/listaComerciantes');				
			}
		}else
		{
			redirect('kardex/listaComerciantes');
		}
	}

	public function eliminarComerciante($id=0)
	{
		if($id>0)
		{
			$this->kardex_model->eliminarComerciante($id);
			$this->session->set_flashdata('mensaje', 'Fue Eliminado correctamente');
			redirect('kardex/listaComerciantes');
		}
	}

	private function convertirFechaABd($fechaSlash='')
	{
		if($fechaSlash != '')
		{
			$arregloFecha = explode('/', trim($fechaSlash));			
			return $arregloFecha[2].'-'.$arregloFecha[0].'-'.$arregloFecha[1];
		}else
		{
			return '';
		}
	}

	private function convertirFechaAVista($fechaGuion='')
	{
		if($fechaGuion != '')
		{
			$arregloFecha = explode('-', trim($fechaGuion));

			if(count($arregloFecha) == 3)
				return $arregloFecha[1].'/'.$arregloFecha[2].'/'.$arregloFecha[0];
			else
				return '';
			
		}else
		{
			return '';
		}
	}

	private function fechaLiteral($fechaBd='')
	{
		if($fechaBd != '')
		{
			$fecha = explode('-',$fechaBd);
			return $fecha[2].' de '.$this->mesLiteral($fecha[1]).' del '.$fecha[0];
		}
	}

	private function mesLiteral($mes = '')
	{
		switch ($mes) 
		{
			case '01':
				return 'Enero';
				break;
			case '02':
				return 'Febrero';
				break;
			case '03':
				return 'Marzo';
				break;
			case '04':
				return 'Abril';
				break;
			case '05':
				return 'Mayo';
				break;
			case '06':
				return 'Junio';
				break;
			case '07':
				return 'Julio';
				break;
			case '08':
				return 'Agosto';
				break;
			case '09':
				return 'Septiembre';
				break;
			case '10':
				return 'Octubre';
				break;
			case '11':
				return 'Noviembre';
				break;
			case '12':
				return 'Diciembre';
				break;
			
			default:
				return '';
				break;
		}
	}

}

/* End of file kardex.php */
/* Location: ./application/controllers/kardex.php */