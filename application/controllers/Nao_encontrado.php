<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nao_encontrado extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('America/Sao_Paulo');
	}

	public function index()
	{
		$data['title'] = "Página não encontrada";
		$data['modulo'] = 'not_found';
		$this->load->view('partials/view_header', $data);
		$this->load->view('partials/view_navigation');
		$this->load->view('view_pagina_nao_encontrada');
		$this->load->view('partials/view_footer');
	}
}
