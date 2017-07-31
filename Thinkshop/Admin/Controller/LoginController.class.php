<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$admin=M('Adm');
        if(isset($_POST['act'])&&I('post.act')=='check') {
        	$map['name']=I('post.username');
        	$map['password']=md5(I('post.pwd'));
            $chk=$admin->where($map)->find();
            $this->ajaxReturn($chk);
        }elseif(isset($_POST['act'])&&I('post.act')=='login') {
            $map['name']=I('post.username');
        	$map['password']=md5(I('post.pwd'));
            $user=$admin->where($map)->find();
            $data['logtime']=time();
            $data['logip']=get_client_ip();
            $admin->where("id=$user[id]")->save($data);
            //记录登录时间和ip
            cookie('admin_ftime',$user['logtime']);
            cookie('admin_fip',$user['logip']);
            cookie('admin_userinfo',$user['name'].$user['pwd']);
            session('admin_username',$user['name']);
            session('admin_uid',$user['id']); 
            $this->redirect("Index/index");  
        }
        $this->display('Login/index');
    }
}