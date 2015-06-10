<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function getTodosUsuarios()
	{		
		$this->db->select('*');		
		$this->db->order_by('login_usu', 'ASC');
		$res = $this->db->get('usuarios');
		return $res->result_array();
	}

	public function getUsuario($id='')
	{
		if ($id>0) {
			$this->db->select('*');		
			$this->db->order_by('login_usu');
			$this->db->where('id_usu', $id);
			$res = $this->db->get('usuarios');
			return $res->row_array();
		}
	}

	public function procesarCrearUsuario($com='')
	{
		if($com!='')
			$this->db->insert('usuarios', $com);
	}

	public function procesarEditarUsuario($id,$datos)
	{
		$this->db->where('id_usu', $id);
		$this->db->update('usuarios', $datos);

	}

	public function verUsuario($id='')
	{
		$this->db->select('*');
		$this->db->where('id_usu', $id);
		$res = $this->db->get('usuarios');
		return $res->row_array();
	}

	public function eliminarUsuario($id='')
	{
		$this->db->where('id_usu', $id);
		$this->db->delete('usuarios');
	}
	
}

/* End of file administracion_model.php */
/* Location: ./application/models/administracion_model.php */