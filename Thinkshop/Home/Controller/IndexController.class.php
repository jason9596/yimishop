<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $exit=I('get.exit');
        if($exit) {
           session('uid',null);
		   session('account',null); 
           $this->redirect("Index/index"); 
        }
		$gods=M('Goods');
		$goods=$gods->order('g_time desc')->limit(12)->select();
		for ($i=0; $i <count($goods); $i++) { 
			$name=explode('.',$goods[$i]['g_img']);
			$goods[$i]['g_img']=$name[0].'_'.'160x160'.'.'.$name[1];
		}
		$this->assign('goods',$goods);
    	$this->display('Index/index');
    }
    public function register() {
        $user=M("User");
		if(isset($_POST['register'])) {
			$data['account']=trim(I("post.account"));
			$data['pwd']=md5(I("post.pwd"));
			$yzm=I("post.yzm");
			$data['face']='avatar/touxiang.jpeg';
			$data['time']=time();
			$verify = new \Think\Verify();
            $yz=$verify->check($yzm);
			if(!$yz) {
				$this->error('验证码错误');
			}else {
				$user->data($data)->add();
				session('account',$data['account']);
			    $this->redirect("Member/index"); 
			}
		}
        elseif(isset($_POST['yzuser'])) {
           $username=I('post.username');
		   $yzuser=0;
		   if($username) {
		   	$aa['account']=$username;
            $yzuser=$user->where($aa)->find();
		   }
           if($yzuser) echo '0';
           else echo '1';
           exit;
        }
    	$this->display('Index/register');
    }
    public function login() {
    	$user=M("User");
    	if(isset($_POST['login'])) {
			$data['account']=trim(I("post.user"));
			$data['pwd']=md5(I("post.pwd"));
			$uid=$user->field('id,account,username,is_approve,face')->where($data)->find();
			if($uid) {
				if(I("post.remember")==1&&cookie('remember')!=1) {
			  		cookie('user',trim(I("post.user")),'expire=3600*24*30');
					cookie('pwd',trim((I("post.pwd"))),'expire=3600*24*30');
					cookie('remember','1','expire=3600*24*30');
				}	
			  session('uid',$uid['id']);
			  session('account',$uid['account']);
			  session('username',$uid['username']);
			  session('approve',$uid['is_approve']);
			  cookie('face',$uid['face']);
			  if(cookie('act')&&cookie('mod')) {
			  	$mod=cookie('mod');
				$act=cookie('act');
				cookie('act',null);
				cookie('mod',null); 
			    $this->redirect($mod."/".$act);
			  }else {			  	
			    $this->redirect("Index/index"); 
			  }		
			}else {
			  $this->error('账号或者密码错误');	
			}
		}
    	$this->display('Index/login');
    }
	//验证码
	public function verify() {
		$config=array(
		'fontSize'    =>    22,    // 验证码字体大小 
	    'length'      =>    6,     // 验证码位数   
	    'useNoise'    =>    false, // 关闭验证码杂点
	    'codeSet'     =>    '0123456789qwertyupasdfghjklmnbvcxz',//设置参数 
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
    // public function header() {
    //     $this->display('Index/header');
    // }
}