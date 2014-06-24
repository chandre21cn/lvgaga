<?php
class Index extends CI_Controller
{

	public function index()
	{
		$this->load->library('fileop');
		//$this->load->library('redisphp');exit;
		var_dump(new Redisphp());

	}
}