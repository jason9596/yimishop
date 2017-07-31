<include file="header" />
		<div class="container main">
			<div class="row">
				<div class="col-md-10">
					<h3 style="color:#38a38a;"><b>最新发布</b></h3>
					<ul class="list-inline" style="border-top:1px solid #38a38a;">
						<foreach item="goods" name="goods">
						<a href="__Tzhuan__/Product/detail/gid/<{$goods.id}>" target="_blank">
						<li>
							<div style="border:1px solid #ddd;margin:10px;width:204px;height:240px;padding:10px;">
							<div style="width:160px;height:160px;padding-left:12px;"><img src="__ROOT__/Uploads/<{$goods.g_img}>" class="img-responsive" style="margin:0 auto;"></div>
							<div style="height:70px;line-height:70px;padding-left:10px;"><a href="__Tzhuan__/Product/detail/gid/<{$goods.id}>"><{$goods.g_name|substr=0,22}></a><span style="color:red;float:right;padding-right:12px;">￥<{$goods.price}></span></div>
							<p style="text-align:center;"></p>
							</div>							
						</li>
						</a>
						</foreach>
					</ul>
					<!-- <div class="pagination pagination-centered pagination-large">
						<ul>
							<li>
								<a href="#">上一页</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">下一页</a>
							</li>
						</ul>
					</div> -->
				</div>
				<div class="col-md-2">
					<a href="__Tzhuan__/Product"><div class="release"><span style="color:#fff;">发布闲置</span></div></a>
				</div>
                <div class="col-md-2">
                    <a href="__Tzhuan__/Product/cart"><div class="demand"><span style="color:#fff;">我的购物车</span></div></a>
                </div>
			</div>
		</div>
	</body>

</html>