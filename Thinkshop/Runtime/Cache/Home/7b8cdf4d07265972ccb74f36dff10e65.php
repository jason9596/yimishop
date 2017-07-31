<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.glyphicon-star {
	color:#FFB300;
}
.sliderbox{height:80px;overflow:hidden;width:400px;z-index:20;margin-top:-80px;}
.sliderbox .slider{float:left;height:80px;width:400px;position:relative;overflow:hidden;display:inline;background:rgba(12,12,12,0.3);}
.sliderbox .slider li{float:left;width:80px;}
.sliderbox .slider li img{border:solid 1px #dfdfdf;}
.sliderbox .slider li.current img{border:solid 2px #38a38a;}
</style>
<!DOCTYPE html>
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
<script type="text/javascript" src="/yimishop1/Public/js/pic.js"></script>
<div class="container main">
	<div class="row">
	<div class="col-md-5" style="padding:5px;">
	<div class="zoombox">
		<div class="zoompic"><img src="/yimishop1/Uploads/<?php echo ($good["img_more"]["0"]["g_img"]); ?>" width="400" height="400" title="" style="display:inline;"></div>	
		<div class="sliderbox">
			<div class="slider" id="thumbnail">
				<ul>
				    <?php if(is_array($good["img_more"])): foreach($good["img_more"] as $key=>$img_more): ?><li class=""><a href="/yimishop1/Uploads/<?php echo ($img_more["g_img"]); ?>" target="_blank"><img src="/yimishop1/Uploads/<?php echo ($img_more["gl_img"]); ?>" width="70" height="70"></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>		
	</div>
	</div>
	<div class="col-md-6" style="padding-top:30px;">
		<h4 style="color:#38a38a;font-weight:bold;"><?php echo ($good["g_name"]); ?></h4>
		<p style="font-size:18px;">价格：<del style="font-size:12px;">￥<?php echo ($good["ori_price"]); ?></del><span name="price" style="color:red;font-weight:bold;">￥<?php echo ($good["price"]); ?></span></p>
		<div style="padding:10px;">
			<p>卖家：&nbsp;&nbsp;<?php echo ($good["username"]); ?></p>
			<p>学校：&nbsp;&nbsp;<?php echo ($good["school"]); ?></p>
			<p>发布时间：&nbsp;&nbsp;<?php echo (date('Y-m-d',$good["g_time"])); ?></p>
			<p>销量：&nbsp;&nbsp;<?php echo ($good["sales"]); ?></p>
			<?php if($godact != ''): ?><p style="color:red">优惠条件：满<?php echo ($godact["ac_num1"]); if($godact["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>，减<?php echo ($godact["ac_nums1"]); ?>元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(($godact["ac_num2"]) != "0"): ?>满<?php echo ($godact["ac_num2"]); if($godact["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>，减<?php echo ($godact["ac_nums2"]); ?>元</p><?php endif; endif; ?>
		</div>
		<form name="form1" method="post" action="/yimishop1/Home/Product/confirm">
		<div style="margin-top:10px;"><span>数量：&nbsp;&nbsp;</span><a href="javascript:void(0);" id="low_num">-</a><input type="text" value="1" name="nums" class="nums"><a href="javascript:void(0);" id="up_num">+</a> &nbsp;&nbsp;( 库存&nbsp;<span id="g_num"><?php echo ($good["g_sum"]); ?></span>&nbsp;件 )</div>
		<div style="margin-top:30px;">
		<!-- <input type="hidden" name="price" value="<?php echo ($good["price"]); ?>"> -->
		<input type="hidden" name="g_id" value="<?php echo ($good["id"]); ?>">
		<input type="hidden" name="youhui" value="0">
		<input type="hidden" name="ac_num1" value="<?php echo ($godact["ac_num1"]); ?>">
		<input type="hidden" name="ac_nums1" value="<?php echo ($godact["ac_nums1"]); ?>">
		<input type="hidden" name="actype" value="<?php echo ($godact["actype"]); ?>">
		<input type="hidden" name="ac_num2" value="<?php echo ($godact["ac_num2"]); ?>">
		<input type="hidden" name="ac_nums2" value="<?php echo ($godact["ac_nums2"]); ?>">

		<input type="submit" class="btn btn-default buy" id="buy" name="sub" value="立即购买">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" class="btn btn-default buy" id="add-cart" value="加入购物车" data-toggle="modal" data-target="#myModal">
		</div>
		</form>
	</div>
    </div>
    <div class="aa"></div>
    <div class="row">
      <h4>相似的商品</h4>
      <ul class="list-inline">
            <?php if(is_array($similar)): foreach($similar as $key=>$similar): ?><li><div class="similar-pic"><a href="/yimishop1/Home/Product/detail/gid/<?php echo ($similar["id"]); ?>"><img src="/yimishop1/Uploads/<?php echo ($similar["g_img"]); ?>"></a><p><a href="/yimishop1/Home/Product/detail/gid/<?php echo ($similar["id"]); ?>"><?php echo ($similar["g_name"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>￥<?php echo ($similar["price"]); ?></span></p></div></li><?php endforeach; endif; ?>
	  </ul>
    </div>
    <div class="row">
     <h4>商品评论</h4>
       <table class="table" style="width:100%">
       	<?php if(is_array($comms)): foreach($comms as $key=>$comms): ?><tr><td><p><?php $__FOR_START_30932__=0;$__FOR_END_30932__=$comms["co_mark"];for($i=$__FOR_START_30932__;$i < $__FOR_END_30932__;$i+=1){ ?><span class="glyphicon glyphicon-star"></span><?php } ?></p><p><?php echo (date('Y-m-d h:i:s',$comms["co_time"])); ?></p></td><td style="line-height:40px;"><?php echo ($comms["co_content"]); ?></td><td style="width:160px;line-height:40px;"><?php echo ($comms["co_username"]); ?></td></tr><?php endforeach; endif; ?>
       </table>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="cart-head modal-header">加入购物车<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>
    <div class="modal-body">
    	<p>添加<span class="status"></span>！</p>
        <p class="cart-stats">购物车共有<strong class="count"></strong>件</p>
        <a title="去购物车结算" class="cart-checkout" href="/yimishop1/Home/Product/cart">去购物车结算</a>
    </div>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
$('#up_num').bind('click',function() {
	var num=$("input[name='nums']").val()*1;
	var count=$('#g_num').text()*1;
	var nums=++num;
	if(nums>=count) {
		var nums=count;
	}
	$('input[name=youhui]').val(youhui(num));
	$("input[name='nums']").val(nums);
});
$('#low_num').bind('click',function() {
	var num=$("input[name='nums']").val()*1;
	var nums=--num;
	if(nums<=1) {
		var nums=1;
	}
	$('input[name=youhui]').val(youhui(num));
	$("input[name='nums']").val(nums);
});
$("input[name='nums']").bind('blur',function() {
	var num=$("input[name='nums']").val()*1;
	var count=$('#g_num').text()*1;
	if(num<1) {
		$("input[name='nums']").val(1);
	}   		
	if(num>count) {
		$("input[name='nums']").val(count);
	}
});
$('#add-cart').on('click',function(){
	var youhui=$('input[name=youhui]').val();
    var num=$('input[name=nums]').val();
    var gid=$('input[name=g_id]').val();
    $.ajax({
    	type:"post",
    	url:"/yimishop1/Home/Product/cart",
    	data:{'youhui':youhui,'num':num,'gid':gid,'act':'addcart'},
    	success:function(data) {
    		var status='';
           if(data.statuss) {
           	status='成功';
           }else{
            status='失败';
           }
           $('span.status').html(status);
           $('strong.count').html(data.count);
           $('#add-cart').val('已加入购物车');
           $('#add-cart').attr('disabled','true');
    	}
    });
});
function youhui(num) {
   var price=$('input[name=price]').val();
   var sum=num*price;
   var ptype=$('input[name=actype]').val()*1;
   var num1=$('input[name=ac_num1]').val()*1;
   var nums1=$('input[name=ac_nums1]').val()*1;
   var num2=$('input[name=ac_num2]').val()*1;
   var nums2=$('input[name=ac_nums2]').val()*1;
   var yh=0;
   if(num2 != 0) {
      if(ptype==0) {
        if(sum>num1 && sum<num2) {
             yh=nums1;
          }else if(sum>num2) {
           yh=nums2;
          }
      }else {
        if(num>=num1 && num<num2) {
          yh=nums1;
        }else if(num>=num2){
          yh=nums2;
        }
      }
   }else if(num1 != 0) {
      if(ptype==0) {//元
          if(sum>=num1) {
             yh=nums1;
          }
        }else {//件
           if(num>=num1) {
              yh=nums1;
           }
        }
   }
   return yh;
   // if(num2 != 0) {
   //     if(ptype==0) {//元
   //        if(sum>num1 && sum<num2) {
   //           yh=nums1;
   //        }else if(sum>num2) {
   //        	yh=nums2;
   //        }
   //      }else {//件
   //         if(num<num1 && num<num2) {
   //         	 yh=nums1;
   //         }else if(num>num2) {
   //        	yh=nums2;
   //        }
   //      }
   //  }else {
   //  	if(ptype==0) {//元
   //        if(sum>num1) {
   //           yh=nums1;
   //        }
   //      }else {//件
   //         if(num>num1) {
   //         	 yh=nums1;
   //         }
   //      }
   //  }
   //  return yh;
}
</script>