<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
</head>
<body>
<p class="title">当前位置-订单列表</p>
<form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>订单号</td>
        <td>价格(/元)</td>
        <td>买家</td>
        <td>下单时间</td>
        <td>操作</td>
      </tr>
      <?php if(is_array($orders)): foreach($orders as $key=>$orders): ?><tr>
        <td><?php echo ($orders["order_id"]); ?></td>
        <td><?php echo ($orders["sum"]); ?></td>
        <td><?php echo ($orders["username"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$orders["create_time"])); ?></td>
        <td  value="<?php echo ($orders["id"]); ?>"><a href="/yimishop/Admin/Order/detail/oid/<?php echo ($orders["order_id"]); ?>">查看</a></td>
      </tr><?php endforeach; endif; ?>
      <tr><td colspan="7"><?php echo ($page); ?></td></tr>
    </table>
  </div>
</form>
</body>
</html>