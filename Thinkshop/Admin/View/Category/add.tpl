<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="__APublic__/css/main.css">
	<style type="text/css">
        td select{
        	width:170px;
        	text-align:center; 
        }
	</style>
</head>
<body>
	<p class="title">当前位置-<eq name="stau" value="1">编辑<else/>添加</eq>商品分类</p>
	<div class="add">
		<form action="" name="form2" method="post">
			<table>
				<tr>
					<td>分类名称：</td>
					<td><input type="text" name="c_name" value="{$cate.c_name}"></td>
				</tr>
				<tr>
					<td>父级分类：</td>
					<td><select name="pid">
					 	<option value="0">---顶级分类---</option>
					 	<foreach name="catetree" item="rs">
					 		<option value="{$rs.id}" <eq name="rs.id" value="$cate.pid">selected</eq>>{$rs.lev|str_repeat="&nbsp",###}{$rs.c_name}</option>
					 	</foreach>
					</select>
					</td>
				</tr>
				<tr>
					<td>是否显示：</td>
					<td>显示<input type="radio" name='is_look' value="1" <neq name="cate.is_look" value='0'>checked</neq>>不显示<input type="radio" name='is_look' value="0" <eq name="cate.is_look" value='0'>checked</eq>></td>
				</tr>
				<tr>
					<td>
					<eq name="stau" value="1"><input type="hidden" name="act" value="edit"><else/><input type="hidden" name="act" value="edit"></eq>
					<input type="submit" name="csub">
					</td>
				    <td><input type="reset"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>