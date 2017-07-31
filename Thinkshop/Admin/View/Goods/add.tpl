<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
	<style type="text/css">	    
        td select {
        	width:170px;
        }
	</style>
	<script type="text/javascript" src="__APublic__/js/jquery.min.js"></script>
	<script type="text/javascript" src="__APublic__/js/common.js"></script>

</head>
<body>
<p class="title">当前位置-商品添加</p>
	<div class="add">
		<form action="__Cont__/Goods/add" name="form2" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>商品名称：</td>
					<td><input type="text" name="g_name" placeholder="不能超过12个字">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品个数：</td>
					<td><input type="text" name="g_sum" placeholder="0">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品分类：</td>
					<td><select name="cid">
					 	<option value="0" selected="selected">---请选择---</option>
					 	<foreach name="catetree" item="rs">
					 		<option value="{$rs.id}">{$rs.lev|str_repeat="&nbsp",###}{$rs.c_name}</option>
					 	</foreach>
					</select>&nbsp<span class="must">*</span>
					</td>
				</tr>
				<tr>
					<td>商品原价：</td>
					<td><input type="text" name="ori_price" placeholder="0">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品现价：</td>
					<td><input type="text" name="price" placeholder="0">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>商品描述：</td>
					<td><textarea name="g_desc" cols="22" rows="4" placeholder="请填写你对商品的简单描述"></textarea>&nbsp<span class="must"></span></td>
				</tr>
				<tr>
					<td>商品图片：</td>
					<td><input type="file" name="g_img"></td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" class="ad"></td>
				    <td><input type="reset" class="ad"></td>
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