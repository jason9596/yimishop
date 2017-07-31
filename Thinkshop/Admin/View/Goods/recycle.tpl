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
  <p class="title">当前位置-回收站列表</p>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>编号</td>
        <td>商品名称</td>
        <td>类别</td>
        <td>原价</td>
        <td>价格</td>
        <td>操作</td>
      </tr>
      <foreach name='recylist' item='recy' key="k">
      <tr>
        <td>{$k+1}</td>
        <td>{$recy.g_name}</td>
        <td>{$recy.c_name}</td>
        <td>{$recy.ori_price}</td>
        <td>{$recy.price}</td>
        <td value="{$recy.id}"><a href="__Cont__/Goods/recycle" class="back">取回</a>|<a href="__Cont__/Goods/recycle" class="del">删除</a></td>
      </tr>
      </foreach>
      <tr><td colspan="7">{$page}</td></tr>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.back').bind('click',function() {
               var d=new Date();
               var url='__Cont__/Goods/back/time/'+d.getMinutes()+d.getSeconds();
               var data={'gid':$(this).parent().attr('value')};
               $.ajax({
                 url:url,
                 type:'get',
                 data:data,
                 success:function(data) {
                     $(this).parent().parent().remove();
                 }
               });
          });
          $('a.num,span.current').map(function() {
               var d=$(this).text();
               $(this).text('['+$(this).text()+']');
          });
        });
    </script>
</body>
</html>