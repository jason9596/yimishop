<include file="Index:header"/>
<script>
     function upload(upbtn,imgdiv,imgShow){
        new uploadPreview({ UpBtn: upbtn, DivShow: imgdiv, ImgShow: imgShow});
    }
</script>
<style type="text/css">
    body {
    	color:#999;
    }
    .pic {
    	cursor:pointer;
    	margin-right:30px;
    }
    .upload_img {		        	
    	position:absolute;
        z-index:100;
        width:90px;
        height:90px;
        cursor:pointer;
        opacity:0;
    }
    #imgdiv img {
    	height:90px;
    	width:90px;
    }
    .select {
    	width:120px;
    	height:30px;
    }
    .Wdate {
    	width:200px;
    	height:30px;
    }
</style>
		<div class="container main" style="border:1px solid #38a38a;width:1000px;">
			<div class="row" style="padding:10px;background:#38a38a;"><h4 
			style="text-align:center;color:#fff;font-size:24px;font-weight:bold;">商品<if condition="$good.edit eq 1">编辑<else/>发布</if></h4></div>
			<div class="row">
			  <div class="col-md-12">
			  	<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
			  	  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品标题</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="title" placeholder="商品标题" name="g_name" value="<{$good.g_name}>">
				    </div>
				  </div>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品类型</label>
				    <div class="col-sm-7">
				      <input type="radio" name="ptype" value="0" <if condition="$good.ptype eq 0">checked="true"</if>>全新&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <input type="radio" name="ptype" <if condition="$good.ptype neq 0">checked="true"</if> value="1">二手
				    </div>
				  </div>
				  <if condition="$good['edit'] neq 1">
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品类型</label>
				    <div class="col-sm-7">
				      <select class="select" name="cat" id="cat1">
				      	<option value="0">---请选择---</option>
				      	<foreach name="cates" item="cates">				      		
				      		<option value="<{$cates.id}>" <if condition="$good.cid eq $cates.id">selected="selected"</if>><{$cates.c_name}></option>
				      	</foreach>	
				      </select>
				       <select class="select" name="catt" id="cat2" style="display:none;">				      	
				      </select>
				    </div>
				  </div>
				  </if>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">原价</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="ori_price" placeholder="销售价格" name="ori_price" onkeyup="return isint(this);" value="<{$good.ori_price}>">
				    </div>
				  </div>
				  <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">现价</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="price" placeholder="销售价格" name="price" onkeyup="return isint(this);" value="<{$good.price}>">
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品数量</label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="count" placeholder="商品数量" name="g_sum" onkeyup="return isint(this);" value="<{$good.g_sum}>">
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品图片</label>
				    <div id="imgdiv">
				      <input type="file" name="upimg0" class="upload_img" id="upbtn"  onclick="upload('upbtn','imgdiv','imgShow');" style="display:inline;" value="__ROOT__/Uploads/<{$good.g_img}>">
				      <if condition="$good.edit eq 1">
				      <img src="__ROOT__/Uploads/<{$good.g_img}>" class="pic" id="imgShow">
				      <else/>
				      <img src="__Public__/img/nopicsmall.gif" class="pic" id="imgShow">
				      </if>
				      <input type="file" name="upimg1" class="upload_img" id="upbtn1" onclick="upload('upbtn1','imgdiv','imgShow1');" style=" display:inline;">
				      <if condition="$good.edit eq 1">
				      <img src="__ROOT__/Uploads/<{$good.img_more.0}>" class="pic" id="imgShow1">
				      <else/>
				      <img src="__Public__/img/nopicsmall.gif" class="pic" id="imgShow1">
				      </if>
				      <input type="file" name="upimg2" class="upload_img" id="upbtn2" onclick="upload('upbtn2','imgdiv','imgShow2');" style=" display:inline;">
				      <if condition="$good.edit eq 1">
				      <img src="__ROOT__/Uploads/<{$good.img_more.1}>" class="pic" id="imgShow2">
				      <else/>
				      <img src="__Public__/img/nopicsmall.gif" class="pic" id="imgShow2">
				      </if>
				      <input type="file" name="upimg3" class="upload_img" id="upbtn3" onclick="upload('upbtn3','imgdiv','imgShow3');" style=" display:inline;">
				      <if condition="$good.edit eq 1">
				      <img src="__ROOT__/Uploads/<{$good.img_more.2}>" class="pic" id="imgShow3">
				      <else/>
				      <img src="__Public__/img/nopicsmall.gif" class="pic" id="imgShow3">
				      </if>
				      <input type="file" name="upimg4" class="upload_img" id="upbtn4" onclick="upload('upbtn4','imgdiv','imgShow4');" style=" display:inline;">
				      <if condition="$good.edit eq 1">
				      <img src="__ROOT__/Uploads/<{$good.img_more.3}>" class="pic" id="imgShow4">
				      <else/>
				      <img src="__Public__/img/nopicsmall.gif" class="pic" id="imgShow4">
				      </if>
				    </div>
				  </div>
				   <div class="form-group" style="margin-top:40px;">
				    <label for="inputtext3" class="col-sm-3 control-label">商品详情</label>
				    <div class="col-sm-7">
				       <textarea for="textarea" name="g_desc" id="desc" class="form-control" placeholder="填写您对商品的详细描述"><{$good.g_desc}></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-5 col-sm-2">
				      <if condition="$good.edit eq 1">
				      <input type="hidden" name="editpro" value="1">	
				      <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;" >保存</button>
				      <else/>
				      <input type="hidden" name="release" value="product">	
				      <button type="submit" class="btn btn-default" style="width:120px;height:40px;background:#38a38a;color:#fff;" onclick="return pchk();">马上发布</button>
				      </if>
				    </div>
				  </div>
			  	</form>
			  </div>
			</div>
		</div>
	</body>
     <script type="text/javascript">
         $('#cat1').bind('change',function() {
           var cat1=$(this).val();
           var data={'cat1':cat1,'hqcat':1}
		 	$.ajax({
		 	   type:"POST",
		       data:data,
		       dataType:"json",
		       success:function(res) {
		       	$('#cat2 option').remove();
		       	if(res.length) {
			       	for(var i=0;i<res.length;i++) {
			       		$('#cat2').append("<option value='"+res[i].id+"'>"+res[i].c_name+"</option>");
			       	}
			         $('#cat2').show();		
		       	}else {
		       		$('#cat2').hide();
		       	}
		       }
		 	});
         });
	</script>      
</html>