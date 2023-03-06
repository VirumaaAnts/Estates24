$(document).ready(function () {
    $(".ad").click(function (e) { 
        e.preventDefault();
        if(!$(e.target).hasClass("img_slider") && e.target.id != "right" && e.target.id != "left"){
            window.open($(this).attr("page"),"_blank")
        }
    });
});
$(document).scroll(function () {
    if($(document).scrollTop() > 0){
        let scroll = $(document).scrollTop();
        let logoTop = $(".logo").css("top");
        logoTop -= scroll/100;
        $(".logo").css("top", logoTop);
    }else{
        $(".logo").css("top", "3.4vmin");
    }
});