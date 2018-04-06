<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>梦想详情页</title>

</head>
<body>
<!-- 头部 -->
<div class="navbar navbar-default navbar-fixed-top firstpag">
    <div class="container">
        <div class="navbar-header">
            <div class="box">
                    <span>距离下一个梦想实现还剩：</span>
                    <div class="content">
                         <input type="text" id="time_d" style="padding: 0px;">天<input type="text" id="time_h" style="padding: 0px;">时<input type="text" id="time_m" style="padding: 0px;">分<input type="text" id="time_s" style="padding: 0px;">秒
                    </div>

            </div>
            <a class="navbar-toggle" data-toggle="collapse" href="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <!-- 导航条折叠部分-->
        <div id="menu" class="navbar-collapse collapse">
          <!-- 判断用户是否登录 -->
          <?php if(isset($_SESSION['xname'])): ?><div id="clk2">
                <a id="btn-login" class="btn btn-warning navbar-link navbar-btn navbar-right" data-toggle="modal"
                         href="/cuijiwei/project/index.php/Home/Login/loginout" style="margin-right:5px;">退出</a>
              </div>
              <div id="clk2">
                <a id="btn-login" class="btn btn-warning navbar-link navbar-btn navbar-right" data-toggle="modal"
                         href="/cuijiwei/project/index.php/Home/Dream/center" style="margin-right:5px;">我的梦想</a>
              </div>
            <div id="clk2">
                <a id="btn-login" class="btn btn-success navbar-link navbar-btn navbar-right" data-toggle="modal"
                         href="" style="margin-right:5px;">欢迎用户<?php echo ($_SESSION['xname']); ?>登录</a>
              </div>
             
          
      <?php else: ?>

              <div id="welcome">
              <a id="clk1" class="btn btn-success navbar-link navbar-btn navbar-right">注册</a>
                        <span class="navbar-text navbar-right"></span>
              <div id="clk2">
                <a id="btn-login" class="btn btn-warning navbar-link navbar-btn navbar-right" data-toggle="modal"
                         href="#modal-login" style="margin-right:5px;">登录</a>
              </div>
            </div><?php endif; ?> 
            

            <ul class="nav navbar-nav navbar-right header_list">
                <li><a href="/cuijiwei/project/index.php/Home/Index/index">首页</a></li>
                 <li><a href="/cuijiwei/project/index.php/Home/Dream/liebiao">愿望清单</a></li>
                 <li><a href="/cuijiwei/project/index.php/Home/Dream/index">发起梦想</a></li>
                 <li class="dropdown">
                    <div data-toggle="dropdown" class="head-img">
                        <img src="/cuijiwei/project/Public/img/100.jpg"/>
                        <i></i>
                    </div>
                    <ul class="dropdown-menu">

                       <li><a href="me.html">我的发起梦想</a></li>

                       <li><a href="#">消息</a></li>

                       <li><a href="#">设置</a></li>

                       <li><a href="1.html">退出</a></li>
                     </ul>
                   </li>
                </ul>
        </div>
    </div>
</div>
<!-- 首页 -->

<!-- 注册页面 -->

<!-- 发起梦想 -->

<!-- 梦想详情页面 -->

<link rel="stylesheet" href="/cuijiwei/project/Public/css/bootstrap.css"/>
<link rel="stylesheet" href="/cuijiwei/project/Public/css/daohang.css"/>
<link rel="stylesheet" href="/cuijiwei/project/Public/css/detail.css"/>
<link rel="stylesheet" href="/cuijiwei/project/Public/css/dream.css"/>
    <body>
<div id="header"></div>
    <div class="main leader">
        <div class="container">
            <div class="row chWork">
                <div class="col-md-12">
                    <h3><?php echo ($detail['xtitle']); ?></h3>
                    <h5>梦想发起者：<?php echo ($detail['username']); ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h4 class="introduce">梦想介绍</h4>
                </div>
            </div>
            <div class="row dreamDetail">
                <div class="col-md-8 img-right">
                    <div class="main-image">
                        <!-- <img class="img-responsive" src="/cuijiwei/project/Public/img/FoUBP0TAH9ESOIy4-Y2jzdIy2XVh.jpg"/> -->
                    </div>
                    <div class="text-content">
                        <img class="img-responsive" src="/cuijiwei/project/Public/Uploads/<?php echo ($detail["xpic"]); ?>" width="700px" height="400px"/>
                        <p>生活舒适的我们，内心总有一种躁动</p>
                        <h4>【<?php echo ($detail['xtitle']); ?>】</h4>
                        <p>
                        	<?php echo ($detail['xdetail']); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 right-content">
                    <section class="right-content">
                       <div class="pull-left">
                           <img class="img-responsive" src="/cuijiwei/project/Public/img/zero.jpg"/>
                       </div>
                        <div class="pull-left">
                            <p class="dleader">梦想发起人:</p>
                            <p class="writer"><?php echo ($detail['username']); ?></p>
                        </div>
                    </section>
                    <div class="motto">
                        <p>梦想格言：<?php echo ($detail['xtitle']); ?></p>
                    </div>
                    <a class="btn btn-danger btn-lg mood glyphicon glyphicon-heart" href="/cuijiwei/project/index.php/Home/Dream/support/id/<?php echo ($detail['id']); ?>"> <span>支持</span></a>
                </div>
            </div>

        </div>
    </div>


<!-- <footer id="foot"></footer> -->

<!--固定定位的登录模态框-->
<div class="modal" id="modal-login">
    <div class="modal-dialog modal-sm">

        <div class="container">
            <div class="col-md-6">

                <div class="modal-content">
                    <div class="modal-header">用户登录</div>
                    <div class="modal-body">

                        <form class="user-login" method="post" action="/cuijiwei/project/index.php/Home/Login/denglu">
                            <div class="form-group">
                                <lable for="uname" class="control-label">用户名：</lable>
                                <input autofocus required placeholder="请输入用户名" class="form-control" id="uname" name="xname"/>
                            </div>
                            <div class="form-group">
                                <lable for="upwd" class="control-lable">密码：</lable>
                                <input type="password" required placeholder="请输入密码" class="form-control" id="upwd" name="xpwd"/>
                            </div>

                        <h5 class="name-err">*用户名或密码错误</h5>
                        <input id='start_login' type="submit" class="btn btn-danger login-btn" value="登录"/>
                        <a href="#" class="getpw">忘记密码</a>
                        
                        <div class="shell">
                            <b class="fond"></b>
                            合作账号登录
                            <b class="back"></b>
                        </div>
                        <div class="parter">
                            <img src="/cuijiwei/project/Public/img/nir1.png">
                            <img src="/cuijiwei/project/Public/img/nir2.png">
                            <img src="/cuijiwei/project/Public/img/nir3.png">
                        </div>

                        <div class="noneLog">
                            没有账号？
                            <a href="/cuijiwei/project/index.php/Home/Index/zhuce">快速注册</a>
                        </div>
                    </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<script src="/cuijiwei/project/Public/js/jquery-1.11.3.js"></script>
<script src="/cuijiwei/project/Public/js/bootstrap.js"></script>
<!-- <script src="/cuijiwei/project/Public/js/first.js"></script> -->
<script src="/cuijiwei/project/Public/js/login.js"></script>
<script src="/cuijiwei/project/Public/js/gundong.js"></script>

<!-- 梦想列表页面 -->

<!-- 个人中心页面 -->



<!-- 尾部 -->
<div class="footer">
        <div class="container">
            <div class="row dream">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>梦想分类</h5>
                            <ul class="fenlei">
                                <li><a href="#">出版</a></li>
                                <li><a href="#">设计</a></li>
                                <li><a href="#">公益</a></li>
                                <li><a href="#">动漫</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h5>关于我们</h5>
                            <ul class="fenlei">
                                <li><a href="#">音乐</a></li>
                                <li><a href="#">游戏</a></li>
                                <li><a href="#">活动</a></li>
                                <li><a href="#">其他</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>关于我们</h5>
                            <ul class="fenlei">
                                <li><a href="#">联系合作</a></li>
                                <li><a href="#">隐私权规则</a></li>
                                <li><a href="#">专区合作</a></li>
                                <li><a href="#">团队介绍</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h5>关于我们</h5>
                            <ul class="fenlei">
                                <li><a href="#">音乐</a></li>
                                <li><a href="#">游戏</a></li>
                                <li><a href="#">活动</a></li>
                                <li><a href="#">其他</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("#clk1").click(function(e){
        e.preventDefault();
        window.open("/cuijiwei/project/index.php/Home/Index/zhuce","_self");
    })
</script>
</html>