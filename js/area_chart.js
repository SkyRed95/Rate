google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var arr_to_diagram = new Array;
    var ccy = $('.ccy_td').html();
    var base_ccy = $('.base_ccy_td').html();
    $('.tr').each(function (i) {
        var $tds = $(this).find('td');
        arr_to_diagram[i] = [String([$tds.eq(4).html()]),
            Number([$tds.eq(2).text()]),
            Number([$tds.eq(3).text()])];
    })

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