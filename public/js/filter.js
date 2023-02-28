$(document).ready(function () {
    $(".btn_filter").click(function (e) { 
        e.preventDefault();
        let btn = this
        if($($(btn).children()[0]).attr("checked") == undefined){
            $($(btn).children()[0]).attr("checked", "");
        }else{
            $($(btn).children()[0]).removeAttr("checked");
        }
    });
});