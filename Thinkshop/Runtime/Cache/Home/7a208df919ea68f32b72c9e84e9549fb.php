<?php if (!defined('THINK_PATH')) exit();?><div class="row" style="padding-left:60px;padding-top:30px;">				
<div class="jbzl">
    <p class="head">基本信息<span>编辑</span></p>
    <form action="" method="post" name="jbzl">
	<p>昵称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo ($userinfo["username"]); ?></span><input type="text" name="username" value="<?php echo ($userinfo["username"]); ?>"></p>
	<p>手机&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo ($userinfo["tel"]); ?></span><input type="text" name="tel" value="<?php echo ($userinfo["tel"]); ?>"></p>
	<p>邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo ($userinfo["email"]); ?></span><input type="text" name="email" value="<?php echo ($userinfo["email"]); ?>"></p>
	<p>学校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo ($userinfo["school"]); ?></span>
		<select name="school" class="select">
			<?php if(is_array($school)): foreach($school as $key=>$school): ?><option value="<?php echo ($school["id"]); ?>" <?php if($userinfo["school"] == $school.school): ?>selected="true"<?php endif; ?>><?php echo ($school["school"]); ?></option><?php endforeach; endif; ?>
		</select>
	</p>
    <p><input type="submit" name="zlsub" value="保存" style="width:80px;height:32px;font-size:14px;margin-left:80px;margin-top:10px;" class="btn btn-default"></p>
    </form>
</div>
</div>
		
<script type="text/javascript">
 $('.jbzl p.head span').bind('click',function() {
 	$('.jbzl p span').hide();
 	$('.jbzl p input,select').show();
 });
</script>