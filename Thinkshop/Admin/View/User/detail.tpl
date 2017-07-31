<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户详情页</title>
	<link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
    <script type="text/javascript" src="__APublic__/js/jquery.min.js"></script>
	<style type="text/css">
	tr td {text-align:left;height:30px;}      
	</style>
</head>
<body>
  <p class="title">当前位置-用户列表-用户详情</p>
<div style="margin:10px;border:1px solid #ccc;padding:5px;">
    <table width="100%">
    <tr>
        <td width="160px"><img src="__ROOT__/Uploads/{$userinfo.face}" width="120"></td>
        <td>
        <table width="100%">
        	<tbody>
        	<tr>
            	<th width="100">会员ID：</th>
                <td width="180">{$userinfo.id}</td>
                <th width="100">用户名：</th>
                <td>{$userinfo.username}</td>
            </tr>
            <tr>
            	<th>昵称：</th>
                <td>{$userinfo.account}</td>
                <th>性别：</th>
                <td>{$userinfo.sex}</td>
            </tr>
            <tr>
            	<th>注册时间：</th>
                <td>{$userinfo.time|date='Y-m-d H:i:s',###}</td>
                <th>学校：</th>
                <td>{$userinfo.school}</td>
            </tr>
            <tr>
            	<th>发布商品：</th>
                <td><span class="god" style="cursor: pointer;">{$userinfo.god}个</span></td>
                <th>交易记录：</th>
                <td><span class="pro" style="cursor: pointer;">{$userinfo.pro}条</span></td>
            </tr>
            <tr>
            	<th>是否认证：</th>
                <td><eq name="userinfo.is_approve" value="0">未认证<else/>已认证</eq></td>
                <th>真实姓名：</th>
                <td>{$userinfo.truename}</td>
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