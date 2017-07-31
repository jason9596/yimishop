<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommentController {
    public function index(){
        $this->display();
    }
    public function add() {
        $this->display('Message/add');
    }   
}    
?>