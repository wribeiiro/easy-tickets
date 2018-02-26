<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {

	public function ListaUsers() {
		//$this->db->select('id');
		//$this->db->select('titulo_noticia');
		//$this->db->select('link_noticia');
		//$this->db->select('data_noticia');
		//$this->db->limit(100);
		//$this->db->order_by('data_noticia', 'DESC');

		$consulta = $this->db->get('usuarios');

		return $consulta->result();
	}

}

/* End of file Home_Model.php */
/* Location: ./application/models/Home_Model.php */