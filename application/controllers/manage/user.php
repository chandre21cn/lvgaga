<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function Login()
	{

		//$this->load->library('redisphp');
		if($this->input->post()){

			$pwd = $this->input->post('pwd',TRUE);
			$email = $this->input->post('email',TRUE);
			$redirect = $_SERVER['HTTP_REFERER'];

			$da = $this->db->where(array('user_name' => $email,
									'pwd' => $pwd))
					->select('user_name,user_id')
					->get('adminuser')->result();
			if($da){
			    $this->session->set_userdata('userInfo', $da[0]);
			    redirect(site_url('manage/index/main'));
			}
		}
		$this->load->view('manage/loginview.php');
	}

	public function LoginOut()
	{
		$this->session->unset_userdata('userInfo');
		redirect(site_url('manage/user/LoginOut'));
	}


}