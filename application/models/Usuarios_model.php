<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct() {

		parent::__construct();
	}

	public function contarUsuarios(){
		$query = $this->db->query("SELECT id FROM usuarios"); // tabela usuarios
		return $query->num_rows();
	}

	public function listarUsuarios() {
		$query = $this->db->query("SELECT * FROM usuarios ORDER BY id DESC");
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
			$query = $this->db->query("SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");
			return $query->row();
		endif; 
	}

	public function editaUsuarios($dados=NULL, $id=NULL){
		if ($dados != NULL && $id != NULL):
			$this->db->update('usuarios', $dados, array('id'=>$id));
		endif;
	}

	public function apagaUsuarios($id){
		$this->db->query("DELETE FROM usuarios WHERE id = '$id' LIMIT 1");

	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */