<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
	<style type="text/css">      
	</style>
</head>
<body>
	<p class="title">当前位置-商家列表<a href="__Cont__/Power/add">添加商家</a></p>
	<div class="mainlist">
	<table>
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>邮件地址</td>
			<td>注册时间</td>
			<td>操作</td>
		</tr>
		<foreach name="userlist" item="rs" key="k">
		<tr value="{$rs.id}">
			<td>{$k+1}</td>
			<td>{$rs.username}</td>
			<td>{$rs.email}</td>
			<td>{$rs.time}</td>
			<td><a href="">查看</a>|<a href="">删除</a></td>
		</tr>
	    </foreach>
	    <tr><td colspan="7"><a href="">[第一页]</a><a href="">[1]</a><a href="">[2]</a><a href="">[3]</a><a href="">[最末页]</a>&nbsp共10个查询,共3页,当前处于第2页 </td></tr>
	</table>
	</div>
</body>
</html>