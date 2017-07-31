<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends MembcommController {
    public function index(){
    	$user=M('User');
		$uid['er_user.id']=I("session.uid");
		$id['uid']=I("session.uid");
		if(isset($_POST['zlsub'])) {
			$data['username']=trim(I('post.username'));
			$data['tel']=trim(I('post.tel'));
			$data['email']=trim(I('post.email'));
			$data['scid']=I('post.school');
			$user->where($uid)->save($data);
			$this->redirect('Member/index');
		}
		$userinfo=$user->field('er_user.*,er_school.school')->join('`er_school` on er_user.scid=er_school.id','LEFT')->where($uid)->find();
		$school=$user->table('__SCHOOL__')->select();
		$this->assign('school',$school);
        $this->display();
    }
    public function buypro() {
        $order=M('Product_order');
        $map['userid']=I('session.uid');
        $orders=$order->field('pro.sum,pro.create_time,pro.youhui,opro.*')->alias('pro')->join('er_product_order_pro opro ON pro.order_id=opro.order_id','left')->where($map)->order('time desc')->select();
        $this->assign('orders',$orders);
        $this->display('Member/buypro');
    }
    public function sellpro() {
    	$user=M('User');
    	$p=isset($_GET['p'])?I('get.p'):0;
		$psize=6;
		$id['uid']=I('session.uid');
		$gods=$user->table('__GOODS__')->where($id)->page($p,$psize)->select();
		$godinfo=$user->table('__GOODS__')->where($id)->select();
		$gcount=count($godinfo);
		$pages=pages($gcount,$psize);
		$this->assign('pages',$pages);
		$this->assign('godinfo',$gods);
		$this->display('Member/sellpro');
    }
    public function activity() {
    	$good=M('Goods');
		$activity=M('Activities');
		if(isset($_GET['opt'])&&$_GET['opt']=='add') {
		    if(isset($_POST['acti'])) {
				$acti=$_POST;
				$acti['aid']='A'.substr(time(),2,9).rand(10,100);
				$acti['stime']=strtotime(I('post.stime'));
				$acti['etime']=strtotime(I('post.etime'));
				$acti['uid']=I('session.uid');
				$acti['ctime']=time();
				$acti['ac_status']=1;
				$activity->startTrans();//开启事务
				$acid=$activity->data($acti)->filter('strip_tags')->add();
				$map['id']=array('in',I('post.gid'));	
			    $aid['actid']=$acid;						
				$aa=$good->where($map)->save($aid);	
				if($aid && $aa) {
					$activity->commit();
					$this->redirect('Member/activity');
				}else {
					$activity->rollback();
					$this->error('添加失败');
				}							
			}
			$god['uid']=I('session.uid');
			$god['actid']=0;
			$actgods=$good->where($god)->select();
            $this->assign('actgods',$actgods);
			$this->display('Activity/add');
		}elseif(isset($_GET['opt'])&&$_GET['opt']=='edit') {	
			$agid['actid']=I('get.id');
            $agood=$good->field('id')->where($agid)->select();
            $acount=count($agood);
            for ($i=0; $i < $acount; $i++) { 
            	$aids[]=$agood[$i]['id'];
            }
            if(isset($_POST['editt'])) {
				$edit=$_POST;
				$map['id']=I('get.id');
				$gods['id']=array('in',$aids);//用于清空原来选中的清空
				$nmap['id']=array('in',I('post.gid'));	
				$oaid['actid']=0;
			    $aid['actid']=I('get.id');	//用于现在的
				$edit['stime']=strtotime(I('post.stime'));
				$edit['etime']=strtotime(I('post.etime'));
				$activity->startTrans();//开启事务
				$act=$activity->where($map)->save($edit);
				$oagod=$good->where($gods)->save($oaid);					
				$nagod=$good->where($nmap)->save($aid);
				if($act && $oagod && $nagod) {
					$activity->commit();
					$this->redirect('Member/activity');
				}else {
					$activity->rollback();
					$this->error('修改失败');
				}

			}
			$aid['id']=I('get.id');
			$acti=$activity->field('id,acname,stime,etime,actype,ac_num1,ac_nums1,ac_num2,ac_nums2')->where($aid)->find();
            $ag['uid']=I('session.uid');
            $ag['actid']=0;
            $editg['_logic']='or';
            $editg['_complex']=$ag;
            $editg['actid']=I('get.id');
            $actgods=$good->where($editg)->select();
            //var_dump($aids);exit;
            $this->assign('actgods',$actgods);
            $this->assign('acti',$acti);
            $this->assign('aids',$aids);//选中的商品id
            $this->display('Activity/add');
		}
		else{
	       if(isset($_GET['actt'])) {
				$act=trim(I('get.actt'));
				$acmap['id']=I('get.id');
			    if($act=='del') {
					$activity->where($acmap)->delete();	
			    }else if($act=='stop') {
			    	$acmap['ac_status']=2;
			    	$activity->save($acmap);
			    }else if($act=='start'){
			    	$acmap['ac_status']=1;
			    	$activity->save($acmap);
			    }
				$this->redirect('Member/activity');
			}else if (isset($_POST['sel'])){
				if(I('post.aid') !='') {
					$sel['aid']=array('like','%'.I('post.aid').'%');
				}
				if(I('post.acname') !='') {
					$sel['acname']=array('like','%'.I('post.acname').'%');
				}
				if(I('post.stime') !='' &&I('post.etime') =='') {								
					$sel['stime']=array('eq',strtotime(I('post.stime')));
				}
				if(I('post.stime') =='' &&I('post.etime') !='') {
					
					$sel['etime']=array('eq',strtotime(I('post.etime')));
				}
	            if(I('post.stime') !='' &&I('post.etime') !='') {
					$sel['stime']=array('egt',strtotime(I('post.stime')));
					$sel['etime']=array('elt',strtotime(I('post.etime')));
				}
				if(I('post.ac_status') != 0) {
					$sel['ac_status']=array('eq',I('post.ac_status'));
				}
			}
			$sel['uid']=I('session.uid');
			$activities=$activity->where($sel)->select();
			$this->assign('activities',$activities);
			$this->display('Activity/index');
		}
    }
    public function approve() {
    	if(isset($_POST['approve'])) {
    		$user=M('User');
			$data['applicant']=I('session.account');
			$data['truename']=trim(I('post.truename'));
			$data['stuid']=trim(I('post.stuid'));
			$data['app_time']=time();
			$approve=M('Approve');
			$aa=$approve->data($data)->add();						
			if($aa) {
				$up['id']=I("session.uid");
				$up['is_approve']=1;
				$user->save($up);
				$this->redirect('Member/approve');
			}
		}
		$this->display('Member/approve');
    }
    public function face() {
    	$user=M('User');
    	$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize = 1145728;
    	$upload->savePath = 'avatar/';
    	$upload->exts= array('jpg', 'gif', 'png', 'jpeg');
    	$upload->autoSub  = true;
    	$upload->subName  = array('date','Ymd');
		$info=$upload->uploadOne($_FILES['aas']);
        if(!$info) {
            $this->error($upload->getError());
        }else{
        	$data['id']=I('session.uid');
        	$data['face']=$info['savepath'].$info['savename'];
        	$user->save($data);
        	session('face',$data['face']);
        	$this->redirect('Member/index');
        }
    }
}