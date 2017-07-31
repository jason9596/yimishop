<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户详情页</title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
    <script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
	<style type="text/css">
	tr td {text-align:left;height:30px;}      
	</style>
</head>
<body>
  <p class="title">当前位置-用户列表-用户详情</p>
<div style="margin:10px;border:1px solid #ccc;padding:5px;">
    <table width="100%">
    <tr>
        <td width="160px"><img src="/yimishop/Uploads/<?php echo ($userinfo["face"]); ?>" width="120"></td>
        <td>
        <table width="100%">
        	<tbody>
        	<tr>
            	<th width="100">会员ID：</th>
                <td width="180"><?php echo ($userinfo["id"]); ?></td>
                <th width="100">用户名：</th>
                <td><?php echo ($userinfo["username"]); ?></td>
            </tr>
            <tr>
            	<th>昵称：</th>
                <td><?php echo ($userinfo["account"]); ?></td>
                <th>性别：</th>
                <td><?php echo ($userinfo["sex"]); ?></td>
            </tr>
            <tr>
            	<th>注册时间：</th>
                <td><?php echo (date('Y-m-d H:i:s',$userinfo["time"])); ?></td>
                <th>学校：</th>
                <td><?php echo ($userinfo["school"]); ?></td>
            </tr>
            <tr>
            	<th>发布商品：</th>
                <td><span class="god" style="cursor: pointer;"><?php echo ($userinfo["god"]); ?>个</span></td>
                <th>交易记录：</th>
                <td><span class="pro" style="cursor: pointer;"><?php echo ($userinfo["pro"]); ?>条</span></td>
            </tr>
            <tr>
            	<th>是否认证：</th>
                <td><?php if(($userinfo["is_approve"]) == "0"): ?>未认证<?php else: ?>已认证<?php endif; ?></td>
                <th>真实姓名：</th>
                <td><?php echo ($userinfo["truename"]); ?></td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </table>
</div>
</body>
</html>
<script type="text/javascript">
	
</script>