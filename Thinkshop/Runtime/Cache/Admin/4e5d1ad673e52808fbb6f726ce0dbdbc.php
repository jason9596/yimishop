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
  <p class="title">当前位置-商品列表</p>
  <div class="select_div">
    <form action="/yimishop/Admin/Goods" name="fselect" method="post">
        <span>选择分类:</span><select name="cat_id" style="width:167px">
        <option value="0" selected="selected">---所有分类---</option>
        <?php if(is_array($catetree)): foreach($catetree as $key=>$rs): ?><option value="<?php echo ($rs["id"]); ?>"><?php echo (str_repeat("&nbsp",$rs["lev"])); echo ($rs["c_name"]); ?></option><?php endforeach; endif; ?>
        </select>
        <span>商品状态:</span>
        <select name="is_lock">
        <option value="0">下架</option>
        <option value="1">上架</option>
        <option value="2" selected>---选择状态---</option>
        </select>
        <span>商品名称:</span><input type="text" name="keyword" size="15">
        <input type="submit" name="sel" value="搜索" style="cursor:pointer;">
    </form>
  </div>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>编号</td>
        <td>商品名称</td>
        <td>类别</td>
        <td>原价</td>
        <td>价格</td>
        <td>库存</td>
        <td>状态</td>
        <td>操作</td>
      </tr>
      <?php if(is_array($goodslist)): foreach($goodslist as $k=>$god): ?><tr>
        <td><?php echo ($k+1); ?></td>
        <td><?php echo ($god["g_name"]); ?></td>
        <td><?php echo ($god["c_name"]); ?></td>
        <td><?php echo ($god["ori_price"]); ?></td>
        <td><?php echo ($god["price"]); ?></td>
        <td><?php echo ($god["g_sum"]); ?></td>
        <td><?php if(($god["is_lock"]) == "0"): ?>下架<?php else: ?>上架<?php endif; ?></a></td>
        <td  value="<?php echo ($god["id"]); ?>"><a href="/yimishop/Home/Product/detail/gid/<?php echo ($god["id"]); ?>" target="_black">查看</a>|<a href="javascript:void(0);" class="del" name="is_lock" value="<?php echo ($god["is_lock"]); ?>"><?php if(($god["is_lock"]) == "0"): ?>上架<?php else: ?>下架<?php endif; ?></a></td>
      </tr><?php endforeach; endif; ?>
      <tr><td colspan="8" class="page"><?php echo ($page); ?></td></tr>
    </table>
  </div>
  </form>
    <script type="text/javascript">
        $(function() {
          $('a.del').bind('click',function() {
               var url='/yimishop/Admin/Goods/del' ;
               var sta=$(this).attr('value')==0?'上架':'下架';           
               var data={'id':$(this).parent().attr('value'),'stau':$(this).attr('value')};
               if(confirm("确定要"+sta+"该商品吗？"))
               {
                  $.ajax({
                   url:url,
                   type:'get',
                   data:data,
                   success:function(data) {
                    if(data==1) {
                      alert('已成功'+sta+'该商品');
                      location.reload();
                    }
                    else {
                      alert(sta+'失败，请重试');
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