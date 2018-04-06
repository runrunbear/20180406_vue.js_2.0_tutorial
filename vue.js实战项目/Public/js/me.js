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




//异步加载页头和页尾
$('#header').load('header.php',function(){
    /*******欢迎回来********/
    $(function(){
        var loginName=sessionStorage.getItem("loginName");
        if(loginName!=null){
            $("#welcome").css("display","none");
            $(".head-img").css("display","block");
        }
    })
});

$('#foot').load('footer.php');


//获取当前的登录用户名
var s=location.search;
var n=s.substring(s.indexOf('=')+1);
// alert('欢迎回来：'+n);

//异步请求当前登录用户的个人中心内容
$.getJSON('data/dream_center.php',{'xname':n},function(arr){
    var html='';
    $.each(arr,function(i,p){
        html+=`
             <div class="person_list">
                <div class="mask"></div>
                <p class="never">您还未发表过梦想</p>
                <a class="btn_start" href="start.html">去发表</a>
            </div>
        `;
    })
    $('.tabBox').html(html);
})



