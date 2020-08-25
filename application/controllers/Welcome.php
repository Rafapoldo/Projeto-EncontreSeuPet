<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		
	}
	public function index()
	{
		$this->load->view('page');
		
	}



	
	
	


//=========================================================
	public function tratarFormulario(){

		$dadoscontato = [
            $this->input->post('email'),
			$this->input->post('nome'),
			$this->input->post('telefone')

        ];

        //guardar dados na db
        $this->db->query('INSERT INTO contatos(email, nome, telefone) VALUES(?,?,?)', $dadoscontato);
		
		

		$dadospet = [
			$this->input->post('nome_pet'),
			$this->input->post('porte'),
			$this->input->post('tipo'),
			$this->input->post('descricao'),
			
		];

		if($this->input->post('perdido')== 'perdido'){
			
			$this->db->query('INSERT INTO perdidos (nome, porte, tipo, descricao) VALUES(?,?,?,?)', $dadospet);
		redirect('perdidos');
		}
		else{
			$this->db->query('INSERT INTO encontrados (nome, porte, tipo, descricao) VALUES(?,?,?,?)', $dadospet);
		redirect('encontrados');

		}

		
			

		
		


}


	










}
