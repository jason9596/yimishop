<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
	<style type="text/css">      
	</style>
</head>
<body>
	<p class="title">当前位置-商家列表<a href="/yimishop/Admin/Power/add">添加商家</a></p>
	<div class="mainlist">
	<table>
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>邮件地址</td>
			<td>注册时间</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($userlist)): foreach($userlist as $k=>$rs): ?><tr value="<?php echo ($rs["id"]); ?>">
			<td><?php echo ($k+1); ?></td>
			<td><?php echo ($rs["username"]); ?></td>
			<td><?php echo ($rs["email"]); ?></td>
			<td><?php echo ($rs["time"]); ?></td>
			<td><a href="">查看</a>|<a href="">删除</a></td>
		</tr><?php endforeach; endif; ?>
	    <tr><td colspan="7"><a href="">[第一页]</a><a href="">[1]</a><a href="">[2]</a><a href="">[3]</a><a href="">[最末页]</a>&nbsp共10个查询,共3页,当前处于第2页 </td></tr>
	</table>
	</div>
</body>
</html>