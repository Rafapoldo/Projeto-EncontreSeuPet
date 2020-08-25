<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perdidos extends CI_Controller {



    public function index()
	{
		
		
		
		$resultados = $this->db->query('SELECT * FROM perdidos');
		$temp['dados'] = $resultados->result_array();
		
		
		$this->load->view('page_perdidos', $temp);
		





	


	}

	



}