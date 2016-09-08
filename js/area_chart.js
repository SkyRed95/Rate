google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var arr_to_diagram = new Array;
    var ccy = $('.ccy_td').html();
    var base_ccy = $('.base_ccy_td').html();
    $('.tr').each(function (i) {
        var $tds = $(this).find('td');
        arr_to_diagram[i] = [[$tds.eq(4).text()],
            [$tds.eq(2).text()],
            [$tds.eq(3).text()]];
    })

    // var data = new google.visualization.DataTable();
    // data.addColumn('string', ccy);
    // data.addColumn('string', base_ccy);
    // data.addColumn('string', 'Покупка');
    // data.addColumn('string', 'Продажа');
    // data.addColumn('string', 'Дата');
    // data.addRows(arr_to_diagram);
// alert(arr_to_diagram[1]);
//     var arr_to_diagram = [["2016-09-02", 6, 1],
//         ["2016-09-04", 12, 2],
//         ["2016-09-05", 18, 14]];

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', ccy);
    data.addColumn('number', base_ccy);
    data.addRows(arr_to_diagram);

    var options = {
        vAxis: {minValue: 0}
    };
    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}