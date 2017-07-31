<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
    public function index(){
    	$good=M('Goods');
		$god['uid']=I('session.uid');
		$god['actid']='';
		$goods=$good->where($god)->select();
    	$this->display();
	}
}