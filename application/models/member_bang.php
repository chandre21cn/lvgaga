<?php
class member_bang extends CI_Model
{
	public $table = 'member_bang';
	public function AddBuyer($name , $type)
	{
		$this->db->insert($this->table , array('member_id' => $_SESSION['member']['uid'] ,
												'type' => $type,
												'nick_name' => $name));
		return $this->db->insert_id();
	}

	public function CheckBuyer($name , $type)
	{
		$res = $this->db->get_where($this->table , array('nick_name' => $name , 'type' => $type))->result() ;
		if(empty($res)){
			return true;
		}
		return false;
	}
}