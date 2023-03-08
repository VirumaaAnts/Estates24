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
});