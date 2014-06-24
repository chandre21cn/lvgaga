
define(['view/base/baseView','model/sendPhoneIndex'],function(baseView,sendPhoneIndex){
	var _model;
	var view = baseView.extend({
		el : null,
		id : 'sphone',
		tagName:'div',
		model : {},
		events : {
		  "click #get_vcode" : "sendSms",
		  "click #btn_submit" : "test",
		  "click .sountcode" : "sountcode"
		},
		initialize : function(){
			var self = this;
			this.model = new sendPhoneIndex;
			this.model.bind('error',this.error,this);
			this.model.fetch({success:function(data){
				self.tpl(data.changed);
			}});
		 	_model = this.model;
		},
  
		tpl : function(data){
			
			$(this.el).html(this.template('public/phone',{}));
			$.dialog({title: '认证 - 激活手机',content: this.el,fixed: true,lock: true});
			$('#sphone #sendPhone').val(data.phone);
			var SysSecond = data.lastTime; 
	  		var tim = setInterval(function(){
	  			if(SysSecond > 0){ 
					SysSecond = SysSecond - 1; 
					var second = Math.floor(SysSecond);// 计算秒 
					$(".getvcode").html('<span id="SendTimes">'+SysSecond+'</span>秒后可再次发送'); 
				}else{
					clearInterval(tim);
					$(".getvcode").html('<input id="get_vcode" type="button">');
				} 
	  		}, 1000);

		},
		sendSms:function(){

			var self = this,phone = $("#sendPhone");
			if(/^1(?:(?:3[0-9])|(?:5[0-35-9])|(?:4[0-35-9])|(?:8[0-35-9]))\d{8}$/.test(phone.val()) == false){
				phone.css('border','1px solid red');
				return false;
			}else{
				phone.css('border','1px solid #ddd');
			}

			$.dialog({id:"ajaxStart",title: '正在处理中..',fixed: true});

			_model.id = 1;
			_model.save({code:'sendPhone',phone:phone.val()},{success:function(model,data){

					$.dialog.get('ajaxStart').close();
					$.dialog({title: '提示',content: data.info,fixed: true,lock: true});

			    	var SysSecond = data.lastTime; 
			    	
			  		var tim = setInterval(function(){
			  			if(SysSecond > 0){ 
							SysSecond = SysSecond - 1; 
							var second = Math.floor(SysSecond);// 计算秒 
							$(".getvcode").html('<span id="SendTimes">'+SysSecond+'</span>秒后可再次发送'); 
						}else{
							clearInterval(tim);
							$(".getvcode").html('<input id="get_vcode" type="button">');
						} 
			  		}, 1000);
			  		//获取手机验证实时状态
			  		var asd = setInterval(function(){
			  			_model.id = 1;
						_model.save({code:'phoneajax'},{success:function(model,data){
							if(data.phoneState == 1){
								clearInterval(asd);
								location.reload();
							}
						}});
			  		}, 3000);
			}});
		},
		sountcode : function(){
			var self = this,phone = $("#sendPhone");
			if(/^1(?:(?:3[0-9])|(?:5[0-35-9])|(?:4[0-35-9])|(?:8[0-35-9]))\d{8}$/.test(phone.val()) == false){
				phone.css('border','1px solid red');
				return false;
			}else{
				phone.css('border','1px solid #ddd');
			}
			
			$.dialog({
				title: '语音验证码',
				content: '您将收到语音电话，请根据语音提示输入验证码！',
				fixed: true,
				lock: true,
				okValue:'确定',
				cancelValue:'取消',
				ok : function(){
					$.dialog({id:"ajaxStart",title: '正在拨号中..',fixed: true});
					_model.id = 1;
					_model.save({code:'sendSound',phone:phone.val()},{success:function(model,data){

							$.dialog.get('ajaxStart').close();
							$.dialog({title: '提示',content: data.info,fixed: true,lock: true});

					}});
				},
				cancel:function(){ return true; }
			});
		},
		test: function(){
			var sms = $("#getCode");
			if(sms.val() == ""){
				sms.css('border','1px solid red');
				return false;
			}else{
				sms.css('border','1px solid #ddd');
			}
			$.dialog({id:"ajaxStart",title: '正在处理中..',fixed: true});

			_model.id = 1;
			_model.save({code:'verifyCode',sms:sms.val()},{success:function(model,data){

					$.dialog.get('ajaxStart').close();
					$.dialog({ 
						title: '提示',
						content: data.info, 
						fixed: true,
						lock: true,
						okValue: '确定',
					    cancelValue: '取消',
					    ok: function () { 
					    	if(document.referrer == ""){
					    		window.location.href=__member__;
					    	}else{
					    		 history.go(-1);
					    	}
					    },
					    cancel: function () { window.location.href=__member__}
					});
			}});
		}
		
	});

	return view;
});