<?php include('taobao_mid.php'); ?><div class="tico menu">
	<a href="/home/Dating/taobao" title="淘宝任务大厅">淘宝任务大厅</a>
	<a href="/home/Dating/inTask" title="已接任务">已接任务</a>
	<a href="/home/Dating/outTask"  title="已发任务">已发任务</a>
	<a href="/home/Dating/buyer" class="nov"  title="绑定买号">绑定买号</a>
	<a href="/home/Dating/seller"  title="绑定掌柜">绑定掌柜</a>
</div>
<span id="tloading" style="background-image: url(http://taobao.damaihu.com.cn/static/images/taobao/loading.gif); width: 100px; height: 50px; float: left; text-indent: 40px; margin: 25px 0px 0px 305px; display: none; background-position: initial initial; background-repeat: no-repeat no-repeat; "><img src="static/images/taobao/fg.gif"></span>
<div id="moveContent">
	<div>
    <div class="rwdt_xx" style="display:none;">
	<p class="rwdt_lx">

		<a href="javascript:;" class="nov" seed="0">全部任务</a>

		<a href="javascript:;" class="" seed="1">虚拟任务</a>

		<a href="javascript:;" class="" seed="2">实物任务</a>

	</p>
	<ul class="rwdt_jg" id="rwdt_jg">
		<li><span class="tico gdt1"></span></li>


		<li><a href="javascript:;" jiages="0" title="不限" class="tico nov">不限</a></li>

		<li><a href="javascript:;" jiages="1" title="1-30元" class="tico ">1-30元</a></li>

		<li><a href="javascript:;" jiages="2" title="31-100元" class="tico ">31-100元</a></li>

		<li><a href="javascript:;" jiages="3" title="101-400元" class="tico ">101-400元</a></li>

		<li><a href="javascript:;" jiages="4" title="400以上" class="tico ">400以上</a></li>

		<li><span class="tico gdt2"></span></li>
	</ul>
	<div class="rwdt_btn">
		<a href="#publish/oneTask" class="tico fb_btn"></a>
		<a href="javascript:;" class="tico sx_btn"></a>
	</div>
    <div class="autotk orange">
    	<input type="checkbox" id="nAuTotk" name="nAuTotk">
    	<strong>自动接任务</strong>
    	<a href="http://member.damaihu.com.cn/#autoam" target="_blank">
    		<strong class="orange">（配置自动接任务筛选条件）</strong>
    	</a>
    </div>
</div>
	<div class="rwdt_xx" style="display:none;">
    <p class="rwdt_marquee_close">X</p>
    <p class="rwdt_marquee">
    	<marquee onmouseover="this.stop()" onmouseout="this.start()" width="100%" height="18">
    		<a href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=4492" style="color:red;" target="_blank">接手方容易造成损失的几大误区</a>
    	</marquee>
    </p>
	<ul class="yfrw_sub">

		<li style="z-index:11">
			<a href="javascript:;" class="sbico active operat" val="0"></a>

			<div class="tips-number">
				<span class="sbico reddit1"></span>
				<span class="reddit2">0</span>
				<span class="sbico reddit3"></span>
			</div>

		</li>

		<li style="z-index:10">
			<a href="javascript:;" class="sbico complete" val="1"></a>

		</li>

		<li style="z-index:9">
			<a href="javascript:;" class="sbico all-task" val="2"></a>

		</li>

		<li style="z-index:8">
			<a href="javascript:;" class="sbico link-old" val="3"></a>

			<div class="tips-number">
				<span class="sbico reddit1"></span>
				<span class="reddit2">0</span>
				<span class="sbico reddit3"></span>
			</div>

		</li>

	</ul>
	<div class="rwdt_btn">
		<a href="#publish/oneTask" class="tico fb_btn"></a>
		<a href="javascript:;" class="tico sx_btn"></a>
	</div>
	<div class="rwdt_sort">

		<div class="btn_blue" style="float:left;">

		<a href="javascript:;" class="def-a" val="2">选择买号(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="4">需要付款(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="6">收货好评(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="7">待放款(<span class="orange">0</span>)</a>

		</div>

		<span style="color:#B4B3B1;">（本月完成任务：0，周完成任务：0，日完成任务：0）</span>
	</div>

	<div class="task_search">

		<input type="text" name="task_keys" id="task_keys" onclick="if(this.value.indexOf('搜索任务ID') &gt;= 0)this.value='';" value="搜索任务ID,掌柜,买号,QQ">
		<a href="javascript:;" class="search">搜索</a>
	</div>
</div>
	<div class="rwdt_xx" style="display:none;">
    <p class="rwdt_marquee_close">X</p>
    <p class="rwdt_marquee">
    	<marquee onmouseover="this.stop()" onmouseout="this.start()" width="100%" height="18">
    		<a href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=4492" style="color:red;" target="_blank">接手方容易造成损失的几大误区</a>
    	</marquee>
    </p>

	<ul class="yfrw_sub">

		<li style="z-index:11">
			<a href="javascript:;" class="sbico active operat" val="0"></a>

			<div class="tips-number">
				<span class="sbico reddit1"></span>
				<span class="reddit2">0</span>
				<span class="sbico reddit3"></span>
			</div>

		</li>

		<li style="z-index:10">
			<a href="javascript:;" class="sbico pause" val="1"></a>

			<div class="tips-number">
				<span class="sbico whitedit1"></span>
				<span class="whitedit2">0</span>
				<span class="sbico whitedit3"></span>
			</div>

		</li>

		<li style="z-index:9">
			<a href="javascript:;" class="sbico complete" val="2"></a>

		</li>

		<li style="z-index:8">
			<a href="javascript:;" class="sbico all-task" val="3"></a>

		</li>

		<li style="z-index:7">
			<a href="javascript:;" class="sbico link-old" val="4"></a>

			<div class="tips-number">
				<span class="sbico reddit1"></span>
				<span class="reddit2">0</span>
				<span class="sbico reddit3"></span>
			</div>

		</li>

	</ul>

	<div class="rwdt_btn">
		<a href="#publish/oneTask" class="tico fb_btn"></a>
		<a href="javascript:;" class="tico sx_btn"></a>
	</div>
	<div class="rwdt_sort">

		<div class="btn_blue" style="float:left;">

		<a href="javascript:;" class="def-a" val="1,2,3,4">待接手付款(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="5,17">需要发货(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="6">待确认收货(<span class="orange">0</span>)</a>

		<a href="javascript:;" class="def-a" val="7">卖家确认(<span class="orange">0</span>)</a>

		</div>

		<input type="checkbox" name="allSelect" value="1"> 全选
		<span style="color:#15666D;cursor:pointer" class="a-key"> 一键操作</span>
		<span style="color:#B4B3B1">（本月完成任务：0，周完成任务：0，日完成任务：0）</span>
	</div>

	<div class="task_search">

		<input type="text" name="task_keys" id="task_keys" onclick="if(this.value.indexOf('搜索任务ID') &gt;= 0)this.value='';" value="搜索任务ID,掌柜,买号,QQ">
		<a href="javascript:;" class="search">搜索</a>
	</div>
</div>
	<div class="cle"></div>

    <div class="lst_info">
<div class="mh_tishi">
		1、您目前是<span class="orange">新手会员</span>用户，可以绑定2个买号！<br>
2、如果您的帐号还没有发布过任务，可以自己免费删除买号一次；发布过任务的帐号删除买号需要付费5元！
<br>

</div>
<div class="bq_menu">
	<a href="javascript:;" class="nov">绑定淘宝买号</a>
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
            <td width="23%" style="padding:0;">淘宝买号名（旺旺名）：</td>
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
				data:{name:$("#nickName").val(),type:0},
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
	<div id="taobao-lists" style="display:none;">
	<div id="taskList">
	 	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tlisttable">
          <thead>
	        <tr>
	            <td width="10" height="39" align="center" valign="middle" class="tico rwdt_bt1"></td>
	            <td width="21%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="0" style="width:80px;margin-left: 30px;">任务编号</span></td>
	            <td width="12%" align="left" valign="middle" class="tico rwdt_bt2">发布人</td>
	            <td width="12%" align="left" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="1">任务价格</span></td>
	            <td width="23%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="2" style="width:93px">发布者要求</span></td>
	            <td width="22%" align="left" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="3">悬赏星星</span></td>
	            <td width="10%" align="center" valign="middle" class="tico rwdt_bt2">操作</td>
	            <td width="10" align="center" valign="middle" class="tico rwdt_bt3"></td>
	        </tr>
	        <tr><td colspan="8" class="newdatas" style="display:none">有<b>0</b>个新发布的任务，点击刷新<span></span></td></tr>
		  </thead>

		  <tbody class="tlisttable table-row">
		  <tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type5 topt" title="虚拟任务">
		<strong>TB1396772434584372</strong>
	</span>
	<br>
	<span>Post Time:16:46:01</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=乱挂着" class="blue">
        <span>乱挂着</span>
    </a>
    <br>

    <span>exp:300</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">2.00</span>

</td>
<td width="23%" class="noktime">

    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>






</td>
<td width="22%" align="left">
    <span class="red"><strong>1.80个星星</strong></span><br>

    <span class="orange">↑ 发布者追加了星星0.80个</span>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396772325501512</strong>
	</span>
	<br>
	<span>Post Time:16:45:50</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=xilihe" class="blue">
        <span>xilihe</span>
    </a>
    <br>

    <span>exp:58</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为89.00元">89.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>

    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>


    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>


</td>
<td width="22%" align="left">
    <span class="green"><strong>8.00个星星</strong></span><br>

    <span class="orange">↑ 发布者追加了星星0.30个</span>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396767996308027</strong>
	</span>
	<br>
	<span>Post Time:16:45:39</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=5526844" class="orange strong">
        <span>5526844</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:35</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">39.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在120小时后对宝贝进行收货好评！">120小时五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>

    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="任务需要模拟聊天后确认收货" class="hico limit5 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>

</td>
<td width="22%" align="left">
    <span class="green"><strong>9.50个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396767917765524</strong>
	</span>
	<br>
	<span>Post Time:16:45:39</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=5526844" class="orange strong">
        <span>5526844</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:35</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">39.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在96小时后对宝贝进行收货好评！">96小时五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>

    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="任务需要模拟聊天后确认收货" class="hico limit5 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>

</td>
<td width="22%" align="left">
    <span class="green"><strong>8.70个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396767802584157</strong>
	</span>
	<br>
	<span>Post Time:16:45:39</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=5526844" class="orange strong">
        <span>5526844</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:35</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">39.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在96小时后对宝贝进行收货好评！">96小时五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>

    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="任务需要模拟聊天后确认收货" class="hico limit5 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>

</td>
<td width="22%" align="left">
    <span class="green"><strong>8.70个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type7 topt" title="快递任务">
		<strong>TB1396684290508514</strong>
	</span>
	<br>
	<span class="hico limit1 lopt" title="接任务者需要加入平台商保">Post Time:16:45:37</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=ljr9478ljr9478" class="blue">
        <span>ljr9478ljr9478</span>
    </a>
    <br>

    <span>exp:587</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为500.00元">500.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在72小时后对宝贝进行收货好评！">72小时五星好评</p>


    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="任务需要模拟聊天后确认收货" class="hico limit5 lopt">&nbsp;</em>

    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>


    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>

</td>
<td width="22%" align="left">
    <span class="green"><strong>20.90个星星</strong></span><br>

    <span class="orange">↑ 发布者追加了星星6.00个</span>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396773044234775</strong>
	</span>
	<br>
	<span>Post Time:16:45:35</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=职业的哦" class="blue">
        <span>职业的哦</span>
    </a>
    <br>

    <span>exp:648</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为100.00元">100.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>


</td>
<td width="22%" align="left">
    <span class="green"><strong>6.10个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396714567643967</strong>
	</span>
	<br>
	<span>Post Time:16:45:31</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=武汉小宇" class="blue">
        <span>武汉小宇</span>
    </a>
    <br>

    <span>exp:1362</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">5.00</span>

</td>
<td width="23%" class="noktime">

    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>


    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>


    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>


</td>
<td width="22%" align="left">
    <span class="red"><strong>2.30个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396773557896169</strong>
	</span>
	<br>
	<span>Post Time:16:45:20</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=李诗浩" class="orange strong">
        <span>李诗浩</span>
    </a>
    <br>

    <span class="hico vip7 vopt" title="钻石VIP客户">exp:2283</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为40.00元">40.00</span>

</td>
<td width="23%" class="noktime">

    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>


    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>





</td>
<td width="22%" align="left">
    <span class="red"><strong>1.80个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396757530487335</strong>
	</span>
	<br>
	<span>Post Time:16:45:19</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=shuiuu" class="blue">
        <span>shuiuu</span>
    </a>
    <br>

    <span>exp:130</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">39.80</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>

    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>

</td>
<td width="22%" align="left">
    <span class="green"><strong>3.90个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396754940836189</strong>
	</span>
	<br>
	<span>Post Time:16:45:18</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=8762296" class="blue">
        <span>8762296</span>
    </a>
    <br>

    <span>exp:295</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为78.00元">78.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>

    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>

    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>

    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>
    <em title="接任务者需要根据提示进行货比截图，额外0.5~1.5个星星" class="hnews limit28 lopt">&nbsp;</em>
</td>
<td width="22%" align="left">
    <span class="green"><strong>7.25个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396773580723144</strong>
	</span>
	<br>
	<span>Post Time:16:45:05</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=loveqing19" class="orange strong">
        <span>loveqing19</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:120</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为38.00元">38.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>





</td>
<td width="22%" align="left">
    <span class="green"><strong>3.10个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396764243124063</strong>
	</span>
	<br>
	<span>Post Time:16:45:01</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=xiaoyouyu" class="blue">
        <span>xiaoyouyu</span>
    </a>
    <br>

    <span>exp:101</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为0.01元">0.01</span>

</td>
<td width="23%" class="noktime">

    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>


    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>



    <em title="接任务者需要上传商品底部截图，额外0.3个星星" class="hnews limit27 lopt">&nbsp;</em>
    <em title="接任务者需要根据提示进行货比截图，额外0.5~1.5个星星" class="hnews limit28 lopt">&nbsp;</em>
</td>
<td width="22%" align="left">
    <span class="red"><strong>2.60个星星</strong></span><br>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type4 topt" title="来路任务">
		<strong>TB1396773894412741</strong>
	</span>
	<br>
	<span>Post Time:16:44:54</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=芊淳888" class="orange strong">
        <span>芊淳888</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:784</span>

</td>
<td width="12%">

    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为209.00元">209.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>


    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>

    <em title="任务需要指定收货地址" class="hico limit7 lopt">&nbsp;</em>

    <em title="接任务者需要上传好评图片" class="hico limit8 lopt">&nbsp;</em>

    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>





</td>
<td width="22%" align="left">
    <span class="green"><strong>9.80个星星</strong></span><br>

    <span class="orange">↑ 发布者追加了星星0.50个</span>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">

	<span class="hico type7 topt" title="快递任务">
		<strong>TB1396773106497195</strong>
	</span>
	<br>
	<span>Post Time:16:44:51</span>
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=15328031065" class="orange strong">
        <span>15328031065</span>
    </a>
    <br>

    <span class="hico vip6 vopt" title="一级VIP客户">exp:55</span>

</td>
<td width="12%">

    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">29.00</span>

</td>
<td width="23%" class="noktime">

    <p class="green" title="任务接手付款后，在72小时后对宝贝进行收货好评！">72小时五星好评</p>


    <em title="接任务者需要额外浏览商品，额外0.3~0.9个星星" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个星星" class="hnews limit26 lopt">&nbsp;</em>


</td>
<td width="22%" align="left">
    <span class="green"><strong>12.00个星星</strong></span><br>

    <span class="orange">↑ 发布者追加了星星5.10个</span>

</td>
<td width="10%" class="center">
	<p>

		<a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>

	</p>

</td>
<td width="10">&nbsp;</td>
</tr></tbody>
        </table>
		<div class="rwdt_dlm">
			<a href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=1509" target="_blank" class="tico rwdt_tbhelp"></a>
			<div id="page">	  				<a href="javascript:;" page="NULL" class="up-no">&lt;</a>																		<a href="javascript:;" page="NULL" class="now-page">1</a>																			<a href="javascript:;" page="2">2</a>																		<a href="javascript:;" page="3">3</a>																		<a href="javascript:;" page="4">4</a>																		<a href="javascript:;" page="5">5</a>																		<a href="javascript:;" page="6">6</a>																		<a href="javascript:;" page="7">7</a>																		<a href="javascript:;" page="8">8</a>																		<a href="javascript:;" page="9">9</a>																		<a href="javascript:;" page="10">10</a>																		<a href="javascript:;" page="11">11</a>																		<a href="javascript:;" page="12">12</a>																		<a href="javascript:;" page="13">13</a>																		<a href="javascript:;" page="14">14</a>																		<a href="javascript:;" page="15">15</a>										<a href="javascript:;" page="2" class="next-page">&gt;</a>										<p class="total">总：共30页 当前:第<span class="now-show"> 1 </span>页</p>				   </div>
		</div>
	</div>
	<table id="reAutoAM" style="width:100%;height:150px;background-color:#FBFBFB;display:none;">
        <tbody><tr>
            <td align="right" style="width:30%"><img src="static/images/taobao/loading.gif"></td>
            <td><span style="margin-left:20px;color:Red;font-weight:bold;"></span><input id="btnAutoAM" style="display:none;"></td>
        </tr>
    </tbody></table>
</div>
	<div id="taskList" style="display:none;">			<!--开始-->
   	    <table id="insert-after" width="100%" border="0" cellspacing="0" cellpadding="0">
   	      <thead>
          	<tr>
	            <td width="10" height="39" align="center" valign="middle" class="tico rwdt_bt1"></td>
	            <td width="200" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="id">任务编号</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="goodsPrice">任务价格</span></td>
	            <td width="18%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="timeEnter" style="width:88px;">发布者要求</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="maidian">悬赏星星</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="state">任务状态</span></td>
	            <td width="1%" align="center" valign="middle" class="tico rwdt_bt2"></td>
	            <td width="50" align="center" valign="middle" class="tico rwdt_bt2">
	            	<span class="h-sort" val="bnickname">买号名</span>
	            </td>
	            <td width="15%" align="center" valign="middle" class="tico rwdt_bt2">操作</td>
	            <td width="10" align="center" valign="middle" class="tico rwdt_bt3"></td>
            </tr>
   	      </thead>
    	</table>

    	<div id="insert-before"></div>
		<div id="page">	  				<a href="javascript:;" page="NULL" class="up-no">&lt;</a>										<a href="javascript:;" page="2" class="next-page">&gt;</a>					<span style="padding-left:20px;">本页合计金额：金额:<span class="orange">0.00</span>元，星星:<span class="orange">0.00</span>个；未完成金额:<span class="orange">0.00</span>元，未完成星星:<span class="orange">0.00</span>个，待付款任务金额：<span style="color:blue;">0.00</span>元</span>					<p class="total">总：共0页 当前:第<span class="now-show"> 1 </span>页</p>				   </div>

</div>
	<div id="taskList" style="display:none;">			<!--开始-->
   	    <table id="insert-after" width="100%" border="0" cellspacing="0" cellpadding="0">
   	      <thead>
          	<tr>
	            <td width="10" height="39" align="center" valign="middle" class="tico rwdt_bt1"></td>
	            <td width="200" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="id">任务编号</span></td>
	            <td width="200" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="snickname">掌柜名</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="goodsPrice">任务价格</span></td>
	            <td width="18%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="timeEnter" style="width:88px;">发布者要求</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="maidian">悬赏星星</span></td>
	            <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="state">任务状态</span></td>
	            <td width="1%" align="center" valign="middle" class="tico rwdt_bt2"></td>
	            <td width="24%" align="center" valign="middle" class="tico rwdt_bt2">操作</td>
	            <td width="10" align="center" valign="middle" class="tico rwdt_bt3"></td>
            </tr>
   	      </thead>
    	</table>

		<div id="insert-before"></div>
		<div id="page">	  				<a href="javascript:;" page="NULL" class="up-no">&lt;</a>										<a href="javascript:;" page="2" class="next-page">&gt;</a>					<span style="padding-left:20px;">本页合计金额：金额:<span class="orange">0.00</span>元，星星:<span class="orange">0.00</span>个；未完成金额:<span class="orange">0.00</span>元，未完成星星:<span class="orange">0.00</span>个</span>					<p class="total">总：共0页 当前:第<span class="now-show"> 1 </span>页</p>				   </div>

</div>
	</div>
    </div>
</div>
<script>
/**
    $(function(){
		$('.tico.menu a').each(function(e){
			$(this).click(
				function(){
					$(this).addClass('nov').siblings('a').removeClass('nov');
					$('#moveContent .rwdt_xx').eq(e).show().siblings('.rwdt_xx').hide();
				}
			)
		})
	})
	$(function(){
		$('.bq_menu a').each(function(e){
			$(this).click(
				function(){
					$(this).addClass('nov').siblings('a').removeClass('nov');
					$('.paipaibang').eq(e).show().siblings('.paipaibang').hide();
				}
			)
		})
	})
	*/
 </script>
<?php include('index_footer.php'); ?>