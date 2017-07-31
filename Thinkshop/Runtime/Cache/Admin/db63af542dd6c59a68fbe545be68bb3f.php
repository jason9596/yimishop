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
  <p class="title">当前位置-用户列表</p>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td colspan="2">用户名</td>
        <td>注册时间</td>
        <td>邮箱</td>
        <td>手机</td>
        <td>操作</td>
      </tr>
      <?php if(is_array($users)): foreach($users as $key=>$users): ?><tr>
        <td><img src="/yimishop/Uploads/<?php echo ($users["face"]); ?>" style="width:60px;height:60px;"></td>
        <td><?php echo ($users["username"]); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$users["time"])); ?></td>
        <td><?php echo ($users["email"]); ?></td>
        <td><?php echo ($users["tel"]); ?></td>
        <td><a href="/yimishop/Admin/User/detail/uid/<?php echo ($users["id"]); ?>">详情</a>|<a href="javascript:;" class="del" value="<?php echo ($users["id"]); ?>">删除</a></td>
      </tr><?php endforeach; endif; ?>
      <tr><td colspan="7" class="page"><?php echo ($page); ?></td></tr>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.del').bind('click',function() {
                if (confirm('确定要删除该用户？')) {
                    var id=$(this).attr('value');
                    var data1={'id':id,'act':'del'};
                    $.ajax({
                      type:'get',
                      data:data1,
                      success:function(data) {
                         if(data) {
                          alert('删除成功');
                          location.reload();
                         }else {
                          alert('删除失败，请重试');
                          location.reload();
                         }
                      }
                    });
                };
               // var d = new Date();
               // var url='/yimishop/Admin/Goods/del/time/'+d.getMinutes()+d.getSeconds();               
               // var data={'id':$(this).parent().attr('value')};
               // $.ajax({
               //   url:url,
               //   type:'get',
               //   data:data,
               //   success:function(data) {
               //    if(data==1) {
               //      $(this).parent().parent().remove();
               //    }
               //    else {
               //      alert('删除失败，请重试');
               //    }
               //   }
               // });
          });
          $('a.num,span.current').map(function() {
               $(this).text('['+$(this).text()+']');
          });
        });
    </script>
</body>
</html>