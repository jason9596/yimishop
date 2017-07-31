<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
	<style type="text/css">
        td select{
        	width:170px;
        	text-align:center; 
        }
	</style>
</head>
<body>
	<p class="title">当前位置-<?php if(($stau) == "1"): ?>编辑<?php else: ?>添加<?php endif; ?>商品分类</p>
	<div class="add">
		<form action="" name="form2" method="post">
			<table>
				<tr>
					<td>分类名称：</td>
					<td><input type="text" name="c_name" value="<?php echo ($cate["c_name"]); ?>"></td>
				</tr>
				<tr>
					<td>父级分类：</td>
					<td><select name="pid">
					 	<option value="0">---顶级分类---</option>
					 	<?php if(is_array($catetree)): foreach($catetree as $key=>$rs): ?><option value="<?php echo ($rs["id"]); ?>" <?php if(($rs["id"]) == $cate["pid"]): ?>selected<?php endif; ?>><?php echo (str_repeat("&nbsp",$rs["lev"])); echo ($rs["c_name"]); ?></option><?php endforeach; endif; ?>
					</select>
					</td>
				</tr>
				<tr>
					<td>是否显示：</td>
					<td>显示<input type="radio" name='is_look' value="1" <?php if(($cate["is_look"]) != "0"): ?>checked<?php endif; ?>>不显示<input type="radio" name='is_look' value="0" <?php if(($cate["is_look"]) == "0"): ?>checked<?php endif; ?>></td>
				</tr>
				<tr>
					<td>
					<?php if(($stau) == "1"): ?><input type="hidden" name="act" value="edit"><?php else: ?><input type="hidden" name="act" value="edit"><?php endif; ?>
					<input type="submit" name="csub">
					</td>
				    <td><input type="reset"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>