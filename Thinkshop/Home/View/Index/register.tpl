<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="sduabdlasdlasndlasndlasdnl">
		<meta name="author" content="dita">
		<title>注册页面</title>
		<link href="__Public__/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="__Public__/js/jquery.min.js"></script>
		<script type="text/javascript" src="__Public__/js/main.js"></script>
		<style type="text/css">
			body {
			        	/*color:#fff;*/
		        }
		        .header {
		        	background: #fff;
		        	border:0px;
		        	height:70px;
		        	line-height:40px; 
		        	border-bottom:2px solid #38a38a;  
		        }
		        .login {
		            position:relative;
		            top:100px;
		        }
		        .dl {
		        	width:400px;
		        	height:40px;
		        	line-height:40px;
		        	text-align:center;
		        }
		        .dl a {
		        	color:#38a38a;
		        	font-size:16px;
		        }
		        .dl a:hover {
		        	color:#38a38a;
		        	text-decoration:none;
		        }
		</style>
	</head>

	<body>
		<div class="container login">
			<div class="row">
            <div class="col-md-3"></div>
				<div class="col-md-6" style="border:1px solid #ccc;height:600px;">
					<form action="" method="post" class="form-signin" style="position:relative;max-width:360px;padding:15px;margin:0 auto;">
						<h2 class="form-signin-heading" style="margin-bottom:30px;">用户注册</h2>
						<label for="inputEmail" class="sr-only">Email address </label>
						<input type="text" id="user" class="form-control" name="account" placeholder="请用手机号或者邮箱注册" required autofocus style="height:45px;margin-bottom:30px;">
						<label for="inputPassword" class="sr-only">Password</label>
						<input type="password" id="pwd" class="form-control"  name="pwd" placeholder="密码最少4个字符" required style="height:45px;margin-bottom:30px;">
						<label for="inputPassword" class="sr-only">rePassword</label>
						<input type="password" id="repwd" class="form-control" name="repwd" placeholder="再次确认密码" required style="height:45px;margin-bottom:30px;">
						<label for="inputEmail" class="sr-only">验证码 </label>
						<input type="text" id="yzm" class="form-control" name="yzm" placeholder="请填写如下验证码" required autofocus style="height:45px;margin-bottom:15px;">
						<img onclick="this.src=this.src+'?'+Math.random()" src="<{:U('Index/verify')}>" style="cursor:pointer;" name="verify">
						<input type="hidden" name="register" value="1">
						<button class="btn btn-lg btn-primary btn-block" type="submit" style="background:#38a38a;border-color:#38a38a;margin-top:15px;" id="register" onclick="return chk();">注&nbsp;册</button>
						<label class="dl"><a href="__Tzhuan__/Index/login">登&nbsp;&nbsp;录</a></label>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
              // $(function() {
                 $('#user').bind('blur',function() {
                   var user=$(this).val();
                   var data={'username':user,'yzuser':1}
				 	$.ajax({
				 	   type:"POST",
				       data:data,
				       success:function(res) {
				          if(res==0) {
				          	alert("账号已经存在");
				          	$('#user').focus();
				          	return false;
				          }
				       }
				 	});
                 });
              //});
		</script>
	</body>
</html>