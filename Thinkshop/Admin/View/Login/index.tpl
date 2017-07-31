<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>依米后台登陆界面</title>
    <link rel="stylesheet" type="text/css" href="__APublic__/css/style.css">
    <script src="__APublic__/js/jquery.min.js"></script> 
</head>
<body>
    <div id="houtai">
        <div class="title">后台管理</div>
        <div class="form">
        <form action="" name="form1" method="post">
            <table>
                <tr><td>账号：</td></tr>
                <tr><td><input type="text" name="username" class="f"></td></tr>
                <tr><td class="cuser" style="color:red;font-weight:bold;"></td></tr>
                <tr><td>密码：</td></tr>
                <tr><td><input type="password" name="pwd" class="f"></td></tr>
                <tr><td class="cpwd" style="color:red"></td></tr>
                <tr><td><input type="hidden" name="act" value="login"></input><input type="submit" name="sub" class="f" style="height:40px;margin-bottom:10px; font-size:21px;color:white;font-weight:bold;margin-top:10px;cursor:pointer;background:#38a38a;" value="确&nbsp定"></td></tr>
            </table>
        </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('input[type=submit]').on('click',function() {
                var res=false;
                var msg='';
                var fouc='';
                var username=$('input[name=username]').val();
                var pwd=$('input[name=pwd]').val();
                if(username=='') {
                    fouc=$('input[name=username]');
                    msg='账号不能为空';
                }else if(pwd=='') {
                    fouc=$('input[name=pwd]');
                    msg='密码不能为空';
                }else{
                    $.ajax({
                    type:'POST',
                    data:{'act':'check','username':username,'pwd':pwd},
                    async:false,//同步异步
                    success:function(data) {
                        if(!data) {
                          msg='账号或者密码不正确';
                          fouc=$('input[name=pwd]');
                        }else {
                          res=true;
                        }           
                    }
                  });
                }
                if(!res) {
                    alert(msg);
                    fouc.focus();
                }
                return res;
            });
        });
    </script>
</body>
</html>