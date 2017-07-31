<?php if (!defined('THINK_PATH')) exit();?><div class="yxgj">
<p class="head" style="width:100%;">活动列表<a href="/yimishop/Home/Member/activity/opt/add" style="float:right;color:#38a38a;font-size:14px;text-decoration:none;padding-top: 10px;">添加活动</a></p>
<div class="activity">
<form action="" method="post" class="form-inline">
    <div class="form-group" style="display: block;">
        <label class="mk-text-label">
        	<input id="J_Id" type="text" name="aid" placeholder="活动编号" class="form-control"> 
        </label>
        <label class="mk-text-label">
        	<input id="J_Name" type="text" name="acname" placeholder="活动名称" class="form-control"> 
        </label>

        <label class="mk-text-label">
        	<input id="J_From" type="text" name="stime" class="form-control" placeholder="开始时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})">
        </label>
        <label class="mk-text-label"> 一 
        	<input id="J_To" type="text" name="etime" class="form-control" placeholder="结束时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})">
        </label>
        <label class="mk-text-label"> 
        	<select name="ac_status" style="display:block;" class="form-control">
        		<option value="1">已开启</option>
        		<option value="2">已暂停</option>
        		<option value="3">已结束</option>                 
        		<option selected="selected" value="0">全部活动状态</option>
        	</select>
        </label>
        <label class="mk-text-label">
        	<input id="J_Submit" type="submit" name="sel" value="搜&nbsp;索" class="btn btn-default">
        </label>
    </div>
</form>
<div>
	<table class="table" style="margin-top:20px;">
		<tr>
			<td width="13%">活动编号</td>
			<td width="13%">活动名称</td>
			<td width="13%">活动详情</td>
			<td width="30%">活动时间</td>
			<td style="width: 60px;">活动状态</td>
			<td width="13%">操作</td>
		</tr>  
		<?php if(is_array($activities)): foreach($activities as $key=>$activities): ?><tr style="height:60px;">
				<td><?php echo ($activities["aid"]); ?></td>
				<td><?php echo ($activities["acname"]); ?></td>
				<td>满<?php echo ($activities["ac_num1"]); if($activities["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>，减<?php echo ($activities["ac_nums1"]); ?>元
					<?php if($activities["ac_num2"] != 0): ?><br/>满<?php echo ($activities["ac_num2"]); if($activities["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>，减<?php echo ($activities["ac_nums2"]); ?>元<?php endif; ?>
				</td>
				<td><?php echo (date('Y-m-d h:m:s',$activities["stime"])); ?>-<?php echo (date('Y-m-d h:m:s',$activities["etime"])); ?></td>
				<td>
					<?php if($activities["ac_status"] == 1): ?>开启
					<?php elseif($activities["ac_status"] == 2): ?>暂停
					<?php else: ?>结束<?php endif; ?>
				</td>
				<td>
					<a href="/yimishop/Home/Member/activity/opt/edit/id/<?php echo ($activities["id"]); ?>" style="cursor:pointer;color:#777;text-decoration:none;">编辑</a>
					<a style="cursor:pointer;color:#777;text-decoration:none;" onClick="delcfm('<?php echo ($activities["id"]); ?>')">删除</a>
					<?php if($activities["ac_status"] == 1 ): ?><a style="cursor:pointer;color:#777;text-decoration:none;" onClick="stop('<?php echo ($activities["id"]); ?>')">暂停</a>
					<?php else: ?>
					<a style="cursor:pointer;color:#777;text-decoration:none;" onClick="start('<?php echo ($activities["id"]); ?>')">开启</a><?php endif; ?>
				</td>
			</tr><?php endforeach; endif; ?>
	</table>
</div>
</div>
</div>
<script language="javascript">
	function delcfm(url) {
	if (confirm("确认要删除？")) {
	window.location.href = "/yimishop/Home/Member/activity/actt/del/id/"+url;
	}
	}
	function stop(url) {
	if (confirm("确认要暂停该活动？")) {
	window.location.href = "/yimishop/Home/Member/activity/actt/stop/id/"+url;
	}
	}
	function start(url) {
	if (confirm("确认要开启该活动？")) {
	window.location.href = "/yimishop/Home/Member/activity/actt/start/id/"+url;
	}
    }
</script>