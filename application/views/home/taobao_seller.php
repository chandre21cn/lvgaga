<?php include('taobao_mid.php'); ?>
<div class="tico menu">
	<a href="/home/Dating/taobao" title="淘宝任务大厅">淘宝任务大厅</a>
	<a href="/home/Dating/inTask" title="已接任务">已接任务</a>
	<a href="/home/Dating/outTask"  title="已发任务">已发任务</a>
	<a href="/home/Dating/buyer" title="绑定买号">绑定买号</a>
	<a href="/home/Dating/seller" class="nov"  title="绑定掌柜">绑定掌柜</a>
</div>
<span id="tloading" style="background-image: url(http://taobao.damaihu.com.cn/static/images/taobao/loading.gif); width: 100px; height: 50px; float: left; text-indent: 40px; margin: 25px 0px 0px 305px; display: none; background-position: initial initial; background-repeat: no-repeat no-repeat; "><img src="static/images/taobao/fg.gif"></span>
<div id="moveContent">
	<div>
	<div class="cle"></div>

    <div class="lst_info">
<div class="mh_tishi">
		1、您目前是<span class="orange">新手会员</span>用户，可以绑定2个掌柜！<br>
2、如果您的帐号还没有发布过任务，可以自己免费删除掌柜一次；发布过任务的帐号删除掌柜需要付费5元！
<br>

</div>
<div class="bq_menu">
	<a href="javascript:;" class="nov">绑定淘宝掌柜</a>
</div>

    <div>
    <div class="paipaibang" style="display:block;">
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:20px;font-size:14px;background: url(http://www.damaihu.com.cn/static/images/public/mhgl_btn.gif) 400px -401px no-repeat;" class="zg_tb">
      <tbody><tr>
        <td width="20%" height="30" align="left" valign="middle"><span class="mico taobao"></span></td>
      </tr>

      <tr>
        <td width="20%" height="40" align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
          	<tr>
            <td width="23%" style="padding:0;">淘宝掌柜名（旺旺名）：</td>
            <td align="left" style="padding:0;"><input onclick="if(this.value.indexOf('输入旺旺名称') <= 0)this.value='';" value="输入旺旺名称进行绑定" type="text" name="nickName" id="nickName" class="mh_bk"></td>
         	 </tr>
        	</tbody></table>
    	</td>
      </tr>

      <tr>
        <td height="60" align="left" valign="middle"><input type="button" id="addSeller" class="mico mh_bdbtn2"></td>

<script>
	$("#addSeller").click(function(){
			$.ajax({
				url:'/home/user/BangDing',
				dataType:'json',
				type:'post',
				data:{name:$("#nickName").val(),type:1},
				success:function(data){
					switch(data.msg){
						case 'success':alert('添加成功');break;
						case 'fail':alert('旺旺号不存在或者输入有误');break;
						case 'has':alert('已经添加过了');break;
						case 'nocon':alert('网络错误，请刷新页面，重新输入');break;
					}
				}
			})
		})
</script>
      </tr>

      <tr>
        <td width="20%" height="40" align="left" valign="middle" class="mh_xian"><span class="orange">您目前是新手会员用户，可以绑定2个掌柜</span> <a href="/BuyPoint/" class="chengse2">申请VIP</a>最高可绑定30个掌柜！ <a href="/vip.html" target="_blank" class="lanse">查看VIP限权</a></td>
      </tr>
    </tbody>
</table>
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
          	<tr id="row-head">
	            <td width="10" height="37" class="txjl_bg1"></td>
	            <td width="20%" height="37" align="center" valign="middle" class="txjl_bg2 black">淘宝掌柜帐号</td>
              <td width="30%" height="37" align="center" valign="middle" class="txjl_bg2 black">淘宝掌柜信用</td>
				      <td width="10%" height="37" align="center" valign="middle" class="txjl_bg2 black">总发布任务</td>
	            <td width="15%" height="37" align="center" valign="middle" class="txjl_bg2 black">绑定时间</td>
	            <td width="15%" height="37" align="center" valign="middle" class="txjl_bg2 black">是否激活</td>
	            <td width="10%" height="37" align="center" valign="middle" class="txjl_bg2 black">&nbsp;</td>
	            <td width="10" height="37" class="txjl_bg3"></td>
            </tr>
        </tbody>
    	</table></td>
      </tr>
    </tbody></table>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="rwdt_dlm">
	  <div id="page">	  				<a href="javascript:;" page="NULL" class="up-no">&lt;</a>										<a href="javascript:;" page="2" class="next-page">&gt;</a>										<p class="total">总：共0页 当前:第<span class="now-show"> 1 </span>页</p>				   </div>
	</div>
	<div class="cle"></div>
	<!--结束-->
	</div></div>

	<table id="reAutoAM" style="width:100%;height:150px;background-color:#FBFBFB;display:none;">
        <tbody><tr>
            <td align="right" style="width:30%"><img src="static/images/taobao/loading.gif"></td>
            <td><span style="margin-left:20px;color:Red;font-weight:bold;"></span><input id="btnAutoAM" style="display:none;"></td>
        </tr>
    </tbody></table>
</div>
	</div>
    </div>
</div>
<?php include('index_footer.php'); ?>