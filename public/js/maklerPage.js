$(document).ready(function () {
    // $(".fields").load("/view/fragments/makler_form.php", function (response, status, request) {
    //     this; // dom element
    //     $(this).html(response);
    // });
    $(".btns div").click(function (e) { 
        e.preventDefault();
        let btn = $(this).find(".radio")
        $(".radio").removeAttr("checked");
        $(".btns div").removeClass("selected");
        $(this).addClass("selected");
        $(btn).attr("checked", "");
    });
});