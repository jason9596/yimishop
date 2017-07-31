<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
  <script type="text/javascript" src="__APublic__/js/jquery.min.js"></script>
	<style type="text/css">      
	</style>
</head>
<body>
  <p class="title">当前位置-收货列表</p>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>用户ID</td>
        <td>用户名</td>
        <td>收货人</td>
        <td>收货地址</td>
        <td>联系电话</td>
        <td>操作</td>
      </tr>
      <foreach name='addresss' item='addresss'>
      <tr>
        <td>{$addresss.auid}</td>
        <td>{$addresss.username}</td>
        <td>{$addresss.aname}</td>
        <td>{$addresss.address}</td>
        <td>{$addresss.atel}</td>
        <td><a href="javascript:;" class="del" value="{$addresss.id}">删除</a></td>
      </tr>
      </foreach>
      <tr><td colspan="7" class="page">{$page}</td></tr>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.del').bind('click',function() {
                if(confirm('确定要删除该地址？')) {
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
                }
          });
          $('a.num,span.current').map(function() {
               $(this).text('['+$(this).text()+']');
          });
        });
    </script>
</body>
</html>