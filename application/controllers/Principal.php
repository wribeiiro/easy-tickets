<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('Usuarios_model', 'usuarios');
		$this->load->library('Controle_acesso', 'controle_acesso');
		$this->controle_acesso->controlar();
	}

	public function index() {
		
		$this->dados['titulo']     = 'Easy Tickets | Principal';
		$this->dados['totalUsers'] = $this->usuarios->contarUsuarios();
		$this->load->view('Principal/index', $this->dados);
	}
}

/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */