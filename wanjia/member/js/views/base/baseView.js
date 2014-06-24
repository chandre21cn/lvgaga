
define(['backbone','cache'],function(Backbone,cache){

	var baseView = Backbone.View.extend({
	  el : $('#main #_right'),
	  template:function(template,data){
	  	data.__SPATH__ = '';
	  	var html = _.template(cache.get(template),data);
	  	$("#m_logo .gg").attr('href',__Index__+'/info/shuake').find('img').attr('src','/static/images/public/maidian.jpg');
	  	return html;
	  },
	  error : function(model,xhr,option){
			var reply = eval('(' + xhr.responseText + ')');

			if(reply.errorCode == 524){
				require(['libs/loginVerify'],function(Verify){
					cont = cache.get('public/login');
					$.dialog({title: "快速登录[您的登录信息已失效]",content: cont,fixed: true,lock: true});
					$(".d-close").remove();
					Verify.verv();
				});
				
			}else{
				if($.dialog.get('ajaxStart')){$.dialog.get('ajaxStart').close();}
				$.dialog({title: '['+reply.errorCode+'] 提示',content: reply.info,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
			}
		}
	});
	return baseView;
});