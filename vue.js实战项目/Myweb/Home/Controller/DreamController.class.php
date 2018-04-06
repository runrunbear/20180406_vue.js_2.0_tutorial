<?php
namespace Home\Controller;
use Think\Controller;
class DreamController extends Controller {
	// 加载发起梦想的模板
    public function index(){
        $this->display("Dream/index");
    }
    // 执行梦想发表
    public function dodream(){
       //判断用户是否登录
        if(session("xname")){

               //实例化文件上传类
                $upload=new \Think\Upload();
                //设置参数
                $upload->maxSize=3145555555;
                $upload->exts=array('jpg','jpeg','png','gif');
                $upload->rootPath="./Public/Uploads/";
                //执行上传
                $info=$upload->upload();
                if(!$info){
                    $this->error($upload->getError());
                }else{
                        $s=$info['xpic']['savepath'].$info['xpic']['savename'];

                }
                //实例化Model类
                $mod=M('x_list');
                //获取需要添加的信息
                $data['xtitle']=$_POST['xtitle'];
                $data['xpic']=$s;
                $data['userid']=session("xid");
                $data['username']=session("xname");
                $data['xdetail']=$_POST['xdetail'];
                //执行添加
                if($mod->add($data)){
                    $this->success('添加成功',U('Index/index'));
                }else{
                    $this->error('添加失败');
                }

        }else{
                     $this->error('请登录后再发表梦想',U('Index/index'));
                }

    }
//梦想支持
        public function support(){
            $id=$_GET['id'];
            //实例化Model类
            $mod=M('x_list');
            $res=$mod->where("id = $id")->setInc('num');
            if($res){
                $this->success('点赞成功',U('Index/index'));
            }else{
                 $this->error('点赞失败');
            }
        }
// 梦想详情页面
        public function detail(){
             $id=$_GET['id'];
            //实例化Model类
             $mod=M('x_list');
             $detail=$mod->where("id = $id")->find();
             // var_dump($detail);die;
             $this->assign("detail",$detail);
             $this->display("Detail/index");
        }
// 梦想列表页面
        public function liebiao(){
            //实例化Model类
            $mod=M('x_list');
            //实例化分页类
            $page=new \Think\Page($mod->Count(),3);
            //分页设置
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','首页');
            $page->setConfig('last','末页');
            $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

             $list=$mod->limit($page->firstRow,$page->listRows)->select();
             $this->assign("list",$list);
             $this->assign('page',$page->show());
             $this->display("List/index");
            
        }
// 个人中心
        public function center(){
                $id=session("xid");
                $mod=M("x_list");
                 //实例化分页类
                    $page=new \Think\Page($mod->where("userid = $id")->Count(),2);
                    //分页设置
                    $page->setConfig('prev','上一页');
                    $page->setConfig('next','下一页');
                    $page->setConfig('first','首页');
                    $page->setConfig('last','末页');
                    $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
                $xid=session("xid");
                $dream=$mod->where("userid = $xid")->limit($page->firstRow,$page->listRows)->select();
                $this->assign("dream",$dream);
                $this->assign('page',$page->show());
                $this->display("Center/index");
            }     
}