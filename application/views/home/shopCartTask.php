<?php include('index_header.php'); ?>
	<link rel="stylesheet" type="text/css" href="/wanjia/taobao/css/mm.css">
    <link rel="stylesheet" type="text/css" href="/wanjia/taobao/css/taobao_common.css">
    <script type="text/javascript" src="/wanjia/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="/wanjia/common.js"></script>
 <SCRIPT TYPE="text/javascript" src="/wanjia/artTemplate/template.js"></SCRIPT>
      <tbody class="tlisttable table-row">
        <SCRIPT id='test' type="text/html">

        </SCRIPT>
<div id="content"><div class="h15"></div>
<div class="fabu_box1">
    <div class="fabu_title"><span class="tico fabu_left"></span><span class="tico fabu_h2">发布任务须知（*号为必填项）</span><span class="tico fabu_right"></span></div>
	<div class="cle"></div>
	<div class="fabu_cont">
	  <ul>
		<li>马上好评任务：拍拍交易的物品为虚拟物品，买卖双方可以即时确认完成交易并付款。</li>
		<li>24-72小时确认任务：拍拍交易的物品为实际存在的物品，可能包含运费和物流等，需要1－3天后方能确认收货并评价。</li>
		<li>要尽量保证平台任务担保价大于 (拍拍商品价格+快递运费)/2 ，否则接手人拍下商品后您的拍拍改价将会导致您的支付宝使用率低于50%既被拍拍视为信用炒作处理；</li>
		<li>您发任务时，平台中的保证金不得少于任务价，成功发布任务将会在平台中扣押相应的任务保证金；接手人完成您的任务时等额的资金会作为商品款返回给您网店的帐户中；</li>
		<li>您想发布任务的时候，必须保证您拥有相应的星星，每次发布都会根据商品价格不同扣除相应的星星数。您如果想让任务排名靠前就可以追加星星奖励，追加的越多排名就越靠前；</li>
		<li class="chengse">请确认商品地址绝对正确，否则会造成不必要的纠纷。</li>
		<li class="chengse">为了您的店铺安全，发布“实物任务”商品价格请大于10元！</li>
	  </ul>
	</div>
</div>

<div class="newsHelp">
	<a href="tencent://message/?uin=188239031"></a>
</div>

<a id="mao1"></a>
<?php include('menu_publish.php'); ?>
<div class="cle"></div>
<ul class="gou">
	<div class="gouimg"><img src="/wanjia/static/images/taobao/che_big.gif"></div>
	<li style="padding-top:8px;">请不要使用相同的商品地址，最多只能添加6个不同的商品，每天发布的购物车任务数量请不要太多，根据自身情况添加2-6个商品，不一定要全部都加满6个商品的。</li>
	<li>
	<span>购物车请在其中一个商品价格中包含运费</span>
	</li>
</ul>
<form action="/home/User/SavemealTask" id="all-data" method="post" >
<div class="fabu_box2" >
   <ul class="cont">
   		<li>
	<input type="hidden" name="task_type" value="4">
	<div class="name">
	<span style="color:Red;"></span>
	使用模板：
	</div>
	<div class="value">
	<select id="ddlTemplate" name="ddlTemplate" style="width:190px;">
	<option value="0">请选择模板</option>

	</select>
	</div>
	<div class="exp">
	您可以选择从已经保存的任务模板中选择一个，发布任务将更加方便快捷。
	<a target="_blank" href="/bbs/t1313/">查看使用帮助</a>
	</div>
</li>
<li>
	<input type="hidden" name="task_type" value="4">
	<div class="name">
	<span style="color:Red;">*</span>
	拍拍掌柜名：
	</div>
	<div class="value">
	<select id="ddlZGAccount" name="ddlZGAccount" style="width:190px;">

		<?php foreach($data[bang] as $v):?>
			<option value="<?php echo $v->nick_name ;?>"><?php echo $v->nick_name ;?></option>
		<?php endforeach;?>
	</select>
	</div>
	<div class="exp">就是您想提升信誉的拍拍帐号，接任务的朋友用来确认您的身份。<a href="/#bindSeller">绑定拍拍</a></div>
</li>

<li class="ligoods">
	<div class="name" name="url">商品链接地址1：</div>
	<div class="va">
	<input class="txt" type="text" hptext="" gtitle="" minprice="0" price="0" placeholder="http://" name="shopAll[1][txturl]" style="width:100%;">
	</div>
	<div class="name">商品担保价格：</div>
	<div class="vb">
	<input class="txt" type="text" value="0" name="shopAll[1][txtprice]" style="width:45px;">
	  元
	</div>
	<div class="exp">
	此价格为您发布宝贝改价后包括邮费的总价！此价格不能大于您在平台的保证金<em>0.00</em>元！
	<a target="_blank" href="http://member.damaihu.com.cn/#topup/bank">我要充值</a>
	</div>
	<div class="vc" style="display:none;"></div>
    <div class="cle"></div>
	<div class="nr">
	<div class="short">
	<input type="checkbox" value="1" show="1" name="shopAll[1][cbhp]">
	</div>
	<div class="ny">
	规定好评内容：
	<em>您可以要求接手人对您的商品添加好评内容</em>
	<input type="checkbox" value="1" name="shopAll[1][chssp]"> <span style="color:#999">打折类物品，取消商品价格限制</span>
	</div>
	<div class="nyy01 nyy-1">
		<div class="nyy">
		<textarea rows="2" cols="45" name="shopAll[1][txthptext]"></textarea>
		</div>
		<div class="exp">
		您可以规定接手方在淘宝交易好评时填写规定的内容。额外支付的
		<em>0.1</em>
		个金币将奖励给接手方
		</div>
		<div class="cle"> </div>
		<div class="name01">商品名称：</div>
		<div class="va">
		<input class="txt" type="text" value="" maxlength="100" name="shopAll[1][txtgtitle]" style="width:100%;">
		</div>
		<div class="vaa">
		请输入与商品本身
		<span>一致的名称</span>
		，防止评价错乱！就是您发布在淘宝的商品标题，复制过来即可
		</div>
	</div>
	</div>
</li>
<li class="ligoods">
	<div class="name" name="url">商品链接地址2：</div>
	<div class="va">
	<input class="txt" type="text" hptext="" gtitle="" minprice="0" price="0" placeholder="http://" name="shopAll[2][txturl]" style="width:100%;">
	</div>
	<div class="name">商品担保价格：</div>
	<div class="vb">
	<input class="txt" type="text" value="0" name="shopAll[2][txtprice]" style="width:45px;">
	  元
	</div>
	<div class="ex">
	<a href="javascript:void(0)" name="delli" value="2" style="display: none;">删除此商品地址</a>
	<a href="javascript:void(0)" name="addli" style="display: inline;">添加一个商品地址</a>
	</div>
	<div class="vc" style="display:none;"></div>
	<div class="cle"></div>
	<div class="nr">
	<div class="short">
	<input type="checkbox" value="1" show="2" name="shopAll[2][cbhp]">
	</div>
	<div class="ny">
	规定好评内容：
	<em>您可以要求接手人对您的商品添加好评内容</em>　<input type="checkbox" value="1" name="shopAll[2][chssp]"> <span style="color:#999">打折类物品，取消商品价格限制</span>
	</div>
	<div class="nyy01 nyy-2">
	<div class="nyy">
	<textarea rows="2" cols="45" name="shopAll[2][txthptext]"></textarea>
	</div>
	<div class="exp">
	您可以规定接手方在淘宝交易好评时填写规定的内容。额外支付的
	<em>0.1</em>
	个金币将奖励给接手方
	</div>
	<div class="cle"> </div>
	<div class="name01">商品名称：</div>
	<div class="va">
	<input class="txt" type="text" value="" maxlength="100" name="shopAll[2][txtgtitle]" style="width:100%;">
	</div>
	<div class="vaa">
	请输入与商品本身
	<span>一致的名称</span>
	，防止评价错乱！就是您发布在淘宝的商品标题，复制过来即可
	</div>
	</div>
	</div>
</li>
<SCRIPT TYPE="text/javascript" src="/wanjia/artTemplate/template.js"></SCRIPT>

		<li>
			<div class="name">是否需要改价：</div>
			<div class="value">
			<input id="cbxIsGJ" type="checkbox" style="margin-left:-2px;+margin-left:-5px;" value="1" name="cbxIsGJ">
			<br>
			<br>
			</div>
			<div class="exp">
				<!--商品价格+邮费&gt;任务商品担保价格时，请勾选！改价不要超过商品价格的50%-->
				商品价格不等于任务商品担保价格时，请勾选！改价不要超过商品价格的50%
			</div>
		</li>
		<li>
			<div class="name">是否商保任务：</div>
			<div class="value">
			<input id="cbxIsSB" type="checkbox" style="margin-left:-2px;+margin-left:-5px;" value="1" name="cbxIsSB"><input type="hidden" name="ensurePoint" value="0.3">
			<br>
			<br>
			</div>
			<div class="exp">
			要求接手方缴纳保证金后成为平台的商保用户才可以接手，每叠加400元，则需额外支付<em>0.3</em>个星星给接手方，——
			<a href="http://member.damaihu.com.cn/#ensure" target="_blank">我要立即加入商保</a>
			</div>
		</li>

		<li>
			<div class="name">基本星星：</div>
			<div class="value">
			<input id="txtMinMPrice" class="txt" type="text" value="0" style="width:130px;color:#f50;background:#F0F0F0;" name="txtMinMPrice" readonly="">
			  个星星
			</div>
			<div class="exp">
			发布该价格任务需要扣除的星星，不包括增值服务.
			<a target="_blank" href="/bbs/t122/">查看商品的价格与最底消耗额的关系</a>


			<br>
			您目前还有星星
			<em>1.00</em>
			个，
			<a target="_blank" href="http://www.damaihu.com.cn/BuyPoint">我要购买</a>
			</div>
		</li>
		<li><div class="name">追加悬赏星星：</div>
			<div class="value">
			<input id="pointExt" class="txt" type="text" style="width:130px;color:#f50;" value="" name="pointExt">
			  个星星
			</div>
			<div class="exp">
			追加悬赏星星数越多，更易被人接手，刷钻效率越高！
			</div>
		</li>
		<li>
			<div class="name">
			<span style="color:Red;">*</span>
			要求确认时间：
			</div>
			<div class="value">
			<select id="ddlOKDay" style="width:230px; height:20px;" name="ddlOKDay">
			<option value="0" selected="selected">马上好评（虚拟任务）</option>
			<option value="1">24小时好评实物任务(基本星星×1.5+0)</option>
			<option value="2">48小时好评实物任务(基本星星×1.5+1)</option>
			<option value="3">72小时好评实物任务(基本星星×1.5+2)</option>
			<option value="4">96小时好评实物任务(基本星星×1.5+3)</option>
			<option value="5">120小时好评实物任务(基本星星×1.5+4)</option>
			<option value="6">144小时好评实物任务(基本星星×1.5+5)</option>
			<option value="7">168小时好评实物任务(基本星星×1.5+6)</option>
			</select>
			<p id="pOKDes"></p>
			<p style="padding-top:3px;"><input id="isNoword" type="checkbox" value="1" name="isNoword"> <span style="color:#999">不带字好评</span></p>
			</div>
			<div class="exp">
			24小时以上属于实物任务！平台强制接手方延迟收货！
			<br>
			马上好评则必须立刻发货，属于虚拟商品任务，如果强制要求对方延期，是会被投诉的。<br>
			如勾选了不带字好评，又设置了好评内容，则系统自动取消不带字好评勾选
			</div>
		</li>
		<li>
			<div class="name">真实签收任务：</div>
			<div class="value">
				<input name="isSign" style="margin-left:-2px;+margin-left:-5px;" type="checkbox" id="isSign" value="1"> <label><input type="radio" id="Express_1" name="Express" value="1"> 全国</label>
				<label><input type="radio" id="isProvince" name="Express" value="2" cid="0">
                    同省[未设置]
                </label>
			<br>
			<br>
			</div>
			<div class="exp">
				全国(<em>1.5</em>个星星)，同省(<em>2</em>个星星)。按物流信息签收任务，单号请自行准备。<a href="/bbs/t1685/" target="_blank">了解详情</a>
			</div>
		</li>
		<!--<li>
		  <div class="name">匹配真实单号：</div>
		  <div class="value">
		  	<input name="isawb" style="margin-left:-2px;+margin-left:-5px;" type="checkbox" id="isawb" value="1"> 顺风快递(3元)
		  	<br/>
		  	<br/>
		  </div>
	      <div class="exp">
	      根据任务收货地址，匹配出符合收货地址的单号，请发布方修改发货地址为福建省某市，<br/>
	      单号信息官网可查，不了解的用户请勿选择；<a href="/bbs/t3917/" target="_blank">了解详情</a>
	  	  </div>
		</li>-->
		<a id="mao2"></a>
		<li class="add">
		    <div class="name">增值服务：</div>
			<div class="addvalue">
			   <ul>
			        <li>
                          <div class="name">留言提醒：</div>
                          <div class="value longest">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td valign="top" style="padding-left:0px;_padding-left:0px;margin:0px;">
                                    	<input id="cbxIsTip" type="checkbox" name="cbxIsTip" value="1">
                                    </td>
                                    <td valign="top" style="padding-left:15px;">
                                        <div id="divTip" style="display:none;margin-bottom:10px;">
                                            <div style="margin-bottom:2px;">
              	                                请拍商品 <input name="txtBuyCount" type="text" maxlength="4" id="txtBuyCount" class="txt" value="" style="width:50px;"> 件
              	                                <input id="cbIsHiddenName" type="checkbox" name="cbIsHiddenName" value="1">请匿名购买
              	                                <input id="cbIsNoneAssess" type="checkbox" name="cbIsNoneAssess" value="1">请只收货等待默认好评
              	                            </div>
              	                            <div style="margin-bottom:2px;">
              	                                区服请填 <input name="txtAreaService" type="text" maxlength="11" id="txtAreaService" value="" class="txt" style="width:150px;">&nbsp;&nbsp;
              	                                帐号请填 <input name="txtAccount" type="text" maxlength="11" id="txtAccount" value="" class="txt" style="width:150px;">
              	                            </div>
              	                            <div style="margin-bottom:2px;">
              	                                手机请填 <input onkeyup="this.value=this.value.replace(/[^0-9-]+/,'');" name="txtMobile" type="text" maxlength="11" id="txtMobile" value="" class="txt" style="width:150px;">&nbsp;&nbsp;
              	                                选择规格 <input name="txtSpecs" type="text" maxlength="11" id="txtSpecs" value="" class="txt" style="width:150px;">
              	                            </div>
              	                            <div style="margin-bottom:2px;">
              	                                动态评分
              	                                <select name="ddlPoints" id="ddlPoints" style="width:70px;">
													<option value="0" selected="selected">请选择</option>
													<option value="1">1 分</option>
													<option value="2">2 分</option>
													<option value="3">3 分</option>
													<option value="4">4 分</option>
													<option value="5">5 分</option>
												</select> 分，
												                      	                                物流选择
												<select name="ddlDeliver" id="ddlDeliver" style="width:70px;">
													<option value="">请选择</option>
													<option value="平邮">平邮</option>
													<option value="快递">快递</option>
													<option value="EMS">EMS</option>

												</select>
              	                            </div>
              	                            <div style="margin-bottom:2px;">提醒内容
              	                            	<input name="txtRemind" type="text" maxlength="18" id="txtRemind" value="" class="txt" style="width:375px;">
              	                            </div>
                                        </div>
              	                        <div style="color:#999;padding-left:1px;">您可在此给接手方留言提醒。<em>留言提醒不能作为申诉理由，但总不理会留言的接手方客户酌情处罚，广告留言则重罚。</em><a target="_blank" href="http://bbs.damaihu.com.cn/forum.php?mod=viewthread&amp;tid=431">查看留言规范</a></div>
                                    </td>
                                </tr>
                            </tbody></table>
                          </div>
                    </li>
			        <li>
							<div class="name">设置审核对象：</div>
							<div class="value short">
							<input id="cbxIsAudit" type="checkbox" name="cbxIsAudit" value="1">
							</div>
							<div class="exp">
							接手方接任务后，要您亲自审核后，接手方才可看到商品地址，对刷实物和规定旺旺聊天的商家很有用!可以事先QQ联系对方商量好。需要额外支付
							<em>0.3</em>
							个星星给接手方
							</div>
					</li>
					<!--
					<li>
							<div class="name">需要旺旺聊天：</div>
							<div class="value short">
							<input id="cbxIsWW" type="checkbox" name="cbxIsWW" value="1">
							</div>
							<div class="exp">
							要求接手方先在旺旺上聊几句，
							<em>强烈建议开启审核先使用QQ约定好</em>
							。需额外支付
							<em>1</em>
							个星星给接手方
							</div>
					</li>
					<li>
                          <div class="name">旺旺确认收货：</div>
                          <div class="value short"><input id="cbxIsLHS" type="checkbox" name="cbxIsLHS" value="1"></div>
                          <div class="exp">要求接手方收货前登录旺旺与卖家确认收到“货物/服务”同时声明对收到“货物/服务”满意以作为收货证据，需额外支付<em>0.5</em>个星星给接手方</div>
                    </li>
                	-->

                      <li>
                          <div class="name">规定收货地址：</div>
                          <div class="value longest">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td valign="top" style="padding-left:0px;_padding-left:0px;margin:0px;">
                                    	<input id="cbxIsAddress" type="checkbox" name="cbxIsAddress" value="1">
                                    </td>
                                    <td valign="top" style="padding-left:15px;">
                                        <div id="cbxTip" style="display:none;margin-bottom:10px;">
                                            <div style="margin-bottom:2px;">

              	                            </div>
              	                            <div style="margin-bottom:2px;">
              	                                姓名： <input name="cbxName" type="text" maxlength="8" id="cbxName" value="" class="txt" style="width:150px;">&nbsp;&nbsp;
												手机： <input name="cbxMobile" type="text" maxlength="11" id="cbxMobile" value="" class="txt" style="width:150px;">
              	                            </div>
              	                            <div style="margin-bottom:5px;">
              	                                邮编： <input name="cbxcode" type="text" maxlength="6" value="" id="cbxcode" class="txt" style="width:150px;">
              	                            </div>
              	                            <div style="margin-bottom:2px;">
											 地址： <textarea name="cbxAddress" id="cbxAddress" style="margin-left:0px;" title="此处填写您要求接手人的修改的收货地址，包含具体省、市、区及详细地址。">此处填写您要求接手人的修改的收货地址，包含具体省、市、区及详细地址，请不要填写“请带字好评”等引导的文字。</textarea>
											</div>
                                        </div>
              	                        <div style="color:#999;">您可以规定接手方在拍拍购买商品时填写您指定的收货地址。额外支付<em>0.5</em>个星星将奖励给接手方</div>
                                    </td>
                                </tr>
                            </tbody></table>
                          </div>
                      </li>
					  <li>
                          <div class="name">好评需要截图：</div>
                          <div class="value short">
                          	<input id="pinimage" type="checkbox" name="pinimage" value="1">
                          </div>
                          <div class="exp">您可以规定接手方好评后，必须上传截图证明好评内容。额外支付的<em>0.2</em>个星星将奖励给接手方</div>
                      </li>
                      <!--
					  <li>
                          <div class="name">购物分享：</div>
                          <div class="value short">
                          	<input id="isShare" type="checkbox" name="isShare" value="1">
                          </div>
                          <div class="exp">拍拍购物分享，分享内容同好评内容，额外支付<em>0.2</em>个星星将奖励给接手方</div>
                      </li>
                  	  -->
                      <li>
                          <div class="name">限制接手人：</div>
                          <div class="value longest">
                            <div id="divFMCount" style="margin-bottom:5px;">
                            	<div>
	                            	<label><input type="checkbox" value="1" id="cbxIsFMaxMCount" name="cbxIsFMaxMCount"></label>
	                            	<input type="radio" name="fmaxmc" id="fmaxmc_1" value="1" price="0.5"> 1天接1个(<em>0.5</em>个星星)
	                            	<input type="radio" name="fmaxmc" value="2" price="0.2" id="fmaxmc_2"> 1天接2个(<em>0.2</em>个星星)
	                            	<input type="radio" name="fmaxmc" id="fmaxmc_3" value="3"> 1周接1个(<em>1</em>个星星)
	                            	<input type="radio" name="fmaxmc" id="fmaxmc_4" value="4"> 每月接1个(<em>2</em>个星星)
                            	</div>
                            </div>
                            <div class="exp">您可以设置接手人在1天或一周内接手您发布任务的次数，需额外支付星星</div>
                          </div>
                      </li>
                      <!--
                      <li>
                          <div class="name">买号实名认证：</div>
                          <div class="value longest">
                            <div id="divBaLevel" style="margin-bottom:5px;">
                            	<input id="isReal" type="checkbox" value="1" name="isReal">
                            	<input type="radio" name="realname" value="1" id="isReal_1">
                            	<label for="isReal_1">普通实名(<em>0.5</em>个星星)</label>
                            </div>

                            <div class="exp">限制接手买号必须是通过了支付宝实名认证才可以接手此任务</div>
                          </div>
                      </li>
                      <li>
                          <div class="name">淘金币：</div>
                          <div class="value longest">
                            <input id="cbxIsTaoG" type="checkbox" value="1" name="cbxIsTaoG">
                            <input name="txtTaoG" type="text" maxlength="3" id="txtTaoG" class="txt" value="" style="width:40px;">
                            必须为10的倍数，最大不超过300，每10个淘金币需支付<em>0.1</em>个星星给接手方
                          </div>
                          <div class="exp"></div>
                      </li>

					 <li>
                          <div class="name">真实签收任务：</div>
                          <div class="value longest">
                          	<input name="isSign" type="checkbox" id="isSign" value="1">
                            <label><input type="radio" id="Express_1" name="Express" value="1"> 全国(<em>1.5</em>个星星)</label>
                            <label>
                            	<input type="radio" id="isProvince" name="Express" value="2" cid="0">
                            	同省(<em>2</em>个星星)
                            </label>
                            不了解的用户请勿选择；<a href="/bbs/t1685/" target="_blank">了解详情</a>
                          </div>
                          <div class="exp"></div>
                      </li>
                  		-->
					  <li>
                          <div class="name">指定接手地区：</div>
                          <div class="value longest">
						  <div style="margin-bottom:10px;">
						  <input id="isLimitCity" type="checkbox" title="勾上才启用 Tips:如果你只想指定某个省份接手，只需要选择省份即可，不需要选择市；也可以具体指定到某个省某个市接手" value="1" name="isLimitCity">
						  <select name="Province[]" id="Province">
						  	<option value="北京市">北京市</option>
						  	<option value="上海市">上海市</option>
						  	<option value="天津市">天津市</option>
						  	<option value="重庆市">重庆市</option>
						  	<option value="河北省">河北省</option>
						  	<option value="山西省">山西省</option>
						  	<option value="辽宁省">辽宁省</option>
						  	<option value="吉林省">吉林省</option>
						  	<option value="黑龙江">黑龙江</option>
						  	<option value="江苏省">江苏省</option>
						  	<option value="浙江省">浙江省</option>
						  	<option value="安徽省">安徽省</option>
						  	<option value="福建省">福建省</option>
						  	<option value="江西省">江西省</option>
						  	<option value="山东省">山东省</option>
						  	<option value="河南省">河南省</option>
						  	<option value="湖北省">湖北省</option>
						  	<option value="湖南省">湖南省</option>
						  	<option value="广东省">广东省</option>
						  	<option value="甘肃省">甘肃省</option>
						  	<option value="陕西省">陕西省</option>
						  	<option value="湖南省">湖南省</option>
						  	<option value="内蒙古">内蒙古</option>
						  	<option value="广西">广西</option>
						  	<option value="四川省">四川省</option>
						  	<option value="贵州省">贵州省</option>
						  	<option value="云南省">云南省</option>
						  	<option value="西藏">西藏</option>
						  	<option value="新疆">新疆</option>
						  	<option value="香港">香港</option>
						  	<option value="奥门">奥门</option>
						  	<option value="台湾">台湾</option>
						  </select>
						  <input type="checkbox" name="isMultiple" id="isMultiple" value="1">
						  多选省份
						  </div>
						  <div style="color:#999;">例如你指定北京和上海用户才可以接手，这样可避免重复用户交易，需额外支付<font color="red">0.5</font>个发布点</div>
						  </div>
					</li>

                      <li>
                          <div class="name" style="padding-top:5px\9;+padding-top:10px;">任务发布时间：</div>
                            <div class="value longest">
                                <div style="margin-bottom:3px;">
                                    <input id="cbxIsSetTime1" type="checkbox" name="cbxIsSetTime1" value="1"> <span style="color:#000">定时发布(1)</span>此任务将于
                                    <input name="txtSetTime" type="text" id="txtSetTime" class="txt" style="width:70px;color:#f50;" value="0" maxlength="3">分钟后显示在大厅
                                </div>
                                <div>
                                    <input id="cbxIsSetTime2" type="checkbox" value="1" name="cbxIsSetTime2"> <span style="color:#000">定时发布(2)</span>此任务将于
                                    <input name="txtdelaydate" type="text" id="txtdelaydate" onfocus="WdatePicker({minDate:'%y-%M-%d %H:%m',startDate:'%y-%M-%d %H:%m',dateFmt:'yyyy-MM-dd HH:mm'})" class="txt Wdate" style="width:200px;">
                                </div>
                                <p>定时发布需额外支付<em>0.1</em>个星星给接者</p>
                                <p>(设置延迟发布后，不论您是否在线，都会显示在任务大厅，请保持您的联系方式畅通，长时间不响应会被接手方投诉的，只针对单个任务，勾选后审核设置将跳过)</p>
                          </div>
                      </li>

                    <li>
                        <div class="name">过滤接手人：</div>
                        <div class="value longest">
                         <div id="divFilter" style="margin-bottom:10px;">
                         	<div>
                         		<label style="float:left;"><input type="checkbox" value="1" id="cbxIsFMinGrade" name="cbxIsFMinGrade"></label>
                         		<label class="labelstyle" style="float:left;width:160px;margin-left:10px;">接手人积分不低于</label>
                         		<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmingrade" value="10">10</label>
                         		<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmingrade" value="30">30</label>
                         		<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmingrade" value="50">50</label>
                         		<label class="labelstyle" style="width:40px"><input type="radio" name="fmingrade" value="100">100</label>
                         	</div>
							<div>
								<label style="float:left;"><input type="checkbox" value="1" id="cbxIsFMaxBBC" name="cbxIsFMaxBBC"></label>
								<label class="labelstyle" style="float:left;width:160px;margin-left:10px;">接手买号被拉黑次数不大于</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxbbc" value="5">5</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxbbc" value="10">10</label>
								<label class="labelstyle" style="width:40px"><input type="radio" name="fmaxbbc" value="15">15</label>
							</div>

							<div>
								<label style="float:left;"><input type="checkbox" value="1" id="cbxIsFMaxABC" name="cbxIsFMaxABC"></label>
								<label class="labelstyle" style="float:left;width:160px;margin-left:10px;">接手人刷客满意度不低于</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxabc" value="98">98%</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxabc" value="95">95%</label>
								<label class="labelstyle" style="width:40px"><input type="radio" name="fmaxabc" value="90">90%</label>
							</div>

							<div>
								<label style="float:left;"><input type="checkbox" value="1" id="cbxIsFMaxCredit" name="cbxIsFMaxCredit"></label>
								<label class="labelstyle" style="float:left;width:160px;margin-left:10px;">接手买号信誉不高于</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxcredit" value="10">10</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxcredit" value="150">150</label>
								<label class="labelstyle" style="width:40px"><input type="radio" name="fmaxcredit" value="200">200</label>
							</div>

							<div>
								<label style="float:left;"><input type="checkbox" value="1" id="cbxIsFMaxBTSCount" name="cbxIsFMaxBTSCount"></label>
								<label class="labelstyle" style="float:left;width:160px;margin-left:10px;">接手人被有效投诉次数不大于</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxbtsc" value="2">2</label>
								<label class="labelstyle" style="float: left;width:40px"><input type="radio" name="fmaxbtsc" value="3">3</label>
								<label class="labelstyle" style="width:40px"><input type="radio" name="fmaxbtsc" value="4">4</label>
							</div>
						</div>

	                        <div style="color:#999;">
	                        	您可以设置接手人的最低资质要求，系统将自动为您过滤掉不合格的接手人。每条任务需额外支付<em>0.5</em>个星星给接手方。
	                        	<a target="_blank" href="/bbs/t1314/">如何设置筛选条件</a>
	                        </div>
                        </div>
                    </li>

                    <li>
                      <div class="name">购买前停留：<img src="/wanjia/static/images/public/new.png" style="left: -5px;"></div>
                      <div class="value longest">
                        <div id="divFMCount" style="margin-bottom:5px;">
                        	<div>
                            	<label><input type="checkbox" value="1" id="stopDsTime" name="stopDsTime"></label>
  								<input type="radio" name="stopTime" value="1">
  								<span>停留1分钟（<b style="color: #FF5500;font-weight: normal;">0.1</b>个星星）</span>
  								<input type="radio" name="stopTime" value="2">
  								<span>停留3分钟（<b style="color: #FF5500;font-weight: normal;">0.3</b>个星星）</span>
  								<input type="radio" name="stopTime" value="3">
  								<span>停留5分钟（<b style="color: #FF5500;font-weight: normal;">0.5</b>个星星）</span>
  							</div>
                        </div>
                      </div>
                 	</li>
                 	<li>
						<div class="name">完整浏览到底：<img src="static/images/public/new.png" style="left: -15px;"></div>
						<div class="value short" style="height: 20px;">
							<input id="isViewEnd" type="checkbox" name="isViewEnd" value="1">
						</div>
						<div class="exp">要求接手方上传任务商品的底部浏览截图，需要额外支付<em>0.3</em>个星星</div>
					</li>

					<li>
                        <div class="name"> 保存任务模版：</div>
                        <div class="value longest">
                            <input id="isTpl" type="checkbox" value="1" name="isTpl"> <span style="color:#000">模版名称</span>
                            <input name="tplTo" type="text" id="tplTo" class="txt" maxlength="50"><br>
                            实现快捷方便的发布任务,普通用户最多可保存3个任务发布模板，VIP可拥有30个任务发布模板 <a target="_blank" href="http://www.damaihu.com.cn/info/vip">查看VIP特权</a>
                        </div>
                        <div class="exp"></div>
                    </li>
                  </ul>

              </div>
          </li>

		  <p class="taskbutton"><input type="button" id="btnCilentAdd" class="taskadd" value="立即发布" style="cursor: pointer; display: block;"></p>
		   <p class="taskbutton"><img src="/wanjia/static/images/taobao/rwss.jpg"></p>
		</ul>
</div>
</form>
<div id="subform">
	<div class="center">
 		<p class="anone"></p>
		<p class="txtone">
			批量发布数量:<input name="txtFCount" type="text" id="txtFCount" value="1" class="txt" maxlength="5">个&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		批量发布间隔:<input name="txtFTime" type="text" id="txtFTime" value="0" class="txt" maxlength="5">秒</p>
    </div>
</div>
</div>
<script>
	$("#content .menu a").click(function(){
		$(".fabu_box2").hide();
		$(".fabu_box2").eq($(this).index()).show();
	})
	$("#isMultiple").click(function(){
		if($("#isMultiple").is(":checked")){
			$("#Province").attr("multiple","multiple" );
			$("#Province").attr("size",5 );
		}else{
			$("#Province").attr("multiple","" );
			$("#Province").attr("size",1);
		}
	});

	$("#cbxIsAddress").click(function(){
		if($("#cbxIsAddress").is(":checked")){
			$("#cbxTip").css("display",'block');
		}else{
			$("#cbxTip").css("display",'none');
		}
	});
	$("#btnCilentAdd").click(function(){
		beforeSubmit1();
	});
	function beforeSubmit1(){
		alert('dada');
		xin =0;
		ddlZGAccount = $("#ddlZGAccount").val();

		txtGoodsUrl = $("#txtGoodsUrl").val();
        var strRegex =  /^http:\/\/([0-9a-z'()-]+\.)*((taobao)|(tmall)|(alibaba)|(paipai))\.com\/*/i;
        var re=new RegExp(strRegex);
        /*
        if (!re.test(txtGoodsUrl)){
            $.dialog({ title: '提示',content: '请输入正确的宝贝或店铺地址~',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
            return false;
        } 

		txtPrice = $('#txtPrice').val();

		if(!IsPlusNumeric(txtPrice) || txtPrice==0){
            $.dialog({ title: '提示',content: '请输入正确担保金额',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
            return false;
		}
		*/
		chssp=0;
		if($("#chssp").is(":checked")){
			chssp=1;
		}

		cbxIsGJ=0;
		if($("#cbxIsGJ").is(":checked")){
			cbxIsGJ=1;
		}

		cbxIsSB=0;
		if($("#cbxIsSB").is(":checked")){
			alert((txtPrice%400 + 1)*30);
			xin=xin+(txtPrice%400 + 1)*30;
			cbxIsSB=1;
		}

		txtMinMPrice = $('#txtMinMPrice').val();
		xin = xin + txtMinMPrice*100;
		pointExt = $('#pointExt').val();


		if(!IsPlusNumeric(pointExt)){

            $.dialog({ title: '提示',content: '请输入正确追加悬赏星星',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
            return false;
		}

		ddlOKDay =$("#ddlOKDay").val();

		isNoword=0;
		if($("#isNoword").is(":checked")){
			isNoword=1;
		}

		isSign=0;
		Express='';
		if($("#isSign").is(":checked")){
			isSign=1
			Express = $('input:radio[name="Express"]:checked').val();
			if(Express==1){
				xin = xin+150;
			}else if(Express==2){
				xin = xin+200;
			}
		}

		cbxIsTip=0;
		if($("#cbxIsTip").is(":checked")){
			cbxIsTip=1;
		}

		cbxIsAudit=0;
		if($("#cbxIsAudit").is(":checked")){
			xin = xin + 0.3;
			cbxIsAudit = 1;
		}

		cbxIsMsg=0;
		txtMessage = '';
		if($("#cbxIsMsg").is(":checked")){
			cbxIsMsg = 1;
			txtMessage = $("#txtMessage").val();
		}
		cbxIsAddress=0
		if($("#cbxIsAddress").is(":checked")){
			xin = xin + 50;
			cbxIsAddress = 1;
		}

		pinimage=0;
		if($("#pinimage").is(":checked")){
			xin = xin + 20;
			pinimage = 1;
		}
		cbxIsFMaxMCount =0;
		if($("#cbxIsFMaxMCount").is(":checked")){
			alert('yes');
			tprice = $('input:radio[name="fmaxmc"]:checked').attr('price');
			if(tprice){
				if(!IsPlusNumeric(pointExt)){
            		$.dialog({ title: '提示',content: '请刷新页面重试',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
         			  return false;
				}
				xin = xin + tprice*100;
			}else{
			
        		$.dialog({ title: '提示',content: '限制接手人未选择完毕',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
     			  return false;
			}
			cbxIsFMaxMCount=1;
		}


		cbxIsFMaxMCount =0;
		if($("#cbxIsFMaxMCount").is(":checked")){
			cbxIsFMaxMCount=1;
		}

		isLimitCity =0;
		if($("#isLimitCity").is(":checked")){
			xin = xin+50;
			isLimitCity=1;
		}

		cbxIsSetTime1 =0;
		txtSetTime='';
		if($("#cbxIsSetTime1").is(":checked")){
			cbxIsSetTime1=1;
			txtSetTime = $("#txtSetTime").val();
			xin =xin+10;
		}

		cbxIsSetTime2 =0;
		txtdelaydate = '';
		if($("#cbxIsSetTime2").is(":checked")){
			cbxIsSetTime2 = 1;
			txtdelaydate = $("#txtdelaydate").val();
			xin =xin+10;
		}

		cbxIsFMinGrade =0;
		if($("#cbxIsFMinGrade").is(":checked")){
			xin =xin +50;
			cbxIsFMinGrade=1;
		}
		cbxIsFMaxBBC =0;
		if($("#cbxIsFMaxBBC").is(":checked")){
			cbxIsFMaxBBC=1;
			xin =xin +50;
		}
		cbxIsFMaxABC =0;
		if($("#cbxIsFMaxABC").is(":checked")){
			cbxIsFMaxABC=1;
			xin =xin +50;
		}
		cbxIsFMaxCredit =0;
		if($("#cbxIsFMaxCredit").is(":checked")){
			cbxIsFMaxCredit=1;
			xin =xin +50;
		}
		cbxIsFMaxBTSCount =0;
		if($("#cbxIsFMaxBTSCount").is(":checked")){
			cbxIsFMaxBTSCount=1;
			xin =xin +50;
		}
		stopDsTime =0;
		if($("#stopDsTime").is(":checked")){
			stprice = $('input:radio[name="stopTime"]:checked').val();
			sttmp = 0;
			if(stprice == 1){
				sttmp = 10;
			}else if(stprice ==2 ){
				sttmp = 30;
			}else if(stprice ==3 ){
				sttmp =50;
			}
			xin = xin + sttmp;
			stopDsTime=1;

		}
		isViewEnd =0;
		if($("#isViewEnd").is(":checked")){
			xin = xin + 0.3;
			isViewEnd=1;
		}
		isTpl =0;
		tplTo='';
		if($("#isTpl").is(":checked")){
			isTpl=1;
			tplTo = $("#tplTo").val();
		}
		is=1;
		$.ajax({
			url:"/home/User/CheckMoney",
			data:{price:12,md:xin},
			dataType:"json",
			type:'post',
			success:function(data){
				if(data.msg=='notmoney'){
            		$.dialog({ title: '提示',content: '余额或者星星不足',fixed: true,lock: true,cancelValue: '关闭',cancel: function () { return true;}});
				}else if(data.msg=='ok'){
					$("#all-data").submit();
				}
			}
		});
	}

	/*
    $(function(){
    	$("#all-data").validate({
    		rules:{
    			txtGoodsUrl:{
    	        	  required:true,
    	        	  url:true
    			},
    			txtPrice:{
    	        	  required:true,
    	        	  number:true,
    	        	  min:1,
    			}
    		},
    		message:{
    			txtGoodsUrl:{
    	        	  required:"请输入URL",
    	        	  url:'请正确输入URL'
    			},
    			txtPrice:{
    	        	  required:'请正确输入金额',
    	        	  number:'请正确输入金额',
    	        	  min:'请正确输入金额',
    			}
    		}
    	});
*/
    	$('#txtPrice').change(function(){
    		var txtPrice= $('#txtPrice').val();
    		if(txtPrice>1 && txtPrice<40){
    			$("#txtMinMPrice").val('1');
    		}else if(txtPrice>=40 && txtPrice<100){

    			$("#txtMinMPrice").val('1.5');
    		}else if(txtPrice>=100 && txtPrice<200){

    			$("#txtMinMPrice").val('2');
    			
    		}else if(txtPrice>=200 && txtPrice<400){
    			$("#txtMinMPrice").val('4');
    			
    		}else if(txtPrice>=400){
    			$("#txtMinMPrice").val('6');

    		}else{
    			$("#txtMinMPrice").val('0');
    		}
    	});
		$('.tico a').each(function(e){
			$(this).click(
				function(){
					$(this).addClass('nov').siblings('a').removeClass('nov');
					$('#all-data').find('.fabu_box2').eq(e).show().siblings('.fabu_box2').hide();
				}
			)
		})
 </script>
 <SCRIPT id='adli' type="text/html">
	<li class="ligoods">
		<div class="name" name="url">商品链接地址2：</div>
		<div class="va">
		<input class="txt" type="text" hptext="" gtitle="" minprice="0" price="0" placeholder="http://" name="shopAll[2][txturl]" style="width:100%;">
		</div>
		<div class="name">商品担保价格：</div>
		<div class="vb">
		<input class="txt" type="text" value="0" name="shopAll[2][txtprice]" style="width:45px;">
		  元
		</div>
		<div class="ex">
		<a href="javascript:void(0)" name="delli" value="2" style="display: none;">删除此商品地址</a>
		<a href="javascript:void(0)" name="addli" style="display: inline;">添加一个商品地址</a>
		</div>
		<div class="vc" style="display:none;"></div>
		<div class="cle"></div>
		<div class="nr">
		<div class="short">
		<input type="checkbox" value="1" show="2" name="shopAll[2][cbhp]">
		</div>
		<div class="ny">
		规定好评内容：
		<em>您可以要求接手人对您的商品添加好评内容</em>　<input type="checkbox" value="1" name="shopAll[2][chssp]"> <span style="color:#999">打折类物品，取消商品价格限制</span>
		</div>
		<div class="nyy01 nyy-2">
		<div class="nyy">
		<textarea rows="2" cols="45" name="shopAll[2][txthptext]"></textarea>
		</div>
		<div class="exp">
		您可以规定接手方在淘宝交易好评时填写规定的内容。额外支付的
		<em>0.1</em>
		个金币将奖励给接手方
		</div>
		<div class="cle"> </div>
		<div class="name01">商品名称：</div>
		<div class="va">
		<input class="txt" type="text" value="" maxlength="100" name="shopAll[2][txtgtitle]" style="width:100%;">
		</div>
		<div class="vaa">
		请输入与商品本身
		<span>一致的名称</span>
		，防止评价错乱！就是您发布在淘宝的商品标题，复制过来即可
		</div>
		</div>
		</div>
	</li>
 </SCRIPT>
<SCRIPT TYPE="text/javascript">
$(document).on('click',".ex a",function(){
	var liname = $(this).attr('name');
	if(liname=='addli'){
		var lilength = $(".ligoods").length-1;
		alert(lilength);
		var html = template('adli', {'list':{} });
		$(".ligoods").eq(lilength).after(html);
	}else if(liname=='delli'){

	}
});
</SCRIPT>
<?php include('index_footer.php'); ?>