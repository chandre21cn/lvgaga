<?php include('index_header.php'); ?>
<div id="d_banner" action-index="home">
	<div class="main_visual">
		<div id="dmh-login">
			<div class="login">
				<div id="userentry">
					<p class="join">一站式威客服务平台期待您的加入！</p>
					<a class="reg-btn" href="/user/Register/"></a>
					<p class="ui-p">
						<label id="J-label-name" class="ui-label">
							<span class="ui-name-icon">用户名：</span>
		      			</label>
		     			<input type="text" maxlength="26" class="ui-input" id="lusername" name="LoginForm[username]" autocomplete="off" tabindex="1" value="" placeholder="大麦户用户名">
					</p>
					<p style="height:50px;"></p>
					<p class="ui-p">
						<label id="J-label-pass" class="ui-label">
							<span class="ui-pass-icon">密码：</span>
		      			</label>
		     			<input type="password" maxlength="16" class="ui-input" id="lpassword" name="LoginForm[password]" autocomplete="off" tabindex="1" value="" placeholder="大麦户密码">
					</p>
					<p style="height:15px;"></p>
				</div>
				<ul id="interlocution" style="display:none;">
					<li class="usertour">您的账户设置了安全提问,请您验证安全问题。</li>
					<li id="usertourError"></li>
					<li>
						<span class="usertourText">安全提问：</span>
						<select id="loginquestionid" name="questionid" class="selectque">
						<option value="0">请选择问题</option>
						<option value="1">早上几点起床？</option>
						<option value="2">TA最爱吃的菜？</option>
						<option value="3">好朋友的名字？</option>
						<option value="4">你理想的体重？</option>
						<option value="5">爱人的生日？</option>
						</select>
					</li>
					<li>
						<span id="loginpwd" class="answer">问题答案：</span>
						<input type="text" maxlength="20" value="" id="trouble" class="input-answer">
					</li>
				</ul>
				<a class="login-btn" id="login_btn" href="javascript:;"></a>
				<p class="ui-p ui-tips">
			  </p><ul>
						<li id="miaoname" class="fl"></li>
						<li id="miaopwd" class="fl"></li>
						<li class="fr" style="margin-right: 30px;">
							<a href="/help/selfservice/" target="_blank" style="color:#e5e5e5">忘记密码?</a>
						</li>
					</ul>
				<p></p>
			</div>
			<div class="ilogData">
				<ul id="goone">
					<li><span>一个真实的淘宝信誉平台期待您的加入</span></li>
					<li class="li-a">用户名：<a href="javascript:void(0);">读取中...</a></li>
					<li class="li-b">存款：<a href="http://member.damaihu.com.cn/#paydetails/payde">读取中...</a></li>
					<li class="li-b">星星：<a href="http://member.damaihu.com.cn/#paydetails/logpoint">读取中...</a></li>
					<li class="li-b">经验：<a href="http://member.damaihu.com.cn/#paydetails/logcredit">读取中...</a></li>
				<!--	<li class="li-b">登陆次数：<a href="http://member.damaihu.com.cn/#paydetails/logaccount">读取中...</a></li>-->
					<li class="li-b"><a href="/home/Dating/taobao"><img width="275" height="49" src="/static/images/home/goone.png"></a></li>
					<div class="touimg">
						<a href="http://member.damaihu.com.cn"><img width="100" height="100" src="#"></a>
					</div>
				</ul>
			</div>
		</div><script>


	$("#login_btn").click(function(){
		var dialog = art.dialog({
		    title: '提示',
		    content: '正在登录',
		    lock: true,
		    background: '#600', // 背景色
		    opacity: 0.87,	// 透明度
		});
		$.ajax({
				url:'/home/User/Login',
				data:{username:$('#lusername').val(),password:$("#lpassword").val()},
				dataType:'json',
				type:'post',
				success:function(data){
					if(data.msg=='ok'){
						window.location.href ="/home/User/MemberIndex";
					}else{
						dialog.content('帐号或者密码错误').title('提示').time(4);
					}
				}
			})
	});
</script>
		<div class="flicking_con">
			<div class="flicking_inner">
				 <a href="javascript:;" class="">1</a>
				 <a href="javascript:;" class="">2</a>
				 <a href="javascript:;" class="on">3</a>
			</div>
		</div>
		<div class="main_image">
			<ul style="width: 1351px; overflow: visible;">
			  <li class="bannerbg1" style="float: none; display: block; position: absolute; top: 0px; left: -2702px; width: 1351px;">
					<span class="banner-1">
						<a class="sorttg" target="_blank" title="今日特惠" href="http://fuwu.damaihu.com.cn/fuwu/sorttuoguan">今日特惠：599元打理店铺250笔交易 </a>
						<div class="banner-button">
							<a class="button-1" target="_blank" href="http://fuwu.damaihu.com.cn/fuwu/tuoguan"></a>
						</div>
						<img src="static/images/home/banner-1.jpg" width="1000" height="406" alt="加入大麦户">
					</span>
				</li>
			  <li class="bannerbg2" style="float: none; display: block; position: absolute; top: 0px; left: -1351px; width: 1351px;">
					<span class="banner-2">
						<div class="banner-button">
							<a class="button-2" href="http://www.damaihu.com.cn/user/Register/"></a>
						</div>
						<img src="static/images/home/banner-2.jpg" width="1000" height="406" alt="立即注册">
					</span>
				</li>
			  <li class="bannerbg3" style="float: none; display: block; position: absolute; top: 0px; left: 0px; width: 1351px;">
					<span class="banner-3">
						<div class="banner-button">
							<a class="button-3" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=800081529&amp;site=qq&amp;menu=yes"></a>
							<a class="button-4" target="_blank" href="http://fuwu.damaihu.com.cn/fuwu/sorttuoguan"></a>
						</div>
						<img src="/wanjia/static/images/home/banner-3.jpg" width="1000" height="406" alt="店铺托管">
					</span>
				</li>
			</ul>
			<a href="javascript:;" id="btn_prev" style="width: 1351px; overflow: visible;"></a>
			<a href="javascript:;" id="btn_next" style="width: 1351px; overflow: visible;"></a>
		</div>
	</div>
	<div class="kd" style="display:none;">
		<div class="login">
		    <ul id="userentry">
				<li id="loginaccount" class="t1">用户名：</li>
				<li><input type="text" maxlength="26" class="u_bk" id="lusername" name="LoginForm[username]"></li>
				<li id="miaoname" class="t2">平台用户名</li>
				<li id="loginpwd" class="t1">密&nbsp;&nbsp; 码：</li>
				<li><input type="password" maxlength="16" class="u_bk" id="lpassword" name="LoginForm[password]"></li>
				<li id="miaopwd" class="t2">输入6位以上密码</li>
			</ul>
			<input type="button" id="login_btn" class="l_btn">
			<p class="jz"><a class="chengse" target="_blank" href="http://www.damaihu.com.cn/help/selfservice/">忘记密码?</a></p>
		</div>
	</div>
</div>
<!-- 内容 -->
<div id="content">
	<!-- 图文教程 -->
	<div id="course">
		<ul class="course-fbf">
			<li><a class="fbf-1" href="/BuyPoint/"></a></li>
			<li><a class="fbf-2" href="/help" target="_blank"></a></li>
			<li><a class="fbf-3" href="/help" target="_blank"></a></li>
		</ul>
		<p class="fbf-p"><a href="/help" target="_blank"></a></p>
		<ul class="course-jsf">
			<li><a class="jsf-1" href="/help" target="_blank"></a></li>
			<li><a class="jsf-2" href="/help" target="_blank"></a></li>
			<li><a class="jsf-3" href="/help" target="_blank"></a></li>
		</ul>
		<p class="jsf-p"><a href="/help" target="_blank"></a></p>
	</div>
	<div id="guide_left">
		<a target="_blank" href="/help/Video">
			<span class="play" style="background-position: 0px 0px;"></span>
			<img width="405" height="239" class="image" src="/wanjia/static/images/home/dmh-video.jpg" alt="视频操作指南">
		</a>
	</div>
	<div id="guide_right">
		<div class="notice">
			<ul>
				<h4 class="notice-t"></h4>
				<li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
                <li>
					<a target="_blank" href="#"><strong>【奖励】第88期，大麦户发奖咯！</strong></a><span class="date">03-17</span>
				</li>
		  </ul>
		</div>
		<div class="arises quctl" id="c_bk3">
			<ul class="ajax_i">
				<h4 class="arises-t"></h4>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
                <li>
                	<div class="fl arises-d">
                    	<a target="_blank" style="color:#1996E6" href="#">q132130</a>
                        <span>发布任务网店提升<b style="color:#ff7112">+1</b></span>
                   	</div>
                    <div class="fl"><span class="date">-21秒前</span></div>
                </li>
            </ul>
		</div>
	</div>
	<div id="fontImg">
		<div class="depict"><img src="/wanjia/static/images/home/td-help.png" alt="服务指南"></div>
		<ul class="show">
			<li i-type="0" width="250">
				<a href="http://taobao.damaihu.com.cn">
					<img src="/wanjia/static/images/home/bd-1.png" alt="发布需求"><span class="i-type0"></span>
				</a>
			</li>
			<li i-type="1" width="250">
				<a href="http://fuwu.damaihu.com.cn">
					<img src="/wanjia/static/images/home/bd-2.png" alt="店铺引流"><span class="i-type1"></span>
				</a>
			</li>
			<li i-type="2" width="250">
				<a href="http://fuwu.damaihu.com.cn/fuwu/tuoguan">
					<img src="/wanjia/static/images/home/bd-3.png" alt="店铺冲钻"><span class="i-type2"></span>
				</a>
			</li>
			<li i-type="3" width="250">
				<a href="http://fuwu.damaihu.com.cn/fuwu/dmseo">
					<img src="/wanjia/static/images/home/bd-4.png" alt="直通车优化"><span class="i-type3"></span>
				</a>
			</li>
		</ul>
	</div>
	<!-- 选择我们 -->
	<div class="choice">
		<ul class="yelkuang">
			<li class="li_first"><span class="bgtxt0 allimg">大麦户的优势</span></li>
			<li><a href="http://www.damaihu.com.cn/help/newpeople"><span class="bgtxt1 allimg">领先的互动平台</span></a></li>

			<li><a href="http://www.damaihu.com.cn/help/newpeople"><span class="bgtxt2 allimg">精准的营销服务</span></a></li>
			<li class="li_first"><a href="http://www.damaihu.com.cn/help/newpeople"><span class="bgtxt3 allimg">超人气平台</span></a></li>
			<li><a href="http://www.damaihu.com.cn/help/newpeople"><span class="bgtxt4 allimg">完善的安全保证</span></a></li>
			<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=800081529&amp;site=qq&amp;menu=yes" target="_blank">
				<span class="bgtxt5 allimg">企业QQ</span></a>
			</li>
		</ul>
		<div class="rigdata">
			<div class="namehead">
				<span class="left allimg">加入时间</span>
			</div>
			<ul class="zhanggui">
									<li><a href="http://www.damaihu.com.cn/info?username=mingfucn">mingfucn</a><span>刚刚加入</span></li>
									<li><a href="http://www.damaihu.com.cn/info?username=691049683rsl">691049683rsl</a><span>刚刚加入</span></li>
									<li><a href="http://www.damaihu.com.cn/info?username=暗香的的">暗香的的</a><span>刚刚加入</span></li>
									<li><a href="http://www.damaihu.com.cn/info?username=3737172">3737172</a><span>刚刚加入</span></li>
									<li><a href="http://www.damaihu.com.cn/info?username=1286745351">1286745351</a><span>刚刚加入</span></li>
		  </ul>
			<div class="tuig allimg">
				<span>推荐一个会员就可以产生<b>5</b>元丰厚收入！做大麦户推广，轻松赚大钱！</span>
									<a class="one" href="http://www.damaihu.com.cn/info?username=愉悦的大麦">愉悦的大麦</a>
									<a href="http://www.damaihu.com.cn/info?username=核心词">核心词</a>
									<a class="three" href="http://www.damaihu.com.cn/info?username=chaofen">chaofen</a>
								<a href="http://www.damaihu.com.cn/info/popularize" class="tg_btn" title="加入大麦户推广" alt="加入大麦户推广"></a>
			</div>
		</div>
		<div class="whatdmh">
			<span class="txt allimg">为什么选择大麦户</span>
			<div class="xzthree">
				<a href="http://www.damaihu.com.cn/help/newpeople" class="allimg">担保交易</a>
				<a href="http://www.damaihu.com.cn/help/newpeople" class="noleft allimg">消费者保障</a>
				<a href="http://www.damaihu.com.cn/help/newpeople" class="noright allimg">威客认证</a>
			</div>
		</div>
	</div>
	<!-- bottomBar -->
	<div id="d-bottomBar">
	    <div class="d-bottomBar-wrap">
	       <a class="d-signin"> </a>
	        <a class="d-signup" target="_blank" href="http://www.damaihu.com.cn/user/Register/">立即免费注册</a>
		   <a class="d-signup1" target="_blank" href="http://fuwu.damaihu.com.cn/fuwu/tuoguan">申请网店托管</a>
	    </div>
	    <span id="d-closeBottomBar">关闭</span>
  </div>
</div>
<script>
var _delay = [];
	_delay.push(function(){
		require(['loginVerify']);
		require(['touchSlider'],function(){
			$(".main_visual").hover(function(){
				$("#btn_prev,#btn_next").fadeIn();
			},function(){
				$("#btn_prev,#btn_next").fadeOut();
			})
			$dragBln = false;
			$(".main_image").touchSlider({
				flexible : true,
				speed : 400,
				btn_prev : $("#btn_prev"),
				btn_next : $("#btn_next"),
				paging : $(".flicking_con a"),
				counter : function (e) {
					$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
				}
			});
			$(".main_image").bind("mousedown", function() {
				$dragBln = false;
			})
			$(".main_image").bind("dragstart", function() {
				$dragBln = true;
			})
			$(".main_image a").click(function() {
				if($dragBln) {
					return false;
				}
			})
			timer = setInterval(function() { $("#btn_next").click();}, 10000);
			$(".main_visual").hover(function() {
				clearInterval(timer);
			}, function() {
				timer = setInterval(function() { $("#btn_next").click();}, 10000);
			})
			$(".main_image").bind("touchstart", function() {
				clearInterval(timer);
			}).bind("touchend", function() {
				timer = setInterval(function() { $("#btn_next").click();}, 10000);
			})
		});

		/*底部面板*/
		require(['cookie'],function(){
			if(!$.cookie('d-bottomBar')){
				var dhideFlag = true;
				$(window).scroll(function(){
					 if(dhideFlag) {
					     ($(this).scrollTop() > 200) ? $("#d-bottomBar").fadeIn() : $("#d-bottomBar").fadeOut();
					 }
				});
				$("#d-closeBottomBar").click(function(){
					 dhideFlag = false;
					 var offset = document.domain.indexOf('damaihu'),
							 domain = document.domain.substr(offset);
					 $.cookie('d-bottomBar',1,{ domain:domain});
					 $("#d-bottomBar").fadeOut();
				})
			}

			if($.cookie('spread_name') == 'GHKVCCK' || $.cookie('spread_name') == 'GHKPVVV' || $.cookie('spread_name') == 'UYYBNMY' || $.cookie('spread_name') == 'GHKVCCY' || $.cookie('spread_name') == 'GHKJJPS' || $.cookie('spread_name') == 'GMCCCPY' || $.cookie('spread_name') == 'GMYHVHV' || $.cookie('spread_name') == 'GMYWPPH'){
				$("#footer p:eq(1)").remove();
				$("#footer p:last").html('客户服务热线：4000709880   Copyright © 2012-2020 Damaihu.com All RightsReserved');
			}
		});




		//视频
		$("#guide_left").mouseover(function(){
			$("#guide_left .play").css('background-position','-72px 0');
		})

		$("#guide_left").mouseout(function(){
			$("#guide_left .play").css('background-position','0 0');
		})

		$("#fontImg .show li").mouseover(function(){
			var i = $(this).attr("i-type");
			$("#fontImg .show li:not(:eq("+i+"))").stop(true).animate({ width:'+255px'},100);
		  	$(this).stop(true).animate({ width:'+476px'},400);
		  	$("#fontImg .show li:not(:eq("+i+"))").stop(true).animate({ width:'+174px'},400);
		  	//$("#fontImg .show li:not(:eq("+i+")) .item-cover").show();
		  	$("#fontImg .show").css("background","#fff");
		})

		$("#fontImg .show").mouseout(function(){
			var i = $("#fontImg .show li").attr("i-type");
			if(i==0){
				$("#fontImg .show li:eq("+i+")").stop(true).animate({ width:'+250px'},300);
			}
			$("#fontImg .show li:not(:eq("+i+"))").stop(true).animate({ width:'+250px'},300);
		   $("#fontImg .show").css("background","#fff");
		})

		//3秒弹出数据

		var delayTime = function(i,data){
			if(data == ""){
				return false;
			}
			var n = i - 1;
			var cont = '<li style="display:none;">';
				cont +='<div class="fl arises-d"><a target="_blank" style="color:#1996E6" href="'+__Index__+'/info?username='+data[n]['susername']+'">'+data[n]['susername']+'</a>';
				cont +='<span>发布任务网店提升<b style="color:#ff7112">+1</b></span></div>';
				cont +='<div class="fl"><span class="date">'+data[n]['complateTime']+'前</span></div>';
				//cont +='<div class="fl"><span class="date">'+data[n]['complateTime'].split("时")[1]+'前</span></div>';
				cont +='</li>';
			var lisize = $(".ajax_i li").length;
			if(lisize >= 7){
				//$(".ajax_i li:gt(5)").fadeOut("slow");//.remove()
				$(".ajax_i li:gt(5)").hide();
			}
			$(".ajax_i .arises-t").after(cont);
			$(".ajax_i li:first").fadeIn("slow");
			if(n > 0){
				if(lisize < 7){
					setTimeout(function(){ delayTime(n,data);},1);
				}else{

					setTimeout(function(){ delayTime(n,data);},1000*3);
				}
			}else{
				$(".ajax_i li:hidden").remove();//删除不可见的。
			}
		}
		//读取成功的任务
		var getTaskOver = function(){
			jQuery.ajax({
				type : 'GET',
				dataType : 'jsonp',
				url : __Index__+'/getTaskOver',
				success : function(data){
					var i = data.length;
					delayTime(i,data);
				}
			});
			setTimeout(getTaskOver,1000*3*60);
		}
		//调调
		getTaskOver();

		//选择我们
		$(".choice .yelkuang li").each(function(i){
			$(this).mouseover(function(){
				if(i != 0){
					$(".choice .yelkuang li:eq(0)").css("background","#71c7fa");
					$(this).children("a").children("span:first").removeClass("bghide"+i).addClass("bgshow"+i);
					$(this).children("a").children("span:last").removeClass("bgtxt"+i).addClass("bgtext"+i);
				}
			});
			$(this).mouseout(function(){
				if(i != 0){
					$(".choice .yelkuang li:eq(0)").css("background","#71c7fa");
					$(this).children("a").children("span:first").removeClass("bgshow"+i).addClass("bghide"+i);
					$(this).children("a").children("span:last").removeClass("bgtext"+i).addClass("bgtxt"+i);
				}
			})
		})

	});
</script>
<?php include('index_footer.php'); ?>