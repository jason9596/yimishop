<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
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
      <foreach name='orders' item='orders'>
      <tr>
        <td>{$orders.order_id}</td>
        <td>{$orders.sum}</td>
        <td>{$orders.username}</td>
        <td>{$orders.create_time|date="Y-m-d H:i:s",###}</td>
        <td  value="{$orders.id}"><a href="__Cont__/Order/detail/oid/{$orders.order_id}">查看</a></td>
      </tr>
      </foreach>
      <tr><td colspan="7">{$page}</td></tr>
    </table>
  </div>
</form>
</body>
</html>