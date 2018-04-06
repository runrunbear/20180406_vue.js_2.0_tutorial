<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>梦想发表</title>

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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/cuijiwei/project/Public/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/cuijiwei/project/Public/css/demo.css" />
<!--必要样式-->
	<link rel="stylesheet" type="text/css" href="/cuijiwei/project/Public/css/component.css" />
	<link rel="stylesheet" href="/cuijiwei/project/Public/css/bootstrap.css"/>
	<link rel="stylesheet" href="/cuijiwei/project/Public/css/daohang.css"/>
	<link rel="stylesheet" href="/cuijiwei/project/Public/css/detail.css"/>
	<style>
		/*修改过样式*/
		textarea{
			border:none;
			width:90%;
			height:95%;
			margin:-100px 34px;
			background:#C9F2E8;
			font-size:14px;
			padding:15px;
		}
		.wenben{
			margin-top:127px;
		}
		#preview{
			margin-top:-50px;
		}
		#preview img{
			background:url("/cuijiwei/project/Public/img/upload-btn.png") no-repeat;
			display:inline-block;
			width:56px;
			height:56px;
			background-position:0 0;
			position:relative;
			left:83px;
			top:71px;
		}
		#preview span{
			font-size:14px;
			position:relative;
			top:53px;
			left:71px;
		}

	</style>

<script src="/cuijiwei/project/Public/js/modernizr.custom.js"></script>

</head>
<body>
<!-- <div id="header"></div> -->
<section>
	<form id="theForm" class="simform" autocomplete="on" method="post" action="/cuijiwei/project/index.php/Home/Dream/dodream" enctype="multipart/form-data">
		<div class="simform-inner">
			<ol class="questions">
				<li>
					<span><label for="q1">梦想标题</label></span>
					<input id="q1" name="xtitle" type="text" maxlength="25"/>
					<div id="preview">
						<span>添加图片</span>
						<img  id="imghead" onClick="$('#previewImg').click();"/>
					</div>
					<input type="file" onChange="previewImage(this)" style="display:none" id="previewImg" name="xpic">
				</li>
				<li>
					<span><label for="q2">详细的向大家介绍下你的梦想吧~</label></span>
					<div class="wenben">
						<textarea placeholder="以一个引人注目的描述为你的梦想开篇，让更多支持者愿意了解并且为你的梦想点赞" name="xdetail" cols="30" rows="6" id="q1" name="q2" type="text"></textarea>
					</div>
					<input class="btn btn-warning" type="submit" value="发表" style="width: 500px; height: 50px; margin-top: 50px; margin-left: 150px;">
				</li>

			</ol><!-- /questions -->
			<button class="submit" type="submit">发表梦想</button>
			<div class="controls">
				<button class="next"></button>
				<div class="progress"></div>
				<span class="number">
					<span class="number-current"></span>
					<span class="number-total"></span>
				</span>
				<span class="error-message"></span>
			</div><!-- / controls -->
		</div><!-- /simform-inner -->
		<span class="final-message"></span>
	</form><!-- /simform -->
</section>

<!-- -----------页尾------------ -->
<!-- <div id="foot"></div> -->


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
<script type="text/javascript" src="/cuijiwei/project/Public/js/classie.js"></script>
<script type="text/javascript" src="/cuijiwei/project/Public/js/stepsForm.js"></script>
<script src="/cuijiwei/project/Public/js/detail.js"></script>
<script src="/cuijiwei/project/Public/js/bootstrap.js"></script>
<script src="/cuijiwei/project/Public/js/index.js"></script>
<script src="/cuijiwei/project/Public/js/login.js"></script>
</body>

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