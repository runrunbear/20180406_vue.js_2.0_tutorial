<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AllowController {
    public function index(){
    	$user=session('username');
    	$this->assign('username',$user);
        $this->display("Index/shouye");
    }
}