<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="/yimishop4/Thinkshop/Admin/View/Public/css/main.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!--   <script type="text/javascript" src="/yimishop4/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
 -->	<style type="text/css">       
	</style>
</head>
<body>
  <p class="title">当前位置-留言管理</p>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>编号</td>
        <td>留言人</td>
        <td>留言标题</td>
        <td>留言内容</td>
        <td>留言时间</td>
        <td>操作</td>
      </tr>
      <!-- <?php if(is_array($recylist)): foreach($recylist as $k=>$recy): ?><tr>
        <td><?php echo ($k+1); ?></td>
        <td><?php echo ($recy["g_name"]); ?></td>
        <td><?php echo ($recy["c_name"]); ?></td>
        <td><?php echo ($recy["ori_price"]); ?></td>
        <td><?php echo ($recy["price"]); ?></td>
        <td value="<?php echo ($recy["id"]); ?>"><a href="" class="back">取回</a>|<a href="" class="del">删除</a></td>
      </tr><?php endforeach; endif; ?> -->
      <!-- <tr><td colspan="7"><a href="">[第一页]</a><a href="">[1]</a><a href="">[2]</a><a href="">[3]</a><a href="">[最末页]</a>&nbsp共10个查询,共3页,当前处于第2页 </td></tr> -->
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.back').bind('click',function() {
               var url='/yimishop4/Admin/Goods/back';
               var data={'id':$(this).parent().attr('value')};
               $.ajax({
                 url:url,
                 type:'get',
                 data:data,
                 success:function(data) {
                     $(this).parent().parent().hide();
                    // console.log(data);
                 }
               });
          });
        });
    </script>
</body>
</html>