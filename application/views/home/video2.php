   <?php include('index_header.php');?>
    <link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/main.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/static/css/fuwu/main.css">
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/dialog/twitter.css">
<style>
.service-view-quan { padding-top: 20px;}
.service-view-quan input { overflow: hidden;width: 130px;height: 14px;margin-right: 5px;padding: 8px;border: 1px solid #CCC;background: #FFF url(static/images/fuwu/input-bg.png) repeat-x;line-height: 14px;vertical-align: top;color: #AAA;}
.service-view-quan button { overflow: hidden;width: 95px;height: 32px;border: 0;background: url(static/images/fuwu/btn-95x32.png) no-repeat;text-align: center;vertical-align: top;color: #FFF;cursor: pointer;}
.service-view-quan p{ float: left;font-size: 13px;color: #1A7A1A;}
.service-view-quan p b{ color: #F00;margin-right: 10px;}
</style>

<div id="p-focus" class="a-mb15">
    <div class="g-layout">
        <!-- 面包屑 -->
        <div class="crumb">
            <a class="item" href="/" target="_blank">全部服务</a>
            <b class="f-arr">&gt;</b>
            <em class="item">网店托管</em>
        </div>

        <div class="service-view">
            <span class="service-view-pic"><img src="/wanjia/static/images/fuwu/service-view-video.jpg" alt=""><b></b></span>
            <div class="service-view-cnt">
                <h1>淘宝排名优化视频</h1>
                <div class="service-view-content">
                    <!-- 内容插入在这里 -->
                    淘宝宝贝排名 100%提升宝贝排名 提升宝贝销量 实战效果我和我小伙伴都惊呆了.视频 + 一对一问题解答。进入大卖家的行列，缩短与对方的差距。自己也能当土豪~o~。提供提升宝贝排名全套实战视频，优化排名，提升曝光率，增强销售
                    <!-- 内容结束 -->
                </div>
                 <!--<div class="service-view-quan">
                                        <input name="YHCode" class="quan-input" type="text" value="输入代金券抵扣现金" style="color: rgb(170, 170, 170);" maxlength="10">
                    <button type="button" name="get" class="quan-button">领用代金券</button>
                                    </div>-->
            </div>
            <div class="service-view-order">
                <div class="price">
                    <p>价格：<del>399</del>元</p>
                    <p style="color:#870000;">促销：99元</p>
                </div>
                <div class="act">
                    <a class="btn-buy" id="puydata" href="javascript:void(0);">立刻购买</a>
                    <a class="qq" href="javascript:void(0);" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&amp;sid=4006079159&amp;eid=218808P8z8p8y8z808R8p&amp;o=www.damaihu.com.cn&amp;q=7&amp;ref='+document.location, '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');">联系我们</a>
                </div>
            </div>
        </div>
    </div>
</div>
<SCRIPT TYPE="text/javascript">
$("#puydata").click(function(){
            $.dialog({
            id:'buy',
            title: '购买信息',
            fixed: true,
            lock: true,
            content: '是否确定购买？',
            okValue: '确定',
            cancelValue: '取消',
            ok: function () { 
                
                $.ajax({
                   type: "POST",
                   url: "/home/user/BuyVidio",
                   dataType:'json',
                   success: function(data){
                            switch(data.msg){
                                case 'no':
                                    window.location.href ="/home/index/showIndex";return;
                                break;
                                case 'nomoney':
                                    msg='购买收藏最低10个起';
                                break;
                                case 'ok':
                                    msg='购买成功';
                                break;
                                default:
                                    msg='请刷新页面后再试';
                                break; 
                            }
                            $.dialog({ title: '提示',content: msg,fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
                   }
                });
            },
            cancel: function () { return true;}
        });
});
</SCRIPT>
<div id="p-content">
    <div class="g-layout">
        <div class="g-s215m760">
            <div class="col-sub">
                <div class="sub-box">
                    <div class="ui-title"><h2 class="ui-title-tit"><img src="/wanjia/static/images/fuwu/title-sevice.png" alt="热门服务"></h2></div>
                    <div class="service-list">
    <ul>
        <li><a class="pic" href="/fuwu/tuoguan"><img qh="service11" src="/wanjia/static/images/fuwu/service1.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <li><a class="pic" href="/fuwu/sorttuoguan"><img qh="service22" src="/wanjia/static/images/fuwu/service2.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <li><a class="pic" href="/fuwu/dmseo"><img qh="service33" src="/wanjia/static/images/fuwu/service3.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <li><a class="pic" href="/fuwu/video"><img qh="service44" src="/wanjia/static/images/fuwu/service4.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <li><a class="pic" href="/fuwu/wip"><img qh="service55" src="/wanjia/static/images/fuwu/service5.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <li><a class="pic" href="/fuwu/collect"><img qh="service66" src="/wanjia/static/images/fuwu/service6.gif" alt=""></a><!-- <span>已有125人购买</span> --></li>
        <!-- <li><a class="pic" href="/fuwu/kefu"><img qh="service77" src="/wanjia/static/images/fuwu/service7.gif" alt=""/></a> <span>已有125人购买</span></li> -->
        <li><a href="/fuwu/bangpai"><img src="/wanjia/static/images/fuwu/service88.png" alt=""></a><!-- <span>已有125人购买</span> --></li>
    </ul>
</div>
                </div>
            </div>
            <div class="col-main">
                <!--<div id="taocont">
                    <h3>推荐服务</h3>
                    <div class="uls">
                        <div class="taogoods cur">
                            <a href="http://fuwu.damaihu.com.cn/fuwu/wip">
                                <img src="/wanjia/static/images/fuwu/taocang/goods1.png" width="60" height="60">
                                <p><span>站外流量 增加曝光</span><br>特价:200IP 3星星</p>
                            </a>
                        </div>
                        <i class="jia"></i>
                        <div class="taogoods cur">
                            <a href="http://fuwu.damaihu.com.cn/fuwu/collect">
                                <img src="/wanjia/static/images/fuwu/taocang/shou.png" width="60" height="60">
                                <p><span>人气收藏 提升排名</span><br>特价:20收藏 2星星</p>
                            </a>
                        </div>
                        <i class="jia"></i>
                        <div class="taogoods cur">
                            <a href="http://fuwu.damaihu.com.cn/fuwu/sorttuoguan">
                                <img src="/wanjia/static/images/fuwu/taocang/su.png" width="60" height="60">
                                <p><span>快速托管 三天完成</span><br>特价:250笔 599元</p>
                            </a>
                        </div>
                        <i class="jia"></i>
                        <div class="taogoods">
                            <a href="http://fuwu.damaihu.com.cn/fuwu/bangpai">
                                <img src="/wanjia/static/images/fuwu/taocang/you.png" width="60" height="60">
                                <p><span>帮派优站 求关注</span><br>特价:10数量 3星星</p>
                            </a>
                        </div>
                        <i class="jia"></i>
                        <div class="taogoods">
                            <img src="/wanjia/static/images/fuwu/taocang/a1.png" width="60" height="60">
                        </div>
                        <i class="jia"></i>
                        <div class="taogoods">
                            <img src="/wanjia/static/images/fuwu/taocang/a1.png" width="60" height="60">
                        </div>
                    </div>
                </div>-->
                <div class="ui-tabs" style="float:left;">
                    <div class="ui-tabs-nav" style="width:740px;">
                        <span type="0" class="ui-tabs-tri ui-tabs-tri-active">服务详情</span>
                        <span type="1" class="ui-tabs-tri">成功案例</span>
                        <span type="2" class="ui-tabs-tri">服务反响</span>
                    </div>
                    <div class="ui-tabs-crop">
                        <div class="ui-tabs-cnt">
                            <!-- 服务详情 -->
                            <div class="ui-tabs-panel" style="display: block;">
                                <div class="sevice-detail">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_01.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_02.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_16.png" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_03.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_04.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_05.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_06.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_07.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_08.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_09.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_10.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_11.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_12.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_13.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_14.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/video_15.jpg" alt="">
                                </div>
                            </div>
                            <!-- 成功案例 -->
                            <div class="ui-tabs-panel" style="display: none;">
                                <div class="sevice-detail">
                                    <img src="/wanjia/static/images/fuwu/service_detail/case_01.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/case_02.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/case_03.jpg" alt="">
                                </div>
                            </div>
                            <!-- 服务反响 -->
                            <div class="ui-tabs-panel" style="display: none;">
                                <div class="sevice-detail">
                                    <img src="/wanjia/static/images/fuwu/service_detail/fanxiang_01.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/fanxiang_02.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/fanxiang_03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
                	$(function(){
						$(".ui-tabs-nav .ui-tabs-tri").each(function(e){
								$(this).click(function(){
									$(this).addClass('ui-tabs-tri-active').siblings('.ui-tabs-tri').removeClass('ui-tabs-tri-active');
									$('.ui-tabs-cnt .ui-tabs-panel').eq(e).show().siblings('.ui-tabs-panel').hide();
								})
						})
					})
                </script>
<?php include('index_footer.php');?>