<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommentController {
	public function index() {
		  $cate=D('Category');
		  $row=$cate->field('id,c_name,pid,is_look')->select();
		  if(isset($_POST['sel'])) {
             $map['c_name']=I('post.keyword');
             if(I('post.keyword')=='') {
                $cid=0;
             }else {
                $cid=$cate->where($map)->getField('id');
             }
		  }else {
		  	$cid=0;
		  }
		  $catetree=catetree($row,$cid);
		  foreach ($catetree as $k => $v) {
		  	 $catetree[$k]['is_look']=$v['is_look']?'显示':'不显示';
		  }
		  $this->assign('catetree',$catetree);
          $this->display("Category/index");
	}
	public function add() {
		$lock=array('uid'=>session('uid'));
		$cate=D('Category');
		if(isset($_POST['csub'])) {
			$add=$cate->add(I('post'));
			if($add) {
                $this->redirect('Category/index');
			}else {
				$this->error('添加分类失败');
			}
		}else{
	        $row=$cate->field('id,c_name,pid')->select();
	        $catetree=catetree($row,0);
	        $this->assign('catetree',$catetree);
	        $this->display("Category/add");
        }
    }
    public function edit() {
    	$cate=D('Category');
    	$map['id']=trim(I('get.cid'));
    	if(isset($_POST['act'])&&I('post.act')=='edit') {
    		$data['c_name']=I('post.c_name');
    		$data['pid']=I('post.pid');
    		$data['is_look']=I('post.is_look');
    		$edit=$cate->where($map)->save($data);
    		if($edit) {
                $this->redirect('Category/index');
    		}else {
    			$this->error('修改失败，请重试');
    		}
    	}
    	//获取分类
        $row=$cate->field('id,c_name,pid')->select();
        $catetree=catetree($row,0);
        $cate=$cate->field('id,c_name,pid,is_look')->where($map)->find();
        $this->assign('catetree',$catetree);
        $this->assign('cate',$cate);
        $this->assign('stau','1');
        $this->display("Category/add");
    }
}
?>