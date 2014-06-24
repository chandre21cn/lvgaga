var __Index__ = 'http://www.damai.com';
require.config({
	baseUrl : '/static/js',
	paths : {
		'jquery' 		: __Index__+'/static/js/jquery-1.7.2.min',
		'loginVerify' 	: __Index__+'/static/js/loginVerify',
		'reg' 	: __Index__+'/static/js/reg',
	}, 
});
require(['jquery','loginVerify','reg'],function(){
	try{
		if (typeof _delay != 'undefined'){
			for (var i in _delay){
				_delay[i]();
			}
		}
	}catch(e){;}
});
