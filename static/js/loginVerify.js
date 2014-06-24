//获取输入框焦点

var ref = document.referrer==''?'/home/user/MemberIndex':document.referrer;
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
	//$.dialog({ id:"ajaxStart",title: '正在登录中..',fixed: true,lock: true});
		$.ajax({
		   type: "POST",
		   dataType:'json',
		   url: "/home/user/Login",
		   data: "LoginForm[username]=" + username + "&LoginForm[password]="+ password ,
		   success: function(data){
			   switch(data.msg){
			   	case 'fail':alert('帐号或者密码有误');break;
			   	case 'success':window.location.href=ref;break;
			   }
		   }
		});
	
}