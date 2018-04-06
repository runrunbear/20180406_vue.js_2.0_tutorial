//异步加载页头页尾
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

var theForm = document.getElementById( 'theForm' );
new stepsForm(theForm,{
    onSubmit : function( form ) {
        // hide form
        classie.addClass( theForm.querySelector('.simform-inner'), 'hide' );

        /*
         form.submit()
         or
         AJAX request (maybe show loading indicator while we don't have an answer..)
         */

        // let's just simulate something...
        var messageEl = theForm.querySelector('.final-message');
        messageEl.innerHTML = '发表成功！让梦想的种子从这里开花结果吧~';
        classie.addClass(messageEl,'show');
    }
});
