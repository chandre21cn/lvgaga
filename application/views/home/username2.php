
<?php include"member_body.php";?>

<script src="/static/js/jquery.form.js"></script>>
<script type="text/javascript" src="/static/js/jquery.validate.js"></script>

<div id="_right">
<!--修改个人资料begin-->
	<div id="myDate">
    <div class="bq_menu2">
		<a class="nov" >修改个人资料</a>
		<a class="revLogin" >修改登录密码</a>
		<a class="safeCode" >修改安全操作码</a>
		<a class="emailSafe" >获取安全验证码</a>
		<a class="safeTrouble" >修改密码保护</a>
	</div>
	<br>

    <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
      	<tbody><tr>
			<td width="20%" valign="middle" height="40" align="right">用户名：</td>
			<td width="80%" valign="middle" align="left"> <span class="chengse2 strong">18779166875</span></td>
		</tr>
		<tr>
	        <td valign="top" height="40" align="right" style="line-height:45px;">头  像：</td>
			<td colspan="2">
				<span class="xginfo_tx">
					<img width="87" height="87" id="user_avatar" src="http://ucenter.damaihu.com.cn/avatar.php?uid=218394&amp;size=middle&amp;1399354900">
				</span>
			</td>
        </tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<span id="uploadImg">
					<input id="fileupload" type="file" name="mypic">
				</span>
			</td>
		</tr>
		<script>
$(function () {
    var bar = $('.bar');
    var percent = $('.percent');
    var showimg = $('#showimg');
    var progress = $(".progress");
    var files = $(".files");
    var btn = $(".btn span");
    $("#fileupload").wrap("<form id='myupload' action='<?php echo  site_url('home/User/UploadImage') ?>' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload").change(function(){ //选择文件
        $("#myupload").ajaxSubmit({
            dataType:  'json', //数据格式为json
            beforeSend: function() { //开始上传
                showimg.empty(); //清空显示的图片
                progress.show(); //显示进度条
                var percentVal = '0%'; //开始进度为0%
                bar.width(percentVal); //进度条的宽度
                percent.html(percentVal); //显示进度为0%
                btn.html("上传中..."); //上传按钮显示上传中
            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%'; //获得进度
                bar.width(percentVal); //上传进度条宽度变宽
                percent.html(percentVal); //显示上传进度百分比
            },
            success: function(data) { //成功
                //获得后台返回的json数据，显示文件名，大小，以及删除按钮
                files.html("<b>"+data.name+"("+data.size+"k)</b><span class='delimg' rel='"+data.pic+"'>删除</span>");
                //显示上传后的图片
                var img = "/files/"+data.pic;
                $("#user_avatar").attr('src',img );
                showimg.html("<img src='"+img+"'>");
                btn.html("添加附件"); //上传按钮还原
            },
            error:function(xhr){ //上传失败
                btn.html("上传失败");
                bar.width('0');
                files.html(xhr.responseText); //返回失败信息
            }
        });
    });
            $(".delimg").bind('click',function(){
                var pic = $(this).attr("rel");
                $.post("<?php echo  site_url('manage/Hd/UploadImage') ?>",{imagename:pic,act:'del'},function(msg){
                    if(msg==1){
                        files.html("删除成功.");
                        showimg.empty(); //清空图片
                        progress.hide(); //隐藏进度条
                    }else{
                        alert(msg);
                    }
                });
            });
});

</script>
			<tr>
            <td valign="middle" height="40" align="right">手机号码：</td>
            <td valign="middle" align="left"> <strong class="chengse2"><?php echo $data->ceilphone;?></strong></td>
        </tr>
    <form method='post' action='/home/User/SaveUserbase'>
			<tr>
            <td valign="middle" height="40" align="right">QQ号码：</td>
            <td valign="middle" align="left"><input type="text" class="text_normal" name="qq" value="<?php echo $data->qq;?>"></td>
        </tr>
        <tr>
			<td valign="middle" height="40" align="right">真实姓名：</td>
			<td valign="middle" align="left"><input type="text" class="text_normal" name="truename" value="<?php echo $data->realname; ?>"></td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">Email：</td>
			<td valign="middle" align="left"><?php echo $data->email; ?></td>
		</tr>
		<tr>
		    <td valign="middle" height="40" align="right">性别：</td>
		    <td valign="middle" align="left">
		    	<input type="radio" value="0" name="sex"
		    	<?php if($data->sex == 0):?>
		    	checked="checked"
		    	<?php endif;?>
		    	>男&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="sex"

		    	<?php if($data->sex == 1):?>
		    	checked="checked"
		    	<?php endif;?>
		    	>女
		    </td>
	    </tr>
	    <tr>
		    <td valign="middle" height="40" width="100" align="right">开启异地登陆短信验证：</td>
		    <td align="left">
		    	<input type="radio" value="1" name="remote" <?php if($data->remote == 1) echo "checked='checked'" ; ?>>开启
		    	<input type="radio" value="0" name="remote" <?php if($data->remote == 0) echo "checked='checked'" ; ?>>关闭
		      	<font style="display:none"color="red">未开启</font>
		    </td>
	    </tr>
	    <tr>
		    <td valign="middle" height="40" align="right">签收快递发货省份：</td>
		    <td valign="middle" align="left">

		    		<select class="text_normal" name="sendAddress">
		    			<?php if($data->sendAddress !='' ):?>
			    		<option value="<?php echo $data->sendAddress;?>"><?php echo $data->sendAddress;?></option>
						<?php else:?>
			    		<option value="请选择">请选择</option>
			    		<?php endif;?>
						<option value="北京市">北京市</option>
						<option value="天津市">天津市</option>
						<option value="河北省">河北省</option>
						<option value="山西省">山西省</option>
						<option value="内蒙古">内蒙古</option>
						<option value="江苏省">江苏省</option>
						<option value="安徽省">安徽省</option>
						<option value="山东省">山东省</option>
						<option value="辽宁省">辽宁省</option>
						<option value="吉林省">吉林省</option>
						<option value="黑龙江">黑龙江</option>
						<option value="上海市">上海市</option>
						<option value="浙江省">浙江省</option>
						<option value="江西省">江西省</option>
						<option value="福建省">福建省</option>
						<option value="湖北省">湖北省</option>
						<option value="湖南省">湖南省</option>
						<option value="河南省">河南省</option>
						<option value="广东省">广东省</option>
						<option value="广西">广西</option>
						<option value="海南省">海南省</option>
						<option value="重庆市">重庆市</option>
						<option value="四川省">四川省</option>
						<option value="贵州省">贵州省</option>
						<option value="云南省">云南省</option>
						<option value="西藏">西藏</option>
						<option value="陕西省">陕西省</option>
						<option value="甘肃省">甘肃省</option>
						<option value="宁夏">宁夏</option>
						<option value="青海省">青海省</option>
						<option value="新疆">新疆</option>
				  	</select>

		        发布同省快递签收任务时的省份，一旦选定不可修改</td>
	    </tr>
	    <tr>
		    <td valign="middle" height="40" align="right">签收快递收货省份：</td>
		    <td valign="middle" align="left">

			    	<select class="text_normal" name="recAddress1">
		    			<?php if($data->recAddress1 !='' ):?>
			    		<option value="<?php echo $data->recAddress1;?>"><?php echo $data->recAddress1;?></option>
						<?php else:?>
			    		<option value="请选择">请选择</option>
			    		<?php endif;?>
						<option value="北京市">北京市</option>
						<option value="天津市">天津市</option>
						<option value="河北省">河北省</option>
						<option value="山西省">山西省</option>
						<option value="内蒙古">内蒙古</option>
						<option value="江苏省">江苏省</option>
						<option value="安徽省">安徽省</option>
						<option value="山东省">山东省</option>
						<option value="辽宁省">辽宁省</option>
						<option value="吉林省">吉林省</option>
						<option value="黑龙江">黑龙江</option>
						<option value="上海市">上海市</option>
						<option value="浙江省">浙江省</option>
						<option value="江西省">江西省</option>
						<option value="福建省">福建省</option>
						<option value="湖北省">湖北省</option>
						<option value="湖南省">湖南省</option>
						<option value="河南省">河南省</option>
						<option value="广东省">广东省</option>
						<option value="广西">广西</option>
						<option value="海南省">海南省</option>
						<option value="重庆市">重庆市</option>
						<option value="四川省">四川省</option>
						<option value="贵州省">贵州省</option>
						<option value="云南省">云南省</option>
						<option value="西藏">西藏</option>
						<option value="陕西省">陕西省</option>
						<option value="甘肃省">甘肃省</option>
						<option value="宁夏">宁夏</option>
						<option value="青海省">青海省</option>
						<option value="新疆">新疆</option>
				  	</select>


			    	<select class="text_norma1" name="recAddress2">

		    			<?php if($data->recAddress2 !='' ):?>
			    		<option value="<?php echo $data->recAddress2;?>"><?php echo $data->recAddress2;?></option>
						<?php else:?>
			    		<option value="请选择">请选择</option>
			    		<?php endif;?>
						<option value="北京市">北京市</option>
						<option value="天津市">天津市</option>
						<option value="河北省">河北省</option>
						<option value="山西省">山西省</option>
						<option value="内蒙古">内蒙古</option>
						<option value="江苏省">江苏省</option>
						<option value="安徽省">安徽省</option>
						<option value="山东省">山东省</option>
						<option value="辽宁省">辽宁省</option>
						<option value="吉林省">吉林省</option>
						<option value="黑龙江">黑龙江</option>
						<option value="上海市">上海市</option>
						<option value="浙江省">浙江省</option>
						<option value="江西省">江西省</option>
						<option value="福建省">福建省</option>
						<option value="湖北省">湖北省</option>
						<option value="湖南省">湖南省</option>
						<option value="河南省">河南省</option>
						<option value="广东省">广东省</option>
						<option value="广西">广西</option>
						<option value="海南省">海南省</option>
						<option value="重庆市">重庆市</option>
						<option value="四川省">四川省</option>
						<option value="贵州省">贵州省</option>
						<option value="云南省">云南省</option>
						<option value="西藏">西藏</option>
						<option value="陕西省">陕西省</option>
						<option value="甘肃省">甘肃省</option>
						<option value="宁夏">宁夏</option>
						<option value="青海省">青海省</option>
						<option value="新疆">新疆</option>
				  	</select>


			    	<select class="text_norma1" name="recAddress3">
		    			<?php if($data->recAddress3 !='' ):?>
			    		<option value="<?php echo $data->recAddress3;?>"><?php echo $data->recAddress3;?></option>
						<?php else:?>
			    		<option value="请选择">请选择</option>
			    		<?php endif;?>
						<option value="北京市">北京市</option>
						<option value="天津市">天津市</option>
						<option value="河北省">河北省</option>
						<option value="山西省">山西省</option>
						<option value="内蒙古">内蒙古</option>
						<option value="江苏省">江苏省</option>
						<option value="安徽省">安徽省</option>
						<option value="山东省">山东省</option>
						<option value="辽宁省">辽宁省</option>
						<option value="吉林省">吉林省</option>
						<option value="黑龙江">黑龙江</option>
						<option value="上海市">上海市</option>
						<option value="浙江省">浙江省</option>
						<option value="江西省">江西省</option>
						<option value="福建省">福建省</option>
						<option value="湖北省">湖北省</option>
						<option value="湖南省">湖南省</option>
						<option value="河南省">河南省</option>
						<option value="广东省">广东省</option>
						<option value="广西">广西</option>
						<option value="海南省">海南省</option>
						<option value="重庆市">重庆市</option>
						<option value="四川省">四川省</option>
						<option value="贵州省">贵州省</option>
						<option value="云南省">云南省</option>
						<option value="西藏">西藏</option>
						<option value="陕西省">陕西省</option>
						<option value="甘肃省">甘肃省</option>
						<option value="宁夏">宁夏</option>
						<option value="青海省">青海省</option>
						<option value="新疆">新疆</option>
				  	</select>

		     签收同省快递签收任务时的省份，可选3个，选定不可修改</td>
	    </tr>
	    <tr>
		    <td valign="middle" height="40" align="right">签收快递收货详细信息：</td>
		   <td valign="middle" align="left">
		    	<input class="text_normal" type="text" placeholder="收件人姓名" value="<?php echo $data->rec_name1;?>" maxlength="8" size="9" name="rec_name1">
		    	<input class="text_normal" type="text" placeholder="收货地址" value="<?php echo $data->rec_add1;?>" maxlength="150" size="30" name="rec_add1">
		    	<input class="text_normal" type="text" placeholder="手机号码" value="<?php echo $data->rec_tel1;?>" maxlength="15" size="15" name="rec_tel1">
		    	<input class="text_normal" type="text" placeholder="邮编" value=""<?php echo $data->rec_code1;?> maxlength="8" size="8" name="rec_code1">
		    </td>
		</tr>
		<tr>
		    <td valign="middle" height="40" align="right">签收快递收货详细信息：</td>
		    <td valign="middle" align="left">
		    	<input class="text_normal" type="text" placeholder="收件人姓名" value="<?php echo $data->rec_name2;?>" maxlength="8" size="9" name="rec_name2">
		    	<input class="text_normal" type="text" placeholder="收货地址" value="<?php echo $data->rec_add2;?>" maxlength="150" size="30" name="rec_add2">
		    	<input class="text_normal" type="text" placeholder="手机号码" value="<?php echo $data->rec_tel2;?>" maxlength="15" size="15" name="rec_tel2">
		    	<input class="text_normal" type="text" placeholder="邮编" value=""<?php echo $data->rec_code2;?> maxlength="8" size="8" name="rec_code2">
		    </td>
		</tr>
		<tr>
		    <td valign="middle" height="40" align="right">签收快递收货详细信息：</td>
		    <td valign="middle" align="left">
		    	<input class="text_normal" type="text" placeholder="收件人姓名" value="<?php echo $data->rec_name3;?>" maxlength="8" size="9" name="rec_name3">
		    	<input class="text_normal" type="text" placeholder="收货地址" value="<?php echo $data->rec_add3;?>" maxlength="150" size="30" name="rec_add3">
		    	<input class="text_normal" type="text" placeholder="手机号码" value="<?php echo $data->rec_tel3;?>" maxlength="15" size="15" name="rec_tel3">
		    	<input class="text_normal" type="text" placeholder="邮编" value=""<?php echo $data->rec_code3;?> maxlength="8" size="8" name="rec_code3">
		    </td>
		</tr>
		<tr>
		    <td valign="middle" height="40" align="right">安全操作码：</td>
		    <td valign="middle" align="left">
		  	  <input type="password" class="text_normal" name="passcode">&nbsp; <span class="chengse2">*修改资料需要提供安全操作码</span>
			</td>
	    </tr>
	    <tr>
		    <td valign="middle" height="70" align="right">&nbsp;</td>
		    <td valign="middle" align="left"><input type="submit" name='ti' class="xginfo_qr"></td>
	    </tr>
    </form>
    </tbody></table>
    <!--end-->
<!--修改登录密码begin-->
		<form method='post' action="/home/User/ChangePassword" id="passform" >
<table width="625" border="0" cellspacing="0" cellpadding="0" id="passTable">
		<tbody>
		<tr>
			<td width="89" valign="middle" height="40" align="right" style="border-bottom:#CCCCCC 1px dashed;">安全操作码：</td>
			<td style="color:#878787;border-bottom:#CCCCCC 1px dashed;">
				<input type="password" name="safeCode" class="text_normal">
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">新登录密码：</td>
			<td style="color:#878787;">
				<input type="password"  id='password'name="password" class="text_normal">
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">确认密码：</td>
			<td>
				<input type="password" name="pass" class="text_normal">
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" class="Pass_sub">
			</td>
		</tr>
	</tbody>
</table>

</form>

		<script>
			$(function(){
					$("#passform").validate({
						rules:{
							password:{ required:true,
		   		    	  	   minlength: 6
								},
								pass:{
								required:true,
				   		    	equalTo: "#password"
								}
							},
					 messages: {
						 password: {
		    	    		   required:"请输入密码",
		    	    		   minlength: jQuery.format("密码不能小于{0}个字 符"),
		    	    	   },
		    	    	   pass: {
				    	    required: "请确认密码",
				    	    equalTo: '密码不符'
				    	  },
					 }
				})
			})
		</script>
<!--end-->
<!--修改安全操作码begin-->
<table width="625" border="0" cellspacing="0" cellpadding="0" id="safeTable">
		<tbody><tr>
			<td width="89" valign="middle" height="40" align="right" style="border-bottom:#CCCCCC 1px dashed;">短信验证码：</td>
			<td style="color:#878787;border-bottom:#CCCCCC 1px dashed;">
				<input type="password" name="safeCode" class="text_normal"> &nbsp;您今天还可以输错 [<span class="chengse2">0</span>] 次操作码
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">新安全码：</td>
			<td style="color:#878787;">
				<input type="password" name="password" class="text_normal">
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">确认安全码：</td>
			<td>
				<input type="password" name="pass" class="text_normal">
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" class="Safe_sub">
			</td>
		</tr>
	</tbody>
</table>
<!--end-->
<!--获取安全验证码begin-->
<table width="625" border="0" cellspacing="0" cellpadding="0" id="formEmail">
		<tbody><tr>
			<td width="200" valign="middle" height="40" align="right">
				<select id="selectxz">
					<option value="1">输入您的账号邮箱</option>
					<option value="2">输入您的手机号码</option>
				</select>
			</td>
			<td>
				<input id="emailText" type="text" name="email" class="text_normal">
				<input id="sphoneText" type="text" name="sphone" class="text_normal">
				&nbsp;<span class="chengse2">注意：同一用户一天最多只能找回3次操作码</span>
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input id="email_sub" type="submit" class="email_sub">
				<input id="phone_sub" type="submit" class="phone_sub">
			</td>
		</tr>
	</tbody>
</table>
<!--end-->
<!--修改密码保护begin-->
<table width="625" border="0" cellspacing="0" cellpadding="0" id="formQuestions">
    	<tbody><tr>
			<td width="89" valign="middle" height="40" align="left" colspan="5" style="color: #EB6222;padding-left: 18px;">提示：如取消安全提问则默认选择【无安全问题】,答案为空,输入安全操作码后确认即可。
			</td>
		</tr>
		<tr>
			<td width="89" valign="middle" height="40" align="right">选择问题：</td>
			<td>
				<select class="text_normal" id="questionid">
	    			<option value="0">无安全问题</option>
	    			<option value="1">早上几点起床？</option>
	    			<option value="2">TA最爱吃的菜？</option>
	    			<option value="3">好朋友的名字？</option>
	    			<option value="4">你理想的体重？</option>
	    			<option value="5">爱人的生日？</option>
				</select>
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">问题的答案：</td>
			<td>
				<input type="input" name="password" class="text_normal">
			</td>
		</tr>
		<tr>
			<td valign="middle" height="40" align="right">安全操作码：</td>
			<td>
				<input type="password" name="safe" class="text_normal">
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" class="quest_sub">
			</td>
		</tr>
	</tbody>
</table>
<!--end-->
</div>

</div>
</div>

	<script>
		 $("#myDate table").hide();
		 $("#myDate table").eq(0).show();
		$('.bq_menu2 a').click(function(){
			 $("#myDate table").hide();
			 $("#myDate table").eq($(this).index()).css('display','block');
			});
	</script>
<?php include 'index_footer.php';?>