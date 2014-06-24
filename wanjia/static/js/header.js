
	/*企业QQ*/
	var	webqq = jQuery("#footer .chengse a").text(),
		webnoticeurl = "",
		webnoticetit = "",
		quick_qq = '<a target="_blank" href="'+jQuery("#footer .chengse a").attr('href')+'"><img border="0" style="vertical-align: middle;" src="http://pub.idqqimg.com/wpa/images/group.png" alt="大麦户刷钻平台23群" title="大麦户刷钻平台23群"></a>';

		jQuery("#service_qq").mouseleave(function(){
				jQuery("#service_qq").hide();
		});
		jQuery(".qq_help").mouseover(function(){
			var qqArr=["多工号企业QQ:800081529:17"];
			var qqArr2=["木子:188239037:19","小图:188239036:18","小潘:641032707:14","小徐:2630603763:14"];　
			var qqArr3=["小刘:188239035:14","小叮:188239034:18","番番:1878727110:20","小小:1936028159:19"];　
			var html="";　
			qqArr.sort(function(){return Math.random()>0.5?-1:1});qqArr2.sort(function(){return Math.random()>0.5?-1:1});
			qqArr3.sort(function(){return Math.random()>0.5?-1:1});if(!webqq){webqq='140904771'}
			html+="<p class=\"up\"><span class='kf2gre'>值班时间：</span><span>　</span><span>9:00 - 12:00 ， 13:30 - 17:30 ， 19:00 - 21:00</span> (周日无晚班)</p>";
			html+="<ul>";html+="<li>";html+="<span class='kf2gre'>新手帮助：</span>";
			html+="<div>";
			html+="<img src='http://wpa.qq.com/pa?p=1:"+qqArr[0].split(':')[1]+":17' border='0'/><a class='kf2gre' href='tencent://message/?uin="+qqArr[0].split(':')[1]+"'>"+qqArr[0].split(':')[0]+"</a>";
			html+="</div>";
			html+="<li>";
			html+="<span class='kf2gre'>充值提现：</span>";
			html+="<div>";
			html+="<img src='http://wpa.qq.com/pa?p=1:188239038:17' border='0'/><a class='kf2gre' href='tencent://message/?uin=188239038'>充值帮助</a>";
			html+="</div>";
			html+="</li>";
			html+="<div class=\"cle\">&nbsp;</div>";
			html+="</ul>";
			html+="<p class=\"down\" style=\"height:30px;line-height:20px;padding-top: 5px;\"><strong class='kf2gre'>交流群：</strong><b>"+webqq+" </b>"+quick_qq+"<span style='margin-left:10px;'>(注:客服不会要求您操作任务、充值，谨防受骗)</span></p>";
			jQuery("#service_qq").html(html).show();
		});
	/*顶部下拉*/
	jQuery(".menu-item .menu-hd").hover(function(){
		jQuery(this).next('.menu-0').show();
		jQuery(this).children('b').css({ borderColor:'#666666 white white',transform:'rotate(180deg',transformOrigin:'50% 30% 0px'});
		jQuery(this).parents(".menu-item").css({ background:'rgb(255, 255, 255)',border:'1px solid #a6d8f8'})
	});
	jQuery(".menu-item .menud").mouseleave(function(){
		jQuery(this).children('.menu-0').hide();
		jQuery(this).children('.menu-hd').children('b').css({ borderColor:'#666666 #EFF6FE #EFF6FE',transform:'none',transformOrigin:'none'});
		jQuery(this).parent(".menu-item").css({ background:'none',border:'1px solid #EFF6FE'})
	}); 
	
	//qq
	jQuery("#toLogin").click(function(){
		window.open(__Index__+"/user/qqLogin");
	});
	
	/*客服QQ悬浮*/
	jQuery("#kuzhan").mouseover(function(){
		jQuery("#kuzhan .services").show();
	});
	jQuery("#kuzhan").mouseout(function(){
		jQuery("#kuzhan .services").hide();
	});

	
	/*获取滚动条滚动驱使返回顶部出现*/
	jQuery(window).scroll( function() {
		if(jQuery(document).scrollTop() > 0){
			jQuery("#m_top #kuzhan").height(152).children(".rtop").show();
		}else{
			jQuery("#m_top #kuzhan").height(130).children(".rtop").hide();
		}
	});
	jQuery("#m_top #kuzhan .rtop").click(function(){
		jQuery("html, body").animate({ scrollTop: 0 }, 120);
	});
	
	/*判定是否是服务中心--执行底部面板*/
	if(jQuery("#p-header").attr("action-index") == "fuwu"){
		var hideFlag = true;
		jQuery(window).scroll(function(){
		    if(hideFlag) {
		        (jQuery(this).scrollTop() > 10) ? jQuery("#bottomBar").fadeIn() : jQuery("#bottomBar").fadeOut();
		    }
		});
		jQuery("#closeBottomBar").click(function(){
		     hideFlag = false;
		    jQuery("#bottomBar").fadeOut();
		})
	}



	/*导航->收藏购买*/
	jQuery(".n-tuoguan").mouseover(function(){
		jQuery(".n-tuoguan ul").show();
	})
	jQuery(".n-tuoguan").mouseout(function(){
		jQuery(".n-tuoguan ul").hide();
	})
	
	jQuery(".n-wk").mouseover(function(){
		jQuery(".n-wk ul").show();
	})
	jQuery(".n-wk").mouseout(function(){
		jQuery(".n-wk ul").hide();
	})
	
	jQuery(".n-fuwu").mouseover(function(){
		jQuery(".n-fuwu ul").show();
	})
	jQuery(".n-fuwu").mouseout(function(){
		jQuery(".n-fuwu ul").hide();
	})
	
/*
	//异步获取用户信息
	var getUserInfo = function(){
		jQuery.ajax({
			type : 'GET',
			dataType : 'jsonp',
			url : __Index__+'/getUserInfo',
			success : function(info){
				if (info.status==0){
					jQuery('.head-loading').remove();
				}else{
					jQuery('#m_top .username').html(info.username).attr({href:__Index__+'/info?username='+info.username});
					if (!info.exp_ico)
						jQuery('#m_top .exp').remove();
					else
						jQuery('#m_top .exp').attr({src:info.exp_ico,title:'经验：'+info.exp});
					jQuery('#m_top .money').html(info.money);
					jQuery('#m_top .maidian').html(info.maidian);
					jQuery('#m_top .message').html(info.message);

					jQuery('.head-loading').remove();
					jQuery('.login-before').remove();
					jQuery('.login-after').show();

					//判断是否是首页
					if(jQuery('#d_banner').attr('action-index') == 'home'){
						//首页底部信息
						jQuery(".i_bottom_bg,.i_bottom").remove();
						//数据展示
						jQuery('#d_banner .ilogData').show();
						jQuery('#d_banner .login').hide();
						jQuery('#d_banner .ilogData #goone li:eq(1) a').html(info.username).attr('href',__Index__+'/info?username='+info.username);
						jQuery('#d_banner .ilogData #goone li:eq(2) a').html(info.money);
						jQuery('#d_banner .ilogData #goone li:eq(3) a').html(info.maidian);
						jQuery('#d_banner .ilogData #goone li:eq(4) a').html(info.exp);
						jQuery('#d_banner .ilogData #goone li:eq(5) a').html(info.total);
						jQuery('#d_banner .ilogData #goone .touimg a img').attr('src',info.avatar);
					}
				}
			},
			error : function(xhr){
				var parse = eval('('+xhr.responseText+')');
				jQuery('.head-loading').remove();
			}
		});
	}
	
	getUserInfo();

	return {getUserInfo : getUserInfo};
*/