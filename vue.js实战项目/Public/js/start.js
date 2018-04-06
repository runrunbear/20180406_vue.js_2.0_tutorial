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
