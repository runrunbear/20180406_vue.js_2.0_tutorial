<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends AllowController {
    //浏览新闻
    public function index(){
        $mod=M("News");
        //实例化分页类
        $page=new \Think\Page($mod->where($where)->Count(),3);
        //分页设置
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','首页');
        $page->setConfig('last','末页');
        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        //查询商品信息
        $news=$mod->limit($page->firstRow,$page->listRows)->select();
        $cate=array("1"=>"公司新闻","2"=>"行内新闻","3"=>"通知/公告");
        $this->assign('page',$page->show());
        $this->assign('cate',$cate);
        $this->assign('news',$news);
    	$this->display("News/index");
    }
    //加载添加新闻页面·
    public function add(){
        $this->display("News/add");
    }
    //执行添加新闻呢的操作
    public function doadd(){
        //实例化Model类
        $mod=M('news');
        //获取需要添加的信息
        $data['title']=$_POST['title'];
        $data['cates']=$_POST['cates'];
        $data['content']=$_POST['content'];
        // var_dump($data);die;
        //执行添加
        if($mod->add($data)){
            $this->success('添加成功',U('News/index'));
        }else{
            $this->error('添加失败');
        }
    }
    //删除操作
    public function delete(){
       //实例化Model类
        $mod = M('news');
        $id=$_GET['id'];
        //获取需要删除的数据
        $row=$mod->find($id); 
        if($mod->delete($id)){
            echo "1";
        }else{
            echo "0";
        }
        
    }
    //加载修改商品页面
    public function edit(){
        $id=$_GET['id'];
        $mod=M("news");
        $news=$mod->find($id);
        $this->assign('news',$news);
        $this->display("News/edit");   
    }
    //执行修改
    public function update(){
        //获取需要修改的数据
        $mod=M('news');
        //获取id
        $id=$_POST['id'];
        $row=$mod->find($id);
        //数据插入数据库
        //获取需要添加的信息
        $data['title']=$_POST['title'];
        $data['cates']=$_POST['cates'];
        $data['content']=$_POST['content'];
        //执行修改
        if($mod->where("id=$id")->save($data)){
            $this->success('修改成功',U('News/index'));
        }else{
            $this->error('修改失败');
        }

    }

}
