<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>首页</title>

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
<div id="header"></div>
<section>
	<form id="theForm" class="simform" autocomplete="off">
		<div class="simform-inner">
			<ol class="questions">
				<li>
					<span><label for="q1">梦想标题</label></span>
					<input id="q1" name="q1" type="text" maxlength="25"/>
					<div id="preview">
						<span>添加图片</span>
						<img  id="imghead" onClick="$('#previewImg').click();"/>
					</div>
					<input type="file" onChange="previewImage(this)" style="display: none;" id="previewImg">
				</li>
				<li>
					<span><label for="q2">详细的向大家介绍下你的梦想吧~</label></span>
					<div class="wenben">
						<textarea placeholder="以一个引人注目的描述为你的梦想开篇，让更多支持者愿意了解并且为你的梦想点赞" name="content" cols="30" rows="6" id="q1" name="q2" type="text"></textarea>
					</div>
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

<!-------------页尾-------------->
<div id="foot"></div>


<!------固定定位的登录模态框------>
<div class="modal" id="modal-login">
	<div class="modal-dialog modal-sm">

		<div class="container">
			<div class="col-md-6">

				<div class="modal-content">
					<div class="modal-header">用户登录</div>
					<div class="modal-body">

						<form class="user-login">
							<div class="form-group">
								<lable for="uname" class="control-label">用户名：</lable>
								<input autofocus required placeholder="请输入用户名" class="form-control" id="uname"/>
							</div>
							<div class="form-group">
								<lable for="upwd" class="control-lable">密码：</lable>
								<input type="password" required placeholder="请输入密码" class="form-control" id="upwd"/>
							</div>

							<h5 class="name-err">*用户名或密码错误</h5>
							<input id='start_login' type="button" class="btn btn-danger login-btn" value="登录"/>
							<a href="#" class="getpw">忘记密码</a>
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

						<div class="noneLog">
							没有账号？
							<a href="register.html">快速注册</a>
						</div>
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
</html>