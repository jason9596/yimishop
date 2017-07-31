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
		<div class="container main">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline order">
					<?php if($_GET['cid']== ''): if($_GET['key']== ''): ?><li><a href="/yimishop/Home/Product/lists/orderby/1">销量</a></li><li><a href="/yimishop/Home/Product/lists/orderby/2">价格</a></li><li><a href="/yimishop/Home/Product/lists/orderby/3">最新</a></li><li><a href="/yimishop/Home/Product/lists/orderby/4">评分
					</a></li>
					<?php else: ?>
					<li><a href="/yimishop/Home/Product/lists/key/<?php echo ($_GET['key']); ?>/orderby/1">销量</a></li><li><a href="/yimishop/Home/Product/lists/key/<?php echo ($_GET['key']); ?>/orderby/2">价格</a></li><li><a href="/yimishop/Home/Product/lists/key/<?php echo ($_GET['key']); ?>/orderby/3">最新</a></li><li><a href="/yimishop/Home/Product/lists/key/<?php echo ($_GET['key']); ?>/orderby/4">评分
					</a></li><?php endif; ?>					
					<?php else: ?>
					<li><a href="/yimishop/Home/Product/lists/cid/<?php echo ($_GET['cid']); ?>/orderby/1">销量</a></li><li><a href="/yimishop/Home/Product/lists/cid/<?php echo ($_GET['cid']); ?>/orderby/2">价格</a></li><li><a href="/yimishop/Home/Product/lists/cid/<?php echo ($_GET['cid']); ?>/orderby/3">最新</a></li><li><a href="/yimishop/Home/Product/lists/cid/<?php echo ($_GET['cid']); ?>/orderby/4">评分
					</a></li><?php endif; ?>
					</ul>
					<ul class="list-inline" style="border-top:1px solid #38a38a;padding-top:28px;">
					    <?php if(is_array($goods)): foreach($goods as $key=>$goods): ?><a href="/yimishop/Home/Product/detail/gid/<?php echo ($goods["id"]); ?>">						
						<li>
							<div style="border:1px solid #ddd;margin:10px;width:250px;height:280px;padding:10px;">
							<img src="/yimishop/Uploads/<?php echo ($goods["g_img"]); ?>" class="img-responsive" style="width:200px;height:200px;margin:0 auto;">
							<div style="height:70px;line-height:70px;padding-left:10px;"><a href="/yimishop/Home/Product/detail/gid/<?php echo ($goods["id"]); ?>"><?php echo ($goods["g_name"]); ?></a><span style="color:red;float:right;padding-right:12px;">￥<?php echo ($goods["price"]); ?></span></div>
							<p style="color:red;padding-left:10px;"></p>
							</div>
						</li>
						</a><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>