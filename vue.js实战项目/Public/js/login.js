//倒计时
$(function(){
    show_time();
});

function show_time(){
    var time_start = new Date().getTime(); //设定当前时间
    var time_end =  new Date("2016/12/24 00:00:00").getTime(); //设定目标时间
    // 计算时间差
    var time_distance = time_end - time_start;
    // 天
    var int_day = Math.floor(time_distance/86400000)
    time_distance -= int_day * 86400000;
    // 时
    var int_hour = Math.floor(time_distance/3600000)
    time_distance -= int_hour * 3600000;
    // 分
    var int_minute = Math.floor(time_distance/60000)
    time_distance -= int_minute * 60000;
    // 秒
    var int_second = Math.floor(time_distance/1000)
    // 时分秒为单数时、前面加零
    if(int_day < 10){
        int_day = "0" + int_day;
    }
    if(int_hour < 10){
        int_hour = "0" + int_hour;
    }
    if(int_minute < 10){
        int_minute = "0" + int_minute;
    }
    if(int_second < 10){
        int_second = "0" + int_second;
    }
    // 显示时间
    $("#time_d").val(int_day);
    $("#time_h").val(int_hour);
    $("#time_m").val(int_minute);
    $("#time_s").val(int_second);
    // 设置定时器
    setTimeout("show_time()",1000);
}


//页面登录
$('#start_login').click(function(){fun();});
function fun(){
    //把用户的输入序列化为k=v字符串
    var data=$('.user-login').serialize();
    var n=$("#uname").val();
    var p=$("#upwd").val();
    console.log(p);
    $.post("data/login.php",{xphone:n,xpwd:p},function(data){
        console.log(data);
        if(data.code==1000){console.log(121213);//验证成功 模态框淡出
            $(".modal-content").css("display","none");console.log(n);
            $(".modal-backdrop").css("display","none");
            $(".head-img").css("display","block");
            $("#welcome").css("display","none");
            loginName=n;
            window.sessionStorage.setItem('loginName',loginName);
        }else if(data.code==1002){
            $(".modal-content").css("display","block");
            $(".modal-backdrop").css("display","block");
            $(".name-err").css("display","block");
        }
    });

}
