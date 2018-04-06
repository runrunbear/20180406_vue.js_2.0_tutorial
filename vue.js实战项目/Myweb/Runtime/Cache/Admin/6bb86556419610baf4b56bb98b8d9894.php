<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="/cuijiwei/project/Public/admin/image/png">

  <title>后台管理</title>

  <!--icheck-->
  <link href="/cuijiwei/project/Public/admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="/cuijiwei/project/Public/admin/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="/cuijiwei/project/Public/admin/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="/cuijiwei/project/Public/admin/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="/cuijiwei/project/Public/admin/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="/cuijiwei/project/Public/admin/js/morris-chart/morris.css">

  <!--common-->
  <link href="/cuijiwei/project/Public/admin/css/style.css" rel="stylesheet">
  <link href="/cuijiwei/project/Public/admin/css/style-responsive.css" rel="stylesheet">




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo" >
            <!-- <a href="index.html"><img src="/cuijiwei/project/Public/admin/images/logo.png" alt=""></a> -->
            <p style="font-size:18px;width:100px;height:30px;margin-left:50px;margin-top:10px;color:white;">后台管理</p>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="/cuijiwei/project/Public/admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
           <!--  <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/cuijiwei/project/Public/admin/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div> -->

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>首页</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/User/index">浏览用户</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/User/adduser">添加用户</a></li>

                    </ul>
                </li>
    
                <li class="menu-list"><a href=""><i class="fa fa-smile-o"></i> <span>梦想管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/Dream/index">梦想浏览</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Dream/add">添加梦想</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Dream/paihang">梦想排行</a></li>

                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
        
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                   
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/cuijiwei/project/Public/admin/images/photos/user-avatar.png" alt="" />
                            欢迎用户<?php echo ($_SESSION['username']); ?>登入后台
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="/cuijiwei/project/index.php/Admin/Login/logout"><i class="fa fa-user"></i>退出</a></li>

                        </ul>
                    </li> 
                </ul>
            </div>
            <!--notification menu end -->

        </div>
   
<!-- 占位 -->
            <!-- 用户管理 -->
            
            
            
            <!-- 梦想管理 -->
            
            
             <script type="text/javascript" charset="utf-8" src="/cuijiwei/project/Public/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="/cuijiwei/project/Public/ueditor/ueditor.all.min.js"> </script>
        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
        <script type="text/javascript" charset="utf-8" src="/cuijiwei/project/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                    梦想添加
                    </header>
                    <div class="panel-body">
                        <form action="/cuijiwei/project/index.php/Admin/Dream/doadd" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">梦想标题：</label>
                                <input type="text" placeholder="请输入梦想标题" name="xtitle" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">添加图片：</label>
                                <input type="file" name="xpic" class="form-control" style="border:0px dotted red" >
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">梦想介绍：</label>
                            
                            <script id="editor" type="text/plain" /name="xdetail" style="width:1000px;height:400px;"></script>
                            </div>

                            <button class="btn btn-success" type="submit">确认添加</button>
                            <button class="btn btn-warning" type="reset">重置</button>
                        </form>

                    </div>
                </section>
            </div>
            <script type="text/javascript">
     //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
   </script>


            
            <!-- 梦想排行 -->
            

    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="/cuijiwei/project/Public/admin/js/jquery-1.10.2.min.js"></script>
<script src="/cuijiwei/project/Public/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/cuijiwei/project/Public/admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/cuijiwei/project/Public/admin/js/bootstrap.min.js"></script>
<script src="/cuijiwei/project/Public/admin/js/modernizr.min.js"></script>
<script src="/cuijiwei/project/Public/admin/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/cuijiwei/project/Public/admin/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/cuijiwei/project/Public/admin/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/cuijiwei/project/Public/admin/js/sparkline/jquery.sparkline.js"></script>
<script src="/cuijiwei/project/Public/admin/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/cuijiwei/project/Public/admin/js/iCheck/jquery.icheck.js"></script>
<script src="/cuijiwei/project/Public/admin/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/cuijiwei/project/Public/admin/js/flot-chart/jquery.flot.js"></script>
<script src="/cuijiwei/project/Public/admin/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/cuijiwei/project/Public/admin/js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="/cuijiwei/project/Public/admin/js/morris-chart/morris.js"></script>
<script src="/cuijiwei/project/Public/admin/js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="/cuijiwei/project/Public/admin/js/calendar/clndr.js"></script>
<script src="/cuijiwei/project/Public/admin/js/calendar/evnt.calendar.init.js"></script>
<script src="/cuijiwei/project/Public/admin/js/calendar/moment-2.2.1.js"></script>
<!-- <script src="/cuijiwei/project/Public/admin/http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script> -->

<!--common scripts for all pages-->
<script src="/cuijiwei/project/Public/admin/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/cuijiwei/project/Public/admin/js/dashboard-chart-init.js"></script>

</body>
</html>