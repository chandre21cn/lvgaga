<?php include('index_header.php');?>
<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/main.css">
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/dialog/twitter.css">
<style>
#wrap { margin: 0 auto;position: relative;text-align: center;width: 100%;margin-bottom: -15px;float: left;}
.g-layout, .xf-layout { width: 960px;margin-left: auto;margin-right: auto;}
.amb{ margin:15px auto 10px;}
.fullbox1 {}
.fullbox1-hd { overflow: hidden; height: 38px; border: 1px solid #e2e2e2; border-bottom: 3px solid #3dc054; line-height: 38px;}
.fullbox1-hd-hgroup { position: relative; float: left; height: 100%; padding: 0 20px; background: #3dc054; color: #fff;}
.fullbox1-hd-title { font: 16px/38px Arial,微软雅黑; color: #fff;}
.fullbox1-hd-arr { display: block; overflow: hidden; position: absolute; right: -30px; top: 0; width: 0; height: 0; border-top: 38px dashed transparent; border-left: 30px solid #3dc054; border-right: 0; border-bottom: 0;}
.fullbox1-bd { border: 1px solid #e2e2e2;}
.fullbox1-bd:before,.fullbox1-bd:after { display: table; clear: both; content: '';}
.fullbox2 { padding: 9px 14px; border: 1px solid #e2e2e2;}
.fullbox2-hd { zoom: 1; border-bottom: 2px solid #ccefce;}
.fullbox2-hd:after { display: table; clear: both; content: '';}
.fullbox2-hd-title { position: relative; float: left; margin-bottom: -2px; border-bottom: 2px solid #00af0c; font: 18px/1.5 Arial,微软雅黑; color: #00af0c;}
.quan { float: left;display: inline-block; *display: inline; *zoom: 1; position: relative; width: 235px; height: 90px; border: 3px solid #b7e1ef; vertical-align: top; text-align: center; text-decoration: none; cursor: pointer;}
.quan .quan-s1 { overflow: hidden; position: absolute; left: 0; top: 0; width: 110px; height: 100%; background: url(/static/images/fuwu/youhui/quan-s.png) no-repeat right top;}
.quan .quan-s2 { overflow: hidden; position: absolute; right: 0; top: 0; width: 125px; height: 100%; background-color: #eaf9ff;}
.quan .quan-value { font: 35px/90px Arial; color: #ff4444;}
.quan .quan-sym { margin-left: 5px; font: 16px/90px 微软雅黑; text-decoration: none; color: #4c4c4c;}
.quan .quan-pri { display: block; padding: 15px 0 3px; font: 18px/22px Arial,微软雅黑; color: #ff0000;}
.quan .quan-btn { display: inline-block; *display: inline; *zoom: 1; overflow: hidden; width: 90px; height: 30px; background: url(/wanjia/static/images/fuwu/youhui/quan-btn.png) no-repeat; line-height: 999px; vertical-align: top;}
.quan .quan-cut { display: none; overflow: hidden; z-index: 9; left: 100px; right: auto; top: auto; bottom: -9px; width: 16px; height: 16px; background: url(/static/images/fuwu/youhui/quan-cut.png) no-repeat;}
.quan:hover { border-color: #f8ded5; text-decoration: none;}
.quan:hover .quan-s2 { background-color: #fbf2ef;}
.quan:hover .quan-cut { display: block; position: absolute; z-index: 999}
.quan-list { font-size: 0;}
.quan-list .quan { margin: 0 25px 16px 0;}
.entry-lingquan-tit { overflow: hidden; width: 100%; margin-bottom: 15px; font: 700 16px/1.5 Arial,微软雅黑; white-space: nowrap; text-overflow: ellipsis; color:#000;}
.entry-lingquan-tit a { color: #000; text-decoration: none; cursor: pointer;}
.entry-lingquan-tit a:hover { color: #3282c1;}
.entry-lingquan-desc { margin-bottom: 20px; padding-left: 5px; color: #888;text-align: left;}
.entry-lingquan-desc p{ height: 30px;}
.entry-lingquan-act { padding-left: 5px;}
.list-lingquan { padding: 30px 0;}
.list-lingquan .lingquan-row { overflow: hidden; zoom: 1; margin-left: 25px; margin-right: 25px; margin-bottom: 30px; padding: 0 355px 30px 0; border-bottom: 1px dotted #ddd;}
.lingquan-row .entry-lingquan { float: left; width: 100%;}
.lingquan-row .lingquan-row-sub { display: inline; overflow: hidden; position: relative; left: 345px; float: left; width: 310px; height: 310px; margin-left: -310px; background: #f5f5f5; text-align: center; line-height: 310px; font-size: 0;}
.lingquan-row .lingquan-row-sub img { vertical-align: middle;}
.lingquan-row .lingquan-row-sub b { display: inline-block;}
.lingquan-row .lingquan-row-sub a { margin: 50px;float: left;}
.my-quan-list { padding: 20px 0; font-family: Arial,微软雅黑;}
.my-quan-list table { table-layout: fixed; width: 100%;}
.my-quan-list th { height: 40px; background: #f2f2f2; text-align: center;}
.my-quan-list td { padding: 15px 0; text-align: center; border-bottom: 1px dotted #ddd;}
</style>
<div id="wrap">
	<div class="g-layout amb">
    	<a href="#"><img src="/wanjia/static/images/fuwu/youhui/banner-lingquan.jpg"></a>
	</div>
	<div class="g-layout amb">
		<div class="fullbox1">
		    <div class="fullbox1-hd">
	            <div class="fullbox1-hd-hgroup">
	                <h2 class="fullbox1-hd-title">什么值得领</h2>
	                <b class="fullbox1-hd-arr"></b>
	            </div>
	        </div>
		    <div class="fullbox1-bd">
		        <div class="list-lingquan">
		            <div class="lingquan-list">
		                <div class="lingquan-row">
		                    <div class="entry-lingquan">
		                        <h3 class="entry-lingquan-tit"><a href="http://fuwu.damaihu.com.cn/fuwu/tuoguan" target="_blank" title="【网店托管】用卷最高可抵扣1500元，省钱才是王道，数量有限，领完即止。">【网店托管】用卷最高可抵扣1500元，省钱才是王道，数量有限，领完即止。</a></h3>
	                            <div class="entry-lingquan-desc"><br>
	                            	<p>此卷可用于服务中心内订购网店托管、指定类目托管服务，购买前请先输入代金卷。</p>
	                            	<p>无门槛使用，现在抢卷，购物时可只抵现金，支援你的钱包~</p>
	                            	<p>网店托管服务分为指定类目托管及个性化订制；2种模式，满足您的不同需求。</p>
	                            	<p>欲了解详情可点击右侧广告图进入查看详情，如有疑问，请联系我们的销售人员。</p>
	                            	<p>优惠卷为9折，最高可立省1500元。具体折扣标准为原价X9折=最终购买价。</p>
	                            </div>
	                            <div class="entry-lingquan-act">
	                                <div class="quan-list">
	                                    <a class="quan" href="Javascript:void(0)" val="0">
	                                        <span class="quan-s1"><strong class="quan-value">9折</strong><s class="quan-sym"></s></span>
	                                        <span class="quan-s2"><span class="quan-pri">免费</span><span class="quan-btn">立即领取</span></span>
	                                        <i class="quan-cut"></i>
	                                    </a>

	                                </div>
	                            </div>
		                    </div>
	                        <div class="lingquan-row-sub">
	                            <a href="http://fuwu.damaihu.com.cn/fuwu/tuoguan" target="_blank"><img src="/wanjia/static/images/fuwu/youhui/lingquan-row-sub1.jpg" alt=""><b></b></a>
	                        </div>
		                </div>
	                    <div class="lingquan-row">
	                        <div class="entry-lingquan">
	                            <h3 class="entry-lingquan-tit"><a href="http://fuwu.damaihu.com.cn/fuwu/video" target="_blank" title="《视频教学》我和我的小伙伴都惊呆了，新手礼券马上领取，立减20元。">《视频教学》我和我的小伙伴都惊呆了，新手礼券马上领取，立减20元。</a></h3>
	                            <div class="entry-lingquan-desc"><br>
	                            	<p>内含提升宝贝排名全套实战视频，优化排名，提升曝光率，增强销售。详细讲解了如何使用免费流量，</p>
	                            	<p>领卷消费，立减20元。</p>
	                            	<p>实战经验，手把手教会您如何打造爆款，为您解密那些不为人知的秘密。</p>
	                            	<p>欲了解详情可点击右侧广告图进入查看详情，如有疑问，请联系我们的销售人员。</p>
	                            	<p>优惠卷为9折，最高可立省20元。具体折扣标准为原价X9折=最终购买价。</p>
								</div>
	                            <div class="entry-lingquan-act">
	                                <div class="quan-list">
	                                    <a class="quan" href="Javascript:void(0)" val="1">
	                                        <span class="quan-s1"><strong class="quan-value">9折</strong><s class="quan-sym"></s></span>
	                                        <span class="quan-s2"><span class="quan-pri">免费</span><span class="quan-btn">立即领取</span></span>
	                                        <i class="quan-cut"></i>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="lingquan-row-sub">
	                            <a href="http://fuwu.damaihu.com.cn/fuwu/video" target="_blank"><img src="/wanjia/static/images/fuwu/youhui/lingquan-row-sub2.jpg" alt=""><b></b></a>
	                        </div>
	                    </div>
	                    <div class="lingquan-row">
	                        <div class="entry-lingquan">
	                            <h3 class="entry-lingquan-tit"><a href="http://fuwu.damaihu.com.cn/fuwu/dmseo" target="_blank" title="《网店培训》无门槛，参加培训，为好销量备好粮草，享受折扣才是王道。">《网店培训》无门槛，参加培训，为好销量备好粮草，享受折扣才是王道。</a></h3>
	                            <div class="entry-lingquan-desc">
	                            	<br><p>培训周期为一年，并附带论坛永久VIP权限。随时下载最新学习资料。</p>
	                            	<p>课程内容主要有：优化自然排名、直通车优化、客服管理、团队建设、二次营销。</p>
	                            	<p>欲了解详情可点击右侧广告图进入查看详情，如有疑问，请联系我们的销售人员。</p>
	                            	<p>优惠卷为9折，最高可立省60元。具体折扣标准为原价X9折=最终购买价。 </p>
	                            </div>
	                            <div class="entry-lingquan-act">
	                                <div class="quan-list">
	                                    <a class="quan" href="Javascript:void(0)" val="2">
	                                        <span class="quan-s1"><strong class="quan-value">9折</strong><s class="quan-sym"></s></span>
	                                        <span class="quan-s2"><span class="quan-pri">免费</span><span class="quan-btn">立即领取</span></span>
	                                        <i class="quan-cut"></i>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="lingquan-row-sub">
	                            <a href="http://fuwu.damaihu.com.cn/fuwu/dmseo" target="_blank"><img src="/wanjia/static/images/fuwu/youhui/lingquan-row-sub3.jpg" alt=""><b></b></a>
	                        </div>
	                    </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<div class="g-layout amb">
	    <div class="fullbox2">
	        <div class="fullbox2-hd">
	            <h2 class="fullbox2-hd-title">领取流程</h2>
	        </div>
	        <div class="fullbox2-bd">
	            <div style="padding-top:20px;padding-bottom:20px;"><img src="/wanjia/static/images/fuwu/youhui/lingquan-flow.png" alt=""></div>
	        </div>
	    </div>
	</div>
	<div class="g-layout amb">
	    <div class="fullbox2">
	        <div class="fullbox2-hd">
	            <h2 class="fullbox2-hd-title">我的代金券</h2>
	        </div>
	        <div class="fullbox2-bd">
	            <div class="my-quan-list">
	                <table>
	                    <tbody>
	                    	<tr>
		                        <th>名称</th>
		                        <th>优惠号码</th>
		                        <th width="200">领用时间</th>
		                        <th width="200">消费时间</th>
		                        <th width="180">状态</th>
	                    	</tr>
	                    		                	</tbody>
	            	</table>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<script>

$(".quan-list .quan").click(function(){
	var val = $(this).attr('val');
	$.dialog({
			title: '提示',
			content: "确定要领取吗？",
			fixed: true,
			lock: true,
			okValue: '确定',
			ok: function(){
				$.ajax({
			   type: "POST",
			   dataType:"json",
			   url: "/home/user/GetYouHui",
			   data: "buy=youhui&val="+val,
			   success: function(data){
					   		switch(data.msg){
					   			case 'nologin':
									window.location.href ="/home/index/showIndex";return;
					   			break;
					   			case 'yes':
					   				msg='您已经有一张了！';
					   			break;
					   			case 'ok':
					   				msg='领取成功';
					   			break;
					   			default:
					   				msg='请刷新页面后再试';
					   			break;

					   		}
							$.dialog({ title: '提示',content: msg,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
			   }
			});
			},
			cancelValue: '关闭',
			cancel: function () { return true;}
		});
});
</script>
<?php include('index_footer.php');?>