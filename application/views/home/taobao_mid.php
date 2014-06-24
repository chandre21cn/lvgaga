<?php include('index_header.php'); ?>
	<link rel="stylesheet" type="text/css" href="/wanjia/taobao/css/mm.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/taobao/css/taobao_common.css">
<div id="content"><div id="cengci">
	<div class="bwcont">
	<div class="pngimg">
	  <span class="over"></span>
	  <a class="tuoguan" href="http://fuwu.damaihu.com.cn/fuwu/tuoguan" target="_blank"></a>
	  <a class="renzheng" href="http://member.damaihu.com.cn" target="_blank"></a><i class="next"></i>
	  <i class="next"></i>
	</div>
	</div>
</div>
<p class="hdfot"></p>
<div class="bw">
	<ul class="rwdt_info">
		<li>
		  <p class="fd">账户余额：<strong class="orange">0.00</strong> 元</p>
		<a title="将存款提取到我的网银或支付宝上" target="_blank" href="http://member.damaihu.com.cn/#payment/bank" class="hico tx"></a></li>
		<div class="cle"></div>
		<li><p class="fd">星星：<strong class="orange">0.00</strong> 个</p><a href="http://member.damaihu.com.cn/#rechange" title="将保证金兑换成能发布任务的星星" target="_blank" class="hico hs"></a></li>
		<div class="cle"></div>
		<li><p>积分：<strong class="orange">0.00</strong> 个</p></li>
		<li><p class="fd">属于：新手会员</p>

		</li>
		<div class="cle"></div>
		<li>好评率：<strong class="green">100%</strong></li>
		<li>有效投诉：<strong class="orange">0</strong></li>
	</ul>
	<div class="rwdt_bk">
		<p class="sub_bt">
			<a href="javascript:;" val="1">网银充值</a>
			<a href="javascript:;" val="0">支付宝充值</a>
			<a href="javascript:;" val="2">购买星星</a>
			<a href="javascript:;" val="3">财付通充值</a>
		</p>
		 <div id="buyboxcont">
			<div class="task_header" style="display:none;padding:5px 10px 5px 10px;">

					<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-top:10px;">
						<tbody><tr><td>收款支付宝账号：<a target="_blank" href="http://member.damaihu.com.cn/#topup/alipay">进入支付宝付款页面</a> </td></tr>
						<tr><td>转账时只能备注：<strong class="yellow">18779166875</strong></td></tr>
						<tr><td>(转账完毕后验证交易号，1分钟到账)</td></tr>
						<tr>
	                	   <td colspan="2"><a class="tc_b" href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=1850" target="_blank">查看充值教程</a><a class="tc_k" target="_blank" href="http://member.damaihu.com.cn/#topup/alipay">验证订单号</a></td>
	                    </tr>
					</tbody></table>

	       </div>
	       <div class="task_header" style="display:block;">
				<table width="90%" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-top:10px;">
				  <tbody>
				  	<tr>
					<td width="35%" height="30" align="right" valign="top">充值用户名：</td>
					<td><input type="text" name="username" id="username" class="rwdt_inp" style="color:#666" value="18779166875" disabled="disabled"></td>
				  </tr>
				  <tr>
					<td height="30" align="right" valign="top">充值金额：</td>
					<td><input type="text" name="money" id="money" class="rwdt_inp" style="color: #D9281E;font-weight: bold;" value="100">
					<span class="orange">(0.5%手续费)</span><a href="http://www.damaihu.com.cn/info/vip.html" style="margin-left: 5px;">申请VIP只需0.2%</a></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><a target="_blank" href="http://member.damaihu.com.cn/#topup/bank" class="tico cz"></a></td>
				  </tr>
			  </tbody></table>
	       </div>
		    <div class="task_header" style="display:none">
						<form id="q_f_3" action="http://www.damaihu.com.cn/BuyPoint/" method="post" onsubmit="return checkForm3();">
						<input type="hidden" name="cardType" value="1">
						<input type="hidden" name="jiage" id="jiage" value="">
								<table width="90%" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-top:10px;">
								<tbody><tr>
										<td width="35%" height="30" align="right" valign="middle">购买价格：</td>
										<td><span style="color:#D9281E; font-weight:bold;"><span id="jiage1">0.68</span>元=1个星星</span></td>
									</tr>
								<tr>
										<td width="35%" height="30" align="right" valign="middle">购买数量：</td>
										<td><input name="nums" id="cardnums" value="20" type="text" size="10" maxlength="4">(最少购买1个)</td>
									</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="submit" class="tico cz"></td>
								</tr>
							</tbody></table>
						</form>
	       </div>
		    <div class="task_header" style="display:none">
				<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
	              	<tbody>
	              	<tr style="height: 8px;float: left;"><td>&nbsp;</td></tr>
					<tr><td>收款财付通账号：<a target="_blank" href="http://member.damaihu.com.cn/#topup/tenpay">进入财付通付款页面</a> </td></tr>
					<tr><td>转账时只能备注：<strong class="yellow">18779166875</strong></td></tr>
					<tr><td>(转账完毕后验证交易号，1分钟到账)</td></tr>
	                <tr>
	                	<td colspan="2"><a class="tc_b" href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=1850" target="_blank">查看充值教程</a><a class="tc_k" target="_blank" href="http://member.damaihu.com.cn/#topup/tenpay">验证订单号</a></td>
	                </tr>
	              </tbody>
				</table>
	       </div>
	  </div>
	</div>
	<div class="rwdt_bk2">
		<span class="header-button">
			<a href="http://www.damaihu.com.cn/help/safesz" style="display: block; height: 36px; width: 110px; float: left;background:url(static/images/taobao/rwdtnew.gif) no-repeat 0px -156px;" target="_blank"></a>
			<a style="display: block; height: 36px; width: 110px; float: left; margin-left: 22px;background:url(static/images/taobao/rwdtnew.gif) no-repeat 0px -193px;" href="http://www.damaihu.com.cn/help/guide?go=fraud" target="_blank"></a>
		</span>
		<p class="tico ts">接实物任务后立即收货好评将 <span class="orange">- 20 </span>星星</p>
		<p class="tico ts">任务过程中旺旺聊到刷信誉平台相关字眼 <span class="orange">- 5 </span>星星</p>
		<p class="tico ts">为了您资金安全，接手方淘宝支付后务必在<span class="blue">15</span>分钟内回到平台操作任务点击“已付款” </p>
	</div>
</div>
<div class="rwdt_gg"><a href="http://www.damaihu.com.cn/activity/mineaction" target="_blank"><img src="/wanjia/static/images/taobao/dil.jpg"></a></div>
<div class="rwdt_gg2"><a href="http://www.damaihu.com.cn/Platform/soft" target="_blank"><img src="/wanjia/static/images/taobao/frw.gif"></a></div>
