<?php
class Adminuser extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function show()
	{
		//$this->load->database();
		$aa = $this->db->query('select * from adminUser');
		var_dump($aa->result());
	}
}