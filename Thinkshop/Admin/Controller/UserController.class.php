<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommentController {
	public function index() {
		$user=M('User');
		if(isset($_GET['act'])&&I('get.act')=='del') {
			$map['id']=I('get.id');
			$map['uid']=I('get.id');
			$del=$user->where($map)->delete();
			if($del) {
				$del=$user->table('er_goods')->where($map)->delete();//删除对应的商品
			}
			$this->ajaxReturn($del);
		}
		$psize=15;
		$start=isset($_GET['p'])?$_GET['p']:1;
        $users=$user->field('id,username,account,email,tel,face,time')->page($start,$psize)->select();
        $count=$user->field('id,username,account,email,tel,face,time')->count();
        $show=pages($count,$psize);
		$this->assign('page',$show);
        $this->assign('users',$users);
		$this->display('User/index');
	}
	public function detail() {
		$user=M('User');
		$map['u.id']=I('get.uid');
        $userinfo=$user->alias('u')->field('u.*,COUNT(g.id) god,s.school')->join('er_school s ON s.id=u.scid','left')->join('er_goods g ON g.uid=u.id','left')->where($map)->find();
        $mapo['userid']=I('get.uid');
        $pro=$user->table('er_product_order')->where($mapo)->count();
        $userinfo['pro']=$pro;
        $this->assign('userinfo',$userinfo);
		$this->display('User/detail');
	}
	public function address() {
		$address=M('address');
		if(isset($_GET['act'])&&I('get.act')=='del') {
			$map['id']=I('get.id');
			$del=$address->where($map)->delete();
			$this->ajaxReturn($del);
		}
		$psize=15;
		$start=isset($_GET['p'])?$_GET['p']:1;
		$addresss=$address->alias('ad')->field('ad.*,u.username')->join('er_user u ON u.id=ad.auid')->page($start,$psize)->select();
		$count=$address->alias('ad')->field('ad.*,u.username')->join('er_user u ON u.id=ad.auid')->count();
		$show=pages($count,$psize);
		$this->assign('page',$show);
		$this->assign('addresss',$addresss);
		$this->display('User/address');
	}
	public function approve() {
		$approve=M('approve');
		$user=M('User');
		if(isset($_GET['act'])&&I('get.act')=='approve') {
			$data['id']=I('get.uid');
			$data['is_approve']=I('get.res');
			$adata['uid']=I('get.uid');
			$statu['statu']=I('get.res');
			$aa=$user->save($data);
			$bb=$approve->where($adata)->save($statu);
            if($aa&&$bb) {
            	$this->ajaxReturn(1);
            }else {
            	$this->ajaxReturn(0);
            }
		}else {
            $psize=15;
			$start=isset($_POST['p'])?$_POST ['p']:1;
			$statu['statu']=I('post.statu')?I('post.statu'):0;
			if($statu['statu']==0) {
				$statu=1;
			}
			$approves=$approve->where($statu)->page($start,$psize)->select();
			$count=$approve->where($statu)->count(); 
	        $show=pages($count,$psize);
			$this->assign('page',$show);      
			$this->assign('approves',$approves);
			$this->display('User/approve');
		}
	}
}
?>