<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {
		
		$this->dados['titulo'] = 'Easy Tickets | Autenticação';
		$this->load->view('Login/login', $this->dados);

	}

	public function logar() {
		// dados do form
		$login   = $this->input->post("login");
		$senha   = md5($this->input->post("senha"));

		$this->db->where("login", $login);
		$this->db->where("senha", $senha);

		$query = $this->db->get("usuarios"); // tabela usuarios

		if ($query->num_rows() == 1):
			echo 'achou';
		else:
			echo 'nada';
		endif;
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */