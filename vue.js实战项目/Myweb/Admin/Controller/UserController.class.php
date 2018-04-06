<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends AllowController {
    public function index(){
        $mod=M("x_user");
        //实例化分页类
        $page=new \Think\Page($mod->Count(),5);
        //分页设置
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        //查询用户信息
        $user=$mod->limit($page->firstRow,$page->listRows)->select();
        $count=count($user);
        // var_dump($user);
        // var_dump($page);die;
        $status=array('1'=>'超级管理员','0'=>'普通用户');
        $this->assign('page',$page->show());
        $this->assign('status',$status);
        $this->assign('count',$count);
        $this->assign('user',$user);
        $this->display("Index/user");

    }
    //加载添加页面
    public function adduser(){
    	$this->display("Index/adduser");
    }
    //执行添加操作
    public function add(){
    	//实例化Model类
    	$mod=M('x_user');
    	$mod->create();
        $user=$mod->add();
    	if($user){
            $this->success('添加成功',U("User/index"));
        }else{
            $this->error("添加失败");
        }
		
    }
     //执行删除操作
    public function delete(){
        $xid=$_GET['id'];
        //实例化Model类
        $mod=M('x_user');
        $del=$mod->delete($xid);
        if($del){
            echo "1";
        }else{
            echo "0";
        }
        
    }
    //加载修改页面
    public function edit(){
        $xid=$_GET['id'];
        //实例化Model类
        $mod=M('x_user');
        $user=$mod->find($xid);
        $this->assign('user',$user);
        $this->display("Index/edit");   
    }
     //执行修改
    public function update(){
        $xid=$_POST['xid'];
        // var_dump($id);
        //实例化Model类
        $mod=M('x_user');
        $data=$mod->create();
        if($mod->save($data)){
            $this->success('修改成功',U("User/index"));
        }else{
            $this->error('修改失败');
        }
    }
}