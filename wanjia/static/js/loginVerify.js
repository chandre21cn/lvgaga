//获取输入框焦点
$("#lusername").focus();
//点击或按键提交
$("#login_btn").click(function(){
	vervlogin();
});
document.onkeydown = function(e){
    var ev = document.all ? window.event : e;
    if(ev.keyCode==13) {
        vervlogin();
    }
}
//登录
var vervlogin = function(){
	var username = $("#lusername").val();
	var password = $("#lpassword").val();
	var question = $("#loginquestionid").val();
	var trouble  = $("#trouble").val();
	var magicmark = '';
	//基本验证
	if(username.length < 2){
		$("#lusername").css('border','1px solid #EE5F5B');
		$("#lusername").focus();
		$("#miaoname").html('用户名不能小于2个字符').css("color","red");return false;
	}else{
		$("#lusername").css('border','1px solid #ddd');
		$("#miaoname").html('');
	}

	if(password.length < 6){ 
		$("#lpassword").css('border','1px solid #EE5F5B');
		$("#lpassword").focus();
		$("#miaopwd").html('密码不能少于6个字符').css("color","red");return false;
	}else{
		$("#lpassword").css('border','1px solid #ddd');
		$("#miaopwd").html('');
	}
	//提交数据
	$.dialog({ id:"ajaxStart",title: '正在登录中..',fixed: true,lock: true});
	var submitData = function(cache){
		$.ajax({
		   type: "POST",
		   url: "/user/userLogin",
		   data: "LoginForm[username]=" + username + "&LoginForm[password]="+ password + "&LoginForm[questionIndex]="+ question + "&LoginForm[answer]="+ trouble+"&magicMark="+magicmark,
		   success: function(data){
		   		if($.dialog.get('ajaxStart')){$.dialog.get('ajaxStart').close();};
		   		obj = jQuery.parseJSON(data);
		   		if (obj.magicMark){
		   			cache.set('magicMark',obj.magicMark);
		   		}
		   		if(obj.ucsynlogin){
		   			$("body").append(obj.ucsynlogin);
		   		}
		   		/*安全提问存在*/
		   		if(obj.trouble == 1){
		   			$("#userentry").hide();
		   			$("#interlocution").show();
		   		}
		   		/*安全提问错误阶段返回*/
		   		if(obj.status == 0){
		   			$("#userentry").show();
		   			$("#interlocution").hide();
		   			$("#miaoname").html(obj.info).css("color","red");
		   		}
		   		/*安全错误*/
		   		if(obj.status == -1){
		   			$("#userentry").hide();
		   			$("#interlocution").show();
		   			$("#usertourError").html(obj.info);
		   		}
		   		/*异地登录*/
		   		if(obj.status == 2){
		   			var contDis = '<div id="distanceLogin"><div class="distance_wight"><i></i>您的账号IP存在异地登陆 </div><div class="distance_b"><p class="distance_ba">发送验证码：</p><div class="distance_types"><p id="distance_selects" class="distance_on">'+obj.phone+'</p><p id="contSms"><input type="button" class="sendpm" name="sendpm" value="1"></p></div><div class="distance_btypes" style="display: none;"><a name="'+obj.phone+'" type="1" href="javascript:;">手机接收 '+obj.phone+'</a><a name="'+obj.email+'" type="2" href="javascript:;">邮箱接收 '+obj.email+'</a></div></div><div class="distance_c"><p class="distance_ba">收到的验证码：</p><div class="distance_code"><input type="text" class="distance_vcode" name="code" maxlength="8"><span class="distance_repost"> </span><p class="distance_sub"><input type="button" class="distance_button"><input type="button" class="distance_etel"></p></div></div><p class="distance_t">如果您经常更换IP，想取消限制，可以在会员中心点击关闭异地登陆限制按钮</p></div><div id="distanceEmail"><span class="sende_wight"><i class="icon"></i>使用注册邮箱发送申请</span><div class="sende_bc_d"><h1>请使用您的注册邮箱（'+obj.email+'）向大麦户邮箱damaihu@vip.163.com发送一封更改手机号码的申请，格式如下：</h1><h2>平台账号：<br>原手机号码：<br>新手机号码：</h2><h2></h2><h3>发送完毕后，请联系客服及时处理</h3><p class="sende_bc_sub"><input type="button" class="sende_bc_copy"><input type="button" class="sende_black"></p></div></div>';

		   			$.dialog({ id:'contDis',title: '异地登录验证',content: contDis,fixed: true,lock: true});
		   			$(".d-close").remove();//删除关闭节点
		   			//下拉样式
					$("#distance_selects").click(function(){
						if($(this).attr('class') == 'distance_on'){
							$(".distance_btypes").show();
							$(this).removeClass('distance_on').addClass('distance_off');
						}else{
							$(".distance_btypes").hide();
							$(this).removeClass('distance_off').addClass('distance_on');
						}
					})
					//选择发送目标
					$(".distance_btypes a").click(function(){
						$("#distance_selects").html($(this).attr('name'));
						$("#distanceLogin input[name='sendpm']").val($(this).attr('type'));
						$(this).parent().hide();
						$("#distance_selects").removeClass('distance_off').addClass('distance_on');
					})
					/*点击发送*/
					$("#contSms .sendpm").click(function(){
						var key = $(this).val();
						$.dialog({ id:"ajaxStart",title: '正在登录中..',fixed: true,lock: true});
						$.ajax({
						   type: "POST",
						   url: "/user/sendSms",
						   data: "type=" +key+"&username="+username,
						   success: function(data){
						   		$.dialog.get('ajaxStart').close();
						   		obj = jQuery.parseJSON(data);
						   		if(obj.time){
						   			$.dialog({ id:'timecode',title: '提示',content:obj.info,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
							   		var SysSecond = obj.time;
							     	var InterValObj = setInterval(SetRemainTime, 1000);
							     	function SetRemainTime() { 
									  	if(SysSecond > 0){ 
											SysSecond = SysSecond - 1; 
											var second = Math.floor(SysSecond);// 计算秒 
											$('#contSms').html('<span class="repost">'+second+'秒后可重新发送</a>'); 
										}else{
											clearInterval(InterValObj);
											$('#contSms').html('<input type="button" class="sendpm" name="sendpm" value="'+key+'">');
										} 
									} 
								}else{
									$.dialog({ id:'timecode',title: '提示',content:obj.info,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
								}
						   }
						});  
					});
					/*点击验证*/
					$(".distance_button").click(function(){
						var code = $(".distance_vcode").val();
						if(code == ""){
							$.dialog({ id:'code',title: '提示',content:'验证码不能为空~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;
						}
						$.dialog({ id:"ajaxStart",title: '正在登录中..',fixed: true,lock: true});
						$.ajax({
						    type: "POST",
						    url: "/user/verifyCode",
						    data: "code=" +code+"&username="+username,
						    success: function(data){
						    	$.dialog.get('ajaxStart').close();
						    	obj = jQuery.parseJSON(data);
						    	//关闭窗口回调自己
						    	if(obj.status == 1){
						    		$.dialog.get('contDis').close();
									vervlogin();
						    	}else{
						    		$.dialog({ id:'code',title: '提示',content:obj.info,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
						    	}
						   	}
						});
					})

					//修改手机号码，手动发送
					$(".distance_etel").click(function(){
						$("#distanceLogin").hide();
						$("#distanceEmail").show();
					})
					$(".sende_black").click(function(){
						$("#distanceLogin").show();
						$("#distanceEmail").hide();
					})
					$(".sende_bc_copy").click(function(){
					   $.dialog({ title: '选中Ctrl+C复制',content:$("#copy-botton").html(),fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
					})
		   		}
		   		/*禁用*/
		   		if(obj.status == 5){
		   			$.dialog({ title: '登录限制',content: obj.info,fixed: true,lock: true});
		   		}

		   		/*成功跳转页面*/
		   		if(obj.status == 1){
		   			var url = document.referrer.split('?');
					if (url[0].indexOf("damaihu.com.cn") < 0 || url[0].indexOf("User/logout") > 0 || url[0].indexOf("bbs.damaihu") > 0 ){
						url = __member__;
					}
					setTimeout(function(){window.location.href = url},1000) 
					//window.location.href = url ;
		   		}
		   }
		});
	}

	require(['cache'],function(cache){
		if (cache.get('magicMark',true))
			magicmark = cache.get('magicMark',true);
		submitData(cache);
	});
	
}