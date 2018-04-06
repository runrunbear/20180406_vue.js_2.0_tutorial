<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册页面</title>
    <link href="/cuijiwei/project/Public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/cuijiwei/project/Public/css/register.css"/>
</head>
<body>
<form method="post" action="/cuijiwei/project/index.php/Home/Index/dozhuce">
<div class="main">
    <div class="container">
        <div class="col-md-12">
            <div id="modal" class="">
                <div class="modal_dialog">
                    <div class="user-reg">
                        <h2>用户注册</h2>
                    </div> 
                    <p>
                        <b>用户名：</b>
                        <input type="text" placeholder="请输入用户名" required name="xname">
                    </p>
                    <p>
                        <b>手机号：</b>
                        <input type="text" placeholder="请输入手机号" required name="xphone">
                    </p>
                    <p>
                        <b>密码：</b>
                        <input type="password" placeholder="请输入密码" required name="xpwd">
                    </p>
                    <p>
                        <b>确认密码：</b>
                        <input type="password" placeholder="请确认密码" required name="xrepwd">
                    </p>
                    <p>
                        <b>验证码：</b>
                        <input class="userphone" type="text" placeholder="验证码" name="code" required/>
                        <b><img src="/cuijiwei/project/index.php/Home/Index/code" width="100px" height="30px" onclick="this.src=this.src+'?'"></b>
                    </p>
                    <div class="agreement">
                        <img src="/cuijiwei/project/Public/img/yesBtn.png" alt=""/>
                        <span>本人已同意 <a href="#">《注册协议》</a></span>
                    </div>

                    <button id="btn-register" class="btn btn-success">注册</button>
</form>
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
                </div>
                <img data-i="1"src="" alt="">
            </div>
        </div>
    </div>
</div>


<script src="/cuijiwei/project/Public/js/jquery-1.11.3.js"></script>
<script src="/cuijiwei/project/Public/js/bootstrap.js"></script>
<script src="/cuijiwei/project/Public/js/register.js"></script>
</body>
</html>