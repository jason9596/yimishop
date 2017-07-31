<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="sduabdlasdlasndlasndlasdnl">
		<meta name="author" content="dita">
		<title>依米校园街-登录页面</title>
		<link href="__Public__/css/bootstrap.min.css" rel="stylesheet">
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
		</style>
	</head>

	<body>
		<div class="container login">
			<div class="row">
            <div class="col-md-3"></div>
				<div class="col-md-6" style="border:1px solid #ccc;height:500px;">
					<form class="form-signin" style="position:relative;max-width:360px;padding:15px;margin:0 auto;" action="" method="post">
						<h2 class="form-signin-heading" style="margin-bottom:30px;">用户登录</h2>
						<label for="inputEmail" class="sr-only">Email address </label>
						<input type="text" id="inputEmail" name="user" class="form-control" value="<{$Think.cookie.user}>" required autofocus style="height:45px;margin-bottom:30px;">
						<label for="inputPassword" class="sr-only">Password</label>
						<if condition="$Think.cookie.pwd neq ''">
						<input type="password" id="inputPassword" name="pwd" value="<{$Think.cookie.pwd}>" class="form-control" placeholder="请填写您的密码" required style="height:45px;margin-bottom:30px;">
						<else/>
						<input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="请填写您的密码" required style="height:45px;margin-bottom:30px;">
					    </if>
						<label for="inputEmail" class="sr-only">验证码 </label>				
						<div class="checkbox">
							<label>
								<if condition="$Think.cookie.remember eq '1'">
									<input type="checkbox" value="1" name="remember" checked="true"> 记住密码
								<else/>	
								    <input type="checkbox" value="1" name="remember"> 记住密码
								</if>								
							</label>
							<label style="float: right;">
								<a href="__Tzhuan__/Index/register" style="color:#333;">用户注册</a>
							</label>
						</div>
						<input type="hidden" name="login" value=1>
						<button class="btn btn-lg btn-primary btn-block" type="submit" style="background:#38a38a;border-color:#38a38a;margin-top:15px;">登&nbsp;录</button>
						<!--<lable class="dl"><a href="__Tzhuan__/Index/register">注&nbsp;册</a></lable>-->
                        <!-- <button class="btn btn-lg btn-primary btn-block" style="background:#38a38a;border-color:#38a38a">注册</button> -->
					</form>
				</div>
			</div>
		</div>
	</body>

</html>