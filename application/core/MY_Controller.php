<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		//$this->CheckUser();
	}
	public function CheckUser()
	{
		if(!$this->session->userdata('userInfo') && uri_string() != 'Manage/user/Login'){
			 redirect(site_url('Manage/user/Login'));die;
		}
	}
}

class MY_Op extends CI_Controller
{
	public $redisCli;
	public function __construct(){
		parent::__construct();
		session_start();
//		$this->load->library('redis');
//		$this->redisCli = $this->redis->GetRedis();
		$this->load->helper('url');
		$this->load->library('session');
	}
}