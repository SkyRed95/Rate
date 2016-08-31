$(document).ready(function () {
    $("#filter button").click(function () {
        var ccy = $(this, "#filter button").val();
        var range = $("#reportrange span").text();
        $.ajax({
            type: "GET",
            url: "get_rate.php",
            data: {
                data: (ccy,
                range)
            },
            success: function (data) {
                document.getElementById('txt1').innerHTML = data;
            }
        });
    });
});