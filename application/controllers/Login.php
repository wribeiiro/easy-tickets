<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}

	public function logar() {
		$this->dados['titulo'] = 'Easy Tickets | Autenticação';
		$this->load->view('Login/login', $this->dados);
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */