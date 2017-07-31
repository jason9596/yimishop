<include file="Index:header"/>
<style type="text/css">
    ul.list li {
    	width:150px;
    	height:50px;
        font-size:16px; 
    	text-align:center;
    	line-height:50px;
    	margin-left:10px;
    	display: block;
    	cursor:pointer;
    }
    ul.list li a {
    	color:#fff;
    }
    .jbzl p {
    	color:#444;
    	font-size:18px;
    	padding-bottom:10px;
    }
    .jbzl p input,select{
    	display:none;
    }
    .row {
    	color:#777;
    }
    p.head {
    	color:#38a38a;
    	font-weight:bold;
    	font-size:20px;
    	border-bottom:1px solid #38a38a;
    	padding-bottom:10px;
    	margin-bottom:30px;
    	width:500px;
    }
    p.head span {
    	float:right;
    	font-size:14px;
    	padding-top:10px;
    	cursor:pointer;
    }
    .face .mod {
    	height:149px;
    	z-index:100;
    	width:149px;
    	background:#999;
    	text-align:center;
    	opacity:0.6;
    	margin-top:-150px;
    	display:none;
    }
    .god{
    	display:block;
    	margin-bottom:20px;
    	padding-top:10px;
    	padding-bottom:10px;
    	
    	margin-right:60px;
    	background:#fff;
    }
    .approve p {
    	font-size:16px;
    	height:50px;
    	line-height:50px;
    	
    }
    .approve p span{
    	color:#38a38a;
    }
    .approve p input{
    	border:0px;		    	
    }
    .memnav li a:hover {
    	color:#38a38a;
    }
    body {
    	color:#777;
    }
</style>
<script>
    function upload(upbtn,imgdiv,imgShow){
        new uploadPreview({ UpBtn: upbtn, DivShow: imgdiv, ImgShow: imgShow});
    }
</script>
<link href="__Public__/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="__Public__/js/fileinput.min.js" type="text/javascript"></script>
<script src="__Public__/js/fileinput_locale_zh.js" type="text/javascript"></script>
<div class="container main">
    <div style="height:15px;"></div>
	<div class="row" style="border:1px solid #ccc;padding:10px;">
    <div class="ibox-content col-md-2">
        <div class="row">
            <div id="crop-avatar" class="col-md-2">
                <div class="avatar-view" title="" data-original-title="" style="width:150px;height:150px;">
                     <img src="__ROOT__/Uploads/<{$userinfo.face}>" style="width:150px;height:150px;cursor:pointer;" data-toggle="modal" data-target="#avatar-modal">
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-6">
		<h3 style="color:#38a38a"><if condition="$userinfo.username eq ''"><{$userinfo.account}><else/><{$userinfo.username}></if></h3>
		 <p>学校:<span><{$userinfo.school}></span></p>
		 <p>发布:<span><{$spro}>个闲置</span></p>
		 <p>淘到:<span><{$bpro}>个闲置</span></p>	
	</div>
</div>
<div style="height:30px;"></div>
<div class="row" style="border:1px solid #ccc;background: #38a38a;">
	<div class="col-md-9">
		<ul class="nav navbar-nav memnav memnav list">
		   <li><a href="__Tzhuan__/Member/index">个人资料</a></li>
		   <li><a href="__Tzhuan__/Member/buypro">淘到的闲置</a></li>
		   <li><a href="__Tzhuan__/Member/sellpro">发布的闲置</a></li>
		   <li><a href="__Tzhuan__/Member/activity">营销工具</a></li>
		   <li><a href="__Tzhuan__/Member/approve">认证中心</a></li>
		</ul>
	</div>
</div>
<div style="height:20px;"></div>
<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">×</button>
                    <h4 class="modal-title" id="avatar-modal-label">修改头像</h4>
                </div>
                <div class="modal-body">
                    <div class="htmleaf-container">
                        <div class="container kv-main">
                            <form enctype="multipart/form-data" action="__Tzhuan__/Member/face" method="post">
                                <div class="form-group" style="width:800px;">
                                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="" data-preview-file-icon="" name="aas">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
       <!--  </form> -->
    </div>
  </div>
</div>
<script type="text/javascript">

</script>