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

    // $('input').attr('disabled', 'disabled');
    // $('select').attr('disabled', 'disabled');
    // $('textarea').attr('disabled', 'disabled');
    // $('#adType').removeAttr('disabled', 'disabled');
    // $('#adType').change(function(e) {
    //     $('li').show();
    //     $('input').removeAttr('disabled', 'disabled');
    //     $('select').removeAttr('disabled', 'disabled');
    //     $('textarea').removeAttr('disabled', 'disabled');
    //     if($(this).val() == 'House') {
    //         $('#adFloor').parent().hide();
    //     }
    //     else if($(this).val() == 'Apartment') {
    //         $('#adRoomCount').parent().hide();
    //         $('#adFloorCount').parent().hide();
    //         $('#adTerritory').parent().hide();
    //         $('#adBasement').parent().hide();
    //     }
    //     else if($(this).val() == 'Garage') {
    //         $('#adRoomCount').parent().hide();
    //         $('#adFloorCount').parent().hide();
    //         $('#adFloor').parent().hide();
    //         $('#adTerritory').parent().hide();
    //     }
    //     else if($(this).val() == 'Land') {
    //         $('#adRoomCount').parent().hide();
    //         $('#adFloorCount').parent().hide();
    //         $('#adFloor').parent().hide();
    //         $('#adBasement').parent().hide();
    //         $('#adYear').parent().hide();
    //         $('#adConditions').parent().hide();
    //         $('#adHeat').parent().hide();
    //     }
    //     else if($(this).val() == 'Part' || $(this).val() == 'Summer house') {
    //         $('#adFloorCount').parent().hide();
    //     }
    // });

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
