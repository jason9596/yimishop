<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop4/Thinkshop/Admin/View/Public/css/main.css">
	<style type="text/css">	    
        td select {
        	width:170px;
        }
	</style>
	<script type="text/javascript" src="/yimishop4/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/yimishop4/Thinkshop/Admin/View/Public/js/common.js"></script>

</head>
<body>
<p class="title">当前位置-商品编辑</p>
	<div class="add">
		<form action="/yimishop4/Admin/Goods/edit" name="form" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>商品名称：</td>
					<td><input type="text" name="g_name" value="<?php echo ($good["g_name"]); ?>">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品个数：</td>
					<td><input type="text" name="g_sum" value="<?php echo ($good["g_sum"]); ?>">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品分类：</td>
					<td><select name="cid">
					 	<option value="<?php echo ($good["cid"]); ?>" selected="selected"><?php echo ($good["c_name"]); ?></option>
					 	<?php if(is_array($catetree)): foreach($catetree as $key=>$rs): ?><option value="<?php echo ($rs["id"]); ?>"><?php echo (str_repeat("&nbsp",$rs["lev"])); echo ($rs["c_name"]); ?></option><?php endforeach; endif; ?>
					</select>&nbsp<span class="must">*</span>
					</td>
				</tr>
				<tr>
					<td>商品原价：</td>
					<td><input type="text" name="ori_price" value="<?php echo ($good["ori_price"]); ?>">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品现价：</td>
					<td><input type="text" name="price" value="<?php echo ($good["price"]); ?>">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品描述：</td>
					<td><textarea name="g_desc" cols="22" rows="4"><?php echo ($good["g_desc"]); ?></textarea>&nbsp<span class="must"></span></td>
				</tr>
				<!-- <tr>
					<td>商品图片：</td>
					<td><input type="file" name="g_img"></td>
				</tr> -->
				<tr>
					<td><input type="submit" name="edit" class="ad"></td>
				    <td><input type="reset" class="ad"></td>
				    <td><input type="hidden" name="id" value="<?php echo ($good["id"]); ?>"></td>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
        $(function() {
           $("input[name='g_name']").bind('blur',function() {
              if($(this).val().length>=12) {
              	$(this).next().text('不能超过12个字');
              }
              else if($(this).val().length==0) {
              	$(this).next().text('请输入商品名');
              }
              else {
              $(this).next().text('');	
              }
           });
           $("select[name='cid']").bind('blur',function() {
              if($(this).val()==0) {
              	$(this).next().text('请选择你的商品类型');
              }
              else {
              $(this).next().text('');	
              }
           });
           $("input[name='ori_price'],input[name='price'],input[name='g_sum']").bind('blur',function() {
              if(isNaN($(this).val())||$(this).val()==0) {
              	$(this).next().text('请填入数字');
              }
              else {
              $(this).next().text('');	
              }
           });
        });
	</script>
</body>
</html>