$(document).ready(function () {
    $(".ad").click(function (e) { 
        e.preventDefault();
        if(!$(e.target).hasClass("img_slider")){
            window.open($(this).attr("page"),"_blank")
        }
    });
});