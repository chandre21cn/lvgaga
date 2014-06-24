
define(['view/base/baseView','model/userIndex','cache','view/user/userSendPhoneView','cookie'],function(baseView,userIndex,cache,phone){
	var _model;
	var view = baseView.extend({
		model : {},
		events : {
		  "click .switch .imgico" 		: "yd",
		  "click #examine"				: "examine",
		  "click #actphone" 			: "actphone",
		  "click div" 					: "open",
		  "mouseover .content .switch"  : "prompt",
		  "mouseleave .content .switch" : "colseprompt",
		  "click .kefulmd"				: "kefuMaidian"
		},
		initialize : function(){
		  var self = this;
		  this.model = new userIndex;
		  this.model.bind('change',this.tpl,this);
		  this.model.bind('error',this.error,this);
		  this.model.fetch({success:function(model,data){
		  		//自动检测注册跳转的sid
		  		var url = location.href;  
		  		var zcdata = url.substring(url.indexOf("?")+1,url.length).split('=');

		  		if(zcdata[0] == 'sid'){
		  			zcdata[1] = zcdata[1].replace(/#/g,"");//防止尾巴出现#号
		  			if(zcdata[1] == _model.get('mdt')){
		  				cont = '<div id="regTitle"><span></span><h2> '+_model.get('username')+' 注册成功！</h2><div class="ms">您将收到一封系统邮件，通过手机短信认证还可以获得1麦点。</div><a href="'+__Index__+'/user/operate");>前往设置安全码</a><a href="'+__Index__+'/help/newPeople" target="_parent">现在就去了解平台</a></div>';
		  				$.dialog({title: '提示',content: cont,fixed: true,lock: true,padding:0});
		  			}
		  		}else if(zcdata[0] == 'sphone'){//自动弹出发送短信框
		  			zcdata[1] = zcdata[1].replace(/#/g,"");//防止尾巴出现#号
		  			if(zcdata[1] == 'open'){
		  				self.actphone();
		  			}
		  		}else{//提示防骗指南
		  			var fangpian_cookie = $.cookie('fangpian_cookie');
					if(fangpian_cookie == null){
						// $.dialog({
						// 	id:'fpzn',
						// 	title: false,
						// 	content: "<div style='position: relative;width:520px;height:110px;'><img width=520 height=162 src='/member/images/user/fangpian.png' style='position: absolute; top: -50px; left: 0px;'><p style='position: absolute;bottom: -32px;left: 20px;'><a style='float: left; color: rgb(58, 110, 165);margin-right:30px;' href='/bbs/t1247/'>查看防盗锦囊</a>亲，平台充值是没有活动的，更不会要求备注活动编码。</p></div>",
						// 	fixed: true,
						// 	lock: true,
						// 	padding: 0,
						// 	cancelValue: '关闭',
						// 	cancel: function () { return true;}
						// });
						$.dialog({
							id:'fpzn',
							title: "防骗提示",
							content: '<b style="color:red;">如果您的账号密码一致或过于简单，请立即修改！近期已发生个别盗号现象，亲请不要拿自己的真金白银开玩笑！</b>',
							fixed: true,
							lock: true,
							okValue: '立刻修改密码',
							ok: function(){
								window.location.href=__member__+'/#userData/pass';
							},
							cancelValue: '关闭',
							cancel: function () { return true;}
						});
						
						$.cookie('fangpian_cookie', '1', { expires: 1 });
					}
		  		}

		  		//单行滚动-我的动态
				var _wrap=$('.trends ul.line');
				var _interval=2000;
				var _moving;
				_wrap.hover(function(){
					clearInterval(_moving);
				},function(){
					_moving=setInterval(function(){
						var _field=_wrap.find('li:first');
						var _h=_field.height();
						_field.animate({marginTop:-_h+'px'},600,function(){
							_field.css('marginTop',0).appendTo(_wrap);
						})
					},_interval)
				}).trigger('mouseleave');
		  		
		  }});
		  _model = this.model;
		},
		
		yd : function(){
			var self = this;
			//异地开启验证
			if(self.model.get('loginVerify') == 0){
				i = 1;cont  = '异地登陆验证已开启~';
				self.model.set({loginVerify:i,action:'1'});
				self.model.save({},{success:function(model,data){
					$.dialog({title: '提示',content: cont,fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}})
				}});
			}else{
				i = 0;cont = '异地登陆验证已关闭~';
				if(i == 0){
					$.dialog({
						title: '提示',
						content: '您如果关闭异地登录，账户就可能存在账号资金被盗的风险，确定要关闭吗？',
						fixed: true,
						lock: true,
						okValue:'确定',
						ok: function () { 
							self.model.set({loginVerify:i,action:'1'});
							self.model.save({},{success:function(model,data){
								$.dialog({title: '提示',content: cont,fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}})
							}});
						},
						cancelValue: '取消',
						cancel: function () { 
							return true;
						}
					})
				}
			}

		},

		/* 小调查 */
		examine : function(){

			if(this.model.get('examine') != 0){
				$.dialog({title: '提示',content: '你已经完成了小调查！',fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}});
				return false;
			}

			cont = cache.get('public/examine');

			$.dialog({
				title: '大麦户小调查',
				content: cont,
				fixed: true,
				lock: true,
				okValue: '确定',
			    ok: function () {
			    	i = $("#xiaodc input[name='searcha']:checked").val();

			    	_model.set({examine:i,action:'2',maidian:_model.get('maidian')});
			    	_model.save({},{success:function(model,data){
			    		
			    		$.dialog({title: '提示',content: data.info,fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}});
			    		
			    	}});
			    }
			})
		},

		/* 激活手机 */
		actphone : function(){
			if(this.model.get('phoneVerify') != 0){
				$.dialog({title: '提示',content: '你已经完成了手机验证！',fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}});
				return false;
			}
			new phone();
		},

		/*客服领取麦点*/
		kefuMaidian : function(){
			this.model.set({action:'3'});
			this.model.save({},{success:function(model,data){
				$.dialog({title: '提示',content: data.info,fixed: true,lock: true,cancelValue: '确定',cancel: function () { return true;}})
			}});
		},

		prompt : function(e){
			$(e.currentTarget).children(".remone").html('<p><img src="/member/images/user/dsssss.png" /></p>');
		},
		colseprompt : function(e){
			$(e.currentTarget).children(".remone").empty();
		},

		tpl : function(){
			
			this.$el.html(this.template('index',this.model.toJSON()));
		}
		
	});

	return view;
});