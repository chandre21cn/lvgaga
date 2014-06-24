<div id="footer">
	<SCRIPT TYPE="text/javascript">
	$.ajax({
		url:'/home/User/CheckLogin',
		dataType:'json',
		type:'post',
		success:function(data){
			if(data.msg=='ok'){
				$("#dmh-login .login").css("display","none");
				$("#dmh-login .ilogData").css("display","block");
				$("#goone li:eq(1) a").html(data.info.name);
				$("#goone li:eq(2) a").html(data.info.funder);
				$("#goone li:eq(3) a").html(data.info.xx);
				$("#goone li:eq(4) a").html(data.info.exp);
				$("#goone .touimg a img").attr('src',"/"+data.info.avatar);
				$(".login-before").hide();
				$(".username").html(data.info.name);
				$(".exp").attr('src',"http://www.damaihu.com/static/images/ico/level/b_red_"+(data.info.exp%5+1)+".gif");
				$(".menu-hd .money").html(data.info.funder);
				$(".rwdt_info li:eq(0) .fd .orange").html(data.info.funder);
				$(".menu-hd .maidian").html(data.info.xx);
				$(".rwdt_info li:eq(1) .fd .orange").html(data.info.xx);
				$(".rwdt_info li:eq(2) .fd .orange").html(data.info.exp);
				$(".login-after").show();
			}else{
				$("#dmh-login .login").css("display","block");
				$("#dmh-login .ilogData").css("display","none");
			}
		}
	})
	</SCRIPT>
	<p>
		<span class="chengse">官方QQ群：<a style="color:#FE5500;" target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=c67c64edb769392db32cdfb8be110c498dfde9c3fffc7668d56be1cd99cb069">377804205</a></span>
		（加群请注明大麦户）</p>
	<p class="lanse">
		<a href="http://www.damaihu.com.cn/info/about?p=1">联系我们</a>|
		<a href="http://www.damaihu.com.cn/info/about?p=2">大麦户规则</a>|
		<a target="_blank" href="http://www.yaodamai.com/">淘宝信誉查询</a>|
		<a target="_blank" href="http://www.aizhanggui.com/">爱掌柜淘宝培训</a>
	</p><p class="lanse">客户服务热线：4000709880   Copyright © 2012-2020 Damaihu.com All RightsReserved    大麦户版权所有
		<a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备13037934号</a>
	</p>
</div>
</body>
</html>