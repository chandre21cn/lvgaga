<?php include('taobao_mid.php'); ?>
<div class="tico menu">
  <a href="/home/Dating/taobao" class="nov" title="淘宝任务大厅">淘宝任务大厅</a>
  <a href="/home/Dating/inTask" title="已接任务">已接任务</a>
  <a href="/home/Dating/outTask"  title="已发任务">已发任务</a>
  <a href="/home/Dating/buyer" title="绑定买号">绑定买号</a>
  <a href="/home/Dating/seller"  title="绑定掌柜">绑定掌柜</a>
</div>
<span id="tloading" style="background-image: url(http://taobao.damaihu.com.cn/static/images/taobao/loading.gif); width: 100px; height: 50px; float: left; text-indent: 40px; margin: 25px 0px 0px 305px; display: none; background-position: initial initial; background-repeat: no-repeat no-repeat; "><img src="static/images/taobao/fg.gif"></span>
<div id="moveContent">
	<div>
	<div class="cle"></div>
<div id="taobao-lists">
  <div id="taskList">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tlisttable">
          <thead>
          <tr>
              <td width="10" height="39" align="center" valign="middle" class="tico rwdt_bt1"></td>
              <td width="21%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="0" style="width:80px;margin-left: 30px;">任务编号</span></td>
              <td width="12%" align="left" valign="middle" class="tico rwdt_bt2">发布人</td>
              <td width="12%" align="left" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="1">任务价格</span></td>
              <td width="23%" align="center" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="2" style="width:93px">发布者要求</span></td>
              <td width="22%" align="left" valign="middle" class="tico rwdt_bt2"><span class="h-sort" val="3">悬赏麦点</span></td>
              <td width="10%" align="center" valign="middle" class="tico rwdt_bt2">操作</td>
              <td width="10" align="center" valign="middle" class="tico rwdt_bt3"></td>
          </tr>
          <tr><td colspan="8" class="newdatas" style="display:none">有<b>0</b>个新发布的任务，点击刷新<span></span></td></tr>
      </thead>
      <SCRIPT TYPE="text/javascript" src="/wanjia/artTemplate/template.js"></SCRIPT>
      <tbody class="tlisttable table-row">
        <SCRIPT id='test' type="text/html">
        {{each list as value i}}

  <tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
  <span class="hico type4 topt" title="来路任务">
    <strong>{{value.w_id}}</strong>
  </span>
  <br>
  <span>Post Time:{{value.create_time}} </span>  
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=江苏盐城" class="blue">
        <span>江苏盐城</span>
    </a>
    <br>
    
    <span>exp:730</span>
    
</td>
<td width="12%">
    
    <span 

    {{if cbxIsGJ==1}}
    class="hico xgj " title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为{{value.txtPrice}}元"

    {{/if}}
    >
    {{value.txtPrice}}</span>
    
</td>
<td width="23%" class="noktime">
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
</td>
<td width="22%" align="left">
    <span class="red"><strong>{{value.txtMinMPrice}}个麦点</strong></span><br>
    {{if !value.pointExt=='' && !value.pointExt==0}}
    <span class="orange">↑ 发布者追加了麦点{{value.pointExt}}个</span>
    {{/if}}
</td>
<td width="10%" class="center">
  <p> <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a></p>
</td>
<td width="10">&nbsp;</td>
</tr>
{{/each}}

        </SCRIPT>
        <script>
          $.ajax({
            url:"/home/User/GetTask",
            dataType:'json',
            type:'post',
            success:function(data){
              var html = template('test', {'list':data.tmpData});
              $("#taskList table tbody").html(html);
              fy(data.count,1);
            }
          });

          $(".rwdt_bt2").click(function(){
             var spanOb = $(this).find('span');
             if(spanOb.length==1){
                var scOb = spanOb.html();
                var spanVal = spanOb.attr('val');
                if(spanVal.length==2){
                  spanOb.attr('val',spanVal.slice(0,1));
                }else{
                  spanOb.attr('val',spanVal+'s');
                }
                $("#sorthot").val(spanVal);
                $.ajax({
                  url:'/home/Dating/getIdtask',
                  data:{idtask:spanVal},
                  dataType:'json',
                  type:'post',
                  success:function(data){
                    var html = template('test', {'list':data.tmpData});
                    $("#taskList table tbody").html(html);
                    fy(data.count,1);
                  }
                });

             }
          });
          function fy(c,cy)
          {
             pages = Math.ceil(c/1);
              var dataPages= {
                cp:c,
                pages:pages,
                currents:cy,
                maxnum:3
              };
                    var tmpi = 1;
                    var s = 3;
                    var smax = 3;
                    if( dataPages.currents >= dataPages.maxnum ){
                      tmpi = dataPages.currents - Math.floor(dataPages.maxnum/2);
                      smax = tmpi + dataPages.maxnum-1;
                     if(smax > dataPages.pages){
                       smax = dataPages.pages;
                        tmpi = dataPages.pages-dataPages.maxnum+1;
                      }
                    }
                    var cc = '';
                    for(var i=tmpi;i<= smax;i++){
                      ttmp = '';
                      if( i == dataPages.currents ){
                        ttmp = 'class="now-page"';
                      }
                      cc += '<a  ' + ttmp + ' page="'+ i +'">' + i + '</a>';
                    }
                    var source ='<a  page="-1" class="up-no">&lt;</a>'   
                           + cc
                           + '<a page="0" class="next-page">&gt;</a>'                   
                           + '<p class="total">总共{{pages}}页 当前:第<span class="now-show">{{currents}}</span>页</p+>';
                    var render = template.compile(source);
                    var html = render(dataPages);
                    document.getElementById('page').innerHTML = html;

          }
        </script><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type6 topt" title="实物任务">
    <strong>TB1401531764625148</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:58
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=weuy" class="blue">
        <span>weuy</span>
    </a>
    <br>
    
    <span>exp:25</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为17.00元">17.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="green" title="任务接手付款后，在24小时后对宝贝进行收货好评！">24小时五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="green"><strong>4.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type4 topt" title="来路任务">
    <strong>TB1401533623566370</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:56
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=hahayaolan" class="blue">
        <span>hahayaolan</span>
    </a>
    <br>
    
    <span>exp:227</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为190.00元">190.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>
    
    
    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>
    
    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>
    
    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="green"><strong>8.90个麦点</strong></span><br>
    
    <span class="orange">↑ 发布者追加了麦点2.00个</span>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401533634527695</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:54
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=397593643" class="blue">
        <span>397593643</span>
    </a>
    <br>
    
    <span>exp:2476</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为1.00元">1.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.10个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type4 topt" title="来路任务">
    <strong>TB1401533631913382</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:51
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=k7806" class="blue">
        <span>k7806</span>
    </a>
    <br>
    
    <span>exp:99</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为15.00元">15.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="green" title="任务接手付款后，在72小时后对宝贝进行收货好评！">72小时五星好评</p>
    
    
    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>
    
    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>
    
    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>
    
    <em title="接任务者需要额外浏览商品，额外0.3~0.9个麦点" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个麦点" class="hnews limit26 lopt">&nbsp;</em>
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="green"><strong>7.00个麦点</strong></span><br>
    
    <span class="orange">↑ 发布者追加了麦点1.00个</span>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401508544769567</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:50
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=野伊狼" class="blue">
        <span>野伊狼</span>
    </a>
    <br>
    
    <span>exp:1728</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">10.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401508544751482</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:50
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=野伊狼" class="blue">
        <span>野伊狼</span>
    </a>
    <br>
    
    <span>exp:1728</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">10.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401508595843911</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:49
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=野伊狼" class="blue">
        <span>野伊狼</span>
    </a>
    <br>
    
    <span>exp:1728</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">10.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401508595690207</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:49
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=野伊狼" class="blue">
        <span>野伊狼</span>
    </a>
    <br>
    
    <span>exp:1728</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">10.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401508595610443</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:49
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=野伊狼" class="blue">
        <span>野伊狼</span>
    </a>
    <br>
    
    <span>exp:1728</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">10.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type5 topt" title="虚拟任务">
    <strong>TB1401533628211101</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:48
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=2968783489" class="blue">
        <span>2968783489</span>
    </a>
    <br>
    
    <span>exp:67</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">1.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    
    
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>1.00个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type7 topt" title="快递任务">
    <strong>TB1401531720211610</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:44
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=qyhyhong" class="orange strong">
        <span>qyhyhong</span>
    </a>
    <br>
    
    <span class="hico vip6 vopt" title="一级VIP客户">exp:55</span>
    
</td>
<td width="12%">
    
    <span class="hico rwdt_db" title="平台担保：此任务卖家已缴纳全额担保存款，买家可放心购买，任务完成时，买家平台账号自动获得相应存款。">48.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="green" title="任务接手付款后，在72小时后对宝贝进行收货好评！">72小时五星好评</p>
    
    
    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>
    
    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>
    
    <em title="任务需要模拟聊天后确认收货" class="hico limit5 lopt">&nbsp;</em>
    
    <em title="按发布者提供的评语进行评价" class="hico limit6 lopt">&nbsp;</em>
    
    <em title="接手买号必须通过了支付宝实名认证" class="hico limit10 lopt">&nbsp;</em>
    
    <em title="接任务者需要额外浏览商品，额外0.3~0.9个麦点" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个麦点" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个麦点" class="hnews limit27 lopt">&nbsp;</em>
    
    
    
</td>
<td width="22%" align="left">
    <span class="green"><strong>12.05个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list bgcollor"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type7 topt" title="快递任务">
    <strong>TB1401518663480104</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:43
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=522370176" class="blue">
        <span>522370176</span>
    </a>
    <br>
    
    <span>exp:16</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为95.00元">95.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="green" title="任务接手付款后，在48小时后对宝贝进行收货好评！">48小时五星好评</p>
    
    
    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>
    
    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>
    
    
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个麦点" class="hnews limit26 lopt">&nbsp;</em>
    
    
    
    
</td>
<td width="22%" align="left">
    <span class="green"><strong>9.90个麦点</strong></span><br>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr><tr class="rwdt_list"><td width="10">&nbsp;</td>
<td width="21%">
    
  <span class="hico type4 topt" title="来路任务">
    <strong>TB1401455779330642</strong>
  </span>
  <br>
  <span>
        Post Time:
        18:53:41
        
    </span>
    
</td>
<td width="12%">
    <a title="接任务后方可查看到对方QQ号码" target="_blank" href="http://www.damaihu.com.cn/info?username=327095678" class="orange strong">
        <span>327095678</span>
    </a>
    <br>
    
    <span class="hico vip6 vopt" title="一级VIP客户">exp:332</span>
    
</td>
<td width="12%">
    
    <span class="hico xgj" title="拍下商品，付款前需要联系店主修改价格，使得支付费用与任务金额相等，即为96.00元">96.00</span>
    
</td>
<td width="23%" class="noktime">
    
    <p class="orange" title="任务接手付款后，立即对宝贝进行好评并打五星！">立即五星好评</p>
    
    
    <em title="接任务者需要发布者核审" class="hico limit3 lopt">&nbsp;</em>
    
    <em title="任务需要旺旺模拟咨询再拍下" class="hico limit4 lopt">&nbsp;</em>
    
    <em title="接任务者需要额外浏览商品，额外0.3~0.9个麦点" class="hnews limit25 lopt">&nbsp;</em>
    <em title="购买前需停留1~5分钟，接手后可查看，额外0.1~0.5个麦点" class="hnews limit26 lopt">&nbsp;</em>
    <em title="接任务者需要上传商品底部截图，额外0.3个麦点" class="hnews limit27 lopt">&nbsp;</em>
    
    
    
</td>
<td width="22%" align="left">
    <span class="red"><strong>6.90个麦点</strong></span><br>
    
    <span class="orange">↑ 发布者追加了麦点2.00个</span>
    
</td>
<td width="10%" class="center">
  <p>
        
    <a class="tico qrw_btn" balid="0" href="javascript:;">&nbsp;</a>
        
  </p>
    
</td>
<td width="10">&nbsp;</td>
</tr></tbody>
        </table>
    <div class="rwdt_dlm">
      <a href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=1509" target="_blank" class="tico rwdt_tbhelp"></a>
      <div id="page"> </div>
    </div>
  </div>
  <table id="reAutoAM" style="width:100%;height:150px;background-color:#FBFBFB;display:none;">
        <tbody><tr>
            <td align="right" style="width:30%"><img src="/static/images/taobao/loading.gif"></td>
            <td><span style="margin-left:20px;color:Red;font-weight:bold;"></span><input id="btnAutoAM" style="display:none;"></td>
        </tr>
    </tbody></table>
</div>

</div>
	</div>
    </div>
</div>
<input type='hidden' id='sorthot' value='0' >
<SCRIPT TYPE="text/javascript">
//$(function(){
 $(document).on('click', '#page a', function() {

          var tmpPage = $(this).attr('page');
         // if(tmpPage==)
          $.ajax({
            url:'/home/Dating/getIdtask',
            dataType:'json',
            type:'post',
            data:{p1:tmpPage,idtask:$('#sorthot').val()},
            success:function(data){
                var html = template('test', {'list':data.tmpData});
                $("#taskList table tbody").html(html);
                fy(data.count,tmpPage);
            }

          });
        });
//})

</SCRIPT>
<?php include('index_footer.php'); ?>