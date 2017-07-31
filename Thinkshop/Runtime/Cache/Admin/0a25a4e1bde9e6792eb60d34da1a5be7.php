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
<p class="title">当前位置-订单详情</p>
<h3 style="color:#38a38a;margin-left:10px;">订单基本信息</h3>
<div style="margin:10px;border:1px solid #ccc;padding:5px;">
    <table width="100%">
    <tr>
        <td>
        <table width="100%">
        	<tbody>
        	<tr>
            	<th width="100">订单号：</th>
                <td width="180"><?php echo ($order["order_id"]); ?></td>
            </tr>
            <tr>
            	<th>总价：</th>
                <td><?php echo ($order["sum"]); ?>元</td>
            </tr>
            <tr>
            	<th>买家：</th>
                <td><?php echo ($order["username"]); ?></td>
            </tr>
            <tr>
            	<th>收获地址：</th>
                <td><?php echo ($order["address"]); ?></td>
            </tr>
            <tr>
                <th>收获人姓名：</th>
                <td><?php echo ($order["aname"]); ?></td>
            </tr>
            <tr>
            	<th>收货人电话：</th>
                <td><?php echo ($order["atel"]); ?></td>
            </tr>
        </tbody></table>
        </td>
    </tr>
    </table>
</div>
<h3 style="color:#38a38a;margin-left:10px;">商品信息</h3>
<div style="margin:10px;border:1px solid #ccc;padding:5px;">
    <table width="100%">
    <tr><td>商品图片</td><td>订单号</td><td>卖家</td><td>商品名</td><td>单价</td><td>数量</td><td>实付款</td><td>订单状态</td></tr>
    <?php if(is_array($goods)): foreach($goods as $key=>$goods): ?><tr><td><img src="/yimishop/Uploads/<?php echo ($goods["pic"]); ?>" width="90px;"></td><td><?php echo ($goods["order_id"]); ?></td><td><?php echo ($goods["username"]); ?></td><td><?php echo ($goods["name"]); ?></td><td><?php echo ($goods["price"]); ?></td><td><?php echo ($goods["num"]); ?></td><td><?php echo ($goods['price']*$goods['num']); ?></td><td><?php if(($goods["status"]) == "4"): ?>待评价<?php else: ?>已评价<?php endif; ?></td></tr><?php endforeach; endif; ?>      
    </table>
</div>
</body>
</html>
<script type="text/javascript">
	
</script>