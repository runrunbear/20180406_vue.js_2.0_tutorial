<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	$this->display('Login/login');
    }

    //执行登录
    public function loginin(){
    		//检测用户
            $username=$_POST['username'];
            $password=$_POST['password'];
            //实例化Model
            $mod =M('x_user');
            $row=$mod->where("xname='{$username}' and xpwd='{$password}'")->find();
            // var_dump($row['status']);die;
            if($row&&$row['status']=='1'){
            		 //将数据存储在session
                     $_SESSION['username']=$username;
               		 $_SESSION['userid']=$row['xid'];
               		 $_SESSION['login']=1;
                	$this->success('后台登录成功',U('Admin/Index/index'));
            }else{
                	$this->error('登录失败',U('Login/login'));
            }
               
    }
    //执行退出
    public function logout(){
        session('username',null);
        session('userid',null);
        session('login',null);
        $this->success('退出成功',U('Login/login'));
    }
}