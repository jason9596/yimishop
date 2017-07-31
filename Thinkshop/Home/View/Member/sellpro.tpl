<div class="row" style="padding-left:60px;padding-top:30px;">				
<table width="100%" style="color:#777;">
  <foreach item="godinfo" name="godinfo">
    <tbody class="god">
	    <tr><td colspan="6" style="padding-bottom:10px;">订单号：2012365478955 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;店铺的名称</td></tr>
    	<tr>		            		
            <td style="width:560px;">
              <div style="display:inline-block;">
              <img src="__ROOT__/Uploads/<{$godinfo.g_img}>" style="width:90px;height:90px;"> 
              </div>  
              <div style="display:inline-block;"><p><a href="__Tzhuan__/Product/detail/gid/<{$godinfo.id}>"><{$godinfo.g_name}></a></p></div>
            </td> 
            <td style="width:150px;">
               <p class="price">￥<{$godinfo.price}></p> 
            </td>
            <td style="width:150px;">
               <p class="price">￥<{$godinfo.ori_price}></p> 
            </td> 
             <td>
               <p style="width:100px;"><{$godinfo.g_sum}></p> 
            </td>
            <td>
               <p style="width:150px;"><{$godinfo.g_time|date='Y-m-d',###}></p> 
            </td>
            <td style="width:100px;text-align:center;padding-right:50px;">
                <p><a href="__Tzhuan__/Product/index/edit/<{$godinfo.id}> ">修改</a></p>
                <p><a href="__Tzhuan__/Product/index/del/<{$godinfo.id}> ">删除</a></p>
            </td>
    	</tr>
	</tbody>
  </foreach>
  <tbody class="god"><tr><td colspan="6"><{$pages}></td></tr></tbody>
</table>
    
</div>
		
<script type="text/javascript">
 var act=1;
 $('.jbzl p.head span').bind('click',function() {
 	$('.jbzl p span').hide();
 	$('.jbzl p input,select').show();
 });  
</script>