<?php
class Tbmember
{
	public $ic;
	public function __construct()
	{
		$this->ic = &get_instance();
	}
	/**
	 *
	 * 查淘宝用户
	 * @param string $name
	 * @param int $type 1 用户 2店铺
	 */
	public function buyer($name,$type)
	{//echo 'http://member1.taobao.com/member/user_profile.jhtml?user_id='.urlencode(iconv('utf-8','gbk',$name));
		$str = iconv('gbk','utf-8',strip_tags(file_get_contents('http://member1.taobao.com/member/user_profile.jhtml?user_id='.urlencode(iconv('utf-8','gbk',$name)))));
		if(!strpos($str,'淘宝正在对该店铺盘点')){
			$this->ic->load->model('member_bang');
			if(!$this->ic->member_bang->CheckBuyer($name,$type)){
				return 'has';
			}else{
				return 'success';
			}
		}
		return 'fail';
	}
}