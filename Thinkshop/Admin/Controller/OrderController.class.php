<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommentController {
	public function index() {
		$order=M('Product_order');
		$orderpro=M('Product_order_pro');
		$psize=15;
		$start=isset($_GET['p'])?$_GET['p']:1;
		$orders=$order->page($start,$count)->select();
        $count=$order->count();
        $show=pages($count,$psize);
        $this->assign('page',$show);
		$this->assign('orders',$orders);
		$this->display();
	}
	public function detail() {
		$oid['order_id']=I('get.oid');
		$orders=M('Product_order');
		$orderpro=M('Product_order_pro');
        $order=$orders->alias('o')->field('o.*,ad.aname,ad.address,ad.atel')->join('er_address ad ON ad.id=o.logid','left')->where($oid)->find();
        $goods=$orderpro->alias('pro')->field('pro.*,u.username')->join('er_user u ON u.id=pro.seller_id')->where($oid)->select();
        $this->assign('goods',$goods);
        $this->assign('order',$order);
		$this->display('Order/detail');
	}
}
?>