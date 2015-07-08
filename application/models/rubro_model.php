<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rubro_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function getTodosRubros()
	{		
		$this->db->select('*');		
		$this->db->order_by('nombre_rubro', 'ASC');
		$res = $this->db->get('rubro');
		return $res->result_array();
	}

	public function procesarCrearRubro($com='')
	{
		if($com!='')
			$this->db->insert('rubro', $com);
	}


	public function getRubro($id='')
	{
		if ($id>0) {
			$this->db->select('*');					
			$this->db->where('id_rubro', $id);
			$res = $this->db->get('rubro');
			return $res->row_array();
		}
	}

	public function procesarEditarRubro($id,$datos)
	{
		$this->db->where('id_rubro', $id);
		$this->db->update('rubro', $datos);

	}

	public function eliminarRubro($id='')
	{
		$this->db->where('id_rubro', $id);
		$this->db->delete('rubro');
	}

	
}

/* End of file administracion_model.php */
/* Location: ./application/models/administracion_model.php */