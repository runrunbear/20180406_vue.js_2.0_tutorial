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
                <li class="menu-list"><a href=""><i class="fa fa-paste"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/Cates/index">浏览分类</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Cates/add">添加分类</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-shopping-cart"></i> <span>商品管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/Shops/index">浏览商品</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Shops/add">添加商品</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bookmark"></i> <span>案例管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/Example/index">浏览案例</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Example/add">添加案例</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-flag"></i> <span>荣誉管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/Pride/index">浏览荣誉</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Pride/add">添加荣誉</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bullhorn"></i> <span>新闻管理</span></a>
                    <ul class="sub-menu-list">
                    
                        <li><a href="/cuijiwei/project/index.php/Admin/News/index">浏览新闻</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/News/add">添加新闻</a></li>
                        
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-refresh"></i> <span>轮播图管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/cuijiwei/project/index.php/Admin/Lunbo/index">浏览图片</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Lunbo/add">添加图片</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-user-md"></i> <span>人才加盟管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/cuijiwei/project/index.php/Admin/People/index">浏览列表</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/People/add">添加加盟信息</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/People/phone">联系电话及地址修改</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-user-md"></i> <span>查看在线留言</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/cuijiwei/project/index.php/Admin/Liuyan/index">浏览留言</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-chain"></i> <span>友情链接管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/cuijiwei/project/index.php/Admin/Friend/index">友情链接列表</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Friend/add">添加友情链接</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>关于我们</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/cuijiwei/project/index.php/Admin/Link/index">浏览内容</a></li>
                        <li><a href="/cuijiwei/project/index.php/Admin/Link/add">添加内容</a></li>
                        
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
            
            
            
            <!-- 分类 -->
            
            
            <!-- 商品管理 -->
            
            
            <!-- 轮播图 -->
            
            
            
            <!-- 案例 -->
            
            
            
            <!-- 荣誉 -->
            
            
            
            <!-- 新闻管理模块 -->
            
            
            
            <!-- 关于我们 -->
            
            
            
<div class="col-sm-12" style="margin-top:20px;">
        <section class="panel">
        
      <table id="dynamic-table" class="display table table-bordered table-striped dataTable" aria-describedby="dynamic-table_info">
        <thead>
        <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 195px;" aria-label="Rendering engine: activate to sort column ascending">ID</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 290px;" aria-label="Browser: activate to sort column ascending">类别</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 267px;" aria-label="Platform(s): activate to sort column ascending">描述</th><th class="hidden-phone sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" style="width: 115px;" aria-sort="descending" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
        </thead>

        <tbody role="alert" aria-live="polite" aria-relevant="all">
        <?php if(is_array($link)): foreach($link as $key=>$row): ?><tr class="gradeA odd">
            <td class=" "><?php echo ($row['id']); ?></td>
            <td class=" "><?php echo ($cates[$row['cates']]); ?></td>
            <td class=" "><div style="height:70px; overflow:auto;"><?php echo ($row['content']); ?></div></td>
            <td class="center hidden-phone  sorting_1"><a href="/cuijiwei/project/index.php/Admin/Link/edit/id/<?php echo ($row['id']); ?>">修改</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick=fun(<?php echo ($row['id']); ?>)>删除</a></td>
        </tr><?php endforeach; endif; ?>

    </tbody></table>
        <div style="margin-left:500px;"><?php echo ($page); ?></div>
        </section>
        </div>
         <script src="/cuijiwei/project/Public/admin/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript">
              function fun(id){
                    if(confirm("确定要删除吗?")){
                        $.get("/cuijiwei/project/index.php/Admin/Link/delete",{id:id},function(data){
                                if(data==1){
                                    alert("删除成功");
                                    document.location="/cuijiwei/project/index.php/Admin/link/index";
                                }
                        })
                    }
                    
              }

              
        </script>

            <!-- 人才加盟管理 -->
            
            
            
            <!-- 修改公司电话及地址 -->
            
            <!-- 友情链接模块 -->
            
            
            
            <!-- 在线留言 -->
            

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