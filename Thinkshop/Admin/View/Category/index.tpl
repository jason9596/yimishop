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
  <p class="title">当前位置-商品分类列表 <a href="__Cont__/Category/add">添加分类</a></p>
  <div class="select_div">
    <form action="" name="fselect" method="post">
        <span>分类名称:</span><input type="text" name="keyword" size="15" placeholder="请输入分类名称">
        <input type="submit" name="sel" value="搜索" style="cursor:pointer;">
    </form>
  </div>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>编号</td>
        <td>分类名称</td>
        <td>显示</td>
        <td>操作</td>
      </tr>
      <foreach name='catetree' item='catetree' key="k">
      <tr>
        <td>{$k+1}</td>
        <td style="text-align:left;padding-left:2px;">{$catetree.lev|str_repeat="&nbsp;&nbsp;",###}{$catetree.c_name}</td>
        <td>{$catetree.is_look}</td>
        <td  value="{$god.id}"><a href="__Cont__/Category/edit/cid/{$catetree.id}">编辑</a>|<a href="" class="del">删除</a></td>
      </tr>
      </foreach>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.del').bind('click',function() {
               var d = new Date();
               var url='__Cont__/Goods/del/time/'+d.getMinutes()+d.getSeconds();               
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
        });
    </script>
</body>
</html>