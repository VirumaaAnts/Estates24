$(document).ready(function () {
    $(".ad").click(function (e) { 
        e.preventDefault();
        if(!$(e.target).hasClass("img_slider") && e.target.id != "right" && e.target.id != "left"){
            window.open($(this).attr("page"),"_blank")
        }
    });
});