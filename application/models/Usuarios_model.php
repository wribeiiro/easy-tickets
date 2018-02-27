<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct() {

		parent::__construct();
	}

	public function contarUsuarios(){

		//$this->db->order_by('id', 'DESC');
		$query = $this->db->get("usuarios"); // tabela usuarios
		//$total = $query->num_rows();
		return $query->num_rows();
	}

	public function listarUsuarios() {

	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */