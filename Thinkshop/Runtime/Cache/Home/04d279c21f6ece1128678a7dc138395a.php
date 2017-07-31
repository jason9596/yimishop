<?php if (!defined('THINK_PATH')) exit();?><div class="row" style="padding-left:60px;padding-top:30px;">				
<table width="100%" style="color:#777;">
  <?php if(is_array($godinfo)): foreach($godinfo as $key=>$godinfo): ?><tbody class="god">
	    <tr><td colspan="6" style="padding-bottom:10px;">订单号：2012365478955 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;店铺的名称</td></tr>
    	<tr>		            		
            <td style="width:560px;">
              <div style="display:inline-block;">
              <img src="/yimishop/Uploads/<?php echo ($godinfo["g_img"]); ?>" style="width:90px;height:90px;"> 
              </div>  
              <div style="display:inline-block;"><p><a href="/yimishop/Home/Product/detail/gid/<?php echo ($godinfo["id"]); ?>"><?php echo ($godinfo["g_name"]); ?></a></p></div>
            </td> 
            <td style="width:150px;">
               <p class="price">￥<?php echo ($godinfo["price"]); ?></p> 
            </td>
            <td style="width:150px;">
               <p class="price">￥<?php echo ($godinfo["ori_price"]); ?></p> 
            </td> 
             <td>
               <p style="width:100px;"><?php echo ($godinfo["g_sum"]); ?></p> 
            </td>
            <td>
               <p style="width:150px;"><?php echo (date('Y-m-d',$godinfo["g_time"])); ?></p> 
            </td>
            <td style="width:100px;text-align:center;padding-right:50px;">
                <p><a href="/yimishop/Home/Product/index/edit/<?php echo ($godinfo["id"]); ?> ">修改</a></p>
                <p><a href="/yimishop/Home/Product/index/del/<?php echo ($godinfo["id"]); ?> ">删除</a></p>
            </td>
    	</tr>
	</tbody><?php endforeach; endif; ?>
  <tbody class="god"><tr><td colspan="6"><?php echo ($pages); ?></td></tr></tbody>
</table>
    
</div>
		
<script type="text/javascript">
 var act=1;
 $('.jbzl p.head span').bind('click',function() {
 	$('.jbzl p span').hide();
 	$('.jbzl p input,select').show();
 });  
</script>