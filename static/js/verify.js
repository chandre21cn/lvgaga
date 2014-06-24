
//大麦户-规则验证封装

var _dm = function(){
	var global = {},
		config = {},
		func = {},
		error = [],
		allError = [];

	//配置
	config = {
		success : 'success',
		error :'error',
		alert : true
	};

	$('[vali]').live('blur',function(){
		global.valiRule($(this));

		if (error.length!=0){
			global.showError($(this));
			error = [];
		}
		
	});

	//表单提交验证
	global.submit = function(obj){
		$(obj).find('[vali]').each(function(){
			global.valiRule($(this));
			if (error.length!=0){
				global.showError($(this));
				allError = allError.concat(error);
				error = [];
			}
		});
		if (allError.length!=0){
			global.showAllError();
			allError = [];
			return false;
		}

		return true;
	}

	//正则验证规则
	global.rule = [
		{name : 'mobilephone',v : /^1(?:(?:3[0-9])|(?:5[0-35-9])|(?:4[0-35-9])|(?:8[0-35-9]))\d{8}$/,info : '请填写正确的手机号码'},
		{name : 'email',v : /^[a-z0-9][a-z0-9_]+@[a-z0-9]+(\.[a-z0-9]+){1,3}$/i,info : '请填写正确的邮箱地址'},
		{name : 'qq',v : /^\d{3,15}$/,info : '请填写正确的QQ号码'},
		{name : 'taobao',v : /^http:\/\/([0-9a-z'()-]+\.)+((taobao)|(tmall)|(alibaba)|(paipai))\.com\/*/i,info : '请填写正确的淘宝地址'}
	];

	global.valiRule = function(obj){
		var v = obj.attr('vali');
			val = obj.val(),
			rv = v.split(' ');

		for (var i in rv){

			var f = rv[i].split('=');
			if (f.length >=2){
				for (var _i in global.func){
					if (f[0] == global.func[_i].name){
						var result = global.func[_i].v(f[1],obj);
						if ( result !==true){
							error.push(result);
						}else{
							global.valiPass(obj);
						}
						break;
					}
				}
			}

			for (var i2 in global.rule){
				if (rv[i]==global.rule[i2].name && 
					global.rule[i2].v.test(val)){
					global.valiPass(obj);
					break ;
				}else if (rv[i]==global.rule[i2].name){
					error.push(global.rule[i2].info);
					break;
				}
			}
		}
	}

	global.valiPass = function(obj){
		obj.removeClass(config.error)
		if (!obj.hasClass(config.success)){
			obj.addClass(config.success);
		}
		var id = obj.attr('id');
		if (id!=''){
			$('#'+id+'-info').hide();
		}
	}

	global.showError = function(obj){
		obj.removeClass(config.success)
		if (!obj.hasClass(config.error)){
			obj.addClass(config.error);
		}
		var id = obj.attr('id');
		if (id!=''){
			$('#'+id+'-info').html(error.join(','));
			$('#'+id+'-info').show();
		}
	}

	global.showAllError = function(){
		var htmlError = '';
		if (config.alert){
			for (var i in allError){
				htmlError += (parseInt(i)+1)+'.'+allError[i]+'<br/>';
			}

			$.dialog({
				id : 'error',
				content:htmlError,
				title:'错误信息('+(parseInt(i)+1)+')'
			});
		}
	}

	/**********函数验证区************/

	func.ajax = function(v,obj){
		if (error.length==0){
			$.get(v,{},function(request){

			},'json');
		}
		return true;
	}

	func.minL = function(v,obj){
		if (obj.val().length < v){
			return obj.attr('field-name')+'长度不能小于'+v;
		}
		return true;
	}

	func.minM = function(v,obj){
		if (obj.val().length > v){
			return obj.attr('field-name')+'长度不能大于'+v;
		}
		return true;
	}

	func.nulls = function(v,obj){
		var s = obj.val(); 
		s = s.replace(/(^\s*)/g, ''); 
		s = s.replace(/(\s*$)/g, '');
		if (s==''){
			return obj.attr('field-name')+'不能为空';
		}
		return true;
	}

	func.pass = function(v,obj){
		if (obj.val() != $("#"+v).val()){
			return '二次密码输入不一致';
		}
		return true;
	}

	//注册函数验证
	global.func = [
		{name : 'ajax',v : func.ajax},
		{name : 'minM',v : func.minM},
		{name : 'minL',v : func.minL},
		{name : 'pass',v : func.pass}
	];
	
	return global;
}();