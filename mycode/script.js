setTimeout(function () {
    $('#map').timezonePicker({
        hoverText: function (e, data) {
            return (data.timezone + " (" + data.zonename + ")");
        },

        defaultValue: { value: "IN", attribute: "country" },


        selectClass: "select-class",
        filterBoxClass: "filter-class",

        quickLink: [{
            "PST": "PST",
            "MST": "MST",
            "CST": "CST",
            "EST": "EST",
            "GMT": "GMT",
            "LONDON": "Europe/London",
            "IST": "IST"
        }]

    });
}, 1000)


