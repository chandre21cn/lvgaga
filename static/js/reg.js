
$(document).ready(function(){
	/*本页检测数据*/
	
	$("#username").focusout(function(){
		var u = $(this).val();
		if(u.length > 2){
			$.ajax({
			   type: "POST",
			   url: "/home/user/RegDetect",
			   data: "name=" + u,
			   success: function(data){
				   	obj = jQuery.parseJSON(data);
				   	if(obj.status == -3){
				   		$("#username-info").show().html("该用户名已存在");
				   		$("#username").css("border","1px solid #EE5F5B");
				   	}else{
				   		$("#username").css("border","1px solid #91ED6D");
				   	}
			   }
			});
		}
	});
	$("#email").focusout(function(){
		var e = $(this).val();
		var isemail  = /^[a-z0-9][a-z0-9_]+@[a-z0-9]+(\.[a-z0-9]+){1,3}$/;
		if (isemail.test($("#email").val())){
			$.ajax({
			   type: "POST",
			   url: "/home/user/RegEmail",
			   data: "email=" + e,
			   success: function(data){
				   	obj = jQuery.parseJSON(data);
				   	if(obj.status == -6){
				   		$("#email-info").show().html("该Email已经被注册");
				   		$("#email").css("border","1px solid #EE5F5B");
				   	}else if(obj.status == -4){
				   		$("#email-info").show().html("该Email格式有误");
				   		$("#email").css("border","1px solid #EE5F5B");
				   	}else{
				   		$("#email").css("border","1px solid #91ED6D");
				   	}
			   }
			});
		}else{
	   		$("#email-info").show().html("该Email格式有误");
	   		$("#email").css("border","1px solid #EE5F5B");
		}
	});
	/*推荐人*/
	$("#parent").focusout(function(){
		var u = $(this).val();
		if(u.length > 2){
			$.ajax({
			   type: "POST",
			   url: "/home/user/RegDetect",
			   data: "name=" + u,
			   success: function(data){
				   	obj = jQuery.parseJSON(data);
				   	if(obj.status != -3){
				   		$("#parent-info").show().html("可选,该推荐人不存在");
				   		$("#parent").val("");
				   	}else{
				   		$("#parent").css("border","1px solid #91ED6D");
				   		$("#parent-info").hide();
				   	}
			   }
			});
		}else{
			$("#parent-info").show().html("可选,推荐人长度不能小于3");
		}
	});

	/*文本框效果*/
	$("#myForm input").focusout(function(){
		$(this).animate({ marginLeft: "-5"}, 100 );
		$(this).animate({ marginLeft: "+5"}, 100 );
		$(this).animate({ marginLeft: "0"}, 100 );
	});
	$("#pass").focusout(function(){
		if(trim($("#pass").val()).length>6 && $("#pass").val()==$("#password").val()){
			$("#password-info").html('');
		}else{
			$("#password-info").html('密码有误，密码长度在六位以上');
		}
	});
	$("#phone").focusout(function(){
		var e = $(this).val();
		var isphone  = /^1(?:(?:3[0-9])|(?:5[0-35-9])|(?:4[0-35-9])|(?:8[0-35-9]))\d{8}$/;
		if (isphone.test(e)){
	   		$("#phone").css("border","1px solid #91ED6D");
	   		$("#phone-info").show().html("");
		}else{
	   		$("#phone-info").show().html("该手机号码格式有误");
	   		$("#phone").css("border","1px solid #EE5F5B");
		}
	
	});
	$("#qq").focusout(function(){
		var e = $(this).val();
		var isqq  = /^[1-9][0-9]{4,14}$/;
		if (isqq.test(e)){
	   		$("#qq").css("border","1px solid #91ED6D");
	   		$("#qq-info").show().html("");
		}else{
	   		$("#qq-info").show().html("该QQ号码格式有误");
	   		$("#qq").css("border","1px solid #EE5F5B");
		}
	
	});
	/*邮箱检测自动输入*/
	$("#myForm #email").keyup(function(){ 
		if($(this).val().indexOf('@') != "-1"){
			var ymname = ['sina.com','163.com','qq.com','126.com','gmail.com','sohu.com'];
			var str ="<h3>请选择邮箱类型</h3>";
			for(var i=0;i<ymname.length;i++){
				str += "<span>"+$(this).val().split("@")[0]+"@"+ymname[i]+"</span>";
			}
			$("#email-check").html(str).show();

		}else{
			$("#email-check").hide();
		}
	})
	$("#email-check span").live("click",function(){
		$("#myForm #email").val($(this).text()).removeClass("error").addClass("success");
		$("#email-info").html("");
		$(this).parent().empty().hide();
	})
	$("#email-check").mouseleave(function(){
		$("#email-check").hide();
	})

});



function resubmit(){
		$bool = true;
		var u = $("#username").val();
		if(u.length > 2){
			$.ajax({
			   type: "POST",
			   url: "/home/user/RegDetect",
			   data: "name=" + u,
			   success: function(data){
				   	obj = jQuery.parseJSON(data);
				   	if(obj.status == -3){
						$bool = false;
				   		$("#username-info").show().html("该用户名已存在");
				   		$("#username").css("border","1px solid #EE5F5B");
				   	}else{
				   		$("#username-info").show().html("");
				   		$("#username").css("border","1px solid #91ED6D");
				   	}
			   }
			});
		}else{
	   		$("#username-info").show().html("该用户名有误");
			$bool = false;
		}
		var e = $("#email").val();
		var isemail  = /^[a-z0-9][a-z0-9_]+@[a-z0-9]+(\.[a-z0-9]+){1,3}$/;
		if (isemail.test($("#email").val())){
			$.ajax({
			   type: "POST",
			   url: "/home/user/RegEmail",
			   data: "email=" + e,
			   success: function(data){
				   	obj = jQuery.parseJSON(data);
				   	if(obj.status == -6){
						$bool = false;
				   		$("#email-info").show().html("该Email已经被注册");
				   		$("#email").css("border","1px solid #EE5F5B");
				   	}else if(obj.status == -4){
						$bool = false;
				   		$("#email-info").show().html("该Email格式有误");
				   		$("#email").css("border","1px solid #EE5F5B");
				   	}else{
				   		$("#email").css("border","1px solid #91ED6D");
				   	}
			   }
			});
		}else{
			$bool = false;
	   		$("#email-info").show().html("该Email格式有误");
	   		$("#email").css("border","1px solid #EE5F5B");
		}

		var e = $("#phone").val();
		var isphone  = /^1(?:(?:3[0-9])|(?:5[0-35-9])|(?:4[0-35-9])|(?:8[0-35-9]))\d{8}$/;
		if (isphone.test(e)){
	   		$("#phone").css("border","1px solid #91ED6D");
	   		$("#phone-info").show().html("");
		}else{
			$bool = false;
	   		$("#phone-info").show().html("该手机号码格式有误");
	   		$("#phone").css("border","1px solid #EE5F5B");
		}
		if($("#pass").val().replace(' ','').length>6 && $("#pass").val()==$("#password").val()){
			$("#password-info").html('');
		}else{
			$bool = false;
			$("#password-info").html('密码有误，密码长度在六位以上');
		}
		var e = $("#qq").val();
		var isqq  = /^[1-9][0-9]{4,14}$/;
		if (isqq.test(e)){
	   		$("#qq").css("border","1px solid #91ED6D");
	   		$("#qq-info").show().html("");
		}else{
			$bool = false;
	   		$("#qq-info").show().html("该QQ号码格式有误");
	   		$("#qq").css("border","1px solid #EE5F5B");
		}
	return $bool;
}