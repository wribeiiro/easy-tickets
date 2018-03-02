<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('Login_model', 'login');
		$this->load->model('Usuarios_model', 'usuario');
	}

	public function index() {
		
		$this->dados['titulo'] = 'Easy Tickets | Autenticação';
		$this->load->view('Login/login', $this->dados);

	}

	public function logar() {
		// dados do form
		$login   = $this->input->post("login");
		$senha   = md5($this->input->post("senha"));

		$this->dados['login'] = $this->login->getusuarios($login, $senha);

		if (count($this->dados['login']) == 1):
			$this->session->set_userdata("sessao", $this->dados['login']);
			// adicionar log do usuario
			foreach ($this->dados['login'] as $login):
				$dados['id_usuario'] = $login->id;
				$dados['login']      = $login->nome;
				$dados['data_hora']  = date('Y-m-d H:m:i');
				$this->usuario->adicionarLogUsuarios($dados);
			endforeach;

			redirect('Principal/');
		else:
			$this->session->set_flashdata('erro_login', 'Usuário ou senha inválidos!');
			redirect('');
		endif;
	}

	public function logoff(){
 		$this->session->set_userdata("sessao", "");
 		//$this->session->destroy();
 		redirect('');
 	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */