<div class="row" style="padding-left:70px;padding-top:30px;">
<if condition="$userinfo.is_approve eq 0">
<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
<div class="col-sm-5">
    <div class="form-group">
    <label class="col-sm-4 control-label">姓名:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="truename" id="inputEmail3" placeholder="填写您的真实姓名">
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-4 control-label">学号:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword3" name="stuid" placeholder="例如：20120104045">
    </div>
    </div>
     <div class="form-group">
    <label class="col-sm-4 control-label">上传学生证照片:</label>
    <div class="col-sm-7">
      <input type="file" id="upbtn" onclick="upload('upbtn','imgdiv','imgShow');" name="xsz">
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-4">
      <input type="submit" class="btn btn-default" name="approve" style="background:#38a38a;color:#fff;" value="提交认证">
    </div>
    </div>
</form>
</div>
<div class="col-sm-7">
<div id="imgdiv"><img id="imgShow" style="width:200px;height:200px;"></div>
</div>
<elseif condition="$userinfo.is_approve eq 1"/>
<p style="text-align: center;height:70px;line-height:70px;color:#38a38a;font-size:20px;width:1000px;">已经提交认证申请,请等待审批!</p>
<elseif condition="$userinfo.is_approve eq 2"/>
<p style="text-align: center;height:70px;line-height:70px;color:#38a38a;font-size:20px;width:1000px;">申请通过审批，你可以去发布商品了！</p>
<elseif condition="$userinfo.is_approve eq 3"/>
<p style="text-align: center;height:70px;line-height:70px;color:#38a38a;font-size:20px;width:1000px;">申请未通过审批，请重新提交认证申请！</p>
</if>
</div>