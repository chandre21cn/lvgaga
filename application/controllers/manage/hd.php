<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hd extends MY_Controller
{
	/**
	 *
	 * 0---vip
	 */

	public function GoVip()
	{
		if(is_numeric($this->input->get('t_id'))){
		$this->load->model("datatmp");
		$this->datatmp->DelData($this->input->get('t_id'));
		}
		$this->load->model("datatmp");
		if($this->input->post('tj') == "确认"){
			$t['deadline'] = $this->input->post('shijian');
			$t['money'] = $this->input->post('feiyong');
			$this->datatmp->InsertData($t,0);
		}
		$this->load->view('manage/govip.php',array( 'data'=>$this->datatmp->SelectData(0)));
	}
	/**
	 *
	 * 3-ka
	 */
	public function GoKa()
	{

		if(is_numeric($this->input->get('t_id'))){
		$this->load->model("datatmp");
		$this->datatmp->DelData($this->input->get('t_id'));
		}
		$this->load->model("datatmp");
		if($this->input->post('tj') == "确认"){
			$t['mai'] = $this->input->post('mai');
			$t['maiy'] = $this->input->post('maiy');
			$t['mait'] = $this->input->post('mait');
			$this->datatmp->InsertData($t,3);
		}
		$this->load->view('manage/goka.php',array( 'data'=>$this->datatmp->SelectData(3)));
	}
	/**
	 *
	 * 4-collect
	 */
	public function GoCollect()
	{
		$this->load->model("datatmp");

		if($this->input->post('tj') == "确认"){
			$t['collect'] = $this->input->post('collect');
			@$this->db->delete('datatmp' , array('type' => 4));
			$this->datatmp->InsertData($t,4);
		}

		$this->load->view('manage/gocollect.php',array( 'data'=>$this->datatmp->SelectData(4)));
	}
	/**
	 *
	 * 5-liu
	 */
	public function GoLiu()
	{
		$this->load->model("datatmp");

		if(is_numeric($this->input->get('t_id'))){
			$this->datatmp->DelData($this->input->get('t_id'));
		}

		if($this->input->post('tj') == "确认"){
			$t['l'] = $this->input->post('l');
			$t['t'] = $this->input->post('t');
			$t['m'] = $this->input->post('m');
			$t['o'] = $this->input->post('o');
			$this->datatmp->InsertData($t,5);
		}

		$this->load->view('manage/goliu.php',array( 'data'=>$this->datatmp->SelectData(5)));
	}

	/**
	 *
	 * 1-maidian
	 */
	public function GoMai()
	{
		$this->load->model("datatmp");

		if($this->input->post('tj')){
			$data['m1'] = $this->input->post('maidian1');
			$data['r1'] = $this->input->post('rmb1');
			$data['m2'] = $this->input->post('maidian2');
			$data['r2'] = $this->input->post('rmb2');

			@$this->db->delete('datatmp' , array('type' => 1));
			$this->datatmp->InsertData($data,1);
		}

		$this->load->view('manage/gomai.php',array( 'data'=>$this->datatmp->SelectData(1)));
	}

	/**
	 *
	 * 6-jiaoyi
	 */
	public function GoJiao()
	{
		$this->load->model("datatmp");

		if(is_numeric($this->input->get('t_id'))){
			$this->datatmp->DelData($this->input->get('t_id'));
		}

		if($this->input->post('tj') == "确认"){
			$t['l'] = $this->input->post('l');
			$t['t'] = $this->input->post('t');
			$t['m'] = $this->input->post('m');
			$t['o'] = $this->input->post('o');
			$t['img'] = $this->input->post('img');
			$this->datatmp->InsertData($t,6);
		}

		$this->load->view('manage/gojiao.php',array( 'data'=>$this->datatmp->SelectData(6)));
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
		        $pic_path = "files/". $pics;
		        move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
		    }
		    $size = round($picsize/1024,2); //转换成kb
		    $arr = array(
		        'name'=>$picname,
		        'pic'=>$pics,
		        'size'=>$size
		    );
		    echo json_encode($arr); //输出json数据
		//}
	}
}