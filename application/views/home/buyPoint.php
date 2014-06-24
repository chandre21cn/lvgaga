
	<?php include('index_header.php'); ?>
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/main.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/static/css/buypoint.css">
<div id="content">
	<div id="gm_kd">
		<div class="line open">
			<p class="STYLE5">购买数量：</p>
			<input id="nums" class="in_bk" type="text" value="20" maxlength="4" name="buymd">
			<p class="t2">
				<span class="STYLE3">个</span>
				<span class="STYLE4">(每个<strong>0.68</strong>元)</span>
			</p>
			<input class="gm_btn" type="button" name="button" id="buymd">
			<script type="text/javascript">

		/*购买星星*/
		$("#buymd").click(function(){
			var md = $("input[name='buymd']").val();
			var r = /^\+?[1-9][0-9]*$/; 
			
			if(r.test(md) == false){ 
				$.dialog({ title: '提示',content: '请输入正整数~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
				return false;
			}


			$.dialog({
				id:'buy',
			    title: '购买信息',
			    content: '<div id="mdData"><img src="/wanjia/static/images/buypoint/maidian.png"><p>请确定购买信息</p><br/><p>星星价格：<b>0.68</b>元</p><br/><p>星星数量：<b>'+md+'</b>个</p><br/><p>消耗存款：<b>'+new Number(md*0.68).toFixed(2)+'</b>元</p></div>',
			    lock: true,
			    okValue: '确定',
			    cancelValue: '取消',

			    ok: function () {
			    	$.ajax({
					   type: "POST",
					   url: "/home/user/BuyStar",
					   data: "action=1&num="+md,
					   dataType:'json',
					   success: function(data){
					   		switch(data.msg){
					   			case 'nologin':
									window.location.href ="/home/index/showIndex";return;
					   			break;
					   			case 'nomoney':
					   				msg='余额不足，请充值';
					   			break;
					   			case 'ok':
					   				msg='购买成功';
					   			break;
					   			default:
					   				msg='请刷新页面后再试';
					   			break;

					   		}
							$.dialog({ title: '提示',content: msg,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
					  
					    }
					});
			    },
			    cancelVal: '关闭',
			    cancel: true //为true等价于function(){}
				});
		});
/*


			$.dialog({
				id:'buy',
			    title: '购买信息',
			    content: '<div id="mdData"><img src="/wanjia/static/images/buypoint/maidian.png"><p>请确定购买信息</p><br/><p>星星价格：<b>0.68</b>元</p><br/><p>星星数量：<b>'+md+'</b>个</p><br/><p>消耗存款：<b>'+new Number(md*0.68).toFixed(2)+'</b>元</p></div>',
			    lock: true,
			    fixed: true,
			    okValue: '确定',
			    cancelValue: '取消',

			    ok: function () {
			    	$.ajax({
					   type: "POST",
					   url: "/home/user/CutMoney",
					   data: "action=1&num="+md,
					   dataType:'json',
					   success: function(data){
							$.dialog({ title: '提示',content: 'ADFGDFG',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
					  
					    }
					});
			    },
			    cancelVal: '关闭',
			    cancel: true //为true等价于function(){}
				});
*/
			</script>
		</div>
		<div class="line bg2 open">
			<p>
				<select id="viptype">
				  <option value="common">一级VIP客户</option>
				  <option value="diamond">钻石VIP客户</option>
				  <option value="crown">皇冠VIP客户</option>
				</select>
				<select id="months">
					<option value="1">一个月29元</option>
					<option value="2">二个月56元</option>
					<option value="3">三个月75元</option>
					<option value="6">半年138元</option>
					<option value="12">一年239元</option>
					<option value="24">二年429元</option>
				</select>
			</p>
			<div class="jiage">
				<span class="STYLE7">价格：<span id="price">29</span>元</span>
				<a target="_blank" class="tq" href="/home/index/Vip">查看VIP特权</a>
			</div>
			<input type="submit" class="gm_btn" name="submit" id="buyvip">
			<SCRIPT TYPE="text/javascript">

		
		/*VIP选项卡*/
		$("#viptype").click(function(){
			if($(this).val() == "common"){
				var arr = ['一个月29元','二个月56元','三个月75元','半年138元','一年239元','二年429元'];	$("#price").text(29);
			}
			if($(this).val() == "diamond"){
				var arr = ['一个月49元','二个月89元','三个月129元','半年246元','一年456元','二年839元'];$("#price").text(49);
			}
			if($(this).val() == "crown"){
				var arr = ['一个月99元','二个月189元','三个月279元','半年568元','一年1058元','二年2046元'];$("#price").text(99);	
			}
			$("#months option").each(function(n){
				$(this).html(arr[n]);
			});
		});
				/*购买VIP*/
				$("#buyvip").click(function(){
					var type = $("#viptype").val();
					var num = $("#months").val();
					
					$.dialog({
						id:'buy',
					    title: '提示',
					    fixed: true,
					    lock: true,
					    content: '你确定购买VIP，立即享受平台特权吗？',
					    okValue: '确定',
					    cancelValue: '取消',
					    ok: function () { 
					    	
					    	$.ajax({
							   type: "POST",
							   url: "/home/User/BuyVip",
					   		   dataType:'json',
							   data: "action=0&type="+type+"&num="+num,
							   success: function(data){
								   		switch(data.msg){
								   			case 'nologin':
												window.location.href ="/home/index/showIndex";return;
								   			break;
								   			case 'nomoney':
								   				msg='余额不足，请充值';
								   			break;
								   			case 'ok':
								   				msg='购买成功';
								   			break;
								   			default:
								   				msg='请刷新页面后再试';
								   			break;

								   		}
									$.dialog({ title: '提示',content: msg,fixed: true,lock: true,okValue: '确定',ok: function () { return true;}});
							   },
							   error : function(xhr){
							   		$.dialog({ title: '提示',content:'请刷新后重试',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
							   }
							});
					    },
					    cancel: function () { return true;}
					});
				})

			</SCRIPT>
		</div>
		<ul id="list">
			<li class="k1 open">
				<div onclick="" class="kp">
					<input type="button" value="1" class="btn2">
				</div>
				<p class="text">为您增加<span class="hongse"><strong>260</strong></span>个星星，尽情发布任务去吧</p>
			</li>
			<li class="k2 open">
				<div class="kp">
					<input type="button" value="2" class="btn2">
				</div>
				<p class="text">卡内含<span class="hongse"><strong>501</strong></span>个星星，发布任务也如此激情</p>
			</li>
			<li class="k3 open">
				<div class="kp">
					<input type="button" value="3" class="btn2">
				</div>
				<p class="text">卡内含<span class="hongse"><strong>1001</strong></span>个星星，畅快淋漓尊享三钻</p>
			</li>
			<li class="k4 open">
				<div class="kp">
					<input type="button" value="4" class="btn2">
				</div>
				<p class="text">内含<span class="hongse"><strong>2001</strong></span>个星星，购买返现50元</p>
			</li>
			<li class="k5 open">
				<div class="kp">
					<input type="button" value="5" class="btn2">
				</div>
				<p class="text">内含<span class="hongse"><strong>5001</strong></span>个星星，购买返现200元</p>
			</li>
			<li class="k6 open">
				<div class="kp">
					<input type="button" value="6" class="btn2">
				</div>
				<p class="text">内含<span class="hongse"><strong>10001</strong></span>个星星，<span class="STYLE1">购买返现888元</span></p>
			</li>
			<!--<li class="k7 open">
				<div name="saninter" class="kp Homemade"></div>
				<p class="text">价格：<span class="hongse">3元/张</span></p>
			</li>
			<li class="k8 open">
				<div name="qiinter" class="kp Homemade"></div>
				<p class="text">价格：<span class="hongse">16元/张</span></p>
			</li>
			<li class="k9 open">
				<div name="task" class="kp Homemade"></div>
				<p class="text">价格：<span class="hongse">1元/天</span></p>
			</li>
			<li class="k10 open">
				<div name="haoping" class="kp Homemade"></div>
				<p class="text">价格：<span class="hongse">5元/张</span></p>
			</li>
			<li class="k11 open">
				<div name="tousu" class="kp Homemade"></div>
				<p class="text">价格：<span class="hongse">5元/张</span></p>
			</li>-->
		</ul>
	</div>
</div>
<script language="JavaScript" type="text/javascript">
		$('.line').addClass("open");
		/*购买优惠星星*/
		$("#list .btn2").click(function(){
			var zimu = $(this).val();
			var zmarr = ['M','A','B','C','D','E','F'];
			var str = '<option value="">无推荐人</option>';
			                str += '<option value="xing">客服小粉推荐</option>';
                            str += '<option value="淡意的攸柔">客服小黄推荐</option>';
                            str += '<option value="lannyu">客服小麦推荐</option>';
                            str += '<option value="小云123">客服小芸推荐</option>';
                            str += '<option value="罗茜19920829">客服小雅推荐</option>';
                            str += '<option value="xieyun07302568">客服小丽推荐</option>';
                            str += '<option value="l287408595">充值客服推荐</option>';
                            str += '<option value="liuqingqing0313">客服小西推荐</option>';
                            str += '<option value="onlydas">客服小雨推荐</option>';
                            str += '<option value="冷月凝霜望天殇">客服包菜推荐</option>';
            
			$.dialog({
				id:'buy',
			    title: '购买信息',
			    fixed: true,
			    lock: true,
			    content: '<div id="mdData"><img style="padding:0;" src="/wanjia//static/images/buypoint/maidian.png"><p>您将购买 <b>'+zmarr[zimu]+'</b> 卡</p><br/><p>请选择推荐人：</p><br/><p><select id="spreader">'+ str +'</select></p></div>',
			    okValue: '确定',
			    cancelValue: '取消',
			    ok: function () { 
			    	
			    	$.ajax({
					   type: "POST",
					   url: "/home/User/BuyCard",
			   		   dataType:'json',
					   data: "action=3&type="+zimu+"&kefu="+$("#spreader").val(),
					   success: function(data){

					   		switch(data.msg){
					   			case 'nologin':
									window.location.href ="/home/index/showIndex";return;
					   			break;
					   			case 'nomoney':
					   				msg='余额不足，请充值';
					   			break;
					   			case 'ok':
					   				msg='购买成功';
					   			break;
					   			default:
					   				msg='请刷新页面后再试';
					   			break;

					   		}
							$.dialog({ title: '提示',content: msg,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
					   }
					});
			    },
			    cancel: function () { return true;}
			});
		})
var _delay=[];
	_delay.push(function(){
		$("#list li").each(function(i){
			var j = i+1;
			$('.k'+j).addClass("open");


		})

		$("#list .Homemade").click(function(){

			var title = $(this).attr('name');

			/*弹出内容*/
			if(title == 'saninter'){
				var cont = '新平台用户积分增长利器，早日成为万人敬仰的平台皇冠达人！<br/>购买后积分实效为24小时<br/>不与会员等级相累计！您确定购买吗？';
			}else if(title == 'qiinter'){
				var cont = '新平台用户积分增长利器，早日成为万人敬仰的平台皇冠达人！<br/>购买后积分实效为7天<br/>不与会员等级相累计！您确定购买吗？';
			}else if(title == 'task'){
				var cont = '<div id="mdData" style="width: 320px;"><p style="margin-bottom: 20px;">平台任务那么快就被别人抢走了，又慢了一步？使用预定任务次卡可以享有单次任务优先预定权，坐等满足条件的任务自己送上门，节省宝贵时间省去麻烦的拼抢任务！<p/><p>价格：<input type="text" id="spreader" value="1" size=1 maxlength=4 /><b>元/天</b><p/></div>';
			}else if(title == 'haoping'){
				var cont = '此卡仅限一月使用一次，购买后将清理您的一个中评，或者差评，让您的满意度提升！<br/>您确定购买吗？';
			}else if(title == 'tousu'){
				var cont = '购买后您的平台有效投诉将 -1<br/>（此卡一月只可以购买一次）<br/>您确定购买吗？';
			}else{
				$.dialog({ title: '提示',content: '请勿非法操作~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;
			}

			$.dialog({
				id:'buy',
			    title: '提示',
			    fixed: true,
			    lock: true,
			    content: cont,
			    okValue: '确定',
			    cancelValue: '取消',
			    ok: function () { 
			    	/*根据购卡类型进行封装验证*/
			    	if(title == "saninter" || title == "qiinter"){ data = 'action=2&title='+title;}
			    	if(title == "task"){ 
			    		var r = /^\+?[1-9][0-9]*$/; 
						if(r.test($("#spreader").val()) == false){ $.dialog({ title: '提示',content: '请输入正整数~',fixed: true,lock: true});return false;}
			    		data = 'action=3&title=task&num='+$("#spreader").val();
			    	}
			    	if(title == "haoping"){ data = 'action=4&title=haoping';}
			    	if(title == "tousu"){ data = 'action=5&title=tousu';}

			    	$.ajax({
					   type: "POST",
					   url: "/BuyPoint/Ajax",
					   data: data,
					   success: function(data){
					   		obj = jQuery.parseJSON(data);
							if(obj.status == 2){
					   			$.dialog({ 
					   				title: '提示',
					   				content: obj.info,
					   				fixed: true,
					   				lock: true,
					   				okValue: '确定',
					   				cancelValue: '取消', 
					   				ok: function () {
					   					window.location.href=__member__+"/#autoam";
					   				},
					   				cancel: function () { return true;} 
					   			});
					   		}else{
					   			$.dialog({ title: '提示',content: obj.info,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
					   		}
					   }
					});
			    },
			    cancel: function () { return true;}
			});
		})
	});
</script>
<?php include('index_footer.php'); ?>