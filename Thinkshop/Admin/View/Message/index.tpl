<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!--   <script type="text/javascript" src="__APublic__/js/jquery.min.js"></script>
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
      <!-- <foreach name='recylist' item='recy' key="k">
      <tr>
        <td>{$k+1}</td>
        <td>{$recy.g_name}</td>
        <td>{$recy.c_name}</td>
        <td>{$recy.ori_price}</td>
        <td>{$recy.price}</td>
        <td value="{$recy.id}"><a href="" class="back">取回</a>|<a href="" class="del">删除</a></td>
      </tr>
      </foreach> -->
      <!-- <tr><td colspan="7"><a href="">[第一页]</a><a href="">[1]</a><a href="">[2]</a><a href="">[3]</a><a href="">[最末页]</a>&nbsp共10个查询,共3页,当前处于第2页 </td></tr> -->
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.back').bind('click',function() {
               var url='__Cont__/Goods/back';
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