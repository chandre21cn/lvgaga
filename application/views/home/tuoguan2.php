<?php include('index_header.php');?>
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
            <span class="service-view-pic"><img src="/wanjia/static/images/fuwu/service-view-tuoguan.jpg" alt=""><b></b></span>
            <div class="service-view-cnt">
                <h1>网店托管-个性化订制</h1>
                <div class="service-view-content">
                    <!-- 内容插入在这里 -->
                    无风险操作，独有商家保障计划，全程无忧，如出现问题我们免费进行补回。时间短费用低，相比庞大的人工成本，只需花费少许，即可享受我们的专业客服，全程维护打理。个性化订制，可根据要求随意增减，DIY控制，掌控一切。您无需任何操作，运维、推广就交给我们了，只等着收店，稳定可靠。靠的不仅仅是技术还有权术！
                    <!-- 内容结束 -->
                    <!-- <a target="_blank" href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&tid=12150" style="width: 100%;float: left;margin-top: 25px;">托管常见疑问解析</a> -->
                </div>
                <div class="service-view-quan">
                                        <input name="YHCode" class="quan-input" type="text" value="输入代金券抵扣现金" style="color: rgb(170, 170, 170);" maxlength="10">
                    <button type="button" name="get" class="quan-button">领用代金券</button>
                                    </div>
            </div>
            <div class="service-view-order">
                <div class="order-package">
                    <h3>可选套餐: </h3>
                    <ul class="package-list">
                        <li action-type="1" class="selected">599元/250笔成交</li>
                        <li action-type="2">1198元/500笔成交</li>
                        <li action-type="3">2396元/1000笔成交</li>
                        <li action-type="4">4500元/2000笔成交</li>
                        <li action-type="5">7500元/5000笔成交</li>
                        <li action-type="6">15000元/10000笔成交</li>
                    </ul>
                </div>
                <div class="act">
                    <a class="btn-buy" id="buyGo" href="javascript:void(0);">立刻购买</a>
                    <a class="qq" href="javascript:void(0);" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&amp;sid=4006079159&amp;eid=218808P8z8p8y8z808R8p&amp;o=www.damaihu.com.cn&amp;q=7&amp;ref='+document.location, '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');">联系我们</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(".service-view-order .order-package  ul li").click(function(){
    $(".service-view-order .order-package  ul li").removeClass('selected');
    $(this).addClass('selected');
});
</script>
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
                <div id="taocont">
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
                </div>
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
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_01.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_02.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_03.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_04.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_05.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_06.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_07.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_08.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_09.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/tuoguan_10.jpg" alt="">
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
<?php include"index_footer";?>