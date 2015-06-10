<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kardex_model extends CI_Model {

	public function getTodosComerciantes(){
		$this->db->select('*');
		$res = $this->db->get('kardex');
		return $res->result_array();
	}
	public function insertarNuevoKardex($dato)
	{
		$this->db->insert('kardex', $dato);
		return $this->db->affected_rows();
	}
	public function editarKardex($dato,$id)
	{
		$this->db->where('id_kardex', $id);
		$this->db->update('kardex', $dato);		
		return $this->db->affected_rows();
	}
	public function verComerciante($id=0)
	{
		$this->db->select('*');
		$this->db->where('id_kardex', $id);
		$res = $this->db->get('kardex');
		if($res->num_rows() > 0){
			return $res->row_array();
		}else{
			return array('');
		}
	}

	public function eliminarComerciante($id){

		$this->db->where('id_kardex', $id);
		$this->db->delete('kardex');

	}
}

/* End of file kardex_model.php */
/* Location: ./application/models/kardex_model.php */