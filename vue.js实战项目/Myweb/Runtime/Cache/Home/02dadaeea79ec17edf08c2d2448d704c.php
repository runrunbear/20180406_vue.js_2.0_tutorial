<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>首页</title>

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

<link href="/cuijiwei/project/Public/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="/cuijiwei/project/Public/css/daohang.css"/>
<link rel="stylesheet" href="/cuijiwei/project/Public/css/detail.css"/>
<!--响应式导航条-->
<div id="header"></div>
<!--主体内容-->

<div id="video-wrapper" class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="big-img-container">
                    <video loop preload="auto" autoplay src="/cuijiwei/project/Public/video/视频背景.mp4"></video>
                    <div class="tiaozhuan">
                        <div class="startDream">
                            <a href="/cuijiwei/project/index.php/Home/Dream/index"> 发起梦想</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

<section id="weekDream">
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="wish-title">一周支持Top3</h4>
                <div class="dream_list">
                    <div class="weekbar">
                    <div class="Top">
                        <p>
                            <a class="underline" href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($top[0]['id']); ?>"><?php echo ($top[0]['xtitle']); ?></a>
                        </p>
                        <span class="dreamName">--发起者：<?php echo ($top[0]['username']); ?></span>
                        <a href="/cuijiwei/project/index.php/Home/Dream/support/id/<?php echo ($top[0]['id']); ?>" class="rewish_btn">支持</a>
                    </div>

                </div>
                <div class="weekbar">
                    <div class="two">
                        <p>
                            <a class="underline" href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($top[1]['id']); ?>"><?php echo ($top[1]['xtitle']); ?></a>
                        </p>
                        <span class="dreamName">--发起者：<?php echo ($top[1]['username']); ?></span>
                        <a href="/cuijiwei/project/index.php/Home/Dream/support/id/<?php echo ($top[1]['id']); ?>" class="rewish_btn">支持</a>
                    </div>
                </div>
                    <div class="weekbar">
                     <div class="three">
                         <p>
                             <a class="underline" href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($top[2]['id']); ?>"><?php echo ($top[2]['xtitle']); ?></a>
                         </p>
                             <span class="dreamName">--发起者：<?php echo ($top[2]['username']); ?></span>
                         <a href="/cuijiwei/project/index.php/Home/Dream/support/id/<?php echo ($top[2]['id']); ?>" class="rewish_btn">支持</a>
                    </div>
                </div>
                    <a href="/cuijiwei/project/index.php/Home/Dream/liebiao" class="lookMore">查看更多梦想</a>
                </div>
            </div>
        </div>

          <div class="row">
            <div class="col-md-12">
                <h4 class="wish-title">最热梦想完成进度更新榜</h4>
                <div class="ranklist">
                    <ul class="moreHot">
                      <?php if(is_array($dream)): foreach($dream as $key=>$row): ?><li>
                            <div class="giveFive lf">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                                <span><?php echo ($row["num"]); ?></span>
                            </div>
                            <div class="leader-right rt">
                                <div class="leader-title"><a href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($row["id"]); ?>"><?php echo ($row["xtitle"]); ?></a></div>
                                <div class="leader-other"><?php echo ($row["xdetail"]); ?></div>
                            </div>
                        </li><?php endforeach; endif; ?>  
                    </ul>
                </div>
            </div>
          </div>
        <div>
        </div>
    </div>
</div>

    <div class="main specialDream">
        <div class="container">
        <div class="row">
            <h3>特别精选 <span><a href="#">查看更多项目</a></span></h3>
            <ul class="project-list">
                <div class="col-md-4 col-xs-12 col-sm-6 change">
                    <li>
                    <img class="img-responsive" src="/cuijiwei/project/Public/img/vr.jpg"/>
                    <p>这款黑科技，注定要为生活润色</p>
                    <div class="clearfix">
                        <img class="pheart" src="/cuijiwei/project/Public/img/heart.png"/>
                        <span class="xihuan">6078</span>
                        <img class="pheart" src="/cuijiwei/project/Public/img/pinglun.png"/>
                        <span class="pinglun">16</span>
                    </div>
                 </li>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 change">
                    <li>
                        <img class="img-responsive" src="/cuijiwei/project/Public/img/sheying.jpg"/>
                        <p>给年轻摄影人一本最好的独立影像志</p>
                        <div class="clearfix">
                            <img class="pheart" src="/cuijiwei/project/Public/img/heart.png"/>
                            <span class="xihuan">5467</span>
                            <img class="pheart" src="/cuijiwei/project/Public/img/pinglun.png"/>
                            <span class="pinglun">25</span>
                        </div>
                    </li>
                    </div>
                <div class="col-md-4 col-xs-12 col-sm-6 change">
                    <li>
                        <img class="img-responsive" src="/cuijiwei/project/Public/img/xiaozhi.jpg"/>
                        <p>谢谢你，从小智的全世界路过</p>
                        <div class="clearfix">
                            <img class="pheart" src="/cuijiwei/project/Public/img/heart.png"/>
                            <span class="xihuan">2354</span>
                            <img class="pheart" src="/cuijiwei/project/Public/img/pinglun.png"/>
                            <span class="pinglun">12</span>
                        </div>
                    </li>
                    </div>
                <div class="col-md-4 col-xs-12 col-sm-6 change">
                    <li>
                        <img class="img-responsive" src="/cuijiwei/project/Public/img/zhutu_c.jpg"/>
                        <p>用最执着的方法，磨个最牛逼的人偶</p>
                        <div class="clearfix">
                            <img class="pheart" src="/cuijiwei/project/Public/img/heart.png"/>
                            <span class="xihuan">1543</span>
                            <img class="pheart" src="/cuijiwei/project/Public/img/pinglun.png"/>
                            <span class="pinglun">4</span>
                        </div>
                    </li>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 change">
                    <li>
                        <img class="img-responsive" src="/cuijiwei/project/Public/img/projectmmore.png"/>
                    </li>
                </div>
            </ul>

        </div>
    </div>
    </div>

</section>
<!-- 已完成梦想 -->
<div class="sucBox">
    <div class="mainInnerBox">
        <div class="index_sucHeader">
            <h3>
                “成功案例”
                <span>他们已经实现了梦想，你还在等什么...</span>
            </h3>
            <ul class="index_ul">
                <li>
                    <a href="#"></a>
                </li>
                <li></li>
            </ul>
        </div>
        
        <div class="index_sucItem">
            <div class="indSuc lf">
                <div class="SucImgbox lf">
                    <a href="#"><img src="/cuijiwei/project/Public/img/default_90.png"/></a>
                </div>
                <div class="SucText">
                    <h3 class="SucText_h3">
                        <a class="SucName" href="#">柠檬没你萌</a>
                        <a class="SucDetail" href="#">“一起来开一家设计师主体咖啡馆@J的咖啡”</a>
                    </h3>
                    <p class="SucText_p">
                        "我叫安宁，真名。一个做了10年书皮子的设计师，大象设计的联合创始人，
                        2014年转型做了设计师品牌“安的田园”，简单来说就是做吃的。我想做一个设计师主题咖啡馆，
                        不浮夸，不刻意追求形式感，拙扑，自然，舒适，即可。每个月组织一次设计师的相关活动，与别的
                        咖啡馆不同的是，我们的食材大部分出自我们自己的农场"
                    </p>
                </div>
            </div>
        </div>

        <div class="index_sucItem">
            <div class="indSuc lf">
                <div class="SucImgbox lf">
                    <a href="#"><img src="/cuijiwei/project/Public/img/small.jpg"/></a>
                </div>
                <div class="SucText">
                    <h3 class="SucText_h3">
                        <a class="SucName" href="#">柠檬没你萌</a>
                        <a class="SucDetail" href="#">“一起来开一家设计师主体咖啡馆@J的咖啡”</a>
                    </h3>
                    <p class="SucText_p">
                        "我叫安宁，真名。一个做了10年书皮子的设计师，大象设计的联合创始人，
                        2014年转型做了设计师品牌“安的田园”，简单来说就是做吃的。我想做一个设计师主题咖啡馆，
                        不浮夸，不刻意追求形式感，拙扑，自然，舒适，即可。每个月组织一次设计师的相关活动，与别的
                        咖啡馆不同的是，我们的食材大部分出自我们自己的农场"
                    </p>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- 梦想分类 -->
<div class="main">
    <div class="container">
        <div class="col-md-12">
        <div class="classify">
         <div class="small-img-container">
            <img class="center img-responsive" src="/cuijiwei/project/Public/img/keneng.png"/>
         </div>
        <ul>
            <li class="sprite sprite-youxi">
                <div class="dreamMask">
                    <h4>游戏</h4>
                    <h5>Games</h5>
                 </div>
            </li>
            <li class="sprite sprite-yingshi">
                <div class="dreamMask">
                    <h4>影视</h4>
                    <h5>Video</h5>
                </div>
            </li>
            <li class="sprite sprite-dongman">
                <div class="dreamMask">
                    <h4>动漫</h4>
                    <h5>Comics</h5>
                </div>
            </li>
            <li class="sprite sprite-yinyue">
                <div class="dreamMask">
                    <h4>音乐</h4>
                    <h5>Music</h5>
                </div>
            </li>
            <li class="sprite sprite-meiti">
                <div class="dreamMask">
                    <h4>媒体</h4>
                    <h5>Media</h5>
                </div>
            </li>
            <li class="sprite sprite-sheji">
                <div class="dreamMask">
                    <h4>设计</h4>
                    <h5>Design</h5>
                </div>
            </li>
            <li class="sprite sprite-sheying">
                <div class="dreamMask">
                    <h4>摄影</h4>
                    <h5>Photography</h5>
                </div>
            </li>
            <li class="sprite sprite-yishu">
                <div class="dreamMask">
                    <h4>艺术</h4>
                    <h5>Arts</h5>
                </div>
            </li>
            <li class="sprite sprite-meishi">
                <div class="dreamMask">
                    <h4>美食</h4>
                    <h5>Food</h5>
                </div>
            </li>
            <li class="sprite sprite-chuban">
                <div class="dreamMask">
                    <h4>出版</h4>
                    <h5>Publishing</h5>
                </div>
            </li>
            <li class="sprite sprite-gongyi">
                <div class="dreamMask">
                    <h4>手工艺品</h4>
                    <h5>Crafts</h5>
                </div>
            </li>
            <li class="sprite sprite-huizhan">
                <div class="dreamMask">
                    <h4>会展</h4>
                    <h5>Exhibitions</h5>
                </div>
            </li>
            <li class="sprite sprite-shishang">
                <div class="dreamMask">
                    <h4>时尚</h4>
                    <h5>Fashion</h5>
                </div>
            </li>
            <li class="sprite sprite-zhineng">
                <div class="dreamMask">
                    <h4>智能硬件</h4>
                    <h5>Technology</h5>
                </div>
            </li>
        </ul>
        </div>
        </div>
    </div>
</div>


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
<script src="/cuijiwei/project/Public/js/first.js"></script>
<script src="/cuijiwei/project/Public/js/login.js"></script>
<script src="/cuijiwei/project/Public/js/gundong.js"></script>

<!-- 注册页面 -->

<!-- 发起梦想 -->

<!-- 梦想详情页面 -->

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