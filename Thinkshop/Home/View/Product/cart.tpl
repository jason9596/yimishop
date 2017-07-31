<include file="Index:header"/>
<style type="text/css">
        table tr {
        	border:1px solid #ddd;
        }
        table tr td,th{
        	padding:10px;
        }
</style>
<div class="container main">
	<div class="row">
    <h3 style="border-bottom:2px solid #ddd;padding-bottom:20px;font-weight:bold;color:#38a38a">我的购物车</h3>
    <form name="form-cart" method="post" action="" id="form">
    <table width="100%">
    	<tr style="background:#ddd;color:#666;"><th>全选</th><th>商品</th><th>单价</th><th>数量</th><th>小计（元）</th><th>操作</th></tr>
    	<tr style="height:15px;border:0px;"></tr>
    	<foreach item="carts" name="carts">
    	<tr>
    		<td class="first">
                <label class="cart-checkbox"><input type="checkbox" name="cart_id[]" value="<{$carts.id}>"></label>
            </td>
            <td style="width:600px;">
                <div style="display:inline-block;">
                <img src="__ROOT__/Uploads/<{$carts.gimg}>" style="width:90px;height:90px;">
                <input type="hidden" name="pic" value="<{$carts.gimg}>"> 
                </div>  
                <div style="display:inline-block;"><p><a href="__Tzhuan__/Product/detail/gid/<{$carts.gid}>"><{$carts.gname}></a></p></div>
            </td> 
            <td style="width:120px;">
               <p class="price">￥<{$carts.price}></p> 
            </td> 
            <td>
               <label><input type="text" name="nums" value="<{$carts.num}>" class="nums" readonly></label>
            </td>
            <td style="width:120px;">
            <p>￥<span class="sumprice"><{$carts.sumprice}></span></p> 
            </td>
             <td style="width:200px;text-align:center;">
               <label><a href="javascript:void(0);" class="del">删除</a><input type="hidden" name="cid" value="<{$carts.id}>"></label>
            </td>                      
    	</tr>
    	<tr style="height:15px;border:0px;"></tr>
        </foreach>
    </table>
    <input type="hidden" name="csum" value="">
    <input type="hidden" name="act" value="confirm">
    </form>
    <div class="toolbar">
        <div class="jiesuan">	
        <span>已选：<span id="cnum">0</span>&nbsp;件</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <span>合计：￥<span id="csum">0</span>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
            <a class="submit-btn submit" href="javascript:void(0);">结算</a>
        </div>
    </div>
	</div>
</div>
<script type="text/javascript">
	$('input[type=checkbox]').on('click',function() {
		var test = $('input[type=checkbox]:checked');
		var checksum=0;
		var checklen=0;
		for (var i=0; i<test.length;i++) {
			checksum+=parseInt($(test[i]).parent().parent().parent().find('.sumprice').text());
			checklen++;
		}
        $('#cnum').text(checklen);
        $('#csum').text(checksum);
        $('input[name=csum]').val(checksum);
	});
	$('.del').on('click',function() {
        var cid=$(this).next('input').val();
        $.ajax({
        	type:'get',
        	data:{'act':'del','cid':cid},
            success:function(data) {
            	if(data) {
            		alert('删除成功');
            		location.reload(); 
            	}else {
            		alert('删除失败');
            		location.reload();
            	}
            }
        });

	});
    $('.submit').on('click',function() {
        var cid=$('input[type=checkbox]:checked').length;
        if(cid) {
           $('#form').submit();
        }else {
            alert('至少选择一个商品');
            return false;
        }
    });
</script>