<include file="Index:header" />
		<div class="container main">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline order">
					<if condition="$Think.get.cid eq ''">
					<if condition="$Think.get.key eq ''">
					<li><a href="__Tzhuan__/Product/lists/orderby/1">销量</a></li><li><a href="__Tzhuan__/Product/lists/orderby/2">价格</a></li><li><a href="__Tzhuan__/Product/lists/orderby/3">最新</a></li><li><a href="__Tzhuan__/Product/lists/orderby/4">评分
					</a></li>
					<else/>
					<li><a href="__Tzhuan__/Product/lists/key/<{$Think.get.key}>/orderby/1">销量</a></li><li><a href="__Tzhuan__/Product/lists/key/<{$Think.get.key}>/orderby/2">价格</a></li><li><a href="__Tzhuan__/Product/lists/key/<{$Think.get.key}>/orderby/3">最新</a></li><li><a href="__Tzhuan__/Product/lists/key/<{$Think.get.key}>/orderby/4">评分
					</a></li>
				    </if>					
					<else/>
					<li><a href="__Tzhuan__/Product/lists/cid/<{$Think.get.cid}>/orderby/1">销量</a></li><li><a href="__Tzhuan__/Product/lists/cid/<{$Think.get.cid}>/orderby/2">价格</a></li><li><a href="__Tzhuan__/Product/lists/cid/<{$Think.get.cid}>/orderby/3">最新</a></li><li><a href="__Tzhuan__/Product/lists/cid/<{$Think.get.cid}>/orderby/4">评分
					</a></li>
					</if>
					</ul>
					<ul class="list-inline" style="border-top:1px solid #38a38a;padding-top:28px;">
					    <foreach item="goods" name="goods">
						<a href="__Tzhuan__/Product/detail/gid/<{$goods.id}>">						
						<li>
							<div style="border:1px solid #ddd;margin:10px;width:250px;height:280px;padding:10px;">
							<img src="__ROOT__/Uploads/<{$goods.g_img}>" class="img-responsive" style="width:200px;height:200px;margin:0 auto;">
							<div style="height:70px;line-height:70px;padding-left:10px;"><a href="__Tzhuan__/Product/detail/gid/<{$goods.id}>"><{$goods.g_name}></a><span style="color:red;float:right;padding-right:12px;">￥<{$goods.price}></span></div>
							<p style="color:red;padding-left:10px;"></p>
							</div>
						</li>
						</a>
						</foreach>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>