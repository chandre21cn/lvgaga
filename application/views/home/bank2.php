<?php include"member_body.php";?>

<div id="_right">
	<div id="topup">
	<div class="Top_h">
		<h2></h2>
	</div>
	<ul class="Top_list">
		<!--<a class="zhifu0 nov0" href="javascript:;"><span class="Top_list_all"></span></a>-->
		<a class="zhifu1 " href="javascript:;" style="margin-left:10px;"><span class="Top_list_all alipay"></span></a>
		<!--<a class="zhifu2 " href="javascript:;"><span class="Top_list_all taobao"></span></a>-->
		<a class="zhifu3 " href="javascript:;" style="margin-left:10px;"><span class="Top_list_all other"></span></a>
	</ul>

	<div class="Top_cun_box">
		<!--<p class="tstitle BankImg"></p>
		<ul class="bankList">
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="gs_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="js_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="ny_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="zg_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="zs_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="ms_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="jt_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="zx_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="gf_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="hz_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="nb_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="yz_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="sz_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="sh_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="pd_yh BankImg"></span></li>
			<li><input type="radio" value="radiobutton" name="radiobutton" class="inlineblock"><span class="xy_yh BankImg"></span></li>
		</ul>	-->
		<p class="rechargeMoney">
			<span style="float:left;">充值金额：</span>
			<input type="text" name="money" maxlength="5" value="100" class="Top_nums">
			<input type="button" class="Top_sub" value="">
		</p>
		<!-- <p class="depict1">普通用户网银充值手续费为0.5%，VIP会员充值手续费为0.2%~0.4%。
			<strong>
				<a href="http://www.damaihu.com.cn/BuyPoint" style="color:red">立即申请加入VIP</a>
			</strong>
		</p> -->
		<p class="depict2">
			网银充值 -无需人工充值，自动到账，支持国内20余家银行，充值立即发布任务吧。<br>充值如有问题请联系充值帮助客服：
			<img border="0" src="http://wpa.qq.com/pa?p=1:2850866329:17">
			<a style="color:#1f3415;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2850866329&amp;site=qq&amp;menu=yes">2850866329</a>
		</p>
	  </div>
	</div>
</div>
</div>

<script>
$(function(){
	$('.user_left .renwu1').mouseover(function(){$('.user_left .left_alert').css('display','block');})
	$('.user_left .left_alert').mouseleave(function(){$('.user_left .left_alert').css('display','none');})
})
</script>

<?php include 'index_footer.php';?>