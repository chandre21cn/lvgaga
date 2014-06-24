<?php include('index_header.php');?>
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/main.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/static/css/fuwu/main.css">
	<link rel="stylesheet" type="text/css" href="/wanjia/static/css/dialog/twitter.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/static/css/fuwu/collect.css">

<div id="p-focus" class="a-mb15">
    <div class="g-layout">
        <!-- 面包屑 -->
        <div class="crumb">
            <a class="item" href="/" target="_blank">全部服务</a>
            <b class="f-arr">&gt;</b>
            <em class="item">网店托管</em>
        </div>

        <div class="service-view">
            <span class="service-view-pic"><img src="/wanjia/static/images/fuwu/service-view-shoucang.jpg" alt=""><b></b></span>
            <div class="service-view-cnt">
                <h1>人气收藏-提升排名和曝光</h1>
                <div class="service-view-content">
                    <!-- 内容插入在这里 -->
                    收藏分为店铺收藏与宝贝收藏，收藏数的多少是一个店铺热度的衡 量标准。在一定条件下，收藏数的多少足以动摇一个人购买您商品 的欲望，哪怕是在同类店铺中，收藏数高的店铺往往曝光量要比其 它同行要高许多。
                    <!-- 内容结束 -->
                </div>
            </div>
            <div class="service-view-order">
                <table width="320" cellspacing="0" cellpadding="0" border="0" class="right_scbk">
                    <tbody><tr><td height="30" class="scly_gmsc" colspan="2">购买收藏</td> </tr>
                    <tr>
                        <td height="35" align="right">宝贝或者店铺地址：</td>
                        <td><input type="text" placeholder="注意加前缀 http://" class="scly_bk1" name="cs_url"></td>
                    </tr>
                    <tr>
                        <td height="35" align="right">标签：</td>
                        <td><input class="scly_bk1" type="text" name="cs_mark" maxlength="62"></td>

                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td valign="top" class="titlexs">
                            标签最多<span class="chengse2">3</span>个(每条<span class="chengse2">10</span>个字内)，以空格区分
                    </td></tr>
                    <tr>
                        <td height="35" align="right">购买数量：</td>
                        <td><input class="scly_bk1" type="text" name="nums" maxlength="5" placeholder="买家真实收藏每个0.5星星"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td valign="top" class="titlexs">
                            购买收藏最低<span class="chengse2">10</span>个起，账户需预留<span class="chengse2">3</span>个星星
                    </td></tr>
                    <tr>
                        <td height="40" colspan="2"><input type="submit" class="scly_ljgm"></td>
                    </tr>

<script type="text/javascript">

    $('.col-main .ui-tabs-tri').mouseover(function(){
        $('.col-main .ui-tabs-tri').removeClass('ui-tabs-tri-active');
        $(this).addClass('ui-tabs-tri-active');
        var i = $(this).attr('type');
        $('.ui-tabs-crop .ui-tabs-panel').hide();
        $('.ui-tabs-crop .ui-tabs-panel:eq('+i+')').show();
    });
    $('.package-list li').click(function(){
        $(this).addClass('selected').siblings().removeClass('selected');
    });
    /*图标切换*/
    $(".service-list ul li .pic").mouseover(function(){
        imgname = $(this).children('img').attr('qh');
        $(this).children('img').attr('src','/static/images/fuwu/'+imgname+'.gif');
    });
    $(".service-list ul li .pic").mouseout(function(){
        imgname = $(this).children('img').attr('qh');
        imgname = imgname.substr(0,imgname.length-1);
        $(this).children('img').attr('src','/static/images/fuwu/'+imgname+'.gif');
    })

    /*收藏*/
    $(".right_scbk .scly_ljgm").click(function(){

        var url = $("input[name='cs_url']").val();
        var num = $("input[name='nums']").val();
        var tag = $("input[name='cs_mark']").val();
        var strRegex = /^http:\/\/([0-9a-z'()-]+\.)*((taobao)|(tmall)|(alibaba)|(paipai))\.com\/*/i;
        var re=new RegExp(strRegex);
        var r = /^\+?[1-9][0-9]*$/;
        var tagArr = tag.split(' ');
        //验证URL
        if(url.indexOf('paipai.com')>0){
            $.dialog({ title: '提示',content: '对不起，收藏暂不支持拍拍店铺~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
            return false;
        }
        if (!re.test(url)){
            $.dialog({ title: '提示',content: '请输入正确的宝贝或店铺地址~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
            return false;
        } 
        //验证数量
        if(r.test(num) == false){ $.dialog({ title: '提示',content: '请输入正整数~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;}

        if(num < 10){
             $.dialog({ title: '提示',content: '购买收藏10个起，24小时内到达~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;
        }
        //验证标签
        if(tagArr.length > 3){
            $.dialog({ title: '提示',content: '收藏标签最多3个~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;
        }
        for(i in tagArr){
            if(tagArr[i].length > 10){
                $.dialog({ title: '提示',content: '第'+(parseInt(i)+1)+'条收藏标签大于10个字~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});return false;
            }
        }

        /*完毕*/          
        $.dialog({
            id:'buy',
            title: '购买信息',
            fixed: true,
            lock: true,
            content: '<div id="mdData"><p>请确认购买收藏信息</p><p>需要收藏的网址：<input value="'+url+'"/></p><p>收藏标签：<b>'+tag+'</b></p><p>购买数量：<b>'+num+'</b>个</p><p>扣除麦点：<b>'+(num*0.1).toFixed(2)+'</b>个</p></div>',
            okValue: '确定',
            cancelValue: '取消',
            ok: function () { 
                
                $.ajax({
                   type: "POST",
                   url: "/home/user/BuyCollects",
                   data: "action=4&url="+escape(url)+"&num="+num+"&tag="+tag,
                   dataType:'json',
                   success: function(data){
                            switch(data.msg){
                                case 'nologin':
                                    window.location.href ="/home/index/showIndex";return;
                                break;
                                case 'nonum':
                                    msg='购买收藏最低10个起';
                                break;
                                case 'nomd':
                                    msg='星星不足，请购买充值';
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
    })
</script>

                </tbody></table>
            </div>
        </div>
    </div>
</div>
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
                <div class="ui-tabs" style="float:left;">
                    <div class="ui-tabs-nav" style="width:740px;">
                        <span type="0" class="ui-tabs-tri ui-tabs-tri-active">服务详情</span>
                        <span type="1" class="ui-tabs-tri">购买记录</span>
                    </div>
                    <div class="ui-tabs-crop">
                        <div class="ui-tabs-cnt">
                            <!-- 服务详情 -->
                            <div class="ui-tabs-panel" style="display: block;">
                                <div class="sevice-detail">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_01.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_02.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_03.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_04.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_05.jpg" alt="">
                                    <img src="/wanjia/static/images/fuwu/service_detail/shoucang_06.jpg" alt="">
                                </div>
                            </div>
                            <!-- 购买记录 -->
                            <div class="ui-tabs-panel" style="display: none;">
                                <div class="sevice-detail">
                                                                                                                        <strong class="chengse2">您没有购买记录</strong>
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
            </div>
        </div>
    </div>
</div>

<?php include('index_footer.php');?>