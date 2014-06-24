
var __Index__ = 'http://www.damai.com';
require.config({
	baseUrl : '/static/js',
	paths : {
		'jquery' 		: __Index__+'/static/js/jquery-1.7.2.min',
		'loginVerify' 	: __Index__+'/static/js/loginVerify',
	}, 
});
require(['jquery','loginVerify'],function(){
	try{
		if (typeof _delay != 'undefined'){
			for (var i in _delay){
				_delay[i]();
			}
		}
	}catch(e){;}
});
