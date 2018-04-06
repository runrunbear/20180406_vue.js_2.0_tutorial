<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	// 执行登录操作
    public function denglu(){
        //检测用户
            $username=$_POST['xname'];
            $password=$_POST['xpwd'];
            //实例化Model
            $mod =M('x_user');
            $row=$mod->where("xname='{$username}' and xpwd='{$password}'")->select();
            // var_dump($row[0]['xname']);die;
            if($row){
                //将数据存储在session
                $_SESSION['xname']=$row[0]['xname'];
                $_SESSION['xid']=$row[0]['xid'];
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('用户名或者密码有误');
            }
    }
    // 执行退出操作
     public function loginout(){
        session('xname',null);
        $this->success('退出成功',U('Index/index'));
    }
}