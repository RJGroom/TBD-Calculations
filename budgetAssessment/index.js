var income = 0;
var monthlyIncome = 0;
var primaryExpenses = 0;
var primaryExpensesRate = 0;
var utilities = 0;
var utilitiesRate = 0;
var secondaryExpenses = 0;
var secondaryExpensesRate = 0;
var savings = 0;
var savingsRate = 0;
var excessFunds = 0;
var excessFundsRate = 0;

//Open Menu Function
function toggleNav() {
    let nav = document.getElementById('navBar');
    let topBar = document.getElementById('topBar');
    let middleBar = document.getElementById('middleBar');
    let bottomBar = document.getElementById('bottomBar');

    if (nav.style.width == "23%") {
        nav.style.width = "70px";
        topBar.style.width = "";

        bottomBar.style.transform = "rotate(0deg)";
        topBar.style.transform = "rotate(0deg)";
        middleBar.style.opacity = "1";

        setTimeout (function(){
            bottomBar.style.top = "20px";
            topBar.style.top = "0px";
        }, 500)

    }
    else {
        nav.style.width = "23%";
        topBar.style.width= "100%";

        topBar.style.top = "10px";
        bottomBar.style.top = "10px";

        setTimeout (function(){
            middleBar.style.opacity = "0";
            topBar.style.transform = "rotate(45deg)";
            bottomBar.style.transform = "rotate(-45deg)";
        }, 500)
    }
}

//Total Income
function totalIncome() {
    document.getElementById("total-income").innerHTML =
    parseInt(document.getElementById("primary-income").value) +
    parseInt(document.getElementById("secondary-income").value);
}

//Total Primary Expenditures
function totalPrimaryExpenditures() {
    document.getElementById("total-primary-expenditures").innerHTML =
    parseInt(document.getElementById("housing-payments").value) +
    parseInt(document.getElementById("loans").value) +
    parseInt(document.getElementById("health-insurance").value) +
    parseInt(document.getElementById("transportation").value) +
    parseInt(document.getElementById("cell-phone-bill").value) +
    parseInt(document.getElementById("groceries").value) +
    parseInt(document.getElementById("clothing").value);
}

//Total Utilities
function totalUtilities() {
    document.getElementById("total-utilities").innerHTML =
    parseInt(document.getElementById("gas").value) +
    parseInt(document.getElementById("electric").value) +
    parseInt(document.getElementById("water").value) +
    parseInt(document.getElementById("cable-internet").value);
}

//Total Secondary Expenses
function totalSecondaryExpenses() {
    document.getElementById("total-secondary-expenses").innerHTML =
    parseInt(document.getElementById("monthly-subscriptions").value) +
    parseInt(document.getElementById("miscellaneous").value);
}

//Total Savings
function totalSavings() {
    document.getElementById("total-savings").innerHTML =
    parseInt(document.getElementById("primary-savings").value) +
    parseInt(document.getElementById("emergency-funds").value) +
    parseInt(document.getElementById("vacation-funds").value);
}


function printReport() {

    //Income
    income =
    parseInt(document.getElementById("primary-income").value) + parseInt(document.getElementById("secondary-income").value);
    document.getElementById("income-report").innerHTML = income;

    monthlyIncome = (income / 12).toFixed();
    document.getElementById("income-report-monthly").innerHTML = monthlyIncome;

    //Primary expenses
    primaryExpenses =
    parseInt(document.getElementById("housing-payments").value) +
    parseInt(document.getElementById("loans").value) +
    parseInt(document.getElementById("health-insurance").value) +
    parseInt(document.getElementById("transportation").value) +
    parseInt(document.getElementById("cell-phone-bill").value) +
    parseInt(document.getElementById("groceries").value) +
    parseInt(document.getElementById("clothing").value);
    document.getElementById("primary-expenses-report").innerHTML = primaryExpenses;

    //Primary Expenses Rate
    primaryExpensesRate = ((primaryExpenses / monthlyIncome) * 100).toFixed(1);
    document.getElementById("primary-expenses-rate").innerHTML = primaryExpensesRate;

    //Utilities
    utilities = 
    parseInt(document.getElementById("gas").value) +
    parseInt(document.getElementById("electric").value) +
    parseInt(document.getElementById("water").value) +
    parseInt(document.getElementById("cable-internet").value);
    document.getElementById("utilities-report").innerHTML = utilities;

    //Utilities Rate
    utilitiesRate = ((utilities / monthlyIncome) * 100).toFixed(1);
    document.getElementById("utilities-rate").innerHTML = utilitiesRate;

    //Secondary Expenses
    secondaryExpenses =
    parseInt(document.getElementById("monthly-subscriptions").value) +
    parseInt(document.getElementById("miscellaneous").value);
    document.getElementById("secondary-expenses-report").innerHTML = secondaryExpenses;

    //Secondary Expenses Rate
    secondaryExpensesRate = ((secondaryExpenses / monthlyIncome) * 100).toFixed(1);
    document.getElementById("secondary-expenses-rate").innerHTML = secondaryExpensesRate;

    //Savings
    savings =
    parseInt(document.getElementById("primary-savings").value) +
    parseInt(document.getElementById("emergency-funds").value) +
    parseInt(document.getElementById("vacation-funds").value);
    document.getElementById("savings-report").innerHTML = savings;

    savingsRate = ((savings / monthlyIncome) * 100).toFixed(1);
    document.getElementById("savings-rate").innerHTML = savingsRate;

    if (parseInt(document.getElementById("primary-savings").value) /
        monthlyIncome < 0.2) {
            document.getElementById("savings-analysis").innerHTML = "inefficient";
    }
    else {
        document.getElementById("savings-analysis").innerHTML = "efficient";
    }

    //Excess Funds
    excessFunds = monthlyIncome - primaryExpenses - utilities - secondaryExpenses - savings;
    document.getElementById("excess-funds-report").innerHTML = excessFunds;

    excessFundsRate = ((excessFunds / monthlyIncome) * 100).toFixed(1);
    document.getElementById("excess-funds-rate").innerHTML = excessFundsRate;

}

google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawUserChart);

function drawUserChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Category');
data.addColumn('number', 'Percentage');
data.addRows([
    ['Primary Expenses', primaryExpenses],
    ['Utilities', utilities],
    ['Secondary Expenses', secondaryExpenses],
    ['Savings', savings],
    ['Excess Funds', excessFunds]
]);

var options = {
    title: "Monthly Spending by Category",
    backgroundColor: "#F7F5E6",
    pieSliceBorderColor: "#F7F5E6"
};

var userChart = new google.visualization.PieChart(document.getElementById('userChart'));
userChart.draw(data, options);
}

 