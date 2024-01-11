<?php

class Ajax extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	/**
	 * @return void
	 * @throws Exception
	 */
	public function change_theme()
	{
		$this->session->unset_userdata('theme_global');


		$theme = $this->input->post('theme');
		$new_theme = $theme == 'dark' ? 'light' : 'dark';

		$this->session->set_userdata('theme_global', $new_theme);
		return true;
	}
}
