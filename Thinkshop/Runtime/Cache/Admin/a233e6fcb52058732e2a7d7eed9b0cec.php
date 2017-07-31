<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
  <script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
	<style type="text/css">      
	</style>
</head>
<body>
  <p class="title">当前位置-商品评论</p>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>商品名</td>
        <td>评分</td>
        <td style="width:56%">评论内容</td>
        <td>评论者</td>
        <td>评论时间</td>
        <td>操作</td>
      </tr>
      <?php if(is_array($comms)): foreach($comms as $k=>$com): ?><tr>
        <td><a href="/yimishop/Home/Product/detail/gid/<?php echo ($com["gid"]); ?>" target="_black"><?php echo ($com["g_name"]); ?></a></td>
        <td><?php echo ($com["co_mark"]); ?>分</td>
        <td><?php echo ($com["co_content"]); ?></td>
        <td><?php echo ($com["username"]); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$com["co_time"])); ?></td>
        <td><a href="javascript:;" class="del">删除</a></td>
      </tr><?php endforeach; endif; ?>
      <tr><td colspan="7" class="page"><?php echo ($page); ?></td></tr>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.del').bind('click',function() {
               var d = new Date();
               var url='/yimishop/Admin/Goods/del/time/'+d.getMinutes()+d.getSeconds();               
               var data={'id':$(this).parent().attr('value')};
               $.ajax({
                 url:url,
                 type:'get',
                 data:data,
                 success:function(data) {
                  if(data==1) {
                    $(this).parent().parent().remove();
                  }
                  else {
                    alert('删除失败，请重试');
                  }
                 }
               });
          });
          $('a.num,span.current').map(function() {
               $(this).text('['+$(this).text()+']');
          });
        });
    </script>
</body>
</html>