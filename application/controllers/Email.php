<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
	public $host     = 'ssl://smtp.gmail.com';
	public $smtp_auth = true;
	public $username = "designermf3@gmail.com";
	public $password = "yS7/xR4{nY7}dS0>lZ5/";
	public $smtp_port = "587";

	function  __construct()
	{
		parent::__construct();
	}

}
