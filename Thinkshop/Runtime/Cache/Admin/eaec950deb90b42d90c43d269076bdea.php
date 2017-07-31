<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
	<style type="text/css">
        td select {
        	width:170px;
        }
	</style>
</head>
<body>
	<p class="title">当前位置-添加新管理员</p>
	<div class="add">
		<form action="/yimishop/Admin/Power/add" name="form2" method="post">
			<table>
				<tr>
					<td>用户名称：</td>
					<td><input type="text" name="username" placeholder="不能超过8个字">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>用户邮件：</td>
					<td><input type="text" name="email" placeholder="xxx@xx.com">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>用户分类：</td>
					<td>超级管理员<input type="radio" value="1" name="a_power">商家<input type="radio" value="0" name="a_power">&nbsp<span class="must">*</span>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" class="ad"></td>
				    <td><input type="reset" class="ad"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>