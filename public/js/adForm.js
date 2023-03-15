$(document).ready(function () {
    $("#files").change(function (e) { 
        e.preventDefault();
        $(".slider ul").empty();
        let count = 0
        for(let i of this.files){
            let fileReader = new FileReader();
            fileReader.readAsDataURL(i);
            fileReader.onload = function (){
                let li = document.createElement('li')
                $(li).attr("order", count);
                $(li).css("order", count);
                $(li).html("<div class='img_slider' style='background-image: url();'></div>");
                $($(li).find(".img_slider")).css("background-image", "url("+fileReader.result+")");
                $(li).css("width", 100+"%");
                $(li).css("min-width", 100+"%");
                $(".slider ul").append(li);
                count ++
            }
        }
    });

    $('input').attr('disabled', 'disabled');
    $('select').attr('disabled', 'disabled');
    $('textarea').attr('disabled', 'disabled');
    $('#send').attr('disabled', 'disabled');
    $('#adType').removeAttr('disabled', 'disabled');

    $('#adRoomCount').removeAttr('required', 'required');
    $('#adFloorCount').removeAttr('required', 'required');
    $('#adFloor').removeAttr('required', 'required');
    $('#adYear').removeAttr('required', 'required');
    $('#adConditions').removeAttr('required', 'required');
    $('#adHeat').removeAttr('required', 'required');
    $('#adTerritory').removeAttr('required', 'required');

    $('#adType').change(function(e) {
        $('li').show();
        $('#send').removeAttr('disabled', 'disabled');
        $('input').removeAttr('disabled', 'disabled');
        $('select').removeAttr('disabled', 'disabled');
        $('textarea').removeAttr('disabled', 'disabled');
        $('#adBasement').prop('checked', false);
        let type = $('#adType').val();
        $('input').val('');
        $('select').val('');
        $('#adType').val(type);
        $('textarea').val('');

        if($(this).val() == 'House') {
            $('#adFloor').parent().hide();
            $('#adFloor').removeAttr('required', 'required');

            $('#adRoomCount').attr('required', 'required');
            $('#adFloorCount').attr('required', 'required');
            $('#adYear').attr('required', 'required');
            $('#adConditions').attr('required', 'required');
            $('#adHeat').attr('required', 'required');
            $('#adTerritory').attr('required', 'required');
        }
        else if($(this).val() == 'Apartment') {
            $('#adFloorCount').parent().hide();       
            $('#adTerritory').parent().hide();
            $('#adBasement').parent().hide();

            $('#adFloorCount').removeAttr('required', 'required');
            $('#adTerritory').removeAttr('required', 'required');

            $('#adFloor').attr('required', 'required');
            $('#adYear').attr('required', 'required');
            $('#adConditions').attr('required', 'required');
            $('#adHeat').attr('required', 'required');
        }
        else if($(this).val() == 'Garage') {
            $('#adRoomCount').parent().hide();
            $('#adFloorCount').parent().hide();
            $('#adFloor').parent().hide();
            $('#adTerritory').parent().hide();

            $('#adRoomCount').removeAttr('required', 'required');
            $('#adFloorCount').removeAttr('required', 'required');
            $('#adFloor').removeAttr('required', 'required');
            $('#adTerritory').removeAttr('required', 'required');

            $('#adYear').attr('required', 'required');
            $('#adConditions').attr('required', 'required');
            $('#adHeat').attr('required', 'required');
        }
        else if($(this).val() == 'Land') {
            $('#adRoomCount').parent().hide();
            $('#adFloorCount').parent().hide();
            $('#adFloor').parent().hide();
            $('#adBasement').parent().hide();
            $('#adYear').parent().hide();
            $('#adConditions').parent().hide();
            $('#adHeat').parent().hide();

            $('#adRoomCount').removeAttr('required', 'required');
            $('#adFloorCount').removeAttr('required', 'required');
            $('#adFloor').removeAttr('required', 'required');
            $('#adBasement').removeAttr('required', 'required');
            $('#adYear').removeAttr('required', 'required');
            $('#adConditions').removeAttr('required', 'required');
            $('#adHeat').removeAttr('required', 'required');

            $('#adTerritory').attr('required', 'required');
        }
        else if($(this).val() == 'Part' || $(this).val() == 'Summer house') {
            $('#adFloorCount').parent().hide();
            $('#adFloorCount').removeAttr('required');

            $('#adRoomCount').attr('required', 'required');
            $('#adFloor').attr('required', 'required');
            $('#adTerritory').attr('required', 'required');
            $('#adYear').attr('required', 'required');
            $('#adConditions').attr('required', 'required');
            $('#adHeat').attr('required', 'required');
        }
    });

    // $("#adCounty").change(function (e) { 
    //     e.preventDefault();
    //     $("#adTowns").children().not(':first').remove();
    //     $("#adTowns").removeAttr("disabled");
    //     fetch('public/data/cities.json')
    //     .then((response) => response.json())
    //     .then((json) => {
    //         for(let city of json){
    //             if(city.countyId == $("#adCounty").val()){
    //                 let opt = document.createElement("option");
    //                 opt.value = city.id;
    //                 opt.text = city.name;
    //                 $("#adTowns").append(opt);
    //             }
    //         }
    //     });
    // });
});
