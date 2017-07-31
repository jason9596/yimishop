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
		        table.order tr td{
		        	padding:12px;
		        	width:160px;
		        }
		        .bar {
		        	padding-top:20px;
		        	float:right;
	                width:130px;
	                text-align:right;	                
		        } 
		</style>

		<div class="container main">
		    <div class="row">
             <h4 style="padding-bottom:10px;">收货人信息<a style="float:right;font-size:14px;cursor:pointer;text-decoration:none;"  class="add">新增收货地址</a></h4>
              <div style="border:1px dashed #ccc;padding:20px;color:#777;margin-bottom:20px;" id="addrinfo">
              	<?php if($aid == 0): ?><p>您还没设置收货地址，可以先去<a style="cursor:pointer;text-decoration:none;" class="add">新增收货地址</a></p>
              	<?php else: ?>
              	<?php if(is_array($addresss)): foreach($addresss as $key=>$addresss): ?><p>
              	<input type="radio" name="addrid" value="<?php echo ($addresss["id"]); ?>">&nbsp;&nbsp;&nbsp;&nbsp;<label><?php echo ($addresss["aname"]); ?>&nbsp;&nbsp;<?php echo ($addresss["address"]); ?>&nbsp;&nbsp;<?php echo ($addresss["atel"]); ?>&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;<a>修改</a><?php endforeach; endif; ?>
                </p><?php endif; ?>
              </div>
              <div style="border:1px dashed #ccc;padding:20px;display:none;" id="add">
	              <form action="" method="post"  class="form-horizontal">
	              	<div style="margin-bottom:10px;">
					    <label>收货人姓名:</label>
					    <input type="text" id="aname" class="form-control" placeholder="收货人姓名" name="aname" style="width:300px;">
					</div>
					<div style="margin-bottom:10px;">
					    <label>收货地址:</label>
					    <input type="text" id="address" class="form-control" placeholder="收货地址" name="address" style="width:300px;">
	                </div>
	                <div style="margin-bottom:10px;">
				    <label>是否为默认地址</label>
				      &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="id_defa" value="0">否&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <input type="radio" name="id_defa" checked="true" value="1">是
				    </div>
	                <div style="margin-bottom:10px;">
					    <label>联系电话:</label>
					    <input type="text" id="atel" class="form-control" placeholder="联系电话" name="atel" style="width:300px;">
	                </div>
	                <input type="hidden" name="act" value="address">
	                <button type="submit" class="btn btn-default" name="addsub" style="width:120px;height:40px;background:#38a38a;color:#fff;">提交</button>
	               </form>
		    </div>
		    </div>
			<div class="row">
            <h4>确认订单信息</h4>
            <form name="form-cart" method="post" action="">
            <table width="100%" class="order">
            	<tr><td style="text-align:left;">产品</td><td>单价</td><td>个数</td><td>优惠</td><td>总价</td></tr>
            	<?php if(is_array($goods)): foreach($goods as $key=>$goods): ?><tr style="border:1px dashed #ccc;">           		
                    <td style="text-align:left;width:600px;">
	                    <div style="display:inline-block;">
	                    <img src="/yimishop/Uploads/<?php echo ($goods["g_img"]); ?>" style="width:90px;height:90px;"> 
	                    </div>  
	                    <div style="display:inline-block;margin-left:10px;"><p><a href="/yimishop/Home/Product/detail/gid/<?php echo ($goods["id"]); ?>" name="gname"><?php echo ($goods["g_name"]); ?></a></p></div>
                    </td> 
                    <td>
                       <p class="price" name="price">￥<?php echo ($goods["price"]); ?></p> 
                    </td> 
                    <td>
                       <p name="num"><?php echo ($goods["num"]); ?></p> 
                    </td>
                    <td>
                       <p class="youhui">优惠<?php echo ($goods["youhui"]); ?>元</p> 
                    </td>
                     <td>
                       <p name="sum">￥<?php echo ($goods["sum"]); ?></p> 
                    </td>                      
            	</tr><?php endforeach; endif; ?>
            </table>
             <div class="bar">
	                <span style="display:block;">优惠:&nbsp;￥<?php echo ($youhui); ?>&nbsp;元</span> 		       
	                <span style="display:block;">合计:&nbsp;￥<?php if($sum != ''): echo ($sum); else: echo ($goods["sum"]); endif; ?>&nbsp;元</span>  
		            <input type="hidden" name="logid" value="0" id="addid">
		            <input type="hidden" name="gid" value="<?php echo ($goods["id"]); ?>"> 
		            <input type="hidden" name="g_name" value="<?php echo ($goods["g_name"]); ?>">
		            <input type="hidden" name="product_price" value="<?php echo ($goods["price"]); ?>"> 
		            <input type="hidden" name="num" value="<?php echo ($goods["num"]); ?>">
		            <input type="hidden" name="sum" value="<?php echo ($goods["sum"]); ?>"> 
		            <input type="hidden" name="pic" value="<?php echo ($goods["g_img"]); ?>">
		            <input type="hidden" name="sellid" value="<?php echo ($goods["uid"]); ?>">
		            <input type="hidden" name="confirm">
		            <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;margin-top:15px;">提交订单</button>		    
			 </div>
            </form>
			</div>
		</div>

		
<script type="text/javascript">
$('.add').bind('click',function() {
   $('#addrinfo').toggle();
   $('#add').toggle();
});
$('input[name=addrid]').bind('click',function() {
   $va=$('input[name=addrid]:checked').val();
   $('#addid').val($va);
});
</script>