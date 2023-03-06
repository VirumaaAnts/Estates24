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
    $("#county").change(function (e) { 
        e.preventDefault();
        $.ajax({
            url: "/data/ee.json",
            dataType: "json",
            success: function (response) {
                $("#towns").children().not(':first').remove();
                $("#towns").removeAttr("disabled");
                for(let i of response){
                    if(i.admin_name == $("#county").val()){
                        let opt = document.createElement("option")
                        opt.value = i.city
                        opt.text = i.city
                        $("#towns").append(opt);
                    }
                }
            }
        });
    });
    $("#min_rooms").on("input", function () {
        let val = this.value
        if($("#max_rooms").val() < val){
            $("#max_rooms").attr("min", val);
            $("#max_rooms").val(val);
        }
    });
    $("#max_rooms").focusout(function () {
        let val = this.value
        if(Number(val) < Number($("#min_rooms").val())){
            this.value = $("#min_rooms").val()
        }
    });
    $("#min_area").on("input", function () {
        let val = this.value
        if($("#max_area").val() < val){
            $("#max_area").attr("min", val);
            $("#max_area").val(val);
        }
    });
    $("#max_area").focusout(function () {
        let val = this.value
        if(Number(val) < Number($("#min_area").val())){
            this.value = $("#min_area").val()
        }
    });
    $("#min_price").on("input", function () {
        let val = this.value
        if($("#max_price").val() < val){
            $("#max_price").attr("min", val);
            $("#max_price").val(val);
        }
    });
    $("#max_price").focusout(function () {
        let val = this.value
        if(Number(val) < Number($("#min_price").val())){
            this.value = $("#min_price").val()
        }
    });
});