

require.config({
	baseUrl : '/member/js',
	paths : {
		'router' : '/member/js/routers',
		'view' : '/member/js/views',
		'collection' : '/member/js/collections',
		'model' : '/member/js/models',
		'backbone' : '/member/js/libs/backbone',
		'underscore' : '/member/js/libs/underscore',
		'jquery' : __Index__+'/static/js/jquery-1.7.2.min',
		'json' : '/member/js/libs/json2',
		'cache' : '/member/js/libs/cache',
		'artDialog' : __Index__+'/static/js/artDialog',
		'wdate' : __Index__+'/static/js/My97DatePicker/WdatePicker',
		'fileUpload' : __Index__+'/static/js/ajaxfileupload',
		'jForm' : __Index__+'/static/js/jquery.form',
		'clipboard' : __Index__+'/static/js/ZeroClipboard',
		'ueconf' : __Index__+'/static/js/ueditor/ueditor.config',
		'ue' : __Index__+'/static/js/ueditor/ueditor.all.min',
		'cookie' : __Index__+"/static/js/jquery.cookie",
		'header' : __Index__+'/static/js/header'
	}, 
	shim: {
		'underscore':{
			exports: '_'
		},
		'backbone': {
			deps: ['underscore', 'jquery','json'],
			exports: 'Backbone'
		},
		'json':{
			exports: 'JSON'
		},
		'artDialog':{
			deps:['jquery']
		},
		'clipboard' : {
			exports: 'ZeroClipboard'
		},
		'ue':{
			exports:'UE'
		},
		'header': {
			deps : ['jquery']
		}
	}
});

require(['jquery','artDialog','header']);

require(['router/userRouter'],function(user){
	user.init();
});

//扩展时间类
Date.prototype.format = function(format){
	var o = {
		"M+" : this.getMonth()+1, //month 
		"d+" : this.getDate(), //day 
		"h+" : this.getHours(), //hour 
		"m+" : this.getMinutes(), //minute 
		"s+" : this.getSeconds(), //second 
		"q+" : Math.floor((this.getMonth()+3)/3), //quarter 
		"S" : this.getMilliseconds() //millisecond 
		} 

	if(/(y+)/.test(format)) { 
		format = format.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); 
	} 

	for(var k in o) { 
		if(new RegExp("("+ k +")").test(format)) { 
			format = format.replace(RegExp.$1, RegExp.$1.length==1 ? o[k] : ("00"+ o[k]).substr((""+ o[k]).length)); 
		} 
	} 
	return format; 
}