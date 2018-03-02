<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct() {

		parent::__construct();
	}

	public function contarUsuarios(){
		$query = $this->db->get("usuarios"); // tabela usuarios
		return $query->num_rows();
	}

	public function listarUsuarios() {
		$this->db->order_by("id", "DESC");
		$query = $this->db->get("usuarios");
		return $query->result();
	}

	public function adicionarUsuarios($dados=NULL) {
		if($dados != NULL):
			$this->db->insert('usuarios', $dados);
		endif;
	}

	public function adicionarLogUsuarios($dados=NULL){
		if($dados != NULL):
			$this->db->insert('logusuarios', $dados);
		endif;
	}

	public function editaUsuariosByID($id=NULL) {

		if ($id != NULL):
			$this->db->where('id', $id); 
			$this->db->limit(1); 

			$query = $this->db->get('usuarios');
			return $query->row();
		endif; 
	}

	public function editaUsuarios($dados=NULL, $id=NULL){
		if ($dados != NULL && $id != NULL):
			$this->db->update('usuarios', $dados, array('id'=>$id));
		endif;
	}

	public function apagaUsuarios($id) {
		$this->db->where('id', $id); 
		$this->db->limit(1);
		$this->db->delete('usuarios');	
	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */