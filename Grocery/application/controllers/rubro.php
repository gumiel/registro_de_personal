<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Rubro extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function index()
	{
		$crud = new grocery_CRUD();

		// $crud->set_theme('datatables');
		$crud->set_table('rubro');
		$crud->required_fields('nombre_rubro');
		// $crud->set_relation('officeCode','offices','city');
		$crud->display_as('nombre_rubro','Nombre del Rubro');
		// $crud->set_subject('Employee');

		// $crud->required_fields('lastName');

		// $crud->set_field_upload('file_url','assets/uploads/files');

		$output = $crud->render();
		$this->load->view('rubro/listaRubro',$output);
		// $this->_example_output($output);
	}

}

/* End of file rubro */
/* Location: ./application/controllers/rubro */