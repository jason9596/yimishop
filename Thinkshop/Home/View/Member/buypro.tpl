<style type="text/css">
	.status {
		border:1px solid #38a38a;
		text-align: center;color:#38a38a;display:block;width:70px;height:30px;line-height:29px;cursor:pointer;
	}
	.status:hover {
		background:#38a38a;
		color:#fff;
		text-decoration:none;
	}
  #pf span {
    font-size:18px;
    cursor:pointer;
  }
  .glyphicon-star {
    color:#FFB300;
  }
</style>
<div class="row" style="padding-left:60px;padding-top:30px;">				
<table width="100%" style="color:#777;">
  <foreach item="orders" name="orders">
    <tbody class="god">
	    <tr><td colspan="6" style="padding-bottom:10px;"><{$orders.create_time|date="Y-m-d h:i:s",###}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单号：<{$orders.order_id}></td></tr>
    	<tr>		            		
            <td style="width:560px;">
              <div style="display:inline-block;">
              <img src="__ROOT__/Uploads/<{$orders.pic}>" style="width:60px;height:60px;"> 
              </div>  
              <div style="display:inline-block;"><p><a href="__Tzhuan__/Product/detail/gid/<{$orders.pid}>"><{$orders.name}></a></p></div>
            </td> 
            <td style="width:130px;">
               <p><{$orders.price}></p> 
            </td>
            <td style="width:130px;">
               <p>x<{$orders.num}></p> 
            </td>
            <td>
               <p style="width:150px;">实付款：<{$orders.sum}></p> 
               <p style="width:150px;">总优惠：<{$orders.youhui}></p> 
            </td>
            <td style="width:150px;">
               <p>
               <if condition="$orders.status eq 3"><a class="status">等待付款</a><elseif condition="$orders.status eq 1"/><a class="status">等待发货</a><elseif condition="$orders.status eq 2"/><a class="status">确认收货</a><elseif condition="$orders.status eq 4"/><a class="status pingl">评&nbsp;论</a><elseif condition="$orders.status eq 5"/><span class="status">已评论</span></if></p> 
            </td> 
    	</tr>
      <div class="col-md-12" style="display:none;border:1px solid #eee;padding:12px;" id="divmark">
       <form class="form" action="__Tzhuan__/Comment/index" method="post">
       <div class="form-group">
        <label class="control-label">评分</label>
        <div id="pf">
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true" order="1"></span>
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true" order="2"></span>
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true" order="3"></span>
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true" order="4"></span>
          <span class="glyphicon glyphicon-star-empty" aria-hidden="true" order="5"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">内容</label>
        <div>
          <textarea class="form-control" rows="3" placeholder="长度在1-500之间，写下您对该产品的感受" name="co_content"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div>
          <input type="hidden" name="co_gid" value="<{$orders.pid}>">
          <input type="hidden" name="co_mark" value="0">
          <input type="hidden" name="oid" value="<{$orders.id}>">
          <button type="submit" class="btn btn-default">提交</button>
        </div>
      </div>
       </form>
      </div>
	</tbody>
  </foreach>
  <tbody class="god"><tr><td colspan="6"><{$pages}></td></tr></tbody>
</table>    
</div>		
		
<script type="text/javascript">
  $('.pingl').on('click',function() {
      $('#divmark').slideToggle();
  });
  $('#pf span').on('click',function() {
    var order=$(this).attr('order');
    $('input[name=co_mark]').val(order);
    $('#pf span').each(function(i) {
      if(i<order){
        $('#pf span[order='+(i+1)+']').removeClass('glyphicon-star-empty').addClass('glyphicon-star');
      }else {
        $('#pf span[order='+(i+1)+']').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    });
  });
</script>