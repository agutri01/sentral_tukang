<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->session->unset_userdata('RedirectKe');
		$data = array(
			'content' => 'frontend/layout/content'
		);
		$this->parser->parse('auth/login', $data);
	}
}
