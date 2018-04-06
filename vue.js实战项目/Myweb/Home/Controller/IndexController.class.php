<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 加载首页
    public function index(){
        $mod=M("x_list");
        $dream=$mod->select();
        $three=$mod->order('num DESC')->limit(3)->select();
        $this->assign("dream",$dream);
        $this->assign("top",$three);
        $this->display("Index/shouye");
    }
    // 注册页面加载
     public function zhuce(){
       $this->display("Login/zhuce");
    }
    // 验证码
     public function code(){
     	$Verify = new \Think\Verify();
		$Verify->fontSize = 150;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$verify->useCurve=false;
		$Verify->entry();
    }
    //执行注册
    public function dozhuce(){
    	//验证码的检测
    	$code=$_POST['code'];
    	//实例化验证码类
    	$verify=new \Think\Verify();
    	if($verify->check($code,'')){
    		if($_POST["xrepwd"] == $_POST["xpwd"]){
    			$data['xname']=$_POST['xname'];
    			$data['xpwd']=$_POST['xpwd'];
    			$data['xphone']=$_POST['xphone'];
    			$user=M("x_user");
    			if($user->add($data)){
    				$this->success('注册成功',U('Index/index'));
    			}
    		}else{
    			$this->error('两次密码不一致',U('Index/zhuce'));
    		}
    	}else{
            $this->error('验证码错误,请重新输入',U('Index/zhuce'));
        }
    }
}