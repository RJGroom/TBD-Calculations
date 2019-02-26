google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);

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
    backgroundColor: "white",
    pieSliceBorderColor: "white"
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
      backgroundColor: "white"
    };

    var chart = new google.visualization.LineChart(document.getElementById('sampleLineChart'));
    chart.draw(data, options);
  }

  function drawChart3() {
    let data = google.visualization.arrayToDataTable([
      ["Category", "Percentage Allocated", { role: "style" } ],
      ["Housing", 5, "blue"],
      ["Loans", 5, "blue"],
      ["Health Insurance", 5, "blue"],
      ["Transportation", 10, "blue"],
      ["Cell Phone", 2, "blue"],
      ["Groceries", 3, "blue"],
      ["Clothing", 10, "blue"],
      ["Gas", 5, "red"],
      ["Electric", 5, "red"],
      ["Water", 10, "red"],
      ["Cable/Internet", 2, "red"],
      ["Monthly Subscriptions", 3, "orange"],
      ["Miscellaneous", 5, "orange"],
      ["Primary Savings", 10, "green"],
      ["Emergency Funds", 5, "green"],
      ["Vacation Funds", 5, "green"],
      ["ExcessFunds", 10, "purple"]

    ]);

    let view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    let options = {
      height: '460',
      backgroundColor: "#F7F5E6",
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
      chartArea: {top: '20', width: '90%', height: '70%'},
      hAxis: {textStyle:{fontSize: '15'},
        slantedText: 'true',
        slantedTextAngle: '90',
        },
    };
    let sampleChartThree = new google.visualization.ColumnChart(document.getElementById("sampleChartThree"));
    sampleChartThree.draw(view, options);
}


  window.onresize = function(){
      drawChart3();
      drawChart2();
      drawChart();
  }
