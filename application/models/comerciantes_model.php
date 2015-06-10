<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comerciantes_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function getTodosComerciantes($ordenamiento=''){		

		$this->db->select('*');

		if($ordenamiento != '')
			$this->db->order_by($ordenamiento, 'ASC');
		
		$res = $this->db->get('comerciantes');
		return $res->result_array();
		
	}

	public function procesarCrearComerciante($com='')
	{
		$this->db->insert('comerciantes', $com);
	}

	public function verComerciante($id='')
	{
		$this->db->select('*');
		$this->db->where('id_com', $id);
		$res = $this->db->get('comerciantes');
		return $res->row_array();
	}

	public function procesarEditarComerciante($com='',$id=0)
	{
		$this->db->where('id_com', $id);
		$this->db->update('comerciantes', $com);
	}

	public function eliminarComerciante($id='')
	{
		$this->db->where('id_com', $id);
		$this->db->delete('comerciantes');
	}

}

/* End of file comerciantes_model.php */
/* Location: ./application/models/comerciantes_model.php */