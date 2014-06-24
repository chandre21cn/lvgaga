<?php include"member_header2.php";?>
<?php include"member_frist_header.php";?>

<div id="main">
<div class="user_left">
	<!-- 发布任务 -->
	<a href="/home/Dating/publish" class="imgico renwu1"></a>
	<div class="left_alert">
		<ul>
		   <li><a href="/home/Dating/publish">淘宝任务</a></li>
		   <li style="display:none"><a href="http://paipai.damaihu.com.cn/#publish/oneTask">拍拍任务</a></li>
		</ul>
	</div>

	<!-- 线 -->
	<span class="imgdian dian1"></span>
	<span class="imgdian dian2" style="top:260px;height:39px;"></span>
	<span style="display:none"class="imgdian dian3" style="top:422px;"></span>
	<!-- 显示 -->
	<div class="left_main">
		<ul>
			<li>
				<a class="imgico li1 lia_a1"></a>
				<a href="/home/user/bank" class="imgico text1 lia_a2"></a>
				<?php if (strstr(uri_string(),'bank')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
			</li>
			<li>
				<a class="imgico li1 lib_a1"></a>
				<a href="/home/user/payment" class="imgico text1 lib_a2"></a>

				<?php if (strstr(uri_string(),'payment')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
				<i></i>
			</li>
			<li>
				<a class="imgico li1 lic_a1"></a>
				<a href="/home/user/payde" class="imgico text1 lic_a2"></a>

				<?php if (strstr(uri_string(),'payde')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
				<i></i>
			</li>
			<li>
				<a class="imgico li1 lid_a1"></a>
				<a href="/home/user/rechange" class="imgico text1 lid_a2"></a>
				<?php if (strstr(uri_string(),'rechange')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
				<i></i>
			</li>
			<li></li>
			<!-- APP下载 -->
			<li style="display:none">
				<a class="imgico li1 lie_rjxz1"></a>
				<a href="http://www.damaihu.com.cn/Platform/soft" class="imgico text1 lie_rjxz2"></a>
				<i></i>
			</li>
			<li style="display:none">
				<a class="imgico li1 lif_a1"></a>
				<a href="#seckill" class="imgico text1 lif_a2"></a>
				<i></i>
			</li>
			<!-- 地雷 -->
			<li>
				<a class="imgico li1 lif_dilei1"></a>
				<a href="/home/User/ZhuanPan" target="_blank" class="imgico text1 lif_dilei2"></a>

				<?php if (strstr(uri_string(),'zz')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
				<i></i>
			</li>
			<li style="display:none">
				<a class="imgico li1 lig_a1"></a>
				<a href="#black" class="imgico text1 lig_a2"></a>
				<i></i>
			</li>
			<li>
				<a class="imgico li1 lih_a1"></a>
				<a href="/home/user/username" class="imgico text1 lih_a2"></a>

				<?php if (strstr(uri_string(),'username')):?>
				<i><img src="/wanjia/static/images/user/dadian.png" /></i>
				<?php endif;?>
				<i></i>
			</li>
			<li style="display:none">
				<a class="imgico li1 lii_a1"></a>
				<a href="http://www.damaihu.com.cn/info/popularize" class="imgico text1 lii_a2"></a>
				<i></i>
			</li>
			<li style="display:none">
				<a class="imgico li1 lij_a1"></a>
				<a href="#thread" class="imgico text1 lij_a2"></a>
				<i></i>
			</li>
			<li style="display:none">
				<a class="imgico li1 lik_a1"></a>
				<a href="http://member.damaihu.com.cn/#message/personal" class="imgico text1 lik_a2"></a>
				<i></i>
			</li>

		</ul>
	</div>
	<a class="imgico renwu2" href="/home/user/userjob"></a>
</div>

<script>
$(function(){
	$('.user_left .renwu1').mouseover(function(){$('.user_left .left_alert').css('display','block');})
	$('.user_left .left_alert').mouseleave(function(){$('.user_left .left_alert').css('display','none');})
})
</script>