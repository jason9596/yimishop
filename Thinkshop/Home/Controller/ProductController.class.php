<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function index(){
    	if($_SESSION['uid']) {
    		if(I('session.approve')==2) {
                $cate=M("Category");
				$product=M("Goods");
				$cates=$cate->field('id,c_name')->where('pid=0')->select();
				$this->assign('cates',$cates);
				if(isset($_POST['hqcat'])) {
					$cat1=I('post.cat1');
					$cat['pid']=$cat1;
					$cat2=$cate->field('id,c_name')->where($cat)->select();
					$cat2=json_encode($cat2);
					echo $cat2;exit;
				}
				if(isset($_POST['release'])&&$_POST['release']=='product') {
					$data['g_name']=I('post.g_name');
					$data['ptype']=I('post.ptype');
					$data['ori_price']=I('post.ori_price');
					$data['price']=I('post.price');
					$data['g_sum']=I('post.g_sum');
					$data['g_desc']=I('post.g_desc');
					$data['g_time']=time();
					$data['uid']=$_SESSION['uid'];
					$data['cid']=isset($_POST['catt'])?I('post.catt'):I('post.cat');
					//商品图片上传
					$imgpath="goods/";
					$upimgs=uploadfile($imgpath,'upimg');
	                $data['g_img']=$upimgs[0];
	                for ($i=1; $i < count($upimgs) ; $i++) { 
	                	$data['img_more'].=$upimgs[$i].',';
	                }	
	                $data['img_more']=substr($data['img_more'],0,-1);
		            $upgoods=$product->data($data)->add();
					if($upgoods) {
						$this->redirect("Index/index");
					}else {
					 	$this->error('添加失败,请重试');
					}                      
				}elseif(isset($_GET['edit'])) {
					$gid=intval(I('get.edit'));
					$gidmap['id']=$gid;
					if(isset($_POST['editpro'])&&$_POST['editpro']==1) {
						$editmap=$_POST;
						$editmap['g_time']=time();
						$edit=$product->where($gidmap)->save($editmap);
						if($edit) {
	                        $this->redirect('Member/sellpro');
						}else {
							$this->error('修改失败');
						}					
					}
					$good=$product->where($gidmap)->find();
					$good['img_more']=explode(',',$good['img_more']);
					$good['edit']=1;
					$this->assign('good',$good);
				}elseif(isset($_GET['del'])) {
					$gid=intval(I('get.del'));
					$gidmap['id']=$gid;
					$del=$product->where($gidmap)->delete();
					if($del) {
						$this->redirect('Member/sellpro');
					}else {
						$this->error('删除失败');
					}
				}
		        $this->display();
    		}else {
    			$this->redirect('Member/approve');
    		}
    	}else {
    		cookie('act','index');
			cookie('mod','Product');
    		$this->redirect('Index/login');
    	}
    }
    public function detail(){
    	$gid=I('get.gid');
		$god=M('Goods');
		$comm=M('Comm');
		$activity=M('Activities');
		$goid['er_goods.id']=$gid;
		$good=$god->field('er_goods.*,er_user.username,er_school.school')->join(array('__USER__ ON __GOODS__.uid=__USER__.id','__SCHOOL__ ON __SCHOOL__.id=__USER__.scid'),'LEFT')->where($goid)->find();
		$goodsimg=explode(',',$good['img_more']);
		$good['img_more']='';
		for($i=0;$i<count($goodsimg);$i++) {
			$name=explode('.',$goodsimg[$i]);
			$good['img_more'][$i]['gl_img']=$name[0].'_'.'60x60'.'.'.$name[1];
			$good['img_more'][$i]['g_img']=$name[0].'_'.'400x400'.'.'.$name[1];
		}
		if($good['actid']) {
			$act['id']=$good['actid'];
			$act['ac_status']=1;
            $godact=$activity->field('id,stime,etime,actype,ac_num1,ac_nums1,ac_num2,ac_nums2')->where($act)->find();
            $this->assign('godact',$godact);
		}
		//获取相似的产品
		$map['g_name']=array('like','%'.$good['g_name'].'%');
		$map['cid']=array('eq',$good['cid']);
		$map['_logic']='or';
		$ma['_complex']=$map;
        $ma['id']=array('neq',$good['id']);
		$similar=$god->field('id,g_name,g_img,price')->where($ma)->select();
		if(count($similar)<6) {
         $mapp['uid']=$good['uid'];
         $lim=6-count($similar);
         $similar1=$god->field('id,g_name,g_img,price')->where($mapp)->limit($lim)->select();
         $similar=array_merge($similar,$similar1);
		}
		for ($i=0; $i<6; $i++) { 
		   $name=explode('.',$similar[$i]['g_img']);
           $similar[$i]['g_img']=$name[0].'_'.'160x160'.'.'.$name[1];	
		 }
		 //评论
		$cmap['co_gid']=$gid;
		$comms=$comm->where($cmap)->select();
		$this->assign('comms',$comms);//商品评论
		$this->assign('similar',$similar);//相似商品
		$this->assign('good',$good);//商品信息
        $this->display('Product/detail');
    }
    public function lists() {
    	$good=M('Goods');
        $key=isset($_GET['key'])?I('get.key'):'';
		$cid=isset($_GET['cid'])?I('get.cid'):0;
		$orderby=isset($_GET['orderby'])?I('get.orderby'):0;
		switch ($orderby) {
			case 1:
				$order='sales desc';
				break;
			case 2:
			    $order='price';
			    break;
			case 3:
			     $order='g_time';
			     break;
			case 4:
				$order='score desc';
			    break;
		}

		if(isset($_GET['key'])) {
               $map['g_name']=array('like','%'.$key.'%');
		}else if($cid != 0) {
			$map['cid']=array('eq',$cid);
		}
		if(count($map)) {			
		$goods=$good->where($map)->order($order)->select();
		}else {
		$goods=$good->order($order)->select();	
		}
		foreach ($goods as $ke=>$v) {
		   $name=explode('.',$v['g_img']);
		}
		$this->assign('goods',$goods);
        $this->display('Product/list');   
    }
    public function cart() {
    	$goods=M('Goods');
    	$cart=M('Product_cart');
    	if(isset($_POST['act'])&&I('post.act')=='addcart') {
    		$gid=I('post.gid');
    		$gooodinfo=$goods->field('g_name,price,uid,g_img')->where("id=$gid")->find();
    		$data['gid']=$gid;
    		$data['buyid']=$uid=I('session.uid');
    		$c=$cart->field('id,num')->where($data)->find();
    		if($c['num']) {
    			$num['num']=I('post.num')+$c['num'];
                $isadd['statuss']=$cart->where("id=$cid")->save($num);
    		}else {
                $data['youhui']=I('post.youhui');
	    		$data['num']=I('post.num');
	    		$data['sellid']=$gooodinfo['uid'];
	    		$data['gname']=$gooodinfo['g_name'];
	    		$data['price']=$gooodinfo['price'];
	    		$data['pic']=$gooodinfo['g_img'];
	    		$data['create_time']=time(); 
	    		$data['sumprice']=$gooodinfo['price']*I('post.num');
	            $isadd['statuss']=$cart->data($data)->add();
    		}
            $isadd['count']=$cart->where("buyid=$uid")->count();//购物车里的商品数量
            $this->ajaxReturn($isadd);
    	}elseif(isset($_GET['act'])&&I('get.act')=='del') {
            $mapcid['id']=I('get.cid');
            $del=$cart->where($mapcid)->delete();
            $this->ajaxReturn($del);
    	}elseif(isset($_POST['act'])&&I('post.act')=='confirm') {
    		$order=M('Product_order');
    	    $orderpro=M('Product_order_pro');
    		$cart_id=I('post.cart_id');
    		$data['order_id']='O'.time().rand(10,99);
    		$data['create_time']=time();
            $data['sum']=I('post.csum');
            $data['userid']=I('session.uid');
            $data['username']=I('session.username');
            $addorder=$order->data($data)->add();
            if($addorder) {
               $cid['id']=array('in',$cart_id);
    		   $carts=$cart->where($cid)->select();//获取选中的购物车
    		   foreach ($carts as $k=>$v) {
    		   	 $prodata['order_id']=$data['order_id'];
    		   	 $prodata['buyer_id']=I('session.uid');
    		   	 $prodata['seller_id']=$v['sellid'];
    		   	 $prodata['pid']=$v['gid'];
    		   	 $prodata['name']=$v['gname'];
    		   	 $prodata['price']=$v['price'];
    		   	 $prodata['num']=$v['num'];
    		   	 $prodata['time']=time();
    		   	 $prodata['pic']=$v['pic'];
    		   	 $prodata['status']=4;
    		   	 $prodata['youhui']=$v['youhui'];
    		   	 $addpro=$orderpro->data($prodata)->add();
    		   }
    		   if($addpro) {
    		   	cookie('oid',$data['order_id']);
    		   	$cartid=implode(',',$cart_id);
    		   	cookie('cart_id',$cartid);
    		   	$this->redirect('Product/confirm');
    		   }else {
                $this->error('结算失败，请重试');
    		   }
            }
    	}else {
    		$map['c.buyid']=I('session.uid');
    		$carts=$cart->field('c.id,c.gname,c.sumprice,c.price,c.num,g.g_img gimg,c.gid,c.youhui')->alias('c')->join('er_goods g ON g.id=c.gid')->where($map)->select();
    		foreach ($carts as $k=> $v) {
    			$name=explode('.',$carts[$k]['gimg']);
                $carts[$k]['gimg']=$name[0].'_'.'160x160'.'.'.$name[1];
                $carts[$k]['sumprice']=$carts[$k]['sumprice']-$carts[$k]['youhui'];
    		}
    		$this->assign('carts',$carts);
    	}
        $this->display('Product/cart');   
    }
    public function confirm() {
    	if(!I('session.uid')){
            $this->redirect('Index/login');
    	}else{
            $good=M('Goods');
	    	$user=M('User');
	    	$order=M('Product_order');
	    	$activity=D('Activities');
	    	$orderinfo=M('Product_order_pro');
	    	$address=M('Address');
	    	if(isset($_POST['act'])&&I('post.act')=='address') {
	    		$addr=I('post.');
	    		$addr['auid']=I('session.uid');
	            $address->data($addr)->add();
	            $this->display('Product/confirm-order');
	    	}
	    	if(isset($_POST['confirm'])) {
	    		$orders['logid']=I('post.logid');
	    		if(I('cookie.oid')) {
	    			$map['order_id']=I('cookie.oid');
	    			$mapcart['id']=array('in',I('cookie.cart_id'));
	    			cookie('oid',null);
	    			cookie('cart_id',null);
	    			$order->startTrans();
                    $aa=$order->where($map)->save($orders);
                    $bb=$order->table('er_product_cart')->where($mapcart)->delete();
                    $cc=1;
                    $dd=1;
	    		}else {
                    $orders['sum']=I('post.sum');
		    		$orders['username']=I('session.account');
		    		$orders['userid']=I('session.uid');
		    		$orders['order_id']='O'.time().rand(10,99);
		    		$orders['create_time']=time();
		    		$infomap['order_id']=$orders['order_id'];
		    		$infomap['buyer_id']=I('session.uid');
		        	$infomap['pid']=I('post.gid');
		        	$infomap['name']=I('post.g_name');
		        	$infomap['price']=I('product_price');
		        	$infomap['num']=I('post.num');
		        	$infomap['seller_id']=I('post.sellid');
		        	$infomap['time']=time();
		            $infomap['pic']=I('post.pic');
		            $infomap['status']=4; 
		            $gmap['id']=I('post.gid');          
		        	$order->startTrans();
		        	$aa=$order->data($orders)->add();
		            $bb=$orderinfo->data($infomap)->add();
		            $cc=$good->where($gmap)->setDec('g_sum',I('post.num')*1);
		            $dd=$good->where($gmap)->setInc('sales',I('post.num')*1);
	    		}
	            if($aa&&$bb&&$cc&&$dd) {
	               $order->commit();
	               $this->redirect('Member/buypro');
	            }else {
	            	$order->rollback();
	                $this-error('订单提交失败请重试');
	            }
	    	}
	    	$uid['auid']=I('session.uid');
	    	$addresss=$address->where($uid)->select();//默认收货地址
	    	$aid=count($addresss);
	    	if(I('cookie.oid')) {
	    		$map['order_id']=I('cookie.oid');
                $goods=$orderinfo->where($map)->select();
                foreach ($goods as $k => $v) {
                	$name=explode('.',$v['pic']);
		            $goods[$k]['g_img']=$name[0].'_'.'160x160'.'.'.$name[1];
		            $goods[$k]['sum']=$v['price']*$v['num']-$v['youhui'];
		            $sum+=($v['price']*$v['num']-$v['youhui']);
		            $youhui+=$v['youhui'];
                }
                $this->assign('sum',$sum);
                $this->assign('youhui',$youhui);
	    	}else {
	    		cookie('id',I('post.g_id'));
	    	    cookie('num',I('post.nums'));
	    	    cookie('youhui',I('post.youhui'));
			    $map['id']=cookie('id');
				$goods=$good->field('id,g_name,g_img,price,uid')->where($map)->select();
				$goods[0]['num']=I('cookie.num');
				$goods[0]['sum']=$goods[0]['price']*I('cookie.num')-I('cookie.youhui');
				$goods[0]['youhui']=I('cookie.youhui');
				$name=explode('.',$goods[0]['g_img']);
		        $goods[0]['g_img']=$name[0].'_'.'160x160'.'.'.$name[1];
		        $this->assign('sum',$goods[0]['sum']-I('cookie.youhui'));
		        $this->assign('youhui',$goods[0]['youhui']);
	    	} 
			$this->assign('goods',$goods);
			$this->assign('addresss',$addresss);
			$this->assign('aid',$aid);
	        $this->display('Product/confirm-order');   
    	}
    }

}