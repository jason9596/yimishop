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
        table tr {
        	border:1px solid #ddd;
        }
        table tr td,th{
        	padding:10px;
        }
</style>
<div class="container main">
	<div class="row">
    <h3 style="border-bottom:2px solid #ddd;padding-bottom:20px;font-weight:bold;color:#38a38a">我的购物车</h3>
    <form name="form-cart" method="post" action="" id="form">
    <table width="100%">
    	<tr style="background:#ddd;color:#666;"><th>全选</th><th>商品</th><th>单价</th><th>数量</th><th>小计（元）</th><th>操作</th></tr>
    	<tr style="height:15px;border:0px;"></tr>
    	<?php if(is_array($carts)): foreach($carts as $key=>$carts): ?><tr>
    		<td class="first">
                <label class="cart-checkbox"><input type="checkbox" name="cart_id[]" value="<?php echo ($carts["id"]); ?>"></label>
            </td>
            <td style="width:600px;">
                <div style="display:inline-block;">
                <img src="/yimishop/Uploads/<?php echo ($carts["gimg"]); ?>" style="width:90px;height:90px;">
                <input type="hidden" name="pic" value="<?php echo ($carts["gimg"]); ?>"> 
                </div>  
                <div style="display:inline-block;"><p><a href="/yimishop/Home/Product/detail/gid/<?php echo ($carts["gid"]); ?>"><?php echo ($carts["gname"]); ?></a></p></div>
            </td> 
            <td style="width:120px;">
               <p class="price">￥<?php echo ($carts["price"]); ?></p> 
            </td> 
            <td>
               <label><input type="text" name="nums" value="<?php echo ($carts["num"]); ?>" class="nums" readonly></label>
            </td>
            <td style="width:120px;">
            <p>￥<span class="sumprice"><?php echo ($carts["sumprice"]); ?></span></p> 
            </td>
             <td style="width:200px;text-align:center;">
               <label><a href="javascript:void(0);" class="del">删除</a><input type="hidden" name="cid" value="<?php echo ($carts["id"]); ?>"></label>
            </td>                      
    	</tr>
    	<tr style="height:15px;border:0px;"></tr><?php endforeach; endif; ?>
    </table>
    <input type="hidden" name="csum" value="">
    <input type="hidden" name="act" value="confirm">
    </form>
    <div class="toolbar">
        <div class="jiesuan">	
        <span>已选：<span id="cnum">0</span>&nbsp;件</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <span>合计：￥<span id="csum">0</span>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <a class="submit-btn submit" href="javascript:void(0);">结算</a>
        </div>
    </div>
	</div>
</div>
<script type="text/javascript">
	$('input[type=checkbox]').on('click',function() {
		var test = $('input[type=checkbox]:checked');
		var checksum=0;
		var checklen=0;
		for (var i=0; i<test.length;i++) {
			checksum+=parseInt($(test[i]).parent().parent().parent().find('.sumprice').text());
			checklen++;
		}
        $('#cnum').text(checklen);
        $('#csum').text(checksum);
        $('input[name=csum]').val(checksum);
	});
	$('.del').on('click',function() {
        var cid=$(this).next('input').val();
        $.ajax({
        	type:'get',
        	data:{'act':'del','cid':cid},
            success:function(data) {
            	if(data) {
            		alert('删除成功');
            		location.reload(); 
            	}else {
            		alert('删除失败');
            		location.reload();
            	}
            }
        });

	});
    $('.submit').on('click',function() {
        var cid=$('input[type=checkbox]:checked').length;
        if(cid) {
           $('#form').submit();
        }else {
            alert('至少选择一个商品');
            return false;
        }
    });
</script>