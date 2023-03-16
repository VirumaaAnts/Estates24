$(document).ready(function () {
    $('#favCheckbox').change(function() {
        if($('#favStar').hasClass('fav-active')) {
            $('#favBool').val('no');
        } else {
            $('#favBool').val('yes');
        }

        document.querySelector('#favForm').submit();
    });
    
    favouriteListener();
    function favouriteListener() {
        if ($('#favBool').val() != 'no') {
            $('#favStar').addClass('fav-active');
        } else {
            $('#favStar').removeClass('fav-active');
        }
    }
});
