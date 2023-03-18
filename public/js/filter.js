$(document).ready(function () {
    function changeFormAction() {
        let strUrl = $(location).attr("href");
        let lastUrlPart = strUrl.substr(strUrl.lastIndexOf('/') + 1);
        if (lastUrlPart == 'findByFilters?offers' || lastUrlPart == 'offers') {
            $('#filters').attr('action', 'findByFilters?offers');

            let estates = [];
            let estateType = $('.ad').children().filter('.estate_inf').find('h2');
            estateType.each(function(i, obj) {
                estates.push(obj.textContent.toLowerCase());
            });
            $('.type').each(function(i, type) {
                let val = type.querySelector('input').value;
                let typesCount = type.querySelector('.types_count');
                let count = 0;
                for (let i = 0; i < estates.length; i++) {
                    if(typesCount != null) {
                        if(val == estates[i]) {
                            count++;
                        }
                        typesCount.innerHTML = count;
                    }
                }
            });
        }
    }
    changeFormAction();
    $('#filters').submit(changeFormAction);

    $(".btn_filter").click(function (e) {
        e.preventDefault();
        let btn = this
        if ($($(btn).children()[0]).attr("checked") == undefined) {
            $($(btn).children()[0]).attr("checked", "");
        } else {
            $($(btn).children()[0]).removeAttr("checked");
        }
    });

    $("#county").change(function (e) {
        e.preventDefault();
        $("#towns").children().not(':first').remove();
        $("#towns").removeAttr("disabled");
        fetch('public/data/cities.json')
            .then((response) => response.json())
            .then((json) => {
                for (let city of json) {
                    if (city.countyId == $("#county").val()) {
                        let opt = document.createElement("option");
                        opt.value = city.id;
                        opt.text = city.name;
                        $("#towns").append(opt);
                    }
                }
            });
    });
    $("#min_rooms").on("input", function () {
        let val = this.value
        if ($("#max_rooms").val() < val) {
            $("#max_rooms").attr("min", val);
            $("#max_rooms").val(val);
        }
    });
    $("#max_rooms").focusout(function () {
        let val = this.value
        if (Number(val) < Number($("#min_rooms").val())) {
            this.value = $("#min_rooms").val()
        }
    });
    $("#min_area").on("input", function () {
        let val = this.value
        if ($("#max_area").val() < val) {
            $("#max_area").attr("min", val);
            $("#max_area").val(val);
        }
    });
    $("#max_area").focusout(function () {
        let val = this.value
        if (Number(val) < Number($("#min_area").val())) {
            this.value = $("#min_area").val()
        }
    });
    $("#min_price").on("input", function () {
        let val = this.value
        if ($("#max_price").val() < val) {
            $("#max_price").attr("min", val);
            $("#max_price").val(val);
        }
    });
    $("#max_price").focusout(function () {
        let val = this.value
        if (Number(val) < Number($("#min_price").val())) {
            this.value = $("#min_price").val()
        }
    });
});