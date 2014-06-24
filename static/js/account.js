function AccountInfo(){
}

define(['jquery'], function(){
　　　　function foo(){

			$.ajax({
				url:'/home/user/AccountInfo',
				dataType:'json',
				success:function(data){
					if(data.msg!='false'){
						$(".login-before").css('display','none');
						$(".login-after").css('display','inline');
						$("#m_top .login-after").css('display','inline');
						
						$(".content_name").html(data.msg.member_account);
						$(".cunkuan").html(data.msg.funder);
						$(".maidian").html(data.msg.md);
						$(".content_li3 .imgico").after('本次登录IP:'+data.msg.ip);
						$(".username").html(data.msg.member_account);
					}
				}
			})
　　　　}
　　　　return {
　　　　　　foo : foo
　　　　};
　　});