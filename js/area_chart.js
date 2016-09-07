google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var ccy = $('.ccy_td').html();
    var base_ccy = $('.base_ccy_td').html();

    var data = google.visualization.arrayToDataTable([
        ['Дата', ccy, base_ccy],
        ['2013', 1000, 400],
        ['2014', 1170, 460],
        ['2015', 660, 1120],
        ['2016', 1030, 540]
    ]);

    var options = {
        vAxis: {minValue: 0}
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}