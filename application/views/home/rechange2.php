
<?php include"member_body.php";?>
<div class="rechange">
    <div class="mh_tishi">
		您可以在这里将您接任务赚取的星星转换成存款哦！每个星星根据您的平台等级的提高可以换取<span class="chengse2">0.3元-0.35元</span>。<br>
		详细数据请查看"<a class="comlink" target="_blank" href="http://www.damaihu.com.cn/info/vip.html">VIP申请栏目</a>"
	</div>
	<div class="bq_menu2">
		<a id="bq_menu2_1" class="nov" href="javascript:;">星星回收</a>
		<a id="bq_menu2_2" href="javascript:;">积分兑换</a>
	</div>

	<!-- 栏目一 -->

	<div id="bq_menu2_cont_1" class="bq_menu_list">
		<p class="hsmd_ts">您当前等级为：新手会员，你现在有
			<span class="chengse2">
				<strong>1.00</strong>
			</span>
			个星星。星星回收价格：
			<span class="chengse2">
				<span>1个星星=</span>
				0.35元
			</span>&nbsp;
			<a class="comlink" target="_blank" href="/home/index/Vip">查看高等级回收价格</a>
		</p>
		<span class="hsmd_hsj">回收数量：
				<select name="nums">
					<option value="20">20 </option>
					<option value="50">50 </option>
					<option value="100">100 </option>
					<option value="200">200 </option>
					<option value="500">500 </option>
					<option value="1000">1000 </option>
					<option value="5000">5000 </option>
				</select>个
		</span>
		<input type="submit" class="hsmd_btn">
    </div>
	<div id="bq_menu2_cont_2" class="bq_menu_list">
	 	<p>
	 		<span class="STYLE4">您当前等级为：</span>
	 		<span class="hsmd_dj">
	 			<span class="lanse">新手会员</span> &nbsp;&nbsp;&nbsp;
	 		</span>
	 		<span class="STYLE4">当前积分：</span>
	 		<span class="hsmd_dj">
	 			<span class="chengse2">0.00</span> &nbsp;&nbsp;&nbsp;
	 		</span>
	 		<span class="STYLE4">可换积分</span>
	 		<span class="hsmd_dj">：
	 			<span class="chengse2">0</span>
	 		</span>，兑换前您的帐号必须先预留1000积分。
	 	</p>
		<ul class="hsmd_list">
		 	<li class="hs_jf">150积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">1</span>个</li>
			<li><input type="hidden" value="1" name="num"><input type="button" class="hs_dh"></li>
		</ul>
		 <ul class="hsmd_list">
		 	<li class="hs_jf">300积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">2</span>个</li>
			<li><input type="hidden" value="2" name="num"><input type="button" class="hs_dh"></li>
		 </ul>
		 <ul class="hsmd_list">
		 	<li class="hs_jf">600积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">4</span>个</li>
			<li><input type="hidden" value="4" name="num"><input type="button" class="hs_dh"></li>
		 </ul>
		 <ul class="hsmd_list">
		 	<li class="hs_jf">1200积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">8</span>个</li>
			<li><input type="hidden" value="8" name="num"><input type="button" class="hs_dh"></li>
		 </ul>
		 <ul class="hsmd_list">
		 	<li class="hs_jf">1500积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">10</span>个</li>
			<li><input type="hidden" value="10" name="num"><input type="button" class="hs_dh"></li>
		 </ul>
		 <ul class="hsmd_list">
		 	<li class="hs_jf">3000积分</li>
			<li class="hs_jb">可兑换星星<span class="hongse">20</span>个</li>
			<li><input type="hidden" value="20" name="num"><input type="button" class="hs_dh"></li>
		 </ul>
	</div>
	<!-- 栏目二 -->
	<div class="cle"></div>
	<p class="fuli">星星还可以换以下福利：</p>
	<div class="weal_hsj">
		<ul>
	    	<!-- <li>
	    		<input type="radio" name="sid" value="1" checked="checked"><img src="/static/images/ico/rechange1.gif"> 一心普通买号2个&#12288;<font color="red">30星星</font>
	    	</li> -->
			<li><input type="radio" name="sid" value="6"> <img src="/wanjia/static/images/ico/rechange2.gif"> 一级VIP月使用权　<font color="red">60星星</font></li>
			<li><input type="radio" name="sid" value="7"> <img src="/wanjia/static/images/ico/rechange4.gif"> 钻石VIP月使用权　<font color="red">100星星</font></li>
			<li><input type="radio" name="sid" value="8"> <img src="/wanjia/static/images/ico/rechange3.gif"> 皇冠VIP月使用权　<font color="red">200星星</font></li>
	 	 </ul>
	 	<p style="padding:10px 0px; line-height:20px; color:#666">
	  		我们所提供的均为安全有效买号，售出后由于违反淘宝规则造成封号，不予任何售后。购买后买号信息将发送到您的站内信箱，请登陆 会员中心 - 站内提醒 查收。请遵循以上原则后进行购买。
	  	</p>
     	<p>
     		<input type="submit" class="weal_btn">
     	</p>
	</div>
</div>
</div>
</div>
<script>
$(function(){
		$('.bq_menu2 a').each(function(e){
			$(this).click(
			function(){
				$(this).addClass('nov').siblings('a').removeClass('nov');
				$('.bq_menu_list').eq(e).show().siblings('.bq_menu_list').hide();
			})
		})
	})

</script>

<?php include 'index_footer';?>