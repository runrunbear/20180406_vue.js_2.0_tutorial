<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>个人中心</title>

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

<!-- 梦想列表页面 -->

<!-- 个人中心页面 -->

    <link rel="stylesheet" href="/cuijiwei/project/Public/css/bootstrap.css"/>
    <link rel="stylesheet" href="/cuijiwei/project/Public/css/daohang.css"/>
    <link rel="stylesheet" href="/cuijiwei/project/Public/css/detail.css"/>
<body>
<!-- <div id="header"></div> -->
<div class="main personBox">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-2">
                <ul class="message">
                    <li><a href="#">我的发起</a></li>
                    <li><a href="#">消息</a></li>
                    <li><a href="#">设置</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="personRight">
                    <div class="headBox">
                        <div class="ftDiv">
                            <a href="#"><img class="img-responsive" src="/cuijiwei/project/Public/img/100.jpg" alt=""/>                             </a>
                        </div>
                        <div class="scDiv">
                            <p class="ftp"><a href="#"><?php echo ($_SESSION['xname']); ?></a></p>
                            <p class="scp"></p>
                        </div>
                        <b></b>
                    </div>

                    <div class="messageBox">
                        <a href="#">
                          <p class="ftp letterNum">0</p>
                          <p class="myNum">我的消息</p>
                        </a>
                    </div>
                </div>

                <div class="tabBox">
                    <ul>
                        <li>我的发起</li>
                    </ul>
                     <?php if(empty($dream)): ?><div class="person_list">
                        	 <div class="mask"></div>
                       		 <p class="never">您还未发表过梦想</p>
                       		 <a class="btn_start" href="/cuijiwei/project/index.php/Home/Dream/index">去发表</a>
                   		 </div>
                     <?php else: ?>
                     	<div class="row">
              	  <div class="col-md-4 col-sm-12 project-zero" style="width:1100px">
                    <a class="link-muted" href="#">
                    	<?php if(is_array($dream)): foreach($dream as $key=>$row): ?><dl style="float:left;margin-left:33px;border:1px solid #ccc;margin-top:10px;margin-bottom:10px;">
                            <dt><a href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($row["id"]); ?>"><img src="/cuijiwei/project/Public/Uploads/<?php echo ($row["xpic"]); ?>" width="100px" height="100px" style="width:320px;"/></a></dt>
                            <dd>
                                <h5><a href="/cuijiwei/project/index.php/Home/Dream/detail/id/<?php echo ($row["id"]); ?>"><?php echo ($row["xtitle"]); ?></a></h5>
                                <div class="text-muted">
                                    发起者：<?php echo ($row["username"]); ?>
                                <span class="wh-star">
                                    身份已提交
                                </span>
                                </div>
                                <ul class="allSup">
                                    <li style="width: 100px;">支持者:<?php echo ($row["num"]); ?></li>
                                </ul>
                            </dd>
                        </dl><?php endforeach; endif; ?>
                    </a>
                </div>
            </div>

            <ol class="pager">
                <li><?php echo ($page); ?></li>
            </ol><?php endif; ?> 
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------页尾-------------->
<!-- <footer id="foot"></footer> -->
<script src="/cuijiwei/project/Public/js/jquery-1.11.3.js "></script>
<script src="/cuijiwei/project/Public/js/bootstrap.js "></script>
<script src="/cuijiwei/project/Public/js/me.js"></script>
<script src="/cuijiwei/project/Public/js/login.js"></script>
</body>



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