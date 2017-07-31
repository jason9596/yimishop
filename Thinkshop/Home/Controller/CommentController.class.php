<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
	public function index()  {
		$com=M('Comm');
		$order=M('Product_order_pro');
		$user=M('User');
		$comm=$_POST;
		$comm['co_time']=time();
		$comm['co_uid']=I('session.uid');
		$comm['co_username']=I('session.username');
		$aa=$com->data($comm)->add();
		//同时修改订单状态
        if($aa) {
        	$map['id']=I('post.oid');
        	$map['status']=5;
            $order->save($map);
            $this->redirect('Member/buypro');
            //$this->success('评论成功','Member/buypro');
        }else {
        	$this->error('评论失败，请重试');
        }
	}
}
?>