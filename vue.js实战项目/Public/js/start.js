//�첽����ҳͷ��ҳβ
$('#header').load('header.php',function(){
    /*******��ӭ����********/
    $(function(){
        var loginName=sessionStorage.getItem("loginName");
        if(loginName!=null){
            $("#welcome").css("display","none");
            $(".head-img").css("display","block");
        }
    })
});

$('#foot').load('footer.php');
