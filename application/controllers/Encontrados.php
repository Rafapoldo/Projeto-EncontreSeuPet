<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encontrados extends CI_Controller {


    public function index()
	{

		$resultados = $this->db->query('SELECT * FROM encontrados');
		$temp['dados'] = $resultados->result_array();
		
		
		$this->load->view('page_encontrados', $temp);



		
	}



}
