<!DOCTYPE html>
<html lang='zh'>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/static/dist/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/static/dist/js/html5shiv.min.js"></script>
        <script src="/static/dist/js/respond.min.js"></script>
    <![endif]-->
    <script src="/static/js/jquery-1.9.1.js"></script>
    <script src="/static/js/jquery.form.js"></script>
  </head>
  <body>
	<div class='container'>
	<div class="row">
  <div class=" col-md-3">后台管理</div>
  <div class="col-md-9">很好的后台</div>
</div>
<div class="row">
  <div class=" col-md-2">
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          用户管理
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body" style='padding:0px'>
          <div class="list-group"  style="margin-bottom:0;">
		   <a href="#" class="list-group-item active"> 买家列表 </a>
		   <a href="#" class="list-group-item">用户和对应的账户</a>
		   <a href="#" class="list-group-item">卖家列表</a>
		   <a href="#" class="list-group-item">管理员列表</a>
		  </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          金额管理
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body" style='padding:0px'>
          <div class="list-group"  style="margin-bottom:0;">
		   <a href="#" class="list-group-item active">买家收账</a>
		   <a href="#" class="list-group-item">卖家出账</a>
		   <a href="#" class="list-group-item">积分提现</a>
		   <a href="#" class="list-group-item">充值</a>
		  </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          任务管理
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body" style='padding:0px'>
          <div class="list-group"  style="margin-bottom:0;">
		   <a href="#" class="list-group-item active">放出的任务</a>
		   <a href="#" class="list-group-item">被接受的任务</a>
		   <a href="#" class="list-group-item">没被接收 的任务</a>
		  </div>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          网站设置
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body" style='padding:0px'>
         <div class="list-group" style="margin-bottom:0;">
	       <a href="<?php echo  site_url('manage/Hd/GoVip') ?>" class="list-group-item">VIP设置</a>
	       <a href="<?php echo  site_url('manage/Hd/GoMai') ?>" class="list-group-item">麦点设置</a>
	       <a href="<?php echo  site_url('manage/Hd/GoKa') ?>" class="list-group-item ">麦点卡设置</a>
	       <a href="<?php echo  site_url('manage/Hd/GoCollect') ?>" class="list-group-item ">收藏麦点花费设置</a>
	       <a href="<?php echo  site_url('manage/Hd/GoLiu') ?>" class="list-group-item ">流量麦点花费设置</a>
	       <a href="<?php echo  site_url('manage/Hd/GoJiao') ?>" class="list-group-item ">打理笔交易设置</a>
	  </div>
      </div>
    </div>
  </div>
</div>
  </div>

<div class="col-md-9 col-md-offset-1">