/**
 * Created by bjwsl-001 on 2016/12/18.
 */
//�첽����ҳͷ��ҳβ
$(function(){
    $('#header').load('header.php');
    $('#foot').load('footer.php');
});


//����ʱ
$(function(){
    show_time();
});

function show_time(){
    var time_start = new Date().getTime(); //�趨��ǰʱ��
    var time_end =  new Date("2016/12/31 00:00:00").getTime(); //�趨Ŀ��ʱ��
    // ����ʱ���
    var time_distance = time_end - time_start;
    // ��
    var int_day = Math.floor(time_distance/86400000)
    time_distance -= int_day * 86400000;
    // ʱ
    var int_hour = Math.floor(time_distance/3600000)
    time_distance -= int_hour * 3600000;
    // ��
    var int_minute = Math.floor(time_distance/60000)
    time_distance -= int_minute * 60000;
    // ��
    var int_second = Math.floor(time_distance/1000)
    // ʱ����Ϊ����ʱ��ǰ�����
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
    // ��ʾʱ��
    $("#time_d").val(int_day);
    $("#time_h").val(int_hour);
    $("#time_m").val(int_minute);
    $("#time_s").val(int_second);
    // ���ö�ʱ��
    setTimeout("show_time()",1000);
}


//ͷ����ʽ
$(".head-img").on("mouseover",function(){
    $(".head-img img").css("border-color","#FFA400");
    $(".head-img i").css("background","url('img/siteHTopBg.png') no-repeat 0 0");
});
$(".head-img").on("mouseout",function(){
    $(".head-img img").css("border-color","transparent");
    $(".head-img i").css("background","url('img/siteHTopBg.png') no-repeat -7px 0");
});


/*******��ӭ����********/
$(function(){
    var loginName=sessionStorage.getItem("loginName");
    if(loginName!=null){
        $("#welcome").css("display","none");
        $(".head-img").css("display","block");
    }
})

