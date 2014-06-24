<?php

class Cashlogs extends CI_Model
{
	public $table = 'cashlogs';
	public function __construct()
	{
		parent::__construct();
	}
/**
 *
 * 增加日志
 * 1+ 0- 2冻结
 */
	public function AddLogs($con)
	{
		$data['create_time'] = time();
		$data['status'] = $con['status'];
		$data['uid'] = $con['uid'];
		$data['admin_id'] = isset($con['admin_id'])? $con['admin_id']:0;
		$data['money'] = $con['money'];
		$data['content'] = $con['content'];

		$this->db->insert($this->table , $data);
	}
}