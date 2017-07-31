<?php if (!defined('THINK_PATH')) exit();?><div class="yxgj">
<p class="head" style="width:100%;">添加活动<a href="/yimishop/Home/Member/activity" style="float:right;color:#38a38a;font-size:14px;text-decoration:none;padding-top: 10px;">活动列表</a></p>
<div class="addact">
	<form action="" method="post" class="form-horizontal" name="form1">
		<p>基本信息</p>	
		<fieldset style="border:1px dashed #ccc;padding:10px;margin-bottom:15px;">
		<div class="col-sm-12" style="margin-bottom:10px;">
			<label class="col-sm-1 control-label">活动名称</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" placeholder="活动名称" name="acname" value="<?php echo ($acti["acname"]); ?>"><span></span>
		    </div>
	    </div>
	    <div class="col-sm-12" style="">
		    <label class="col-sm-1 control-label">活动时间</label>
		    <?php if($acti != ''): ?><div class="col-sm-2">
		      <input id="J_From" type="text" name="stime" class="form-control" placeholder="开始时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo (date('Y-m-d h:m:s',$acti["stime"])); ?>">
		    </div>
		    <div class="col-sm-2">
		    <input id="J_To" type="text" name="etime" class="form-control" placeholder="结束时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo (date('Y-m-d h:m:s',$acti["etime"])); ?>">
		    </div>
		    <?php else: ?>
		     <div class="col-sm-2">
		      <input id="J_From" type="text" name="stime" class="form-control" placeholder="开始时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})">
		    </div>
		    <div class="col-sm-2">
		    <input id="J_To" type="text" name="etime" class="form-control" placeholder="结束时间" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})">
		    </div><?php endif; ?>
		</div>
		</fieldset>
		<p>优惠内容(至少添一个)</p>
		<fieldset style="border:1px dashed #ccc;padding:10px;margin-bottom:15px;">
		<div class="col-sm-12">
			<table  class="table" style="width:100%;margin-top:15px;">
				<tr>
			     <td style="line-height: 60px;" class="col-sm-4">满&nbsp;<input type="text" value="<?php echo ($acti["ac_num1"]); ?>" name="ac_num1" id="acnum1"  style="width:60px;height:24px;line-height:24px;" onchange="return isint(this);" onblur="actii();">&nbsp;
			     <select class="select" name="actype" style="display:inline-block;width:40px;height:24px;">
					<option value="1" <?php if($acti["actype"] != 0): ?>selected="selected"<?php endif; ?>>件</option>
					<option value="1" <?php if($acti["actype"] == 0): ?>selected="selected"<?php endif; ?>>元</option>
				</select>
			     </td>
			     <td style="line-height: 60px;" class="col-sm-4">减&nbsp;<input type="text" name="ac_nums1" value="<?php echo ($acti["ac_nums1"]); ?>" id="acnums1" style="width:60px;height:24px;line-height:24px;" onchange="return isint(this);" onblur="actii();">&nbsp;元</td>
			     <td style="line-height: 60px;" class="col-sm-3"  id="acti1">满<?php echo ($acti["ac_num1"]); if($acti["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>,减<?php echo ($acti["ac_nums1"]); ?>元</td>
			     <?php if($acti != ''): ?><td style="line-height: 60px;" class="col-sm-1"></td><?php endif; ?>
				</tr>
				<tr>
			     <td style="line-height:60px;" class="col-sm-4">满&nbsp;<input type="text" value="<?php echo ($acti["ac_num2"]); ?>" name="ac_num2" id="acnum2" style="width:60px;height:24px;line-height:24px;" onchange="return isint(this);" onblur="actii2();">&nbsp;
			     <select class="select" name="atype" style="display:inline-block;width:40px;height:24px;">
					<option value="1" <?php if($acti["actype"] != 0): ?>selected="selected"<?php endif; ?>>件</option>
					<option value="1" <?php if($acti["actype"] == 0): ?>selected="selected"<?php endif; ?>>元</option>
				</select>
			     </td>
			     <td style="line-height: 60px;" class="col-sm-4">减&nbsp;<input type="text" name="ac_nums2" value="<?php echo ($acti["ac_nums2"]); ?>" id="acnums2" style="width:60px;height:24px;line-height:24px;" onchange="return isint(this);" onblur="actii2();">&nbsp;元</td>
			     <td style="line-height: 60px;" class="col-sm-3" id="acti2">满<?php echo ($acti["ac_num2"]); if($acti["actype"] == 1): ?>件<?php else: ?>元<?php endif; ?>,减<?php echo ($acti["ac_nums2"]); ?>元</td>
			     <?php if($acti != ''): ?><td style="line-height: 60px;" class="col-sm-1"><a href="javascript:;">删除</a></td><?php endif; ?>
				</tr>
			</table>
	    </div>
	    </fieldset>
	    <p>选择商品</p>
	    <fieldset style="border:1px dashed #ccc;padding:10px;margin-bottom:15px;">
		<div class="col-sm-12">
			<table style="width:100%;" class="table">
				<tr>
				  <td style="width:100px;">
                   <label style="height:30px;line-height:30px;"><input type="checkbox" name="selall">全选</label>
                  </td>
                  <td>
                   <label style="line-height:30px;">商品名称</label>
                  </td>
                  <td style="width:150px;">
                   <label style="line-height:30px;">现价</label>
                  </td>
                  <td style="width:150px;">
                   <label style="line-height:30px;">原价</label>
                  </td>
                  <td style="width:100px;">
                   <label style="line-height:30px;">库存</label>
                  </td>
                  <td>
                   <label style="line-height:30px;">发布时间</label>
                  </td>
				</tr>
				<?php if(is_array($actgods)): foreach($actgods as $key=>$actgods): ?><tr>
				<td style="width:100px;">
                   <label style="line-height:90px;">                   
                   <input type="checkbox" name="gid[]" value="<?php echo ($actgods["id"]); ?>" <?php if(in_array(($actgods["id"]), is_array($aids)?$aids:explode(',',$aids))): ?>checked<?php endif; ?>>
                   </label>
                </td>	
			     <td style="">
                    <div style="display:inline-block;">
                    <img src="/yimishop/Uploads/<?php echo ($actgods["g_img"]); ?>" style="width:90px;height:90px;"> 
                    </div>  
                    <div style="display:inline-block;"><p><a href="/yimishop/Home/Product/detail/gid/<?php echo ($actgods["id"]); ?>"><?php echo ($actgods["g_name"]); ?></a></p></div>
                </td> 
                <td style="width:150px;">
                   <p class="price;" style="line-height:90px;">￥<?php echo ($actgods["price"]); ?></p> 
                </td>
                <td style="width:150px;">
                   <p class="price" style="line-height:90px;">￥<?php echo ($actgods["ori_price"]); ?></p> 
                </td> 
                 <td>
                   <p style="width:100px;line-height:90px;"><?php echo ($actgods["g_sum"]); ?></p> 
                </td>
                <td>
                   <p style="width:150px;line-height:90px;"><?php echo (date('Y-m-d',$actgods["g_time"])); ?></p> 
                </td>
				</tr><?php endforeach; endif; ?>
				<!-- </if> -->
			</table>
	    </div>
	    </fieldset>
	    <button type="submit" class="btn btn-default" id="sub" style="background:#38a38a;color:#fff;width:100px;margin-bottom:15px;" <?php if($_GET['opt']== 'edit'): ?>name="editt"<?php else: ?>name="acti"<?php endif; ?>>提&nbsp;交</button>
	</form>
</div>
</div>
<script language="javascript">
    function actii() {
		var actype=$('select[name=actype]').val();
		var ac_nums1=$('input[name=ac_nums1]').val();
		var ac_num1=$('input[name=ac_num1]').val();
		if(actype==1) {
			actype='件';
		}else if(actype==2) {
			actype='元';
		}
		$('#acti1').html("满"+ac_num1+actype+",减"+ac_nums1+"元");
	}
    function actii2() {
		var actype=$('select[name=actype]').val();
		var ac_nums2=$('input[name=ac_nums2]').val();
		var ac_num2=$('input[name=ac_num2]').val();
		if(actype==1) {
			actype='件';
		}else if(actype==2) {
			actype='元';
		}
		$('#acti2').html("满"+ac_num2+actype+",减"+ac_nums2+"元");
	}
	$('#sub').on('click',function() {
        var chk=false;
	  	var focu='';
	  	var remind='';
	  	var stime=$('input[name=stime]').val();
	  	var etime=$('input[name=etime]').val();
	  	if($('input[name=acname]').val()=='') {
	  	  remind='活动名称不能为空';
	  	  focu=$('input[name=acname]'); 	
	  	}else if($('input[name=acname]').val().length>10) {
	  	  remind='活动名称不能超过10个字符';
	  	  focu=$('input[name=acname]');
	  	}else if($('input[name=stime]').val()=='') {
	  	  remind='请填写开始时间';
	  	  focu=$('input[name=stime]');
	    }else if($('input[name=etime]').val()=='') {
	      remind='请填写结束时间';
	  	  focu=$('input[name=etime]');
	    }else if(etime<=stime) {
	       remind='结束时间应该大于开始时间';
	  	   focu=$('input[name=etime]');
	    }else if($('input[name=ac_num1]').val()==''||$('input[name=ac_nums1]').val()=='') {
           remind='请填写第一级优惠';
	  	   focu=$('input[name=ac_num1]');
	    }else{
	    	chk=true;
	    }
	    if(!chk) {
	    	alert(remind);
	    	focu.focus();
	    }
	    return chk;
	});
</script>