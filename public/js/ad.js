$(document).ready(function() {
    let fav = false;

    $('#favCheckbox').change(function() {
        if($(this).is(':checked')) {
            fav = true;
            $('#favStar').addClass('fav-active');
        } else { 
            fav = false;
            $('#favStar').removeClass('fav-active');
        }
        document.querySelector('#favForm').submit();
    });
    $('#favForm').submit(function(e) {
        e.preventDefault();
    });
});
window.addEventListener('locationchange', function () {
    let favBool = $('#favBool').val();
    console.log(favBool);
    if(favBool != 'none') {
        $('#favStar').addClass('fav-active');
    } else {
        $('#favStar').removeClass('fav-active');
    }
});