<?php
class Datatmp extends CI_Model
{
	public $table = 'datatmp';
	public function __construct()
	{
		parent::__construct();
	}

	public function InsertData($data , $type)
	{
		$data = serialize($data);
		$this->db->insert($this->table , array('eve' => $data ,
												'type' => $type,
												'create_time' => time()));
	}


	public function SelectData($type)
	{
		return $res = $this->db->order_by('order desc')->get_where($this->table,array('type'=>$type))->result();
	}
	public function SelectWhere($oneArr)
	{
		$k = key($oneArr);
		return $res = $this->db->order_by('order desc')->get_where($this->table,array($k=>$oneArr[$k]))->result();
	}
	public function DelData($id)
	{
		$this->db->delete($this->table , array('t_id' => $id));

	}

}