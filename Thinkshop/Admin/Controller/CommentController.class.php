<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller
{    
    public function _initialize() {
    	$userinfo=I('cookie.admin_userinfo');
    	if(!$userinfo) {
    		$this->redirect('Login/index');
    	}
    }
}
?>