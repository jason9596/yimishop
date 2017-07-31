<div class="row" style="padding-left:60px;padding-top:30px;">				
<div class="jbzl">
    <p class="head">基本信息<span>编辑</span></p>
    <form action="" method="post" name="jbzl">
	<p>昵称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><{$userinfo.username}></span><input type="text" name="username" value="<{$userinfo.username}>"></p>
	<p>手机&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><{$userinfo.tel}></span><input type="text" name="tel" value="<{$userinfo.tel}>"></p>
	<p>邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><{$userinfo.email}></span><input type="text" name="email" value="<{$userinfo.email}>"></p>
	<p>学校&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><{$userinfo.school}></span>
		<select name="school" class="select">
			<foreach item="school" name="school">
			<option value="<{$school.id}>" <if condition="$userinfo.school eq $school.school">selected="true"</if>><{$school.school}></option>								
			</foreach>
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