<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * 网站设置
 * @author Administrator
 *
 */
class Setting extends MY_Controller
{
	/**
	 *
	 *卖点兑换钱
	 *钱兑换卖点
	 *卖点获取比例
	 *佣金获取比例
	 *新人转等级比例
	 */
	public function setConfig()
	{
		$this->load->library('fileop');
		if($this->input->post){
			$this->fileop->writeFileToArray('asd.php',array('asd'=>232));
		}
		$data = $this->fileop->loadFile('asd.php');
	}

}