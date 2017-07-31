<?php
namespace Home\Controller;
use Think\Controller;
class MembcommController extends Controller {
    public function _initialize(){
    	if(isset($_SESSION['uid'])) {
	    	$user=M('User');
	    	$good=M('Goods');
	    	$order=M('Product_order_pro');
			$mapid=I("session.uid");
		    $gods=$good->field('COUNT(id) num')->where("uid=$mapid")->find();
            $bpro=$order->field('COUNT(id) num')->where("buyer_id=$mapid")->find();
			$uid['er_user.id']=I("session.uid");
			$id['uid']=I("session.uid");
			$userinfo=$user->field('er_user.*,er_school.school')->join('`er_school` on er_user.scid=er_school.id','LEFT')->where($uid)->find();
			$this->assign('userinfo',$userinfo);
			$this->assign('spro',$gods['num']);
			$this->assign('bpro',$bpro['num']);
	        $this->display('Member/comm');
		}else {
			$this->redirect('Index/login');
		}
    }
}