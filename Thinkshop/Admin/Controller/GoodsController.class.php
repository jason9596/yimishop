<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommentController {
	private $psize=15;//每页显示的条数
	private $width1=100;
	private $width2=50;
	public function index() {//商品列表
		//分类
		$cate=D('Category');
		$row=$cate->field('id,c_name,pid')->select();
		$catetree=catetree($row);
		$this->assign('catetree',$catetree);
		$goods=D('Goods');
		//搜索
		if(isset($_POST['sel'])) {
			$cid=$_POST['cat_id'];
			$g_name=$_POST['keyword'];
			$is_lock=$_POST['is_lock'];
            if($cid) {
            	$ids=catetree($row,$cid); 
	            //判断数组的个数一个的话不用拆分
	            if(count($ids)==0) {
	            	$ids=$cid;
	            }else {
                    foreach ($ids as $k=>$v) {
		            	$ids[$k]=$v['id'];
		            }
	            }
                $lock['cid']=array('in',$ids);
            }
            if($g_name) {
                $lock['g_name']=array('like','%'.$g_name.'%');
            }
            if($is_lock!=2) {
                $lock['is_lock']=$is_lock;
            }
		}
		$start=isset($_GET['p'])?$_GET['p']:1;
		if(!$lock) {
            $lock=1;
        }
		$user=D('User');
		$goodslist=$goods->alias('g')->field('g.*,cate.c_name')->where($lock)->join('er_category cate on cate.id=g.cid')->page("$start,$this->psize")->select();
		$count=$goods->where($lock)->count();
		//分页
		$show=pages($count,$this->psize);
		$this->assign('page',$show);
		$this->assign('goodslist',$goodslist);
		$this->display();
	}
	public function del() {//删除商品
		$god=M('Goods');
		$data['id']=I('get.id');
		$data['is_lock']=I('get.stau')=='1'?'0':'1';
		$del=$god->save($data);
		$this->ajaxReturn($del);
	}
	public function comm() {
		$comm=M('Comm');
		$start=isset($_GET['p'])?$_GET['p']:1;//获取当前页数
		$comms=$comm->alias('c')->field(array('c.id'=>'id','c.co_gid'=>'gid','co_mark','co_content','co_time','username','g_name'))->join('er_user u on c.co_uid=u.id')->join('er_goods g on c.co_gid=g.id')->page("$start,$this->psize")->select();
		$count=$comm->alias('c')->join('er_user u on c.co_uid=u.id')->join('er_goods g on c.co_gid=g.id')->count();
		//分页	
        $show=pages($count,$this->psize);
		$this->assign('page',$show);
        $this->assign('comms',$comms);
		$this->display('Goods/comm');
	}
	public function back() {
		$god=M('Goods');
		$data['id']=I('get.gid');
		$data['is_lock']=1;
		$god->save($data);
	}
}
?>