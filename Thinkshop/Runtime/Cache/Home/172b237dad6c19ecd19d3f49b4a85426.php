<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="sduabdlasdlasndlasndlasdnl">
		<meta name="author" content="dita">
		<link href="/yimishop1/favicon.ico" rel="icon" type="image/x-icon" />
		<title>依米校园街</title>
		<link href="/yimishop1/Public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/yimishop1/Public/css/style.css" rel="stylesheet">	
        <script type="text/javascript" src="/yimishop1/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/yimishop1/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/yimishop1/Public/js/main.js"></script>
		<script type="text/javascript" src="/yimishop1/Public/js/WdatePicker/WdatePicker.js"></script>
		<script type="text/javascript" src="/yimishop1/Public/js/uploadPreview.js"></script>
		
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
	          <a class="navbar-brand header" href="/yimishop1" style="color:#38a38a;font-size:30px;">依米</a>
	        </div>
	        <div id="navbar" class="header">
	          <ul>
	            <li><a href="/yimishop1">首页</a></li>
	            <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">图书教材</a>
		            <ul class="dropdown-menu" style="min-width:120px;">
		            	<li style="width:100%;"><a href="/yimishop1/Home/Product/lists/cid/7">专业书籍</a></li>		                
		                <li style="width:100%;"><a href="/yimishop1/Home/Product/lists/cid/8">公共书籍</a></li>	
		                <li style="width:100%;"><a href="/yimishop1/Home/Product/lists/cid/9">考研书籍</a></li>	                
		            </ul>
		        </li>
	            <li><a href="/yimishop1/Home/Product/lists/cid/3">代步车辆</a></li>
	            <li><a href="/yimishop1/Home/Product/lists/cid/4">体育用品</a></li>
	            <li><a href="/yimishop1/Home/Product/lists/cid/5">考试耳机</a></li>
				<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">其他</a>
				    <ul class="dropdown-menu" style="min-width:120px;">
		            	<li style="width:100%;"><a href="/yimishop1/Home/Product/lists/cid/10">生活</a></li>	                
		            </ul>
		        </li>
	          </ul>
	          <form action="/yimishop1/Home/Product/lists" method="get" class="navbar-form navbar-left" role="search" style="line-height:30px;">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Search" style="width:300px;" name="key">
	            </div>
	            <button type="submit" class="btn btn-default">搜索</button>
	          </form>
	          <?php if($_SESSION['account']== ''): ?><ul class="nav navbar-nav navbar-right">
	            <li><a href="/yimishop1/Home/Index/login">登录</a></li>
	            <li><a href="/yimishop1/Home/Index/register">注册</a></li>
	          </ul>
	          <?php else: ?>
	            <label class="user"><a style="cursor:pointer;"><?php echo (session('account')); ?></a></label><?php endif; ?>
	           <div class="usercenter">
	           <div class="usercenter_top">
	         
                    <img src="/yimishop1/Uploads/<?php echo (cookie('face')); ?>" class="img-circle">
              				
				</div>
				<div class="usercenter_bottom">
				<p><a href="/yimishop1/Home/Member/index">个人中心</a></p>
				<a class="exit" href="/yimishop1/Home/Index/index/exit/1">退出</a>
				</div>
		      </div>
	        </div>
	      </div>
	    </nav>
		<div class="container main">
			<div class="row">
				<div class="col-md-10">
					<h3 style="color:#38a38a;"><b>最新发布</b></h3>
					<ul class="list-inline" style="border-top:1px solid #38a38a;">
						<?php if(is_array($goods)): foreach($goods as $key=>$goods): ?><a href="/yimishop1/Home/Product/detail/gid/<?php echo ($goods["id"]); ?>" target="_blank">
						<li>
							<div style="border:1px solid #ddd;margin:10px;width:204px;height:240px;padding:10px;">
							<div style="width:160px;height:160px;padding-left:12px;"><img src="/yimishop1/Uploads/<?php echo ($goods["g_img"]); ?>" class="img-responsive" style="margin:0 auto;"></div>
							<div style="height:70px;line-height:70px;padding-left:10px;"><a href="/yimishop1/Home/Product/detail/gid/<?php echo ($goods["id"]); ?>"><?php echo (substr($goods["g_name"],0,22)); ?></a><span style="color:red;float:right;padding-right:12px;">￥<?php echo ($goods["price"]); ?></span></div>
							<p style="text-align:center;"></p>
							</div>							
						</li>
						</a><?php endforeach; endif; ?>
					</ul>
					<!-- <div class="pagination pagination-centered pagination-large">
						<ul>
							<li>
								<a href="#">上一页</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">下一页</a>
							</li>
						</ul>
					</div> -->
				</div>
				<div class="col-md-2">
					<a href="/yimishop1/Home/Product"><div class="release"><span style="color:#fff;">发布闲置</span></div></a>
				</div>
                <div class="col-md-2">
                    <a href="/yimishop1/Home/Product/cart"><div class="demand"><span style="color:#fff;">我的购物车</span></div></a>
                </div>
			</div>
		</div>
	</body>

</html>