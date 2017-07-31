<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/main.css">
  <link rel="stylesheet" type="text/css" href="/yimishop/Thinkshop/Admin/View/Public/css/cylater.css">
  <script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/yimishop/Thinkshop/Admin/View/Public/js/cylater.js"></script>
	<style type="text/css">
     #myLaterConfirm {
      color:#666;
     }      
	</style>
</head>
<body>
  <p class="title">当前位置-卖家认证</p>
  <div class="select_div">
    <form action="" name="fselect" method="post">
        <span>审核状态:</span>
        <select name="statu">
        <option value="1">待审核</option>
        <option value="2">审核通过</option>
        <option value="3">审核未通过</option>
        <option value="0" selected>---选择状态---</option>
        </select>
        <input type="submit" name="sel" value="搜索" style="cursor:pointer;">
    </form>
  </div>
  <form action="" name="form1" method="post">
  <div class="mainlist" id="listDiv">
    <table style="color:white;">
      <tr>
        <td>申请人</td>
        <td>真实姓名</td>
        <td>学号</td>
        <td>学生证复印件</td>
        <td>申请时间</td>
        <td>状态</td>
      </tr>
      <?php if(is_array($approves)): foreach($approves as $key=>$approves): ?><tr>
        <td><?php echo ($approves["applicant"]); ?></td>
        <td><?php echo ($approves["truename"]); ?></td>
        <td><?php echo ($approves["stuid"]); ?></td>
        <td><img src="<?php echo ($approves["stuid_pic"]); ?>" width="100px;"></td>
        <td><?php echo (date("Y-m-d H:i:s",$approves["app_time"])); ?></td>
        <td><a href="javascript:;" value="<?php echo ($approves["statu"]); ?>"><?php if($approves["statu"] == 1): ?><span class="statu" value="<?php echo ($approves["uid"]); ?>">审核</span><?php elseif($approves["statu"] == 2): ?>通过<?php else: ?>未通过<?php endif; ?></a></td>
      </tr><?php endforeach; endif; ?>
      <tr><td colspan="7" class="page"><?php echo ($page); ?></td></tr>
    </table>
  </div>
  </form>
  <script type="text/javascript">
        $(function() {
          $('span.statu').bind('click',function() {
            var uid=$(this).attr('value');
            $.cylater.confirm({
              id:'myLaterConfirm',
              msg:'是否要通过此用户的申请？',
              callbackfun:function(data,type){
                var res=type=='ok'?2:3;
                $.ajax({
                   type:'get',
                   data:{'res':res,'uid':uid,'act':'approve'},
                   success:function(data) {
                       location.reload();
                   }
                });
              }
            });

          });
          $('a.num,span.current').map(function() {
               $(this).text('['+$(this).text()+']');
          });
        });
    </script>
</body>
</html>