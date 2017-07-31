<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
</head>
<body>
<p class="title">当前位置-退货单列表</p>
<form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>订单号</td>
        <td>下单时间</td>
        <td>收货人</td>
        <td>退款原因</td>
        <td>订单状况</td>
        <td>操作</td>
      </tr>
      <!-- <?php if(is_array($goodslist)): foreach($goodslist as $k=>$god): ?><tr>
        <td><?php echo ($k+1); ?></td>
        <td><?php echo ($god["g_name"]); ?></td>
        <td><?php echo ($god["c_name"]); ?></td>
        <td><?php echo ($god["ori_price"]); ?></td>
        <td><?php echo ($god["price"]); ?></td>
        <td><?php echo ($god["g_sum"]); ?></td>
        <td  value="<?php echo ($god["id"]); ?>"><a href="">查看</a>|<a href="">编辑</a>|<a href="" class="del">删除</a></td>
      </tr><?php endforeach; endif; ?> -->
      <tr><td colspan="7"><a href="">[第一页]</a><a href="">[1]</a><a href="">[2]</a><a href="">[3]</a><a href="">[最末页]</a>&nbsp共10个查询,共3页,当前处于第2页 </td></tr>
    </table>
  </div>
</form>
</body>
</html>