<?php include"member_body.php";?>

<link rel="stylesheet" type="text/css" href="/wanjia/rotate/main.css" />
<style type="text/css">
.demo{width:417px; height:417px; position:relative; margin:50px auto}
#disk{width:417px; height:417px; background:url(/wanjia/rotate/disk.jpg) no-repeat}
#start{width:163px; height:320px; position:absolute; top:46px; left:130px;}
#start img{cursor:pointer}
</style>
<script type="text/javascript" src="/wanjia/rotate/jQueryRotate.2.2.js"></script>
<script type="text/javascript" src="/wanjia/rotate/jquery.easing.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#startbtn").rotate({
		bind:{
			click:function(){/**
				var a = Math.floor(Math.random() * 360);
				 $(this).rotate({
					 	duration:3000,
					 	angle: 0,
            			animateTo:1440+a,
						easing: $.easing.easeOutSine,
						callback: function(){
							alert('中奖了！');
						}
				 });**/

		        lottery();
			}
		}
	});


	function lottery(){
	    $.ajax({
	        type: 'POST',
	        url: '/home/User/lottery',
	        dataType: 'json',
	        cache: false,
	        error: function(){
	            alert('出错了！');
	            return false;
	        },
	        success:function(json){
	            $("#startbtn").unbind('click').css("cursor","default");
	            var a = json.angle; //角度
	            var p = json.prize; //奖项
	            $("#startbtn").rotate({
	                duration:3000, //转动时间
	                angle: 0,
	                animateTo:1800+a, //转动角度
	                easing: $.easing.easeOutSine,
	                callback: function(){
	                    var con = confirm('恭喜你，中得'+p+'\n还要再来一次吗？');
	                    if(con){
	                        lottery();
	                    }else{
	                        return false;
	                    }
	                }
	            });
	        }
	    });
	}
});
</script>
<div id="_right"><!-- center_top -->


	<div id="main"><div class="msg"></div>
	   <div class="demo">
	        <div id="disk"></div>
	        <div id="start"><img src="/wanjia/rotate/start.png" id="startbtn"></div>
	   </div>
	   <div class="ad_demo"><script src="/js/ad_js/ad_demo.js" type="text/javascript"></script></div><br/>
	</div>

</div>
	</div>
<?php include('index_footer.php');?>