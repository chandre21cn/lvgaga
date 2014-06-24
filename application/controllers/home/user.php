<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends MY_Op
{
	public function Login()
	{
		if($_POST){
			$this->load->model('member');
			if($this->member->CheckMember($this->input->post())){
				echo json_encode(array('msg' => 'success'));
			    exit;
			}
			echo json_encode(array('msg' => 'fail'));
			exit;

		}
		$this->load->view("home/login.html");
	}

	public function AjaxLogin()
	{
		if($this->input->post()){

			$this->load->model('member');
			$this->member->CheckMember(array('username'=>$this->input->post('username'),'username'=>$this->input->post('username')));
		}
	}
	/**
	 *
	 * 用户主页
	 */
	public function MemberIndex()
	{
		if(!isset($_SESSION['member'])){
			redirect('/home/user/Login');
		}
		$this->load->view("home/member_index2.php");
	}
	public function LoginOut()
	{
	}

	public function RegDetect()
	{
		if($user = $this->input->post('name',true)){
			if(preg_match("/^[0-9a-zA-Z]{4,21}$/",$user)){
				$this->load->model('member');
				$userBool = $this->member->CheckMsg(array('type'=>'member_account' , 'msg'=>$user));
				if($userBool[0]->num != 0){
					 echo json_encode(array('status'=>-3));exit;
				}

			    echo json_encode(array('status'=>0));exit;
			}
		    echo json_encode(array('status'=>-3));exit;
		}
	}
	public function CheckUsername()
	{
		//$username = $this->input->post('email',true);
		echo  'true';
	}
	public function RegEmail()
	{
		if($email = $this->input->post('email',true)){
				$match='/^[a-z0-9][a-z0-9_]+@[a-z0-9]+(\.[a-z0-9]+){1,3}$/';

				if(preg_match($match,$email)){

					$this->load->model('member');
					$userBool = $this->member->CheckMsg(array('type'=>'email' , 'msg'=>$email));
					if($userBool[0]->num != 0){
						 echo json_encode(array('status'=>-6));exit;
					}

				    echo json_encode(array('status'=>0));exit;
				}

				echo json_encode(array('status'=>-4));exit;
		}
	}
	public function Register()
	{
		if($this->input->post()){

			$this->load->model('member');
			if($this->member->AddMember($this->input->post())){
				redirect('/home/user/MemberIndex');
				exit;
			}
		}
		$this->load->view("home/Register.html");
	}

/**
 *
 * 用户信息
 */
	public function AccountInfo()
	{
		if($_SESSION['member']){
			$this->load->driver('cache', array('adapter' => 'redis'));
			$member = unserialize($this->cache->get("member".$_SESSION['member']['uid']));
			if(empty($member)){
				$this->load->model('member');
				$memberTmp = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
				$member = get_object_vars($memberTmp[0]);
				$this->load->library('ip');
				$ip = $this->ip->RealIP();
				$member = array_merge($member,array('ip'=>$ip));
				$this->cache->save("member".$_SESSION['member']['uid'],serialize($member));
			}
			echo json_encode(array('msg'=>$member));exit;
		}

		echo json_encode(array('msg'=>'false'));exit;
	}

	public function BangDing()
	{
		$name = $this->input->post('name');
		$type = $this->input->post('type');
		$this->load->library('tbmember');
		if('fail' != ($data = $this->tbmember->buyer($name , $type))){
			if($data == 'has'){
				echo json_encode(array('msg'=>'has'));die;
			}
			$this->load->model('member_bang');
			$id = $this->member_bang->AddBuyer($name,$type);
			if($id){
				echo json_encode(array('msg'=>'success'));die;
			}
			echo json_encode(array('msg'=>'nocon'));die;
		}
		echo json_encode(array('msg'=>'fail'));
	}
//买星星
	public function BuyStar()
	{
		if(!isset($_SESSION['member'])){
			echo json_encode(array('msg'=>'nologin'));exit;
		}

		$id = $this->input->post('action');
		$num = $this->input->post('num');

		$this->load->model('datatmp');
		$res = $this->datatmp->SelectWhere(array('type'=>$id));
		if(!$res) die;
		$t = unserialize($res[0]->eve);

		$cutCash = $num * $t['r1'];
			
		$this->load->model('member');
		$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
		if( isset($cutCash) && $userinfo[0]->funder-$cutCash < 0){
			echo json_encode(array('msg'=>'nomoney'));exit;
		}
		$this->db->query("update member set funder = funder-?,md = md+? where member_id={$_SESSION['member']['uid']}",array($cutCash,$num));
		$this->load->model('cashlogs');
		$this->cashlogs->AddLogs(array('content'=>$id ,'uid'=>$_SESSION['member']['uid'],'money'=>$cutCash,'md'=>$num,'status'=>1));
		echo json_encode(array('msg'=>'ok'));exit;
	}
//买vip
	public function BuyVip()
	{

		if(!isset($_SESSION['member'])){
		   echo json_encode(array('msg'=>'nologin'));exit;
		}

		$id = $this->input->post('action');
		$type = $this->input->post('type');
		$num = $this->input->post('num');

		$tmp = array(
				'common'=>array(1=>29,2=>56,3=>75,6=>138,12=>239,24=>429),
				'diamond'=>array(1=>49,2=>89,3=>129,6=>246,12=>456,24=>839),
				'crown'=>array(1=>99,2=>189,3=>279,6=>568,12=>1058,24=>2046),
			);
		if(!isset($tmp[$type][$num])){
				die();
		}

		$itmp=1;
		while($ttt = current($tmp)){
			if( $type == key($tmp)){
				break;
			}
			++$itmp;
			next($tmp);
		}

			
		$this->load->model('member');
		$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
		if( isset($tmp[$type][$num]) && $userinfo[0]->funder-$tmp[$type][$num] < 0){
			echo json_encode(array('msg'=>'nomoney'));exit;
		}
		$endvipTmp = $num*30*24*60*60;
		$nowTime = time();
		$endvip[1] = $userinfo[0]->endvip1;
		$endvip[2] = $userinfo[0]->endvip2;
		$endvip[3] = $userinfo[0]->endvip3;
		$endvipTime = $endvip[$itmp] + $endvipTmp;
		if( $endvip[$itmp] < $nowTime){
			$endvipTime = $nowTime+$endvip[$itmp] ;
		}
		//echo $endvipTime;exit;
		$this->db->query("update member set funder = funder-?,endvip{$itmp}=? where member_id={$_SESSION['member']['uid']}",array($tmp[$type][$num],$endvipTime));
		//echo $this->db->last_query();exit;
		$this->load->model('cashlogs');
		$this->cashlogs->AddLogs(array('content'=>$id ,'uid'=>$_SESSION['member']['uid'],'money'=>$tmp[$type][$num],'md'=>0,'status'=>1));

		echo json_encode(array('msg'=>'ok'));exit;
		$cutCash = $tmp[$type][$num];
	}
//买卡片
	public function BuyCard()
	{
		if(!isset($_SESSION['member'])){
			echo json_encode(array('msg'=>'nologin'));exit;
		}

		$id = $this->input->post('action');
		$type = $this->input->post('type');
		$kefu = $this->input->post('kefu');

		$tmp = array(
				'1'=>array('x'=>260,'c'=>156),
				'2'=>array('x'=>501,'c'=>290),
				'3'=>array('x'=>1001,'c'=>570),
				'4'=>array('x'=>2001,'c'=>1080,'news'=>array('type'=>'2','longtime'=>1,'amoney'=>50)),
				'5'=>array('x'=>5001,'c'=>2600,'news'=>array('type'=>'2','longtime'=>3,'amoney'=>200)),
				'6'=>array('x'=>10001,'c'=>5000,'news'=>array('type'=>'3','longtime'=>6),'amoney'=>888),
			);
		if(!isset($tmp[$type])){
				die();
		}
	    $this->load->model('member');

			$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));

			if( $userinfo[0]->funder-$tmp[$type]['c'] < 0){
				echo json_encode(array('msg'=>'nomoney'));exit;
			}

			if(isset($tmp[$type]['news'])){
				$endvipTmp = $tmp[$type]['news']['longtime']*30*24*60*60;
				$nowTime = time();
				$endvip[2] = $userinfo[0]->endvip2;
				$endvip[3] = $userinfo[0]->endvip3;

				$endvipTime = $endvip[$tmp[$type]['news']['type']] + $endvipTmp;
				if( $endvip[$tmp[$type]['news']['type']]  < $nowTime){
					$endvipTime = $nowTime+$endvip[$tmp[$type]['news']['type']] ;
				}

				$this->db->query("update member set funder = funder-?,md=md+?,endvip{$tmp[$type]['news']['type']}=? where member_id={$_SESSION['member']['uid']}",array($tmp[$type]['c'],$tmp[$type]['x'],$endvipTime));
			}else{
				$this->db->query("update member set funder = funder-?,md=md+? where member_id={$_SESSION['member']['uid']}",array($tmp[$type]['c'],$tmp[$type]['x']));
			}
			$this->load->model('cashlogs');
			$this->cashlogs->AddLogs(array('content'=>$id,'kefu'=>$kefu,'uid'=>$_SESSION['member']['uid'],'money'=>$tmp[$type]['c'],'md'=>$tmp[$type]['x'],'status'=>1));
			echo json_encode(array('msg'=>'ok'));exit;
	} 

	public function BuyCollects()
	{
		if(!isset($_SESSION['member'])){
			echo json_encode(array('msg'=>'nologin'));exit;
		}
var_dump($_SESSION['member']);
		$id = $this->input->post('action');
		$tag = $this->input->post('tag');
		$num = $this->input->post('num');
		$url = $this->input->post('url');
		$cutxin =  $num*0.5;
		if($num<11){
			echo json_encode(array('msg'=>'nonum'));exit;
		}

		$this->load->model('member');
		$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
		$tempCut = $userinfo[0]->md - $cutxin;
		if( $tempCut <3){
			echo json_encode(array('msg'=>'nomd'));
		}
		$this->db->query("UPDATE member set md=md-{$cutxin} where member_id={$_SESSION['member']['uid']}");

		$this->load->model('cashlogs');
		$this->cashlogs->AddLogs(array('content'=>$id,'uid'=>$_SESSION['member']['uid'],'money'=>0,'md'=>$cutxin,'status'=>0));
		$nowTime = time();
		$sql = "INSERT INTO collects (member_id,tag,num,create_time,url) values({$_SESSION['member']['uid']},'{$tag}',$num,$nowTime,'{$url}')";
		$this->db->query($sql);
			echo json_encode(array('msg'=>'ok'));exit;
	}
	public function CutMoney()
	{
		if(isset($_SESSION['member'])){

			$id = $this->input->post('action');
			if(!in_array($id, array(0,3,4))){
				$this->load->model('datatmp');
				$res = $this->datatmp->SelectWhere(array('type'=>$id));
				if(!$res) die;
				$t = unserialize($res[0]->eve);
			}
			$cutCash = 0;
			switch ($id) {
				case '1':
					$num = $this->input->post('num');
					$cutCash = $num * $t['r1'];
					break;
				case '0':
					$type = $this->input->post('type');
					$num = $this->input->post('num');

					$tmp = array(
							'common'=>array(1=>29,2=>56,3=>75,6=>138,12=>239,24=>429),
							'diamond'=>array(1=>49,2=>89,3=>129,6=>246,12=>456,24=>839),
							'crown'=>array(1=>99,2=>189,3=>279,6=>568,12=>1058,24=>2046),
						);
					if(!isset($tmp[$type][$num])){
							die();
					}
					$cutCash = $tmp[$type][$num];
					# code...
					break;
				case '3':
					$type = $this->input->post('type');
					$num = $this->input->post('num');

					$tmp = array(
							'1'=>array('x'=>260,'c'=>156,'m'=>0,'vip'=>''),
							'2'=>array('x'=>501,'c'=>290,'m'=>0,'vip'=>''),
							'3'=>array('x'=>1001,'c'=>570,'m'=>0,'vip'=>''),
							'4'=>array('x'=>2001,'c'=>1080,'m'=>50,'vip'=>array('viptype'=>'diamond','endvip'=>30*24*60*60)),
							'5'=>array('x'=>5001,'c'=>2600,'m'=>200,'vip'=>array('viptype'=>'diamond','endvip'=>30*24*60*60)),
							'6'=>array('x'=>10001,'c'=>5000,'m'=>888,'vip'=>array('viptype'=>'domain','endvip'=>30*24*60*60)),
						);
					if(!isset($tmp[$type])){
							die();
					}
				    $cutCash = $tmp[$type]['c'];
					break;
				case '4':
					$tag = $this->input->post('tag');
					$num = $this->input->post('num');
					$url = $this->input->post('url');
					$cutxin =  $num*0.5;
					break;
				case '5':
					# code...
					break;
				case '6':
					# code...
					break;
				case '7':
					# code...
					break;

				default:
					# code...
					break;
			}
			$this->load->model('member');
			$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
			if( isset($cutCash) && $userinfo[0]->funder-$cutCash < 0){
				echo json_encode(array('msg'=>'nomoney'));exit;
			}
			if(isset($cutxin) &&  $userinfo[0]->md-$cutxin < 0){
				echo json_encode(array('msg'=>'nomd'));exit;
			}
			$this->db->query("update member set funder = funder-? where member_id={$_SESSION['member']['uid']}",array($cutCash));

			//$this->db->query("update member set freeze = freeze+? where member_id={$_SESSION['member']['uid']}",array(intval($cutCash)));
			$this->load->model('cashlogs');
			$this->cashlogs->AddLogs(array('content'=>$id ,'uid'=>$_SESSION['member']['uid'],'money'=>$cutCash,'status'=>2));
			echo json_encode(array('msg'=>'ok'));exit;
		}else{
			echo json_encode(array('msg'=>'nologin'));
		}
	}

	public function BuyMd()
	{
		if($_SESSION['member']){

			$id = $this->input->post('t_id');
			$this->load->model('datatmp');
			$res = $this->datatmp->SelectWhere(array('t_id'=>$id));
			$t = unserialize($res[0]->eve);
			$this->load->model('member');
			$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));

			if( $userinfo[0]->funder-$t['m'] < 0){
				echo json_encode(array('msg'=>'nomoney'));exit;
			}
			$this->db->query("update member set funder = funder-? where member_id={$_SESSION['member']['uid']}",array(intval($t['m'])));

			$this->db->query("update member set freeze = freeze+? where member_id={$_SESSION['member']['uid']}",array(intval($t['m'])));
			$this->load->model('cashlogs');
			$this->cashlogs->AddLogs(array('content'=>$id ,'uid'=>$_SESSION['member']['uid'],'money'=>intval($t['m']),'status'=>2));
			echo json_encode(array('msg'=>'ok'));exit;
		}else{
			echo json_encode(array('msg'=>'nologin'));
		}
	}


	public function GetYouHui()
	{
		if(isset($_SESSION['member'])){

			$id = $this->input->post('val');
			$aaa = $this->db->query('SELECT * FROM qtacker WHERE uid=? AND type=?',array($_SESSION['member']['uid'],$id))->result();

			if($aaa == array()){
				$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$randStr = $str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)].$str[rand(0,25)];
				$this->db->query("INSERT INTO qtacker (uid,type,q_create,no) values (?,?,?,?)" , array($_SESSION['member']['uid'],$id,time(),$randStr));
				echo json_encode(array('msg'=>'ok'));exit;
			}
			echo json_encode(array('msg'=>'yes'));exit;
		}else{
			echo json_encode(array('msg'=>'nologin'));
		}

	}

	public function Rechange()
	{
		$this->load->view('home/rechange2.php');
	}

	public function Bank()
	{
		$this->load->view('home/bank2.php');
	}

	public function PayDe()
	{
		$this->load->view('home/payde2.php');
	}
	public function Payment()
	{
		$this->load->view('home/payde2.php');
	}
	public function UserName()
	{
		$_SESSION['member']['uid'];
		//echo "select * from member where member_id={$_SESSION['member']['uid']}";
		$userData = $this->db->query("select * from member where member_id={$_SESSION['member']['uid']}")->result();
//var_dump($userData[0]);exit;
		$this->load->view('home/username2.php',array('data'=>$userData[0]));
	}

	public function UserJob()
	{
		$this->load->view('home/userjob2.php');
	}

	public function UploadImage()
	{
		if(isset($_SESSION['member'])){
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
		        $pic_path = "files/". $pics;
		        move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
		    }
		    $this->db->query("update member set avatar=? where member_id={$_SESSION['member']['uid']}",array($pic_path));
		    $size = round($picsize/1024,2); //转换成kb
		    $arr = array(
		        'name'=>$picname,
		        'pic'=>$pics,
		        'size'=>$size
		    );
		    echo json_encode($arr); //输出json数据
		}
	}

	public function SaveUserbase()
	{
		if($this->input->post('ti')){
			$tData['qq'] = $this->input->post('qq');
			$tData['realname'] = $this->input->post('truename');
			$tData['sex'] = $this->input->post('sex');
			$tData['remote'] = $this->input->post('remote');
			$tData['sendAddress'] = $this->input->post('sendAddress');
			$tData['recAddress1'] = $this->input->post('recAddress1');
			$tData['recAddress2'] = $this->input->post('recAddress2');
			$tData['recAddress3'] = $this->input->post('recAddress3');

			$tData['rec_name1'] = $this->input->post('rec_name1');
			$tData['rec_add1'] = $this->input->post('rec_add1');
			$tData['rec_tel1'] = $this->input->post('rec_tel1');
			$tData['rec_code1'] = $this->input->post('rec_code1');


			$tData['rec_name2'] = $this->input->post('rec_name2');
			$tData['rec_add2'] = $this->input->post('rec_add2');
			$tData['rec_tel2'] = $this->input->post('rec_tel2');
			$tData['rec_code2'] = $this->input->post('rec_code2');



			$tData['rec_name3'] = $this->input->post('rec_name3');
			$tData['rec_add3'] = $this->input->post('rec_add3');
			$tData['rec_tel3'] = $this->input->post('rec_tel3');
			$tData['rec_code3'] = $this->input->post('rec_code3');
			$this->db->update('member', $tData, "member_id = {$_SESSION['member']['uid']}");
			redirect('/home/User/username');

		}
	}

	public function ChangePassword()
	{
		$tData['password'] = $this->input->post('password');
		$pass = $this->input->post('pass');

		if($tData['password'] != '' && $tData['password'] == $pass){
			$this->db->update('member', $tData, "member_id = {$_SESSION['member']['uid']}");
		}

		redirect('/home/User/username');
	}


	public function GetTask()
	{
		$tmpData = $this->db->query('select * from utask where status=0 order by w_id desc  limit 1')->result();
		foreach( $tmpData as $k => &$item ){
				$item->all = unserialize($item->alls);
		}

		$c['count'] = $this->db->query("select count(1) as c1 from utask where status=0")->result()[0]->c1;
		//var_dump($c['count'] );
		//echo $this->db->last_query();exit;
		$c['tmpData'] = $tmpData;
		echo json_encode($c);exit;
	}

	public function SavemealTask()
	{

// `ddlTemplate` varchar(255) DEFAULT NULL,
$TData['ddlTemplate'] = $this->input->post('ddlTemplate');
$TData['ddlMealType'] = $this->input->post('ddlMealType');
$TData['tasktype'] = 3;
//  `ddlZGAccount` varchar(255) DEFAULT NULL,
$TData['ddlZGAccount'] = $this->input->post('ddlZGAccount');
//  `txtGoodsUrl` varchar(255) DEFAULT NULL,
$TData['txtGoodsUrl'] = $this->input->post('txtGoodsUrl');
//  `txtPrice` decimal(10,0) DEFAULT NULL,
$TData['txtPrice'] = $this->input->post('txtPrice');
//  `chssp` varchar(255) DEFAULT NULL,
$TData['chssp'] = $this->input->post('chssp');
//  `cbxIsGJ` varchar(255) DEFAULT NULL,
$TData['cbxIsGJ'] = $this->input->post('cbxIsGJ');
//  `cbxIsSB` varchar(255) DEFAULT NULL,
$TData['cbxIsSB'] = $this->input->post('cbxIsSB');
//  `txtMinMPrice` decimal(10,0) DEFAULT NULL,
$TData['txtMinMPrice'] = $this->input->post('txtMinMPrice');
//  `pointExt` varchar(255) DEFAULT NULL,
$TData['pointExt'] = $this->input->post('pointExt')==''?0:$this->input->post('pointExt');
//  `ddlOKDay` varchar(255) DEFAULT NULL,
$TData['ddlOKDay'] = $this->input->post('ddlOKDay');
//  `isNoword` varchar(255) DEFAULT NULL,
$TData['isNoword'] = $this->input->post('isNoword');
//  `isSign` varchar(255) DEFAULT NULL,
$TData['isSign'] = $this->input->post('isSign');
//  `Express` varchar(255) DEFAULT NULL,
$TData['Express'] = $this->input->post('Express');
//  `cbxIsTip` varchar(255) DEFAULT NULL,
$TData['cbxIsTip'] = $this->input->post('cbxIsTip');
//  `cbxIsAudit` varchar(255) DEFAULT NULL,
$TData['cbxIsAudit'] = $this->input->post('cbxIsAudit');
//  `cbxIsMsg` varchar(255) DEFAULT NULL,
$TData['cbxIsMsg'] = $this->input->post('cbxIsMsg');
//  `txtMessage` text,
$TData['txtMessage'] = $this->input->post('txtMessage');
//  `cbxIsAddress` varchar(255) DEFAULT NULL,
$TData['cbxIsAddress'] = $this->input->post('cbxIsAddress');
//  `pinimage` varchar(255) DEFAULT NULL,
$TData['pinimage'] = $this->input->post('pinimage');
//  `cbxIsFMaxMCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxMCount'] = $this->input->post('cbxIsFMaxMCount');
//  `fmaxmc` varchar(255) DEFAULT NULL,
$TData['fmaxmc'] = $this->input->post('fmaxmc');
//  `isLimitCity` varchar(255) DEFAULT NULL,
$TData['isLimitCity'] = $this->input->post('isLimitCity');
//  `Province` varchar(255) DEFAULT NULL,
$TData['Province'] =  implode(',',$this->input->post('Province'));
//  `isMultiple` varchar(255) DEFAULT NULL,
$TData['isMultiple'] = $this->input->post('isMultiple');
//  `cbxIsSetTime1` datetime DEFAULT NULL,
$TData['cbxIsSetTime1'] = $this->input->post('cbxIsSetTime1');
//  `txtSetTime` datetime DEFAULT NULL,
$TData['txtSetTime'] = $this->input->post('txtSetTime');
//  `cbxIsSetTime2` datetime DEFAULT NULL,
$TData['cbxIsSetTime2'] = $this->input->post('cbxIsSetTime2');
//  `txtdelaydate` datetime DEFAULT NULL,
$TData['txtdelaydate'] = $this->input->post('txtdelaydate');
//  `cbxIsFMinGrade` varchar(255) DEFAULT NULL,
$TData['cbxIsFMinGrade'] = $this->input->post('cbxIsFMinGrade');
//  `fmingrade` varchar(255) DEFAULT NULL,
$TData['fmingrade'] = $this->input->post('fmingrade');
//  `cbxIsFMaxBBC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBBC'] = $this->input->post('cbxIsFMaxBBC');
//  `fmaxbbc` varchar(255) DEFAULT NULL,
$TData['fmaxbbc'] = $this->input->post('fmaxbbc');
//  `cbxIsFMaxABC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxABC'] = $this->input->post('cbxIsFMaxABC');
//  `fmaxabc` varchar(255) DEFAULT NULL,
$TData['fmaxabc'] = $this->input->post('fmaxabc');
//  `cbxIsFMaxCredit` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxCredit'] = $this->input->post('cbxIsFMaxCredit');
//  `fmaxcredit` varchar(255) DEFAULT NULL,
$TData['fmaxcredit'] = $this->input->post('fmaxcredit');
//  `cbxIsFMaxBTSCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBTSCount'] = $this->input->post('cbxIsFMaxBTSCount');
//  `fmaxbtsc` varchar(255) DEFAULT NULL,
$TData['fmaxbtsc'] = $this->input->post('fmaxbtsc');
//  `stopDsTime` datetime DEFAULT NULL,
$TData['stopDsTime'] = $this->input->post('stopDsTime');
//  `stopTime` datetime DEFAULT NULL,
$TData['stopTime'] = $this->input->post('stopTime');
//  `isViewEnd` varchar(255) DEFAULT NULL,
$TData['isViewEnd'] = $this->input->post('isViewEnd');
//  `isTpl` varchar(255) DEFAULT NULL,
$TData['isTpl'] = $this->input->post('isTpl');
//  `tplTo` varchar(255) DEFAULT NULL
$TData['tplTo'] = $this->input->post('tplTo');
$TData['member_id'] = $_SESSION['member']['uid'];
$tplContent = serialize($TData);
		//$this->db->insert('utask',$TData);
	$this->db->insert('utask',array('txtMinMPrice'=>$TData['member_id'],
									'pointExt'=>$TData['pointExt'],
									'txtPrice'=>$TData['txtPrice'],
									'member_id'=>$_SESSION['member']['uid'],
									'status'=> 0,
									'buyer_id'=> 0,
									'txtPrice'=>$TData['txtPrice'],
									'txtPrice'=>$TData['txtPrice'],
									'create_time'=>time(),
									'tasktype'=>$TData['tasktype'],
									'alls'=>$tplContent));
	$this->db->insert('tpl',array('member_id'=>$_SESSION['member']['uid'],'tpl_content'=>$tplContent));
	}
	public function SavelailuTash()
	{
$TData['isCompare'] = $this->input->post('isCompare');
$TData['contrast'] = $this->input->post('contrast');

$TData['visitWay'] = $this->input->post('visitWay');
$TData['txtDes'] = $this->input->post('txtDes');
$TData['txtSearchDes'] = $this->input->post('txtSearchDes');
$TData['srcimg'] = $this->input->post('srcimg');

$TData['tasktype'] = 2;
// `ddlTemplate` varchar(255) DEFAULT NULL,
$TData['ddlTemplate'] = $this->input->post('ddlTemplate');
//  `ddlZGAccount` varchar(255) DEFAULT NULL,
$TData['ddlZGAccount'] = $this->input->post('ddlZGAccount');
//  `txtGoodsUrl` varchar(255) DEFAULT NULL,
$TData['txtGoodsUrl'] = $this->input->post('txtGoodsUrl');
//  `txtPrice` decimal(10,0) DEFAULT NULL,
$TData['txtPrice'] = $this->input->post('txtPrice');
//  `chssp` varchar(255) DEFAULT NULL,
$TData['chssp'] = $this->input->post('chssp');
//  `cbxIsGJ` varchar(255) DEFAULT NULL,
$TData['cbxIsGJ'] = $this->input->post('cbxIsGJ');
//  `cbxIsSB` varchar(255) DEFAULT NULL,
$TData['cbxIsSB'] = $this->input->post('cbxIsSB');
//  `txtMinMPrice` decimal(10,0) DEFAULT NULL,
$TData['txtMinMPrice'] = $this->input->post('txtMinMPrice');
//  `pointExt` varchar(255) DEFAULT NULL,
$TData['pointExt'] = $this->input->post('pointExt')==''?0:$this->input->post('pointExt');
//  `ddlOKDay` varchar(255) DEFAULT NULL,
$TData['ddlOKDay'] = $this->input->post('ddlOKDay');
//  `isNoword` varchar(255) DEFAULT NULL,
$TData['isNoword'] = $this->input->post('isNoword');
//  `isSign` varchar(255) DEFAULT NULL,
$TData['isSign'] = $this->input->post('isSign');
//  `Express` varchar(255) DEFAULT NULL,
$TData['Express'] = $this->input->post('Express');
//  `cbxIsTip` varchar(255) DEFAULT NULL,
$TData['cbxIsTip'] = $this->input->post('cbxIsTip');
//  `cbxIsAudit` varchar(255) DEFAULT NULL,
$TData['cbxIsAudit'] = $this->input->post('cbxIsAudit');
//  `cbxIsMsg` varchar(255) DEFAULT NULL,
$TData['cbxIsMsg'] = $this->input->post('cbxIsMsg');
//  `txtMessage` text,
$TData['txtMessage'] = $this->input->post('txtMessage');
//  `cbxIsAddress` varchar(255) DEFAULT NULL,
$TData['cbxIsAddress'] = $this->input->post('cbxIsAddress');
//  `pinimage` varchar(255) DEFAULT NULL,
$TData['pinimage'] = $this->input->post('pinimage');
//  `cbxIsFMaxMCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxMCount'] = $this->input->post('cbxIsFMaxMCount');
//  `fmaxmc` varchar(255) DEFAULT NULL,
$TData['fmaxmc'] = $this->input->post('fmaxmc');
//  `isLimitCity` varchar(255) DEFAULT NULL,
$TData['isLimitCity'] = $this->input->post('isLimitCity');
//  `Province` varchar(255) DEFAULT NULL,
$TData['Province'] =  implode(',',$this->input->post('Province'));
//  `isMultiple` varchar(255) DEFAULT NULL,
$TData['isMultiple'] = $this->input->post('isMultiple');
//  `cbxIsSetTime1` datetime DEFAULT NULL,
$TData['cbxIsSetTime1'] = $this->input->post('cbxIsSetTime1');
//  `txtSetTime` datetime DEFAULT NULL,
$TData['txtSetTime'] = $this->input->post('txtSetTime');
//  `cbxIsSetTime2` datetime DEFAULT NULL,
$TData['cbxIsSetTime2'] = $this->input->post('cbxIsSetTime2');
//  `txtdelaydate` datetime DEFAULT NULL,
$TData['txtdelaydate'] = $this->input->post('txtdelaydate');
//  `cbxIsFMinGrade` varchar(255) DEFAULT NULL,
$TData['cbxIsFMinGrade'] = $this->input->post('cbxIsFMinGrade');
//  `fmingrade` varchar(255) DEFAULT NULL,
$TData['fmingrade'] = $this->input->post('fmingrade');
//  `cbxIsFMaxBBC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBBC'] = $this->input->post('cbxIsFMaxBBC');
//  `fmaxbbc` varchar(255) DEFAULT NULL,
$TData['fmaxbbc'] = $this->input->post('fmaxbbc');
//  `cbxIsFMaxABC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxABC'] = $this->input->post('cbxIsFMaxABC');
//  `fmaxabc` varchar(255) DEFAULT NULL,
$TData['fmaxabc'] = $this->input->post('fmaxabc');
//  `cbxIsFMaxCredit` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxCredit'] = $this->input->post('cbxIsFMaxCredit');
//  `fmaxcredit` varchar(255) DEFAULT NULL,
$TData['fmaxcredit'] = $this->input->post('fmaxcredit');
//  `cbxIsFMaxBTSCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBTSCount'] = $this->input->post('cbxIsFMaxBTSCount');
//  `fmaxbtsc` varchar(255) DEFAULT NULL,
$TData['fmaxbtsc'] = $this->input->post('fmaxbtsc');
//  `stopDsTime` datetime DEFAULT NULL,
$TData['stopDsTime'] = $this->input->post('stopDsTime');
//  `stopTime` datetime DEFAULT NULL,
$TData['stopTime'] = $this->input->post('stopTime');
//  `isViewEnd` varchar(255) DEFAULT NULL,
$TData['isViewEnd'] = $this->input->post('isViewEnd');
//  `isTpl` varchar(255) DEFAULT NULL,
$TData['isTpl'] = $this->input->post('isTpl');
//  `tplTo` varchar(255) DEFAULT NULL
$TData['tplTo'] = $this->input->post('tplTo');
$TData['member_id'] = $_SESSION['member']['uid'];
$tplContent = serialize($TData);
		//$this->db->insert('utask',$TData);
	$this->db->insert('utask',array('txtMinMPrice'=>$TData['member_id'],
									'pointExt'=>$TData['pointExt'],
									'txtPrice'=>$TData['txtPrice'],
									'member_id'=>$_SESSION['member']['uid'],
									'status'=> 0,
									'buyer_id'=> 0,
									'txtPrice'=>$TData['txtPrice'],
									'txtPrice'=>$TData['txtPrice'],
									'create_time'=>time(),
									'tasktype'=>$TData['tasktype'],
									'alls'=>$tplContent));
	$this->db->insert('tpl',array('member_id'=>$_SESSION['member']['uid'],'tpl_content'=>$tplContent));
	}
	public function SaveRenwu()
	{

// `ddlTemplate` varchar(255) DEFAULT NULL,
$TData['ddlTemplate'] = $this->input->post('ddlTemplate');
$TData['tasktype'] = 1;
//  `ddlZGAccount` varchar(255) DEFAULT NULL,
$TData['ddlZGAccount'] = $this->input->post('ddlZGAccount');
//  `txtGoodsUrl` varchar(255) DEFAULT NULL,
$TData['txtGoodsUrl'] = $this->input->post('txtGoodsUrl');
//  `txtPrice` decimal(10,0) DEFAULT NULL,
$TData['txtPrice'] = $this->input->post('txtPrice');
//  `chssp` varchar(255) DEFAULT NULL,
$TData['chssp'] = $this->input->post('chssp');
//  `cbxIsGJ` varchar(255) DEFAULT NULL,
$TData['cbxIsGJ'] = $this->input->post('cbxIsGJ');
//  `cbxIsSB` varchar(255) DEFAULT NULL,
$TData['cbxIsSB'] = $this->input->post('cbxIsSB');
//  `txtMinMPrice` decimal(10,0) DEFAULT NULL,
$TData['txtMinMPrice'] = $this->input->post('txtMinMPrice');
//  `pointExt` varchar(255) DEFAULT NULL,
$TData['pointExt'] = $this->input->post('pointExt')==''?0:$this->input->post('pointExt');
//  `ddlOKDay` varchar(255) DEFAULT NULL,
$TData['ddlOKDay'] = $this->input->post('ddlOKDay');
//  `isNoword` varchar(255) DEFAULT NULL,
$TData['isNoword'] = $this->input->post('isNoword');
//  `isSign` varchar(255) DEFAULT NULL,
$TData['isSign'] = $this->input->post('isSign');
//  `Express` varchar(255) DEFAULT NULL,
$TData['Express'] = $this->input->post('Express');
//  `cbxIsTip` varchar(255) DEFAULT NULL,
$TData['cbxIsTip'] = $this->input->post('cbxIsTip');
//  `cbxIsAudit` varchar(255) DEFAULT NULL,
$TData['cbxIsAudit'] = $this->input->post('cbxIsAudit');
//  `cbxIsMsg` varchar(255) DEFAULT NULL,
$TData['cbxIsMsg'] = $this->input->post('cbxIsMsg');
//  `txtMessage` text,
$TData['txtMessage'] = $this->input->post('txtMessage');
//  `cbxIsAddress` varchar(255) DEFAULT NULL,
$TData['cbxIsAddress'] = $this->input->post('cbxIsAddress');
//  `pinimage` varchar(255) DEFAULT NULL,
$TData['pinimage'] = $this->input->post('pinimage');
//  `cbxIsFMaxMCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxMCount'] = $this->input->post('cbxIsFMaxMCount');
//  `fmaxmc` varchar(255) DEFAULT NULL,
$TData['fmaxmc'] = $this->input->post('fmaxmc');
//  `isLimitCity` varchar(255) DEFAULT NULL,
$TData['isLimitCity'] = $this->input->post('isLimitCity');
//  `Province` varchar(255) DEFAULT NULL,
$TData['Province'] =  implode(',',$this->input->post('Province'));
//  `isMultiple` varchar(255) DEFAULT NULL,
$TData['isMultiple'] = $this->input->post('isMultiple');
//  `cbxIsSetTime1` datetime DEFAULT NULL,
$TData['cbxIsSetTime1'] = $this->input->post('cbxIsSetTime1');
//  `txtSetTime` datetime DEFAULT NULL,
$TData['txtSetTime'] = $this->input->post('txtSetTime');
//  `cbxIsSetTime2` datetime DEFAULT NULL,
$TData['cbxIsSetTime2'] = $this->input->post('cbxIsSetTime2');
//  `txtdelaydate` datetime DEFAULT NULL,
$TData['txtdelaydate'] = $this->input->post('txtdelaydate');
//  `cbxIsFMinGrade` varchar(255) DEFAULT NULL,
$TData['cbxIsFMinGrade'] = $this->input->post('cbxIsFMinGrade');
//  `fmingrade` varchar(255) DEFAULT NULL,
$TData['fmingrade'] = $this->input->post('fmingrade');
//  `cbxIsFMaxBBC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBBC'] = $this->input->post('cbxIsFMaxBBC');
//  `fmaxbbc` varchar(255) DEFAULT NULL,
$TData['fmaxbbc'] = $this->input->post('fmaxbbc');
//  `cbxIsFMaxABC` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxABC'] = $this->input->post('cbxIsFMaxABC');
//  `fmaxabc` varchar(255) DEFAULT NULL,
$TData['fmaxabc'] = $this->input->post('fmaxabc');
//  `cbxIsFMaxCredit` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxCredit'] = $this->input->post('cbxIsFMaxCredit');
//  `fmaxcredit` varchar(255) DEFAULT NULL,
$TData['fmaxcredit'] = $this->input->post('fmaxcredit');
//  `cbxIsFMaxBTSCount` varchar(255) DEFAULT NULL,
$TData['cbxIsFMaxBTSCount'] = $this->input->post('cbxIsFMaxBTSCount');
//  `fmaxbtsc` varchar(255) DEFAULT NULL,
$TData['fmaxbtsc'] = $this->input->post('fmaxbtsc');
//  `stopDsTime` datetime DEFAULT NULL,
$TData['stopDsTime'] = $this->input->post('stopDsTime');
//  `stopTime` datetime DEFAULT NULL,
$TData['stopTime'] = $this->input->post('stopTime');
//  `isViewEnd` varchar(255) DEFAULT NULL,
$TData['isViewEnd'] = $this->input->post('isViewEnd');
//  `isTpl` varchar(255) DEFAULT NULL,
$TData['isTpl'] = $this->input->post('isTpl');
//  `tplTo` varchar(255) DEFAULT NULL
$TData['tplTo'] = $this->input->post('tplTo');
$TData['member_id'] = $_SESSION['member']['uid'];
$tplContent = serialize($TData);
		//$this->db->insert('utask',$TData);
	$this->db->insert('utask',array('txtMinMPrice'=>$TData['member_id'],
									'pointExt'=>$TData['pointExt'],
									'txtPrice'=>$TData['txtPrice'],
									'member_id'=>$_SESSION['member']['uid'],
									'status'=> 0,
									'buyer_id'=> 0,
									'txtPrice'=>$TData['txtPrice'],
									'txtPrice'=>$TData['txtPrice'],
									'create_time'=>time(),
									'tasktype'=>$TData['tasktype'],
									'alls'=>$tplContent));
	$this->db->insert('tpl',array('member_id'=>$_SESSION['member']['uid'],'tpl_content'=>$tplContent));
	}
	public function CheckMoney()
	{

		$txtPrice = $this->input->post('txtPrice');		
		$md = $this->input->post('md');
		$this->load->model('member');
		$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
		if($userinfo[0]->funder-$txtPrice<0 || $userinfo[0]->md-$md<0){
			echo json_encode(array('msg'=>'notmoney'));exit;
		}
		echo json_encode(array('msg'=>'ok'));exit;
	}
	public function ZhuanPan()
	{
		$this->load->view('home/mineaction.php');
	}

	public function lottery()
	{
		$prize_arr = array(
					    '0' => array('id'=>1,'min'=>1,'max'=>29,'prize'=>'一等奖','v'=>1),
					    '1' => array('id'=>2,'min'=>302,'max'=>328,'prize'=>'二等奖','v'=>2),
					    '2' => array('id'=>3,'min'=>242,'max'=>268,'prize'=>'三等奖','v'=>5),
					    '3' => array('id'=>4,'min'=>182,'max'=>208,'prize'=>'四等奖','v'=>7),
					    '4' => array('id'=>5,'min'=>122,'max'=>148,'prize'=>'五等奖','v'=>10),
					    '5' => array('id'=>6,'min'=>62,'max'=>88,'prize'=>'六等奖','v'=>25),
					    '6' => array('id'=>7,'min'=>array(32,92,152,212,272,332),
						'max'=>array(58,118,178,238,298,358),'prize'=>'七等奖','v'=>50)
		);

		foreach ($prize_arr as $key => $val) {
		    $arr[$val['id']] = $val['v'];
		}

		$rid = $this->getRand($arr); //根据概率获取奖项id

		$res = $prize_arr[$rid-1]; //中奖项
		$min = $res['min'];
		$max = $res['max'];
		if($res['id']==7){ //七等奖
		    $i = mt_rand(0,5);
		    $result['angle'] = mt_rand($min[$i],$max[$i]);
		}else{
		    $result['angle'] = mt_rand($min,$max); //随机生成一个角度
		}
		$result['prize'] = $res['prize'];

		echo json_encode($result);

	}
	public function getRand($proArr) {
	    $result = '';

	    //概率数组的总概率精度
	    $proSum = array_sum($proArr);

	    //概率数组循环
	    foreach ($proArr as $key => $proCur) {
	        $randNum = mt_rand(1, $proSum);
	        if ($randNum <= $proCur) {
	            $result = $key;
	            break;
	        } else {
	            $proSum -= $proCur;
	        }
	    }
	    unset ($proArr);

	    return $result;
	}

	public function CheckLogin()
	{
		if($_SESSION['member']){
			$this->load->model('member');
			$userData = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
			echo json_encode(array('msg'=>'ok','info'=>array('name'=>$userData[0]->member_account,'funder'=>$userData[0]->funder,'xx'=>$userData[0]->md,'exp'=>$userData[0]->exp,'avatar'=>$userData[0]->avatar)));exit;
		}
		echo json_encode(array('msg'=>'no'));
	}

	public function BuyVidio()
	{
		if(!isset($_SESSION['member'])){

		    echo json_encode(array('msg'=>'no')); //输出json数据
		    exit;
		}

		$this->load->model('member');
		$userinfo = $this->member->CheckMsg(array('type'=>'member_id','msg'=>$_SESSION['member']['uid']));
		if(  $userinfo[0]->funder - 99 < 0){
			echo json_encode(array('msg'=>'nomoney'));exit;
		}
		//echo $endvipTime;exit;
		$this->db->query("update member set funder = funder-?  where member_id={$_SESSION['member']['uid']}",array(99));
		//echo $this->db->last_query();exit;
		$this->load->model('cashlogs');
		$this->cashlogs->AddLogs(array('content'=>7 ,'uid'=>$_SESSION['member']['uid'],'money'=>99,'md'=>0,'status'=>1));

		echo json_encode(array('msg'=>'ok'));exit;
	}
}