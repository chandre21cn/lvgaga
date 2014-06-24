<?php
class Member extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
/**
 *
 * 检查用户
 * @param array $params
 */
	public function CheckMember($params)
	{
		$sql = "select * from member
				WHERE member_account=? AND
				password=?";
		$query = $this->db->query($sql,array($params['username'],$params['password']));
		$userinfo = $query->result();
		if($userinfo){
			$_SESSION['member'] = array('uid'=>$userinfo[0]->member_id , 'name'=>$userinfo[0]->member_account );
			echo json_encode(array('msg'=>'ok'));exit;
		}
		echo json_encode(array('msg'=>'fail'));exit;
	}

/**
 *
 * 检测用户属性
 * @param array $type
 */
	public function CheckMsg($type)
	{
		$sql = "SELECT *,COUNT(1) as num  FROM member WHERE {$type['type']}=?";
		$query = $this->db->query($sql,array($type['msg']));
		return $userinfo = $query->result();

	}

	public function AddMember($params)
	{
		$array = array('member_account'=>$params['username'],
						'password'=>$params['pass'],
						'addtime'=>time(),
						'recender'=>$params['parent'],
						'sex'=>$params['sex'],
						'qq'=>$params['qq'],
						'email'=>$params['email'],
						'ceilphone'=>$params['mobilephone'],);
		$this->db->insert('member',$array);
		if($uid = $this->db->insert_id()){
			$_SESSION['member'] = array('uid'=>$uid , 'name'=>$params['username']);
			return true;
		}
		return false;
	}

	public function  UpdateMember($where,$con)
	{

	}
}