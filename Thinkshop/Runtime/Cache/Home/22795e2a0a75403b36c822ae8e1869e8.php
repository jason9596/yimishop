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
<script>
     function upload(upbtn,imgdiv,imgShow){
        new uploadPreview({ UpBtn: upbtn, DivShow: imgdiv, ImgShow: imgShow});
    }
</script>
<style type="text/css">
    body {
    	color:#999;
    }
    .pic {
    	cursor:pointer;
    	margin-right:30px;
    }
    .upload_img {		        	
    	position:absolute;
        z-index:100;
        width:90px;
        height:90px;
        cursor:pointer;
        opacity:0;
    }
    #imgdiv img {
    	height:90px;
    	width:90px;
    }
    .select {
    	width:120px;
    	height:30px;
    }
    .Wdate {
    	width:200px;
    	height:30px;
    }
</style>
		<div class="container main" style="border:1px solid #38a38a;width:1000px;">
			<div class="row" style="padding:10px;background:#38a38a;"><h4 
			style="text-align:center;color:#fff;font-size:24px;font-weight:bold;">商品<?php if($good["edit"] == 1): ?>编辑<?php else: ?>发布<?php endif; ?></h4></div>
			<div class="row">
			  <div class="col-md-12">
			  	<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
			  	  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品标题</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="title" placeholder="商品标题" name="g_name" value="<?php echo ($good["g_name"]); ?>">
				    </div>
				  </div>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品类型</label>
				    <div class="col-sm-7">
				      <input type="radio" name="ptype" value="0" <?php if($good["ptype"] == 0): ?>checked="true"<?php endif; ?>>全新&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <input type="radio" name="ptype" <?php if($good["ptype"] != 0): ?>checked="true"<?php endif; ?> value="1">二手
				    </div>
				  </div>
				  <?php if($good['edit'] != 1): ?><div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品类型</label>
				    <div class="col-sm-7">
				      <select class="select" name="cat" id="cat1">
				      	<option value="0">---请选择---</option>
				      	<?php if(is_array($cates)): foreach($cates as $key=>$cates): ?><option value="<?php echo ($cates["id"]); ?>" <?php if($good["cid"] == $cates.id): ?>selected="selected"<?php endif; ?>><?php echo ($cates["c_name"]); ?></option><?php endforeach; endif; ?>	
				      </select>
				       <select class="select" name="catt" id="cat2" style="display:none;">				      	
				      </select>
				    </div>
				  </div><?php endif; ?>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">原价</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="ori_price" placeholder="销售价格" name="ori_price" onkeyup="return isint(this);" value="<?php echo ($good["ori_price"]); ?>">
				    </div>
				  </div>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">现价</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="price" placeholder="销售价格" name="price" onkeyup="return isint(this);" value="<?php echo ($good["price"]); ?>">
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品数量</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="count" placeholder="商品数量" name="g_sum" onkeyup="return isint(this);" value="<?php echo ($good["g_sum"]); ?>">
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品图片</label>
				    <div id="imgdiv">
				      <input type="file" name="upimg0" class="upload_img" id="upbtn"  onclick="upload('upbtn','imgdiv','imgShow');" style="display:inline;" value="/yimishop/Uploads/<?php echo ($good["g_img"]); ?>">
				      <?php if($good["edit"] == 1): ?><img src="/yimishop/Uploads/<?php echo ($good["g_img"]); ?>" class="pic" id="imgShow">
				      <?php else: ?>
				      <img src="/yimishop/Public/img/nopicsmall.gif" class="pic" id="imgShow"><?php endif; ?>
				      <input type="file" name="upimg1" class="upload_img" id="upbtn1" onclick="upload('upbtn1','imgdiv','imgShow1');" style=" display:inline;">
				      <?php if($good["edit"] == 1): ?><img src="/yimishop/Uploads/<?php echo ($good["img_more"]["0"]); ?>" class="pic" id="imgShow1">
				      <?php else: ?>
				      <img src="/yimishop/Public/img/nopicsmall.gif" class="pic" id="imgShow1"><?php endif; ?>
				      <input type="file" name="upimg2" class="upload_img" id="upbtn2" onclick="upload('upbtn2','imgdiv','imgShow2');" style=" display:inline;">
				      <?php if($good["edit"] == 1): ?><img src="/yimishop/Uploads/<?php echo ($good["img_more"]["1"]); ?>" class="pic" id="imgShow2">
				      <?php else: ?>
				      <img src="/yimishop/Public/img/nopicsmall.gif" class="pic" id="imgShow2"><?php endif; ?>
				      <input type="file" name="upimg3" class="upload_img" id="upbtn3" onclick="upload('upbtn3','imgdiv','imgShow3');" style=" display:inline;">
				      <?php if($good["edit"] == 1): ?><img src="/yimishop/Uploads/<?php echo ($good["img_more"]["2"]); ?>" class="pic" id="imgShow3">
				      <?php else: ?>
				      <img src="/yimishop/Public/img/nopicsmall.gif" class="pic" id="imgShow3"><?php endif; ?>
				      <input type="file" name="upimg4" class="upload_img" id="upbtn4" onclick="upload('upbtn4','imgdiv','imgShow4');" style=" display:inline;">
				      <?php if($good["edit"] == 1): ?><img src="/yimishop/Uploads/<?php echo ($good["img_more"]["3"]); ?>" class="pic" id="imgShow4">
				      <?php else: ?>
				      <img src="/yimishop/Public/img/nopicsmall.gif" class="pic" id="imgShow4"><?php endif; ?>
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品详情</label>
				    <div class="col-sm-7">
				       <textarea for="textarea" name="g_desc" id="desc" class="form-control" placeholder="填写您对商品的详细描述"><?php echo ($good["g_desc"]); ?></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-5 col-sm-2">
				      <?php if($good["edit"] == 1): ?><input type="hidden" name="editpro" value="1">	
				      <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;" >保存</button>
				      <?php else: ?>
				      <input type="hidden" name="release" value="product">	
				      <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;" onclick="return pchk();">马上发布</button><?php endif; ?>
				    </div>
				  </div>
			  	</form>
			  </div>
			</div>
		</div>
	</body>
     <script type="text/javascript">
         $('#cat1').bind('change',function() {
           var cat1=$(this).val();
           var data={'cat1':cat1,'hqcat':1}
		 	$.ajax({
		 	   type:"POST",
		       data:data,
		       dataType:"json",
		       success:function(res) {
		       	$('#cat2 option').remove();
		       	if(res.length) {
			       	for(var i=0;i<res.length;i++) {
			       		$('#cat2').append("<option value='"+res[i].id+"'>"+res[i].c_name+"</option>");
			       	}
			         $('#cat2').show();		
		       	}else {
		       		$('#cat2').hide();
		       	}
		       }
		 	});
         });
	</script>      
</html>