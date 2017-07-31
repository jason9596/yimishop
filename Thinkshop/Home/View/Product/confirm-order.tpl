<include file="Index:header"/>
		<style type="text/css">		     
		        table.order tr td{
		        	padding:12px;
		        	width:160px;
		        }
		        .bar {
		        	padding-top:20px;
		        	float:right;
	                width:130px;
	                text-align:right;	                
		        } 
		</style>

		<div class="container main">
		    <div class="row">
             <h4 style="padding-bottom:10px;">收货人信息<a style="float:right;font-size:14px;cursor:pointer;text-decoration:none;"  class="add">新增收货地址</a></h4>
              <div style="border:1px dashed #ccc;padding:20px;color:#777;margin-bottom:20px;" id="addrinfo">
              	<if condition="$aid eq 0">
              	 <p>您还没设置收货地址，可以先去<a style="cursor:pointer;text-decoration:none;" class="add">新增收货地址</a></p>
              	<else/>
              	<foreach item="addresss" name="addresss">
              	<p>
              	<input type="radio" name="addrid" value="<{$addresss.id}>">&nbsp;&nbsp;&nbsp;&nbsp;<label><{$addresss.aname}>&nbsp;&nbsp;<{$addresss.address}>&nbsp;&nbsp;<{$addresss.atel}>&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;<a>修改</a>
              	</foreach>
                </p>
              	</if>
              </div>
              <div style="border:1px dashed #ccc;padding:20px;display:none;" id="add">
	              <form action="" method="post"  class="form-horizontal">
	              	<div style="margin-bottom:10px;">
					    <label>收货人姓名:</label>
					    <input type="text" id="aname" class="form-control" placeholder="收货人姓名" name="aname" style="width:300px;">
					</div>
					<div style="margin-bottom:10px;">
					    <label>收货地址:</label>
					    <input type="text" id="address" class="form-control" placeholder="收货地址" name="address" style="width:300px;">
	                </div>
	                <div style="margin-bottom:10px;">
				    <label>是否为默认地址</label>
				      &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="id_defa" value="0">否&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <input type="radio" name="id_defa" checked="true" value="1">是
				    </div>
	                <div style="margin-bottom:10px;">
					    <label>联系电话:</label>
					    <input type="text" id="atel" class="form-control" placeholder="联系电话" name="atel" style="width:300px;">
	                </div>
	                <input type="hidden" name="act" value="address">
	                <button type="submit" class="btn btn-default" name="addsub" style="width:120px;height:40px;background:#38a38a;color:#fff;">提交</button>
	               </form>
		    </div>
		    </div>
			<div class="row">
            <h4>确认订单信息</h4>
            <form name="form-cart" method="post" action="">
            <table width="100%" class="order">
            	<tr><td style="text-align:left;">产品</td><td>单价</td><td>个数</td><td>优惠</td><td>总价</td></tr>
            	<foreach item="goods" name="goods">
            	<tr style="border:1px dashed #ccc;">           		
                    <td style="text-align:left;width:600px;">
	                    <div style="display:inline-block;">
	                    <img src="__ROOT__/Uploads/<{$goods.g_img}>" style="width:90px;height:90px;"> 
	                    </div>  
	                    <div style="display:inline-block;margin-left:10px;"><p><a href="__Tzhuan__/Product/detail/gid/<{$goods.id}>" name="gname"><{$goods.g_name}></a></p></div>
                    </td> 
                    <td>
                       <p class="price" name="price">￥<{$goods.price}></p> 
                    </td> 
                    <td>
                       <p name="num"><{$goods.num}></p> 
                    </td>
                    <td>
                       <p class="youhui">优惠<{$goods.youhui}>元</p> 
                    </td>
                     <td>
                       <p name="sum">￥<{$goods.sum}></p> 
                    </td>                      
            	</tr>
                </foreach>
            </table>
             <div class="bar">
	                <span style="display:block;">优惠:&nbsp;￥<{$youhui}>&nbsp;元</span> 		       
	                <span style="display:block;">合计:&nbsp;￥<if condition="$sum neq ''"><{$sum}><else/><{$goods.sum}></if>&nbsp;元</span>  
		            <input type="hidden" name="logid" value="0" id="addid">
		            <input type="hidden" name="gid" value="<{$goods.id}>"> 
		            <input type="hidden" name="g_name" value="<{$goods.g_name}>">
		            <input type="hidden" name="product_price" value="<{$goods.price}>"> 
		            <input type="hidden" name="num" value="<{$goods.num}>">
		            <input type="hidden" name="sum" value="<{$goods.sum}>"> 
		            <input type="hidden" name="pic" value="<{$goods.g_img}>">
		            <input type="hidden" name="sellid" value="<{$goods.uid}>">
		            <input type="hidden" name="confirm">
		            <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;margin-top:15px;">提交订单</button>		    
			 </div>
            </form>
			</div>
		</div>

		
<script type="text/javascript">
$('.add').bind('click',function() {
   $('#addrinfo').toggle();
   $('#add').toggle();
});
$('input[name=addrid]').bind('click',function() {
   $va=$('input[name=addrid]:checked').val();
   $('#addid').val($va);
});
</script>