<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommentController {
    public function index() {
         $this->display('Index/index');
    }
    public function left() {
        $this->display('Index/left');
    }
    public function main() {
        $log=M('Adm');
        $data['id']=I('session.admin_uid');
        $rs=$log->where($data)->find();
        if($rs['role']==1) {
            $this->assign('utype','超级管理员');
        }
        $this->assign('name',I('session.admin_username'));
        $this->assign('time',date('Y-m-d H:i:s',time()));
        $this->assign('logtime',date('Y-m-d H:i:s',I('cookie.admin_ftime')));
        $this->assign('logip',I('cookie.admin_fip'));
        $this->display('Index/main');
    }
    public function top() {
       $this->assign('uname',I('session.admin_username'));
       $this->display('Index/top');
    }
    public function goadmin() {
        cookie('admin_ftime',null);
        cookie('admin_fip',null);
        cookie('admin_userinfo',null);
        session('admin_username',null);
        session('admin_uid',null); 
        $this->redirect("Login/index");
    }
}