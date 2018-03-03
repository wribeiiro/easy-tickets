<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model("Usuarios_model", "usuarios");
		$this->load->library('Controle_acesso', 'controle_acesso');
		$this->controle_acesso->controlar();
		$this->dados['sessao']     = $this->controle_acesso->controlar();
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
		//$this->dados["usuario"] = $this->usuarios->adicionarUsuarios();
		$this->load->view("Usuarios/adicionar", $this->dados);
	}

	public function salvarUsuarios() {
		if ($this->input->post('nome') == NULL):
			$dados['erro'] = 'campo vazio';
		else:
			$dados['nome']   	       = $this->input->post('nome');
			$dados['email']            = $this->input->post('email');
			$dados['login']            = $this->input->post('login');
			$dados['senha']            = $this->input->post('senha');
			$dados['nivel_acesso_id']  = $this->input->post('nivel_acesso_id');
			$dados['created']          = date('Y-m-d H:m:i');
			$dados['modified']         = date('Y-m-d H:m:i');

			if ($this->input->post('id') != NULL):
				$this->usuarios->editaUsuarios($dados, $this->input->post('id'));
			else:
				$this->usuarios->adicionarUsuarios($dados);
			endif;
			// redireciona para a pagina
			//redirect("listarclientes");
		endif;
	}

	public function editarUsuarios($id=NULL) {
		if ($id == NULL):
			redirect('listarUsuarios');
		endif;

		$query = $this->usuarios->editaUsuariosByID($id);

		if ($query == NULL):
			redirect('listarUsuarios');
		endif;

		// criamos um array para armazenar os dados de usuarios
		$dados['usuarios'] = $query;
		$dados['sessao']   = $this->controle_acesso->controlar();
		$dados['titulo']   = "Easy Tickets - Editar Usuários";

		//carrega a view
		$this->load->view('Usuarios/editar', $dados);
	}

	public function apagarUsuarios() {
		$this->usuarios->apagaUsuarios($_POST["id"]);
	}
}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */