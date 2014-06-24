
<?php include"member_body.php";?>
<div id="_right">
	<div class="paydetails">
	<div class="bq_menu">
		<a class="payde nov" href="javascript:;">存款</a>
		<a class="logpoint " href="javascript:;">星星</a>
		<a class="logcredit " href="javascript:;">积分</a>
		<a class="logtask " href="javascript:;">任务</a>
		<a class="logtopup " href="javascript:;">充值</a>
		<a class="logpayment " href="javascript:;">提现</a>
		<a class="logaccount " href="javascript:;">登录</a>
	</div>
	<div class="cle"></div>
    <!--存款begin-->
    <div class="cardbox" style="display:block;">
	<div class="f_text">
		<span class="img0"></span>
		<p class="f16">存款流动查询</p>
		<p>查查您今天获得了多少存款吧</p>
	</div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:20" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="0">
				</td>
			</tr>

		</tbody>
	</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
	        	<tr>
	                <td class="titbg1"></td>
	                <td width="10%" height="43" class="titbg">类型</td>
	                <td width="33%" class="titbg">详细内容</td>
	                <td width="15%" class="titbg">数量</td>
	                <td width="15%" class="titbg">总数量</td>
	                <td width="15%" class="titbg">时间</td>
	                <td class="titbg2"></td>
	            </tr>
         </tbody>
     </table>
     </div>
     <!--end-->
     <!--星星begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img1"></span>
		<p class="f16">星星流动查询</p>
		<p>发布点就是星星，在这里，查查您获得了多少星星吧</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:28" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="1">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>









	        	<tr>
	                <td class="titbg1"></td>
	                <td width="10%" height="43" class="titbg">类型</td>
	                <td width="33%" class="titbg">详细内容</td>
	                <td width="15%" class="titbg">数量</td>
	                <td width="15%" class="titbg">总数量</td>
	                <td width="15%" class="titbg">时间</td>
	                <td class="titbg2"></td>
	            </tr>




         </tbody>
     </table>
     </div>
     <!--end-->
     <!--积分begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img2"></span>
		<p class="f16">积分流动查询</p>
		<p>做一个任务可以获得一个积分，充值也有奖励积分噢</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:30" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="2">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>









	        	<tr>
	                <td class="titbg1"></td>
	                <td width="10%" height="43" class="titbg">类型</td>
	                <td width="33%" class="titbg">详细内容</td>
	                <td width="15%" class="titbg">数量</td>
	                <td width="15%" class="titbg">总数量</td>
	                <td width="15%" class="titbg">时间</td>
	                <td class="titbg2"></td>
	            </tr>




         </tbody>
     </table>
     </div>
     <!--end-->
     <!--任务begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img3"></span>
		<p class="f16">任务日志查询</p>
		<p>您在过去三个月做过任务的日志，都在这里</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:31" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="3">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>

				<tr>
					<td class="titbg1"></td>
					<td width="22%" class="titbg">任务Id</td>
					<td width="10%" class="titbg">操作类型</td>
					<td width="40%" class="titbg">详细内容</td>
					<td width="15%" class="titbg">时间</td>
					<td class="titbg2"></td>
				</tr>












         </tbody>
     </table>
     </div>
     <!--end-->
     <!--充值begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img4"></span>
		<p class="f16">充值记录查询</p>
		<p>目前支持网银在线，淘宝店铺购卡，财付通转账充值，充值都是免手续费的哦</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:31" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="4">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>



				<tr>
			        <td class="titbg1"></td>
					<td width="10%" height="43" class="titbg tbl_s">充值单号</td>
					<td class="titbg">充值方式</td>
					<td class="titbg">充值金额</td>
					<td class="titbg">帐户余额</td>
					<td class="titbg">奖励积分</td>
					<td class="titbg">充值时间</td>
					<td class="titbg">充值状态</td>
					<td class="titbg2"></td>
				</tr>










         </tbody>
     </table>
     </div>
     <!--end-->
     <!--提现begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img5"></span>
		<p class="f16">提现明细查询</p>
		<p>哇，算一算，今天挣了多少？</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:31" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="5">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
				<tr>
	                <td class="titbg1"></td>
	                <td class="titbg">提现流水号</td>
	                <td width="10%" class="titbg">提现方式</td>
	                <td class="titbg">金额</td>
	                <td class="titbg">申请时间</td>
					<td class="titbg">处理时间</td>
					<td class="titbg">状态</td>
	                <td class="titbg2"></td>
				</tr>
         </tbody>
     </table>
     </div>
     <!--end-->
     <!--登录begin-->
     <div class="cardbox" style="display:none;">
     <div class="f_text">
		<span class="img6"></span>
		<p class="f16">登录日志查询</p>
		<p>最近在哪里登录过？在什么时间修改过资料，请看下文...</p>
	</div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		<input type="hidden" id="type" name="type" value="logpoint">
		<tbody>
			<tr>
                <td width="370" valign="middle" height="25" align="right">
                	日期：<input type="text" name="dateStart" class="i_bk hasDatepicker " value="2014-04-29 00:00" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
                	 - <input type="text" name="dateEnd" class="i_bk hasDatepicker " value="2014-05-06 13:32" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" readonly="readonly">
				</td>
				<td>
					<input type="button" class="s_btn" id="bt_submit" text="6">
				</td>
			</tr>

		</tbody>
	</table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        		<tr>
					<td class="x_xian">&nbsp;</td>
					<td height="43" class="titbg">操作类型</td>
					<td class="titbg">详细信息</td>
					<td class="titbg">ip地址</td>
					<td class="titbg">时间</td>
					<td class="x_xian">&nbsp;</td>
		        </tr>

		        <tr>
					<td class="x_xian">&nbsp;</td>
					<td class="xuxian">登陆网站</td>
					<td class="xuxian">18779166875登录网站|未开启异地登录|江西省 电信|QQ登录</td>
					<td class="xuxian">117.44.187.244</td>
					<td class="xuxian">2014-05-06 10:59:12</td>
					<td class="x_xian">&nbsp;</td>
		        </tr>
         </tbody>
     </table>
     </div>
     <!--end-->
</div>
</div>
</div>
<script>
  $(function(){
		$('.bq_menu a').each(function(e){
			$(this).click(
			function(){
				$(this).addClass('nov').siblings('a').removeClass('nov');
				$('.paydetails').find('.cardbox').eq(e).show().siblings('.cardbox').hide();
			})
		})
	})
</script>
<div id="footer">
	<p>
		<span class="chengse">官方QQ群：<a style="color:#FE5500;" target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=c67c64edb769392db32cdfb8be110c498dfde9c3fffc7668d56be1cd99cb069">377804205</a></span>
		（加群请注明大麦户）</p>
	<p class="lanse">
		<a href="http://www.damaihu.com.cn/info/about?p=1">联系我们</a>|
		<a href="http://www.damaihu.com.cn/info/about?p=2">大麦户规则</a>|
		<a target="_blank" href="http://www.yaodamai.com/">淘宝信誉查询</a>|
		<a target="_blank" href="http://www.aizhanggui.com/">爱掌柜淘宝培训</a>
	</p><p class="lanse">客户服务热线：4000709880   Copyright © 2012-2020 Damaihu.com All RightsReserved    大麦户版权所有
		<a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备13037934号</a>
	</p>
</div>
<script type="text/javascript" data-main="static/js/main" src="static/js/require.js"></script>
<div style="display:none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa61bf8fb062c12c2b83ae163772558ad' type='text/javascript'%3E%3C/script%3E"));
</script><script src=" http://hm.baidu.com/h.js?a61bf8fb062c12c2b83ae163772558ad" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=a61bf8fb062c12c2b83ae163772558ad" target="_blank"><img border="0" src="http://eiv.baidu.com/hmt/icon/21.gif" width="20" height="20"></a>
</div>
</body>
</html>