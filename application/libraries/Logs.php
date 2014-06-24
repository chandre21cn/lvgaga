<?php
if (! defined ( 'BASEPATH' ))exit ( 'No direct script access allowed' );
class Logs
{
/**
 *
 * 查找日志
 * @param array $condition
 * $condition=array(
 * 'type'=>'类型',
 * 'startTime'=>'开始时间',
 * 	'endTime'=>'结束时间'
 * 	'pages'=>'当前页数(从1开始)'
 * 	'limit'=>'记录条数'
 * )
 */
	public function readLogs($condition = array())
	{
		$limit = isset($condition['limit']) ? $condition['limit'] : 10;
		$pages = (isset($condition['pages']) && $condition['pages']>0) ? ($condition['pages']-1)*$limit : 0;

		isset($condition['type']) && $db->where('type' , intval($condition['type']));
		isset($condition['startTime']) && $db->where('start_time <=' , $condition['startTime']);
		isset($condition['endTime']) && $db->where('end_time >' , $condition['sendTime']);

		return $db->select('content,add_time,tyoe')->get('logs' , $limit , $pages);
	}
	/**
	 *
	 * 写入日志
	 * @param array $logs
	 * $logs=array(
	 * 	'type'=>'类型'，
	 * 	'content'=>'内容',
	 * 	'addTime'=>'时间'
	 * )
	 */
	public function writeLogs($logs)
	{
		$logs['add'] = time();
		$this->db->insert('logs',$logs);
	}

/**
 *
 * 删除日志
 * @param array $condition
 * $condition=array(
 * 'type'=>'类型',
 * 'startTime'=>'开始时间',
 * 'endTime'=>'结束时间'
 * )
 */
	public function delLogs($condition)
	{
		$db = $this->db;

		isset($condition['type']) && $db->where('type' , intval($condition['type']));
		isset($condition['startTime']) && $db->where('start_time <=' , $condition['startTime']);
		isset($condition['endTime']) && $db->where('end_time >' , $condition['sendTime']);
		isset($condition['logs_id']) && $db->where('logs_id' , $condition['logs_id']);

		return $db->delete('logs');
	}
}