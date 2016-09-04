var privatbankAPI = "https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11";
var arr_for_server = new Array();
$.getJSON(privatbankAPI, function (data) {
    $.each(data, function (i, record) {
        arr_for_server[i] = [[record.ccy], [record.base_ccy], [record.buy], [record.sale]]
    });
    $.ajax({
        type: "POST",
        url: "request.php",
        data: {
            data: arr_for_server
        },
        success: function (data) {
            if (data) {
                document.getElementById('rate').innerHTML = data;
            }
            else {
                alert('Сегодня Вы уже получали данные!');
            }
        }
    });
})