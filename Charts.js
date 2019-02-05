google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart2);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Category');
data.addColumn('number', 'Percentage');
data.addRows([
    ['Monthly Housing', 30],
    ['Monthly Utilities', 20],
    ['Monthly Groceries', 12],
    ['Monthly Savings', 20],
    ['Monthly Subscriptions', 8],
    ['Excess Funds', 10]
]);

var options = {
    title: "Monthly Spending by Category",
    backgroundColor: "#F7F5E6",
    pieSliceBorderColor: "#F7F5E6"
};

var sampleChart = new google.visualization.PieChart(document.getElementById('sampleChart'));
sampleChart.draw(data, options);
}

function drawChart2() {
    var data = google.visualization.arrayToDataTable([
      ['Month', 'Target Spending Goal', 'Your Spending'],
      ['Jan',  30,      20],
      ['Feb',  60,      70],
      ['Mar',  90,       100],
      ['Apr',  120,      110]
    ]);

    var options = {
      title: 'Target Spending Goal vs. Your Spending',
      curveType: 'function',
      legend: { position: 'bottom' },
      backgroundColor: "#F7F5E6"
    };

    var chart = new google.visualization.LineChart(document.getElementById('sampleLineChart'));
    chart.draw(data, options);
  }

  window.onresize = function(){
      drawChart2();
      drawChart();
  }