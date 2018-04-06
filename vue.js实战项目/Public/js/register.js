var progress=0;
var username=document.querySelector("[name=uname]");
var pwd=document.querySelector('[name=upwd]');
var phone=document.querySelector('[name=uphone]');
var user=document.querySelector("[name=user]");
username.onfocus=function(){
    $(this).next().css('display','block');
}

username.onblur=function(){
    if(username.validity.valid){
        $(this).next().addClass('success').html('手机格式输入正确');
        progress+=30;
    }else if(username.validity.valueMissing){
        $(this).next().addClass("err").html("手机号码不能为空");
    }else if(username.validity.patternMismatch){
        $(this).next().addClass("err").html("手机号输入不符合格式要求");
    }
}

user.onfocus=function(){
    $(this).next().css('display','block');
}

user.onblur=function(){
    if(username.validity.valid){
        $(this).next().addClass('success').html('用户名输入正确');
        progress+=30;
    }else if(username.validity.valueMissing){
        $(this).next().addClass("err").html("用户名不能为空");
    }else if(username.validity.patternMismatch){
        $(this).next().addClass("err").html("用户名只含有汉字、数字、字母、下划线，下划线位置不限");
    }
}


//密码
pwd.onfocus=function(){
    $(this).next().css('display','block');
}
pwd.onblur=function(){
    if(pwd.validity.valid){
        $(this).next().addClass('success').html('密码格式正确');
        progress+=30;
    }else if(pwd.validity.valueMissing){
        $(this).next().addClass('err').html('密码不能为空');
    }else if(pwd.validity.patternMismatch){
        $(this).next().addClass('err').html('密码输入不符合格式要求');
    }
}

//手机验证码
phone.onfocus=function(){
    $(this).nextAll('span').css('display','block');
    progress+=30;
}
phone.onblur=function(){
    if(phone.validity.valueMissing){
        $(this).nextAll('span').addClass('err').html('请填写验证码');

    }
}


//注册
$('#btn-register').click(function(){
    if(progress>=80){
        var n=$("[name='uphone']").val();
        var p=$("[name='upwd']").val();
        var u=$("[name='user']").val();
        $.get("data/search.php",{xphone:n,xpwd:p,username:u},function(data){
            if(data==="succ"){
                window.open("1.html","_self");
                window.sessionStorage.setItem("loginName",n);
            }
        })
    }
})







