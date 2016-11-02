function drawChart() {
    var arr_to_diagram = new Array;
    var buy = $('.buy_th').html();
    var sale = $('.sale_th').html();
    $('.tr').each(function (i) {
        var $tds = $(this).find('td');
        arr_to_diagram[i] = [String([$tds.eq(4).html()]),
            Number([$tds.eq(2).text()]),
            Number([$tds.eq(3).text()])];
    })

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', buy);
    data.addColumn('number', sale);
    data.addRows(arr_to_diagram);

    var options = {
    };
    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}