<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
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
  <?php if(is_array($orders)): foreach($orders as $key=>$orders): ?><tbody class="god">
	    <tr><td colspan="6" style="padding-bottom:10px;"><?php echo (date("Y-m-d h:i:s",$orders["create_time"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单号：<?php echo ($orders["order_id"]); ?></td></tr>
    	<tr>		            		
            <td style="width:560px;">
              <div style="display:inline-block;">
              <img src="/yimishop/Uploads/<?php echo ($orders["pic"]); ?>" style="width:60px;height:60px;"> 
              </div>  
              <div style="display:inline-block;"><p><a href="/yimishop/Home/Product/detail/gid/<?php echo ($orders["pid"]); ?>"><?php echo ($orders["name"]); ?></a></p></div>
            </td> 
            <td style="width:130px;">
               <p><?php echo ($orders["price"]); ?></p> 
            </td>
            <td style="width:130px;">
               <p>x<?php echo ($orders["num"]); ?></p> 
            </td>
            <td>
               <p style="width:150px;">实付款：<?php echo ($orders["sum"]); ?></p> 
               <p style="width:150px;">总优惠：<?php echo ($orders["youhui"]); ?></p> 
            </td>
            <td style="width:150px;">
               <p>
               <?php if($orders["status"] == 3): ?><a class="status">等待付款</a><?php elseif($orders["status"] == 1): ?><a class="status">等待发货</a><?php elseif($orders["status"] == 2): ?><a class="status">确认收货</a><?php elseif($orders["status"] == 4): ?><a class="status pingl">评&nbsp;论</a><?php elseif($orders["status"] == 5): ?><span class="status">已评论</span><?php endif; ?></p> 
            </td> 
    	</tr>
      <div class="col-md-12" style="display:none;border:1px solid #eee;padding:12px;" id="divmark">
       <form class="form" action="/yimishop/Home/Comment/index" method="post">
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
          <input type="hidden" name="co_gid" value="<?php echo ($orders["pid"]); ?>">
          <input type="hidden" name="co_mark" value="0">
          <input type="hidden" name="oid" value="<?php echo ($orders["id"]); ?>">
          <button type="submit" class="btn btn-default">提交</button>
        </div>
      </div>
       </form>
      </div>
	</tbody><?php endforeach; endif; ?>
  <tbody class="god"><tr><td colspan="6"><?php echo ($pages); ?></td></tr></tbody>
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