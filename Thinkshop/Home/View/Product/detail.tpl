<style type="text/css">
.glyphicon-star {
	color:#FFB300;
}
.sliderbox{height:80px;overflow:hidden;width:400px;z-index:20;margin-top:-80px;}
.sliderbox .slider{float:left;height:80px;width:400px;position:relative;overflow:hidden;display:inline;background:rgba(12,12,12,0.3);}
.sliderbox .slider li{float:left;width:80px;}
.sliderbox .slider li img{border:solid 1px #dfdfdf;}
.sliderbox .slider li.current img{border:solid 2px #38a38a;}
</style>
<include file="Index:header"/>
<script type="text/javascript" src="__Public__/js/pic.js"></script>
<div class="container main">
	<div class="row">
	<div class="col-md-5" style="padding:5px;">
	<div class="zoombox">
		<div class="zoompic"><img src="__ROOT__/Uploads/<{$good.img_more.0.g_img}>" width="400" height="400" title="" style="display:inline;"></div>	
		<div class="sliderbox">
			<div class="slider" id="thumbnail">
				<ul>
				    <foreach item="img_more" name="good.img_more">
					<li class=""><a href="__ROOT__/Uploads/<{$img_more.g_img}>" target="_blank"><img src="__ROOT__/Uploads/<{$img_more.gl_img}>" width="70" height="70"></a></li>
				    </foreach>
				</ul>
			</div>
		</div>		
	</div>
	</div>
	<div class="col-md-6" style="padding-top:30px;">
		<h4 style="color:#38a38a;font-weight:bold;"><{$good.g_name}></h4>
		<p style="font-size:18px;">价格：<del style="font-size:12px;">￥<{$good.ori_price}></del><span name="price" style="color:red;font-weight:bold;">￥<{$good.price}></span></p>
		<div style="padding:10px;">
			<p>卖家：&nbsp;&nbsp;<{$good.username}></p>
			<p>学校：&nbsp;&nbsp;<{$good.school}></p>
			<p>发布时间：&nbsp;&nbsp;<{$good.g_time|date='Y-m-d',###}></p>
			<p>销量：&nbsp;&nbsp;<{$good.sales}></p>
			<if condition="$godact neq ''"><p style="color:red">优惠条件：满<{$godact.ac_num1}><if condition="$godact.actype eq 1">件<else/>元</if>，减<{$godact.ac_nums1}>元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<neq name="godact.ac_num2" value="0">满<{$godact.ac_num2}><if condition="$godact.actype eq 1">件<else/>元</if>，减<{$godact.ac_nums2}>元</p></neq></if>
		</div>
		<form name="form1" method="post" action="__Tzhuan__/Product/confirm">
		<div style="margin-top:10px;"><span>数量：&nbsp;&nbsp;</span><a href="javascript:void(0);" id="low_num">-</a><input type="text" value="1" name="nums" class="nums"><a href="javascript:void(0);" id="up_num">+</a> &nbsp;&nbsp;( 库存&nbsp;<span id="g_num"><{$good.g_sum}></span>&nbsp;件 )</div>
		<div style="margin-top:30px;">
		<!-- <input type="hidden" name="price" value="<{$good.price}>"> -->
		<input type="hidden" name="g_id" value="<{$good.id}>">
		<input type="hidden" name="youhui" value="0">
		<input type="hidden" name="ac_num1" value="<{$godact.ac_num1}>">
		<input type="hidden" name="ac_nums1" value="<{$godact.ac_nums1}>">
		<input type="hidden" name="actype" value="<{$godact.actype}>">
		<input type="hidden" name="ac_num2" value="<{$godact.ac_num2}>">
		<input type="hidden" name="ac_nums2" value="<{$godact.ac_nums2}>">

		<input type="submit" class="btn btn-default buy" id="buy" name="sub" value="立即购买">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" class="btn btn-default buy" id="add-cart" value="加入购物车" data-toggle="modal" data-target="#myModal">
		</div>
		</form>
	</div>
    </div>
    <div class="aa"></div>
    <div class="row">
      <h4>相似的商品</h4>
      <ul class="list-inline">
            <foreach item="similar" name="similar">
			<li><div class="similar-pic"><a href="__Tzhuan__/Product/detail/gid/<{$similar.id}>"><img src="__ROOT__/Uploads/<{$similar.g_img}>"></a><p><a href="__Tzhuan__/Product/detail/gid/<{$similar.id}>"><{$similar.g_name}></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>￥<{$similar.price}></span></p></div></li>
			</foreach>
	  </ul>
    </div>
    <div class="row">
     <h4>商品评论</h4>
       <table class="table" style="width:100%">
       	<foreach item="comms" name="comms">
       		<tr><td><p><for start="0" end="$comms.co_mark"><span class="glyphicon glyphicon-star"></span></for></p><p><{$comms.co_time|date='Y-m-d h:i:s',###}></p></td><td style="line-height:40px;"><{$comms.co_content}></td><td style="width:160px;line-height:40px;"><{$comms.co_username}></td></tr>
       	</foreach>
       </table>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="cart-head modal-header">加入购物车<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>
    <div class="modal-body">
    	<p>添加<span class="status"></span>！</p>
        <p class="cart-stats">购物车共有<strong class="count"></strong>件</p>
        <a title="去购物车结算" class="cart-checkout" href="__Tzhuan__/Product/cart">去购物车结算</a>
    </div>
	</div>
</div>
</div>
</body>
<script type="text/javascript">
$('#up_num').bind('click',function() {
	var num=$("input[name='nums']").val()*1;
	var count=$('#g_num').text()*1;
	var nums=++num;
	if(nums>=count) {
		var nums=count;
	}
	$('input[name=youhui]').val(youhui(num));
	$("input[name='nums']").val(nums);
});
$('#low_num').bind('click',function() {
	var num=$("input[name='nums']").val()*1;
	var nums=--num;
	if(nums<=1) {
		var nums=1;
	}
	$('input[name=youhui]').val(youhui(num));
	$("input[name='nums']").val(nums);
});
$("input[name='nums']").bind('blur',function() {
	var num=$("input[name='nums']").val()*1;
	var count=$('#g_num').text()*1;
	if(num<1) {
		$("input[name='nums']").val(1);
	}   		
	if(num>count) {
		$("input[name='nums']").val(count);
	}
});
$('#add-cart').on('click',function(){
	var youhui=$('input[name=youhui]').val();
    var num=$('input[name=nums]').val();
    var gid=$('input[name=g_id]').val();
    $.ajax({
    	type:"post",
    	url:"__ROOT__/Home/Product/cart",
    	data:{'youhui':youhui,'num':num,'gid':gid,'act':'addcart'},
    	success:function(data) {
    		var status='';
           if(data.statuss) {
           	status='成功';
           }else{
            status='失败';
           }
           $('span.status').html(status);
           $('strong.count').html(data.count);
           $('#add-cart').val('已加入购物车');
           $('#add-cart').attr('disabled','true');
    	}
    });
});
function youhui(num) {
   var price=$('input[name=price]').val();
   var sum=num*price;
   var ptype=$('input[name=actype]').val()*1;
   var num1=$('input[name=ac_num1]').val()*1;
   var nums1=$('input[name=ac_nums1]').val()*1;
   var num2=$('input[name=ac_num2]').val()*1;
   var nums2=$('input[name=ac_nums2]').val()*1;
   var yh=0;
   if(num2 != 0) {
      if(ptype==0) {
        if(sum>num1 && sum<num2) {
             yh=nums1;
          }else if(sum>num2) {
           yh=nums2;
          }
      }else {
        if(num>=num1 && num<num2) {
          yh=nums1;
        }else if(num>=num2){
          yh=nums2;
        }
      }
   }else if(num1 != 0) {
      if(ptype==0) {//元
          if(sum>=num1) {
             yh=nums1;
          }
        }else {//件
           if(num>=num1) {
              yh=nums1;
           }
        }
   }
   return yh;
   // if(num2 != 0) {
   //     if(ptype==0) {//元
   //        if(sum>num1 && sum<num2) {
   //           yh=nums1;
   //        }else if(sum>num2) {
   //        	yh=nums2;
   //        }
   //      }else {//件
   //         if(num<num1 && num<num2) {
   //         	 yh=nums1;
   //         }else if(num>num2) {
   //        	yh=nums2;
   //        }
   //      }
   //  }else {
   //  	if(ptype==0) {//元
   //        if(sum>num1) {
   //           yh=nums1;
   //        }
   //      }else {//件
   //         if(num>num1) {
   //         	 yh=nums1;
   //         }
   //      }
   //  }
   //  return yh;
}
</script>