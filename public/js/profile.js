$(document).ready(function () {
    $(".profile_img").css("background-image", "url(" + $(".profile_img img").attr("src") + ")");
    $(".profile_img img").remove()
    $(".profile_img").css("height", $(".profile_img").width() / $(document).width() * 100 + "vw");
});