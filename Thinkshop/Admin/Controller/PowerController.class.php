<?php
namespace Admin\Controller;
use Think\Controller;
class PowerController extends CommentController {
	public function index() {
		$user=D('User');
		$lock=array('uid'=>session('uid'));
		$power=$user->field('a_power')->where($lock)->find();
		if($power['a_power']==1) {
            $rs=$user->select();
			$this->assign('userlist',$rs);
			$this->display('user');
		}
		else{
            $this->error('对不起，您没有权限访问');
		}
	}
	public function add() {
		$user=D('User');
		$lock=array('uid'=>session('uid'));
		$power=$user->field('a_power')->where($lock)->find();
		if($power['a_power']==1) {
			if(isset($_POST['sub'])) {
				var_dump($_POST);exit();
			}else {
	           $this->display('add');
			}
	    }
	    else {
	    	$this->error('对不起，您没有权限访问');
	    }
	}
}
?>