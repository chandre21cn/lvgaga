<?php
class Index extends MY_Op
{
	/*
	 * 首页显示
	 */
	public function ShowIndex()
	{

		$this->load->view('home/index2.php');
	}
	public function Register()
	{
		$this->load->view('home/Register2.html');
	}
	public function Vip()
	{
		$this->load->view('home/Vip2.php');
	}
}