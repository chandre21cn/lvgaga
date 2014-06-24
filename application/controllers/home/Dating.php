<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * 操作大厅操作
 * @author Administrator
 *
 */
class Dating extends MY_Op
{
	/**
	 *
	 * 淘宝任务大厅
	 */
	public function taobao()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/taobao_index.php ");
	}
	/**
	 * 已发任务
	 */
	public function outTask()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/taobao_outTask.php");
	}

	/**
	 * 接收任务
	 */
	public function  inTask()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/taobao_inTask.php");
	}
/**
 *
 * 掌柜绑定
 */
	public function seller()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/taobao_seller.php");
	}
/**
 *
 * 小号绑定
 */
	public function buyer()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/taobao_buy.php");
	}
/**
 *
 * 发布的任务
 */
	public function publish()
	{
		$tData = $this->db->query("SELECT * FROM member_bang WHERE  member_id={$_SESSION['member']['uid']} AND type=1")->result();
		//$data[]
		$this->load->view("home/renwu2.php",array('data'=>array('bang'=>$tData)));
	}
	public function lailuTask()
	{

		$tData = $this->db->query("SELECT * FROM member_bang WHERE  member_id={$_SESSION['member']['uid']} AND type=1")->result();
		$this->load->view("home/lailuTask.php",array('data'=>array('bang'=>$tData)));
	}
	public function mealTask()
	{
		$tData = $this->db->query("SELECT * FROM member_bang WHERE  member_id={$_SESSION['member']['uid']} AND type=1")->result();
		$this->load->view("home/mealTask.php",array('data'=>array('bang'=>$tData)));
	}
	public function shopCartTask()
	{
		$tData = $this->db->query("SELECT * FROM member_bang WHERE  member_id={$_SESSION['member']['uid']} AND type=1")->result();
		$this->load->view("home/shopCartTask.php",array('data'=>array('bang'=>$tData)));
	}

	public function taskTemplate()
	{
		
	}
/**
 *
 * 接收的任务
 */
	public function rec()
	{
		$this->load->view("home/rec.php");
	}
/**
 *
 * 麦点购买
 */
	public function buyPoint()
	{
		$this->load->view('home/buyPoint.php');
	}
	/**
	 * 收藏
	 */
	public function collect()
	{
		$this->load->model('datatmp');
		$data = $this->datatmp->SelectWhere(array('type'=>5));
		//var_dump($data);exit;
		$this->load->view('home/collect2.php',array('data'=>$data));
	}
/**
 * 网店托管
 */
	public function Tuoguanfuwu()
	{
		$this->load->model('datatmp');
		$data = $this->datatmp->SelectData(6);
		//var_dump($data);
		$this->load->view('home/tuoguan2.php',array('data'=>$data));
	}
	public function DmSEO()
	{
		$this->load->view('home/dmseo2.php');
	}

	public function video()
	{
		$this->load->view('home/video2.php');
	}

	public function youhuiquan()
	{
		$this->load->view('home/youhuiquan2.php');
	}


	public function getIdtask()
	{
		$T = $this->input->post('idtask');
		$condition = '';
		$sql = "select * from utask where status=0 order by";
		switch($T[0]){
			case 0:
				$condition = ' w_id ';
			break;
			case 1:
				$condition = ' txtPrice ';
			break;
			case 2:
				$condition = ' char_length(alls) ';
			break;
			case 3:
				$condition = ' (txtMinMPrice+pointExt) ';
			break;
		}
		if( isset($T[1]) ){
			$condition.=" desc";
		}
		$from = $this->input->post('p1')?($this->input->post('p1')-1):0;
		$sql .= $condition."  limit {$from} , 1 ";

		$tmpData = $this->db->query($sql)->result();
		foreach( $tmpData as $k => &$item ){
				$item->alls = unserialize($item->alls);
		}
		$c['count'] = $this->db->query("select count(1) as c1 from utask where status=0")->result()[0]->c1;
		//var_dump($c['count'] );
		//echo $this->db->last_query();exit;
		$c['tmpData'] = $tmpData;
		echo json_encode($c);exit;
	}



	public function UploadImage()
	{
//		$action = $_POST['act'];
//		if($action=='delimg'){ //删除图片
//		    $filename = $_POST['imagename'];
//		    if(!empty($filename)){
//		        unlink('files/'.$filename);
//		        echo '1';
//		    }else{
//		        echo '删除失败.';
//		    }
//		}else{ //上传图片
		    $picname = $_FILES['mypic']['name'];
		    $picsize = $_FILES['mypic']['size'];
		    if ($picname != "") {
		        if ($picsize > 512000) { //限制上传大小
		            echo '图片大小不能超过500k';
		            exit;
		        }
		        $type = strstr($picname, '.'); //限制上传格式
		        if ($type != ".gif" && $type != ".jpg" && $type != ".png") {
		            echo '图片格式不对！';
		            exit;
		        }
		        $rand = rand(100, 999);
		        $pics = date("YmdHis") . $rand . $type; //命名图片名称
		        //上传路径
		        $pic_path = "files/taskimg/". $pics;
		        move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
		    }
		    $size = round($picsize/1024,2); //转换成kb
		    $arr = array(
		        'name'=>$picname,
		        'pic'=>$pic_path,
		        'size'=>$size
		    );
		    echo json_encode($arr); //输出json数据
		//}
	}
}