<?php
class Index extends CI_Controller
{

	public function main()
	{
	/*
		$this->load->driver('cache', array('adapter' => 'redis'));

		if ( ! $soho = $this->cache->get('soho'))
		{
		$this->cache->save('soho', 'sadsads', 300);
		}
		$this->cache->get('soho');
*/
	//	die('ads');
		$this->load->view('manage/main.php');
	}
}