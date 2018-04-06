<?php
	header('Content-Type:application/json;charset:UTF-8');
	$xname=$_REQUEST["xname"];
	$xpwd=$_REQUEST["xpwd"];
	$conn=mysqli_connect('127.0.0.1','root','','xuyuanshu',3306);
	$sql="select * from x_user where xname='$xname' and xpwd='$xpwd'";
	$result=mysqli_query($conn,$sql);
	if(!$result){
		$str=["code"=>1001,"msg"=>"SQL语句错误"];
	}else{
		if(($user=mysqli_fetch_assoc($result))!==null){
			$str=["code"=>1000,"msg"=>"登录验证正确"];
		}else{
			$str=["code"=>1002,"msg"=>"用户名或密码错误"];
		}
	}
	echo json_encode($str);
?>