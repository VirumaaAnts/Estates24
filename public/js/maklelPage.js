$(document).ready(function () {
    $(".fields").load("/view/fragments/makler_form.php", function (response, status, request) {
        this; // dom element
        $(this).html(response);
    });
});