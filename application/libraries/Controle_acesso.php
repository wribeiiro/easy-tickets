<?php 

	class Controle_acesso {
	    /**
	     * summary
	     */
	    public function controlar() {

	        $CI   = &get_instance();
	        $user = $CI->session->userdata("sessao");

			if (empty($user)):
				redirect('');
			else:
				return $sessao = $user;
			endif;
	    }
	}