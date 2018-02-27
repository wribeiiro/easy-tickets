<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}


	public function index(){
		
	}

	public function listarUsuarios() {
		$this->load->model("Usuarios_model", "usuarios");
		$this->dados["titulo"]  = "Easy Tickets - Listar Usuários";
		$this->dados["usuario"] = $this->usuarios->listarUsuarios();
		$this->load->view("Usuarios/listar", $this->dados);
	}
}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */