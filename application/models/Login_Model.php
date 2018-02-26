<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function __construct() {

		parent::__construct();
	}
 

 	public function getusuarios($login=NULL, $senha=NULL) {

 		$this->db->where("login", $login);
		$this->db->where("senha", $senha);

		$query = $this->db->get("usuarios"); // tabela usuarios
		return $query->result();
 	}
}

/* End of file Login_Model.php */
/* Location: ./application/models/Login_Model.php */