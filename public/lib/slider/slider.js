$(document).ready(function () {
    for(i of $(".slider")){
        if ($(i).attr("show") == 1){
            $($(i).find("ul li")).css("width", 100/$(i).attr("show")+"%");
            $($(i).find("ul li")).css("min-width", 100/$(i).attr("show")+"%");
        }else{
            $($(i).find("ul li")).css("min-width", (100/$(i).attr("show"))*0.98+"%");
            $($(i).find("ul li")).css("width", (100/$(i).attr("show"))*0.98+"%");
            $($(i).find("ul li")).css("margin-right", (100/$(i).attr("show"))*0.04+"%");
        }
        $($(i).find("ul")).css("height", $(".slider ul").width()/$(document).width()*100/1.5+"vw");
        let index = 0
        for (j of $($(i).children()[0]).children()){
            $(j).attr("order", index);
            $(j).css("order", index);
            index ++
        }
    }
    let body = $(".slider").children()
    let left = document.createElement("img")
    left.src = "public/lib/slider/images/left.svg"
    left.id = "left"
    let right = document.createElement("img")
    right.src = "public/lib/slider/images/right.svg"
    right.id = "right"
    $(left).insertBefore(body);
    $(right).insertAfter(body);

    $(".slider #left").click(function (e) { 
        e.preventDefault();
        let btn = this
        if($($(btn).parent()).attr("slide") == undefined || $($(btn).parent()).attr("slide") == "on"){
            for (i = 0; i < $($(btn).parent()).attr("scroll"); i++){
                let obj = $($($(btn).next()).find("[order='"+($($(btn).next()).children().length-(i+1))+"']"))
                $(obj).css("order", -(i+1));
                $(obj).attr("order", -(i+1));
                if((i+1) == $($(btn).parent()).attr("scroll")){
                    let margin
                    if($($(btn).parent()).attr("show") > 1){
                        margin = "-"+((100/($($(btn).parent()).attr("show")/$($(btn).parent()).attr("scroll")))*1.02)+"%"
                    }else{
                        margin = "-"+(100/($($(btn).parent()).attr("show")/$($(btn).parent()).attr("scroll")))+"%"
                    }
                    $(obj).css("margin-left", margin);
                }
            }
            $($($(btn).next()).find("[order='-"+($($(btn).parent()).attr("scroll"))+"']")).animate({"margin-left":0},+$($(btn).parent()).attr("time"),()=>{
                for (i = 0; i < $($(btn).parent()).attr("scroll"); i++){
                    for (j of $($(btn).next()).children()){
                        let order =  $(j).attr("order");
                        order ++;
                        $(j).attr("order", order);
                        $(j).css("order", order);
                    }
                }
                $($(btn).parent()).attr("slide","on")
            });
        }
        $($(btn).parent()).attr("slide","off")
    });
    $(".slider #right").click(function (e) {
        e.preventDefault();
        let btn = this
        if($($(btn).parent()).attr("slide") == undefined || $($(btn).parent()).attr("slide") == "on"){
            let margin = "-"+(100/($($(btn).parent()).attr("show")/$($(btn).parent()).attr("scroll")))
            if($($(btn).parent()).attr("show") > 1){
                margin /= 0.98
            }
            margin += "%"
            $($($(btn).prev()).find(`[order='0']`)).animate({"margin-left":margin},+$($(btn).parent()).attr("time"),()=>{
                for (i = 0; i < $($(btn).parent()).attr("scroll"); i++){
                    for (j of $($(btn).prev()).children()){
                        let order =  $(j).attr("order");
                        order --
                        if (order < 0){
                            order = $($(btn).prev()).children().length + order
                        }
                        $($($(btn).prev()).find(`[order='0']`)).css("margin-left",0)
                        $(j).attr("order", order);
                        $(j).css("order", order);
                    }
                }
                $($(btn).parent()).attr("slide","on")
            });
        }
        $($(btn).parent()).attr("slide","off")
    });
});