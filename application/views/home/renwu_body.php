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