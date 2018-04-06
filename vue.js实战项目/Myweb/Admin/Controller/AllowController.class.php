<?php
namespace Admin\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function _initialize(){
    	//检测session信息是否存在

    	if(!$_SESSION['login']){
    		$this->error('请先登录后台',U('Login/login'));
    	}
    }
}