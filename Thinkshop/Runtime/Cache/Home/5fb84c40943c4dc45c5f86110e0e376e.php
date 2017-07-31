<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="sduabdlasdlasndlasndlasdnl">
		<meta name="author" content="dita">
		<link href="/yimishop/favicon.ico" rel="icon" type="image/x-icon" />
		<title>依米校园街</title>
		<link href="/yimishop/Public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/yimishop/Public/css/style.css" rel="stylesheet">	
        <script type="text/javascript" src="/yimishop/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/yimishop/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/yimishop/Public/js/main.js"></script>
		<script type="text/javascript" src="/yimishop/Public/js/WdatePicker/WdatePicker.js"></script>
		<script type="text/javascript" src="/yimishop/Public/js/uploadPreview.js"></script>
		
		<style type="text/css">
           .usercenter {
           	position:absolute;
           	top:60px;
           	margin-left:98px;
            float:right;
            z-index:100;
            display:inline-block;
           	width:180px;
           	height:250px;
           	border:1px solid #FFB300;
           	text-align:center;
           	display:none;
           }
           .usercenter_top {
           	height:78px;
           	background: #FFB300;
           }
           .usercenter_top img {
           	width:64px;
           	height:64px;
           	margin-top:7px;
           }
           .usercenter_bottom {
           	padding-top:30px;
           	background:#fff;
           	height:170px;
           }
           .usercenter_bottom p {
           	height:60px;
           	line-height:50px;
           }
           .usercenter_bottom p a {
           	color:#000;
           	font-size:20px;
           }
           .usercenter_bottom p a:hover {
           	text-decoration:none;
           	color:#FFB300;
           }
           a.exit {
           	 margin:0 auto;
             display:block;
             width:90px;
             height:30px;
             line-height:28px;
             border:1px solid #aaa;
             color:#000;
             font-size:14px;
             cursor:pointer;
           }
           a.exit:hover {
           	text-decoration:none;
           	color:#FFB300;
           	border:1px solid #FFB300;
           }
           
		</style>
		<script type="text/javascript">
		$(function() {
          $('label.user a').bind('click',function() {
                if($('div.usercenter').css('display')=='none'){
                   $('div.usercenter').css('display','inline-block'); 
                }else {
                   $('div.usercenter').css('display','none'); 
                }                
          	   
			});
		});
		</script>
	</head>
	<body>
		 <nav class="navbar navbar-default navbar-fixed-top header" style="background:#fff;">
	      <div class="container header">
	        <div class="navbar-header header">
	          <a class="navbar-brand header" href="/yimishop" style="color:#38a38a;font-size:30px;">依米</a>
	        </div>
	        <div id="navbar" class="header">
	          <ul>
	            <li><a href="/yimishop">首页</a></li>
	            <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">图书教材</a>
		            <ul class="dropdown-menu" style="min-width:120px;">
		            	<li style="width:100%;"><a href="/yimishop/Home/Product/lists/cid/7">专业书籍</a></li>		                
		                <li style="width:100%;"><a href="/yimishop/Home/Product/lists/cid/8">公共书籍</a></li>	
		                <li style="width:100%;"><a href="/yimishop/Home/Product/lists/cid/9">考研书籍</a></li>	                
		            </ul>
		        </li>
	            <li><a href="/yimishop/Home/Product/lists/cid/3">代步车辆</a></li>
	            <li><a href="/yimishop/Home/Product/lists/cid/4">体育用品</a></li>
	            <li><a href="/yimishop/Home/Product/lists/cid/5">考试耳机</a></li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">其他</a>
				    <ul class="dropdown-menu" style="min-width:120px;">
		            	<li style="width:100%;"><a href="/yimishop/Home/Product/lists/cid/10">生活</a></li>	                
		            </ul>
		        </li>
	          </ul>
	          <form action="/yimishop/Home/Product/lists" method="get" class="navbar-form navbar-left" role="search" style="line-height:30px;">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Search" style="width:300px;" name="key">
	            </div>
	            <button type="submit" class="btn btn-default">搜索</button>
	          </form>
	          <?php if($_SESSION['account']== ''): ?><ul class="nav navbar-nav navbar-right">
	            <li><a href="/yimishop/Home/Index/login">登录</a></li>
	            <li><a href="/yimishop/Home/Index/register">注册</a></li>
	          </ul>
	          <?php else: ?>
	            <label class="user"><a style="cursor:pointer;"><?php echo (session('account')); ?></a></label><?php endif; ?>
	           <div class="usercenter">
	           <div class="usercenter_top">
	         
                    <img src="/yimishop/Uploads/<?php echo (cookie('face')); ?>" class="img-circle">
              				
				</div>
				<div class="usercenter_bottom">
				<p><a href="/yimishop/Home/Member/index">个人中心</a></p>
				<a class="exit" href="/yimishop/Home/Index/index/exit/1">退出</a>
				</div>
		      </div>
	        </div>
	      </div>
	    </nav>
<style type="text/css">
    ul.list li {
    	width:150px;
    	height:50px;
        font-size:16px; 
    	text-align:center;
    	line-height:50px;
    	margin-left:10px;
    	display: block;
    	cursor:pointer;
    }
    ul.list li a {
    	color:#fff;
    }
    .jbzl p {
    	color:#444;
    	font-size:18px;
    	padding-bottom:10px;
    }
    .jbzl p input,select{
    	display:none;
    }
    .row {
    	color:#777;
    }
    p.head {
    	color:#38a38a;
    	font-weight:bold;
    	font-size:20px;
    	border-bottom:1px solid #38a38a;
    	padding-bottom:10px;
    	margin-bottom:30px;
    	width:500px;
    }
    p.head span {
    	float:right;
    	font-size:14px;
    	padding-top:10px;
    	cursor:pointer;
    }
    .face .mod {
    	height:149px;
    	z-index:100;
    	width:149px;
    	background:#999;
    	text-align:center;
    	opacity:0.6;
    	margin-top:-150px;
    	display:none;
    }
    .god{
    	display:block;
    	margin-bottom:20px;
    	padding-top:10px;
    	padding-bottom:10px;
    	
    	margin-right:60px;
    	background:#fff;
    }
    .approve p {
    	font-size:16px;
    	height:50px;
    	line-height:50px;
    	
    }
    .approve p span{
    	color:#38a38a;
    }
    .approve p input{
    	border:0px;		    	
    }
    .memnav li a:hover {
    	color:#38a38a;
    }
    body {
    	color:#777;
    }
</style>
<script>
    function upload(upbtn,imgdiv,imgShow){
        new uploadPreview({ UpBtn: upbtn, DivShow: imgdiv, ImgShow: imgShow});
    }
</script>
<link href="/yimishop/Public/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="/yimishop/Public/js/fileinput.min.js" type="text/javascript"></script>
<script src="/yimishop/Public/js/fileinput_locale_zh.js" type="text/javascript"></script>
<div class="container main">
    <div style="height:15px;"></div>
	<div class="row" style="border:1px solid #ccc;padding:10px;">
    <div class="ibox-content col-md-2">
        <div class="row">
            <div id="crop-avatar" class="col-md-2">
                <div class="avatar-view" title="" data-original-title="" style="width:150px;height:150px;">
                     <img src="/yimishop/Uploads/<?php echo ($userinfo["face"]); ?>" style="width:150px;height:150px;cursor:pointer;" data-toggle="modal" data-target="#avatar-modal">
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6">
		<h3 style="color:#38a38a"><?php if($userinfo["username"] == ''): echo ($userinfo["account"]); else: echo ($userinfo["username"]); endif; ?></h3>
		 <p>学校:<span><?php echo ($userinfo["school"]); ?></span></p>
		 <p>发布:<span><?php echo ($spro); ?>个闲置</span></p>
		 <p>淘到:<span><?php echo ($bpro); ?>个闲置</span></p>	
	</div>
</div>
<div style="height:30px;"></div>
<div class="row" style="border:1px solid #ccc;background: #38a38a;">
	<div class="col-md-9">
		<ul class="nav navbar-nav memnav memnav list">
		   <li><a href="/yimishop/Home/Member/index">个人资料</a></li>
		   <li><a href="/yimishop/Home/Member/buypro">淘到的闲置</a></li>
		   <li><a href="/yimishop/Home/Member/sellpro">发布的闲置</a></li>
		   <li><a href="/yimishop/Home/Member/activity">营销工具</a></li>
		   <li><a href="/yimishop/Home/Member/approve">认证中心</a></li>
		</ul>
	</div>
</div>
<div style="height:20px;"></div>
<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">×</button>
                    <h4 class="modal-title" id="avatar-modal-label">修改头像</h4>
                </div>
                <div class="modal-body">
                    <div class="htmleaf-container">
                        <div class="container kv-main">
                            <form enctype="multipart/form-data" action="/yimishop/Home/Member/face" method="post">
                                <div class="form-group" style="width:800px;">
                                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="" data-preview-file-icon="" name="aas">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
       <!--  </form> -->
    </div>
  </div>
</div>
<script type="text/javascript">

</script>