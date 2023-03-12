$(document).ready(function () {
    $(".ad").click(function (e) {
        e.preventDefault();
        if (!$(e.target).hasClass("img_slider") && e.target.id != "right" && e.target.id != "left") {
            window.open($(this).attr("page"), "_blank")
        }
    });
});
$(document).scroll(function () {
    let logoPos = 33.3;
    if ($(document).scrollTop() > 0) {
        $(".logo").css('top', `${logoPos - $(document).scrollTop()}px`);
        if($(document).scrollTop() >= 51.3) {
            $(".logo").css("top", "-18px");
        }
    } else {
        $(".logo").css("top", "3.4vmin");
    }
});

async function generateCitiesSqlQuery() {
    const counties = [
        {
            id: 1,
            name: "Harju"
        },
        {
            id: 2,
            name: "Hiiu"
        },
        {
            id: 3,
            name: "Ida-Viru"
        },
        {
            id: 4,
            name: "Jõgeva"
        },
        {
            id: 5,
            name: "Lääne-Viru"
        },
        {
            id: 6,
            name: "Põlva"
        },
        {
            id: 7,
            name: "Pärnu"
        },
        {
            id: 8,
            name: "Rapla"
        },
        {
            id: 9,
            name: "Saare"
        },
        {
            id: 10,
            name: "Tartu"
        },
        {
            id: 11,
            name: "Valga"
        },
        {
            id: 12,
            name: "Viljandi"
        },
        {
            id: 13,
            name: "Võru"
        },
        {
            id: 14,
            name: "Järva"
        },
        {
            id: 15,
            name: "Lääne"
        },
    ]
    await fetch('../../data/ee.json')
        .then(response => response.json())
        .then(data => {
            let text = 'INSERT INTO `city` (`id`, `name`, `countyId`) VALUES ';
            for (let i = 0; i < data.length; i++) {
                let county = 0;
                for (let j = 0; j < counties.length; j++) {
                    if(data[i].admin_name == counties[j].name) {
                        county = counties[j].id;
                    }
                }
                text += `(NULL, '${data[i].city}', ${county}),`;
            }
            console.log(text);
        })
};
// generateCitiesSqlQuery();

function register() {
    location.href = "register";
}
