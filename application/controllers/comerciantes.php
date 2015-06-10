<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comerciantes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('comerciantes_model');
		if (!$this->session->userdata('usuario')) 
			redirect('login');		
	}

	public function index()
	{
	}

	public function exportarExcel()
	{		
		$this->load->library('Classes/PHPExcel.php');			
	    $this->phpexcel->getProperties()->setCreator("prez.gumiel@gmail.com")
	                                 ->setLastModifiedBy("henry perez gumiel")
	                                 ->setTitle("Office 2007 XLSX Test Document")
	                                 ->setSubject("Office 2007 XLSX Test Document")
	                                 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
	                                 ->setKeywords("office 2007 openxml php")
	                                 ->setCategory("Test result file");
		$ordenamiento = $this->input->post('orden');		
	    $allComer = $this->comerciantes_model->getTodosComerciantes($ordenamiento);
	    $this->phpexcel->getActiveSheet()->getStyle('A1:H1')->getFont()->setBold(true);

    	for($col = 'B'; $col !== 'Z'; $col++) 
    	{
		    if($this->input->post('nombres_com') && !isset($nombres_com) )
		    {
				$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Nombres y Apellidos');	
		    	$nombres_com = $col;		  	
		    	continue;
		    }

		    if($this->input->post('numero_caseta_com') && !isset($numero_caseta_com) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Caseta');	
		    	$numero_caseta_com = $col;
		    	continue;
		    }

		    if($this->input->post('codigo_com') && !isset($codigo_com) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Codigo');	
		    	$codigo_com = $col;
		    	continue;
		    }

		    if($this->input->post('carnet_com') && !isset($carnet_com) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Carnet');	
		    	$carnet_com = $col;
		    	continue;
		    }

		    if($this->input->post('direccion_com') && !isset($direccion_com) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Direccion');	
		    	$direccion_com = $col;
		    	continue;
		    }

		    if($this->input->post('id_rubro') && !isset($id_rubro) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Rubro');
		    	$id_rubro = $col;
		    	continue;
		    }

		    if($this->input->post('observaciones_com') && !isset($observaciones_com) != "")
		    {
		    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($col.'1', 'Observaciones');	
		    	$observaciones_com = $col;
		    	continue;
		    }
		}

	    $this->phpexcel->setActiveSheetIndex(0)->setCellValue('A1', 'Nº');	
        $cont = 1;

	    for($i=2;$i<count($allComer);$i++)
	    {	    	
	    	$this->phpexcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $cont.".-");	    	       	

	    	if( isset($nombres_com) )   			        	
	    		$this->phpexcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $allComer[$i]['nombres_com']);

	    	if( isset($numero_caseta_com) )	    			        	
	    		$this->phpexcel->setActiveSheetIndex(0)->setCellValue($numero_caseta_com.$i, $allComer[$i]['numero_caseta_com']);	
	    	
	        if(isset($codigo_com))
	        	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($codigo_com.$i, $allComer[$i]['codigo_com']);	
	        
	        if(isset($carnet_com))
	        	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($carnet_com.$i, $allComer[$i]['carnet_com']);	
	        
	        if(isset($direccion_com))
	        	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($direccion_com.$i, $allComer[$i]['direccion_com']);	
	        
	        if(isset($observaciones_com))
	        	$this->phpexcel->setActiveSheetIndex(0)->setCellValue($observaciones_com.$i, $allComer[$i]['observaciones_com']);	

	        $cont ++;

	    }

	    for($col = 'A'; $col !== 'H'; $col++) 
	    {
		    $this->phpexcel->getActiveSheet()
		        ->getColumnDimension($col)
		        ->setAutoSize(true);
		}
		
	    $this->phpexcel->setActiveSheetIndex(0);
	     	     	    
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment;filename="01simple.xlsx"');
	    header('Cache-Control: max-age=0');
	     
	    $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel2007');
	    $objWriter->save('php://output');
	}

	public function listaComerciantes($value='')
	{
		$allComer = $this->comerciantes_model->getTodosComerciantes();
		$data['allComer'] = $allComer;
		$this->load->view('comerciantes/lista_comerciantes',$data);
	}

	public function crearComerciante()
	{
		$this->load->view('comerciantes/crear_comerciante');
	}

	public function procesarCrearComerciante()
	{
		$this->form_validation->set_rules('ncaseta', 'Numero de caseta', 'trim|max_length[10]|xss_clean');
		$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('codigo', 'Codigo', 'trim|required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('carnet', 'Carnet', 'trim|required|max_length[11]|xss_clean');
		$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|max_length[150]|xss_clean');
		$this->form_validation->set_rules('rubro', 'Rubro', 'trim|required|max_length[50]|xss_clean');
		$this->form_validation->set_rules('observacion', 'Obaservacion', 'trim|max_length[600]|xss_clean');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe ser mayor a %s digitos');
		$this->form_validation->set_message('max_length', 'El campo %s debe ser menor a %s digitos');

		if ($this->form_validation->run() === TRUE) 
		{
			$datosInsert = array(
								'numero_caseta_com' => $this->input->post('ncaseta'),
								'nombres_com' => $this->input->post('nombres'),
								'apellidos_com' => '',
								'codigo_com' => $this->input->post('codigo'),
								'carnet_com' => $this->input->post('carnet'),
								'direccion_com' => $this->input->post('direccion'),
								'observaciones_com' => $this->input->post('observacion'),
								'id_rubro' => $this->input->post('rubro')
								);
			$this->comerciantes_model->procesarCrearComerciante($datosInsert);
			$this->session->set_flashdata('mensaje', 'Fue Creado correctamente');
			redirect('/comerciantes/listaComerciantes/', 'refresh');		
		} else 
		{		
			$this->crearComerciante();
		}
	}

	public function verComerciante($id='')
	{
		if ($id>0) 
		{
			$comerciante = $this->comerciantes_model->verComerciante($id);
			if (count($comerciante)>0) 
			{		
				$data = array(
					            'numero' => $comerciante['numero_caseta_com'],
					            'nombres' => $comerciante['nombres_com'],
					            'apellidos' => $comerciante['apellidos_com'],
					            'codigo' => $comerciante['codigo_com'],
					            'carnet' => $comerciante['carnet_com'],
					            'direccion' => $comerciante['direccion_com'],
					            'observaciones' => $comerciante['observaciones_com'],
					            'rubro' => $comerciante['id_rubro'],
					            );
				$this->load->view('comerciantes/ver_comerciante',$data);
			} else 
			{
				$this->listaComerciantes();
			}

		} else 
		{
			$this->listaComerciantes();
		}
	}

	public function editarComerciante($id='')
	{
		if ($id>0) 
		{
			$comerciante = $this->comerciantes_model->verComerciante($id);
			if (count($comerciante)>0) 
			{		
				$data = array(
					            'id' => $comerciante['id_com'],
					            'numero' => $comerciante['numero_caseta_com'],
					            'nombres' => $comerciante['nombres_com'],
					            'apellidos' => '',
					            'codigo' => $comerciante['codigo_com'],
					            'carnet' => $comerciante['carnet_com'],
					            'direccion' => $comerciante['direccion_com'],
					            'observaciones' => $comerciante['observaciones_com'],
					            'rubro' => $comerciante['id_rubro'],
					            );
				$this->load->view('comerciantes/editar_comerciante',$data);
			} else 
			{
				$this->listaComerciantes();
			}

		} else 
		{
			$this->listaComerciantes();
		}

	}

	public function procesarEditarComerciante($id)
	{
		if ($id>0) 
		{
			$this->form_validation->set_rules('ncaseta', 'Numero de caseta', 'trim|max_length[10]|xss_clean');
			$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required|max_length[50]|xss_clean');
			$this->form_validation->set_rules('codigo', 'Codigo', 'trim|required|max_length[30]|xss_clean');
			$this->form_validation->set_rules('carnet', 'Carnet', 'trim|required|max_length[11]|xss_clean');
			$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('rubro', 'Rubro', 'trim|required|max_length[50]|xss_clean');
			$this->form_validation->set_rules('observacion', 'Obaservacion', 'trim|max_length[600]|xss_clean');

			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_message('min_length', 'El campo %s debe ser mayor a %s digitos');
			$this->form_validation->set_message('max_length', 'El campo %s debe ser menor a %s digitos');

			if ($this->form_validation->run() === TRUE) 
			{
				$datosUpdate = array(
									'numero_caseta_com' => $this->input->post('ncaseta'),
									'nombres_com' => $this->input->post('nombres'),
									'apellidos_com' => '',
									'codigo_com' => $this->input->post('codigo'),
									'carnet_com' => $this->input->post('carnet'),
									'direccion_com' => $this->input->post('direccion'),
									'observaciones_com' => $this->input->post('observacion'),
									'id_rubro' => $this->input->post('rubro')
									);
				$this->comerciantes_model->procesarEditarComerciante($datosUpdate,$id);
				$this->session->set_flashdata('mensaje', 'Fue Editado correctamente');
				redirect('/comerciantes/listaComerciantes/', 'refresh');			
			} else 
			{			
				$this->editarComerciante();
			}
		} else 
		{
			$this->listaComerciantes();
		}
	}

	public function eliminarComerciante($id="")
	{
		if($id)
		{
			$this->comerciantes_model->eliminarComerciante($id);
			$this->session->set_flashdata('mensaje', 'Fue eliminado correctamente');
			redirect('/comerciantes/listaComerciantes/', 'refresh');		
		}else
		{
			$this->listaComerciantes();
		}
	}

}

/* End of file comerciantes.php */
/* Location: ./application/controllers/comerciantes.php */