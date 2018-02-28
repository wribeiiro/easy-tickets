<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model("Usuarios_model", "usuarios");
		$this->load->library('Controle_acesso', 'controle_acesso');
		$this->controle_acesso->controlar();
	}


	public function index(){
		
	}

	public function listarUsuarios() {
		$this->dados["titulo"]  = "Easy Tickets - Listar Usuários";
		$this->dados["usuario"] = $this->usuarios->listarUsuarios();
		$this->load->view("Usuarios/listar", $this->dados);
	}

	public function adicionarUsuarios() {
		$this->dados["titulo"]  = "Easy Tickets - Adicionar Usuários";
		$this->dados["usuario"] = $this->usuarios->adicionarUsuarios();
		$this->load->view("Usuarios/adicionar", $this->dados);
	}
}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */