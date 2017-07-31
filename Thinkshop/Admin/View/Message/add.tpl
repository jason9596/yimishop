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
<p class="title">当前位置-添加留言</p>
	<div class="add">
		<form action="__Cont__/Message/add" name="form2" method="post">
			<table>
				<tr>
					<td>留言标题：</td>
					<td><input type="text" name="m_title" placeholder="不能超过12个字">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>留言内容：</td>
					<td><textarea name="m_content" cols="22" rows="4" placeholder="请填写留言的内容"></textarea>&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td>email：</td>
					<td><input type="text" name="m_email" placeholder="请留下您的email信息">&nbsp<span class="must">*</span></td>
				</tr>
				<tr>
					<td><input type="submit" name="sub" class="ad"></td>
				    <td><input type="reset" class="ad"></td>
				</tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
        
	</script>
</body>
</html>