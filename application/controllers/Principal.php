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
		$this->dados['noticias']   = $this->getNoticias();
		$this->dados['sessao'] = $this->controle_acesso->controlar();
		$this->load->view('Principal/index', $this->dados);
	}

	public function getNoticias() {
		if($file = simplexml_load_file('http://www.contabeis.com.br/rss/noticias/') or die('Erro ao buscar XML!')):
			return $file; 
		endif;
	}
}
/* End of file Principal.php */
/* Location: ./application/controllers/Principal.php */