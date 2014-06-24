<?php include"member_body.php";?>

		<div id="_right"><!-- center_top -->
<div id="mid">
	<div class="top_gr">
		<div class="portrait">
			<div class="portrait_img">
				<img width="100" height="100" class="touxiang" src="http://ucenter.damaihu.com.cn/avatar.php?uid=218394&amp;size=middle">
			</div>
			<span title="到期时间：无">新手会员</span>
		</div>
		<div class="content">
			<ul>
				<li class="content_name" title="消费总金额：0.00元">
					18779166875

					<a style="font-size: 12px; margin-left: 10px; font-weight: normal; color: rgb(247, 84, 75);" href="http://www.damaihu.com.cn/user/operate">[设置安全码]</a>

				</li>
				<li class="content_li1">
					<span class="imgico"></span>
					<p style="float: left; width: 150px;">存款: <font style="color: #FA5C12;">0.00</font>元</p>
					<a href="http://member.damaihu.com.cn/#topup/bank">充值</a>
					<a href="http://member.damaihu.com.cn/#payment/bank">提现</a>
					<a href="http://member.damaihu.com.cn/#paydetails/payde">明细</a>
				</li>
				<!--<li class="content_li2">
					<span class="imgico"></span>
					<p style="float: left; width: 150px;">星星: <font style="color: #FA5C12;">0.00</font>个</p>
					<a href="http://www.damaihu.com.cn/BuyPoint/">购买星星</a>

				</li>-->
				<li class="content_li3">
					<span class="imgico"></span>本次登录：江西省南昌市 电信ADSL
				</li>
				<li class="content_li4">
					<div class="progress">
						<div class="jindutiao">
							<b style="width: 0%;"></b>
							<span title="经验条">0.00/1000</span>
						</div>
					</div>
					<div class="switch">
						<span class="dv">异地登陆</span>
						<span class="imgico dv_sp0" title="异地登陆限制关闭"></span>
						<div class="remone"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div class="center_gr" style="position: relative;">
		<div class="tweer">
			<div class="imgico tweer_10" id="actphone"></div>
		</div>

		<div class="tweer">
				<a href="http://www.damaihu.com.cn/user/exam"><div class="imgico tweer_20" id="icotwe"></div></a>
		</div>
		<div class="tweer">
				<div class="imgico tweer_30" id="examine"></div>
		</div>
	</div>

</div>
<!-- right -->
<div class="right_gr">
	<a class="rw">
		<div class="right_gr_top">
			<div class="right_gr_icon">
				<div class="imgico renwu">

				</div>
				<div class="imgico handle"></div>
			</div>
		</div>

	</a>
	<a href="/#complain">
		<div class="right_gr_bottom">
			<div class="right_gr_icon">
				<div class="imgico shensu">

				</div>
				<div class="imgico appeal"></div>
			</div>
		</div>
	</a>
</div>

<!-- 公告 -->
<!--<div class="gonggao">
	<div class="imgico ico"></div>
	<a title="大麦户顺丰快递单号任务上线" href="/bbs/t3917/" target="_blank">【奖励】第61期，大麦户发奖…</a>
	<a title="【奖励】第60期，大麦户发奖咯！" href="/bbs/t4740/" target="_blank">【奖励】第60期，大麦户发奖…</a>
	<a title="【奖励】第59期，大麦户发奖咯！" href="/bbs/t4630/" target="_blank">【奖励】第59期，大麦户发奖…</a>
</div>-->

<!-- 商保 -->
<div class="add">
	<div class=" business">
		<div class="add_bw">
				<div class="imgico business_1"> </div>
				<div class="imgico business_2"> </div>
				<a class="imgico" href="/#ensure"></a>
		</div>
	</div>
	<div class="career1">
		<div class="add_bw">
				<div class="imgico career1_1"> </div>
				<div class="imgico career1_2"> </div>
				<a class="imgico" href="#specialty"></a>
		</div>
	</div>
	<div class="career2">
		<div class="add_bw">
				<div class="imgico career2_1"> </div>
				<div class="imgico career2_2"> </div>
				<a class="imgico" href="#vip"></a>
		</div>
	</div>
</div>
<!-- 动态 -->
<div class="trends">
	<div class="imgico trends_img"></div>

	<p>暂无动态信息!</p>

</div>
<!-- 广告 -->
<div class="help">
	<div class="help_head">
		<div class="imgico help_head_img"></div>
		<div class="help_head_text">
			<span class="bangzu_link"><a target="_blank" href="http://www.damaihu.com.cn/help/guide?go=taskout">卖家帮助</a><a target="_blank" href="http://www.damaihu.com.cn/help/guide?go=taskin">买家帮助</a><a href="http://www.damaihu.com.cn/help/newpeople" target="_blank">常见问题</a></span>
		</div>
	</div>
	<a class="zhuanshi" target="_blank" href="http://www.damaihu.com.cn/help/guide?go=taskout"></a>
	<a class="yongjin" target="_blank" href="http://www.damaihu.com.cn/help/guide?go=taskin"></a>
	<p class="shushuo">
		<span class="zhuanshi_text"></span>
		<span class="yongjin_text"></span>
	</p>
</div></div>
	</div>

<script>
$(function(){
	$('.user_left .renwu1').mouseover(function(){$('.user_left .left_alert').css('display','block');})
	$('.user_left .left_alert').mouseleave(function(){$('.user_left .left_alert').css('display','none');})
})
</script>
<?php include('index_footer.php');?>