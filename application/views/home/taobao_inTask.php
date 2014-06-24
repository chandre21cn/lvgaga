<?php include('taobao_mid.php'); ?>
<div class="tico menu">
  <a href="/home/Dating/taobao" title="淘宝任务大厅">淘宝任务大厅</a>
  <a href="/home/Dating/inTask" class="nov" title="已接任务">已接任务</a>
  <a href="/home/Dating/outTask"   title="已发任务">已发任务</a>
  <a href="/home/Dating/buyer" title="绑定买号">绑定买号</a>
  <a href="/home/Dating/seller"  title="绑定掌柜">绑定掌柜</a>
</div>
<span id="tloading" style="background-image: url(http://taobao.damaihu.com.cn/static/images/taobao/loading.gif); width: 100px; height: 50px; float: left; text-indent: 40px; margin: 25px 0px 0px 305px; display: none; background-position: initial initial; background-repeat: no-repeat no-repeat; "><img src="static/images/taobao/fg.gif"></span>
<div id="moveContent">
	<div>
<div class="rwdt_xx" style="display: -webkit-box;">
    <p class="rwdt_marquee_close">X</p>
    <p class="rwdt_marquee">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" width="100%" height="18">
        <a href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=4492" style="color:red;" target="_blank">接手方容易造成损失的几大误区</a>
      </marquee>
    </p>
  <ul class="yfrw_sub">

    <li style="z-index:11">
      <a href="javascript:;" class="sbico active operat" val="0"></a>

      <div class="tips-number">
        <span class="sbico reddit1"></span>
        <span class="reddit2">0</span>
        <span class="sbico reddit3"></span>
      </div>

    </li>

    <li style="z-index:10">
      <a href="javascript:;" class="sbico complete" val="1"></a>

    </li>

    <li style="z-index:9">
      <a href="javascript:;" class="sbico all-task" val="2"></a>

    </li>

  </ul>
  <div class="rwdt_btn">
    <a href="#publish/oneTask" class="tico fb_btn"></a>
    <a href="javascript:;" class="tico sx_btn"></a>
  </div>
  <div class="rwdt_sort">

    <div class="btn_blue" style="float:left;">

    <a href="javascript:;" class="def-a" val="2">选择买号(<span class="orange">0</span>)</a>

    <a href="javascript:;" class="def-a" val="4">需要付款(<span class="orange">0</span>)</a>

    <a href="javascript:;" class="def-a" val="6">收货好评(<span class="orange">0</span>)</a>

    <a href="javascript:;" class="def-a" val="7">待放款(<span class="orange">0</span>)</a>

    </div>

    <span style="color:#B4B3B1;">（本月完成任务：0，周完成任务：0，日完成任务：0）</span>
  </div>

  <div class="task_search">

    <input type="text" name="task_keys" id="task_keys" onclick="if(this.value.indexOf('搜索任务ID') &gt;= 0)this.value='';" value="搜索任务ID,掌柜,买号,QQ">
    <a href="javascript:;" class="search">搜索</a>
  </div>
</div>

	<div class="cle"></div>
<div id="taskList">     <!--开始-->
        <table id="insert-after" width="100%" border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <td width="10" height="39" align="center" valign="middle" class="tico rwdt_bt1"></td>
              <td width="200" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="id">任务编号</span></td>
              <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="goodsPrice">任务价格</span></td>
              <td width="18%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="timeEnter" style="width:88px;">发布者要求</span></td>
              <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="maidian">悬赏麦点</span></td>
              <td width="12%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort floatcenter" val="state">任务状态</span></td>
              <td width="1%" align="center" valign="middle" class="tico rwdt_bt2"></td>
              <td width="50" align="center" valign="middle" class="tico rwdt_bt2">
                <span class="h-sort" val="bnickname">买号名</span>
              </td>
              <td width="15%" align="center" valign="middle" class="tico rwdt_bt2">操作</td>
              <td width="10" align="center" valign="middle" class="tico rwdt_bt3"></td>
            </tr>
          </thead>
      </table>  

      <table class="yfrw_list"><tbody>
    <tr>
        <td width="180" class="yf_pd2">
            
            <span class="hico type5 topt" title="虚拟任务" style="width: 180px;">
                <strong>TB1401543061943631</strong>
                <b id="reporTask" title="举报该任务">举报</b>
            </span>
            <p class="cle"></p>
            <span class="block">
                接手时间:05-31 21:31
                
            </span>
            <span class="rwdt_xbh0">发布方:<a target="_blank" href="http://www.damaihu.com.cn/info?username=450000214">450000214</a></span>
        </td>
        <td width="90" class="yf_pd2">
            
            <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">50.00</span>
            
        </td>
        <td width="170" align="center" class="yf_pd yf_em">
            
            <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
            
            
            
                
            

            

            
               
            
            
               
            

            
            
        </td>
        <td width="120" align="center" class="yf_pd">
            <span class="red"><strong>1.5个麦点</strong></span>
        </td>
        <td width="120" align="center" class="yf_pd">
              
            <strong class="orange">
                等待您对商品付款
                
            </strong>
        </td>
        <td width="240" align="right" class="yf_pd2" valign="top" style="padding:0px;">
            <div style="height:30px; position:relative; top:5px;left: 20px;">
                
                <a href="javascript:;" class="aico abtn3 " copy-field="goodsUrl">&nbsp;</a>
                
                <a href="javascript:;" class="aico abtn4 " copy-field="goodsUrl">&nbsp;</a>
                

                   

                 
                

            </div>
            <p style="clear:both; line-height:30px;height:30px;">付款剩余时间：<strong id="time-1401543061943631" class="green">13分7秒</strong></p>
            <p class="task-border">
                联系对方：<a href="javascript:;" class="yf_lx">
                <img border="0" src="http://wpa.qq.com/pa?p=1:450000214:17" alt="450000214" title="qq联系对方"></a>
                <a href="javascript:;" title="给卖家发送手机短信" alt="给卖家发送手机短信" class="aico phone"></a> | 
                
                <a href="javascript:;" title="退出任务" class="yf_wz">退出</a> |
                

                
                
                <a href="javascript:;" style=" height:12px;top:2px;" class="aico no-flag yf_bz"></a>
            </p>
        </td>
        <td width="15">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="9" valign="middle" class="yfrw_listxia">
            <ul>
                <li class="info">不按规定修改地址、好评的的接手人将给予严厉处分</li>
                <li>
                    <span class="f-left" style="width: 150px;overflow: hidden;height: 20px;">
                        <span class="aico"></span>掌柜名:<a href="javascript:;" class="blue nicknames" val="诚信为先58">诚信为***</a>
                    </span>
                    <span class="f-left"><span class="aico wangwang"></span>
                        <span>
                            采用买号:<a href="http://www.yaodamai.com/look?q=asdlj" class="blue" target="_blank" title="查看买号信息">asdlj</a>
                            <img title="买号信誉：0" src="/static/images/taobao/level/b_red_1.gif">
                        </span>
                    </span>
                </li>
                <li width="12%" style="float:right">
                    
                    <a href="javascript:;" copy-field="goodsUrl" class="strong lookgurl">查看淘宝地址</a>
                    
                </li>
            </ul>
        </td>
    </tr>

    

    

    

    

</tbody>
</table><div id="insert-before"></div>
    <div id="page">           <a href="javascript:;" page="NULL" class="up-no">&lt;</a>                                   <a href="javascript:;" page="NULL" class="now-page">1</a>                     <a href="javascript:;" page="NULL" class="next-no">&gt;</a>         <span style="padding-left:20px;">本页合计金额：金额:<span class="orange">50.00</span>元，麦点:<span class="orange">1.50</span>个；未完成金额:<span class="orange">50.00</span>元，未完成麦点:<span class="orange">1.50</span>个，待付款任务金额：<span style="color:blue;">50.00</span>元</span>          <p class="total">总：共1页 当前:第<span class="now-show"> 1 </span>页</p>          </div>

</div>
	<table id="reAutoAM" style="width:100%;height:150px;background-color:#FBFBFB;display:none;">
        <tbody><tr>
            <td align="right" style="width:30%"><img src="static/images/taobao/loading.gif"></td>
            <td><span style="margin-left:20px;color:Red;font-weight:bold;"></span><input id="btnAutoAM" style="display:none;"></td>
        </tr>
    </tbody></table>
</div>
	</div>
    </div>
</div>
<?php include('index_footer.php'); ?>