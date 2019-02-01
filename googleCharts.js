google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);

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

var options = {title: "Monthly Spending by Category"};

var sampleChart = new google.visualization.PieChart(document.getElementById('sampleChart'));
sampleChart.draw(data, options);
}