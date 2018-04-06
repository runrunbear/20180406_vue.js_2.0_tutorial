//验证是否登录
var loginName=sessionStorage.getItem("loginName");
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


/***3 产品列表页加载完成，异步请求第1页记录 ****/
$(function(){
    loadProduct(1);
})
//为分页条中超链接代理事件监听
$('.pager').on('click','a', function(e){
    e.preventDefault();
    var pno = $(this).attr('href'); //目标页号
    loadProduct(pno);

})
///异步分页加载商品列表
function loadProduct(pno){
    //$.get  $.getJSON  $.ajax
    $.getJSON('data/dream_select.php',{'pno':pno},function(pager){
        console.log('开始处理响应数据-产品列表');
        console.log(pager);
        //1 构建产品列表的内容
        var html = '';
        $.each(pager.data, function(i,p){
            html += `
            <div id="amain" class="col-md-4 col-sm-12 project-zero" href="">
                <a class="link-muted" href="detail.html">
                <dl>
                <dt><img src="${p.xpic}"/></dt>
                <dd>
                <h5>${p.xtitle}</h5>
                <div class="text-muted">
                “ 发起者：${p.uname}”
            <span class="wh-star"
            身份已提交
            </span>
            </div>
            <p class="list-inline">${p.xdetail}</p>
                <ul class="allSup">
                <li>
                <div class="support heart" id="like" rel="like">
                <div class="likeCount" id="likeCount">14</div>
                </div>
                </li>
                <li>
                <div class="tapic">话题数：47</div>
            </li>
            </ul>
            <footer class="project-stats">
                <div class="project-sup">
                <div class="project-cut like"></div>
                </div>
                <ul class="monTic">
                <li>
                <b>30%</b> <br/>
                <span>支持率</span>
                </li>

                </ul>
                </footer>
                </dd>
                </dl>
                </a>
                </div>
      `;
        });
        $('#plist .row').html(html);
        //2 构建分页条中的内容
        var pagerHtml='';
        if(pager.pno-2>0){
            pagerHtml+=` <li><a href="${pager.pno-2}">${pager.pno-2}</a></li>`
        }
        if(pager.pno-1>0){
            pagerHtml+=` <li><a href="${pager.pno-1}">${pager.pno-1}</a></li>`
        }
        pagerHtml+=`<li><a class='check-on' href='#'>${pager.pno}</a></li>`;
        if(pager.pno+1<=pager.pageCount){
            pagerHtml+=` <li><a href="${pager.pno+1}">${pager.pno+1}</a></li>`
        }
        if(pager.pno+2<=pager.pageCount){
            pagerHtml+=`<li><a href='${pager.pno+2}'>${pager.pno+2}</a></li>`
        }
        $('.pager').html(pagerHtml);
    })
}


//红心点赞

$(document).ready(function(){
    $('body').on("click",'.heart',function(e){
        e.preventDefault();
        var A=$(".heart").attr("id");
        var B=A.split("like");
        var R=$(this).find('#likeCount')[0];
        var C=parseInt($(R).html());

        $(this).css("background-position","");
        var D=$(this).attr("rel");
        var E=$(this).closest('#amain').find(".likeCount")[0];
        console.log(R)
        if(D === 'like'){
            $(E).html(C+1); ;
            $(this).addClass("heartAnimation").attr("rel","unlike");
            console.log(C+1);
        }else{
            $(E).html(C-1);
            $(this).removeClass("heartAnimation").attr("rel","like");
            $(this).css("background-position","left");
        }
    });
});

