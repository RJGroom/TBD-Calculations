//Income Variables
let monthlyIncome = 0;
let primaryIncome = 0;
let secondaryIncome = 0;

//Primary Expenses Variables
let primaryExpenses = 0;
let primaryExpensesRate = 0;
let housingPayments = 0;
let loans = 0;
let healthInsurance = 0;
let transportation = 0;
let cellPhoneBill = 0;
let groceries = 0;
let clothing = 0;

//Primary Expenses Rates Variables
let housingPaymentsRate = 0;
let loansRate = 0;
let healthInsuranceRate = 0;
let transportationRate = 0;
let cellPhoneBillRate = 0;
let groceriesRate = 0;
let clothingRate = 0;

//Utilities Variables
let utilities = 0;
let utilitiesRate = 0;
let gas = 0;
let electric = 0;
let water = 0;
let cableInternet = 0;

//Utilities Rates Variables
let gasRate = 0;
let electricRate = 0;
let waterRate = 0;
let cableInternetRate = 0;

//Secondary Expenses Variables
let secondaryExpenses = 0;
let secondaryExpensesRate = 0;
let monthlySubscriptions = 0;
let miscellaneous = 0;

//Secondary Expenses Rates Variables
let monthlySubscriptionsRate = 0;
let miscellaneousRate = 0;

//Savings Variables
let savings = 0;
let savingsRate = 0;
let primarySavings = 0;
let emergencyFunds = 0;
let vacationFunds = 0;

//Savings Rates Variables
let primarySavingsRate = 0;
let emergencyFundsRate = 0;
let vacationFundsRate = 0;

//Excess Funds Variables
let excessFunds = 0;
let excessFundsRate = 0;

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
    
    //Setting variable values
    primaryIncome = parseInt(document.getElementById("primary-income").value);
    secondaryIncome = parseInt(document.getElementById("secondary-income").value);
    monthlyIncome = primaryIncome + secondaryIncome;

    document.getElementById("total-income").innerHTML = monthlyIncome;
}

//Total Primary Expenditures
function totalPrimaryExpenditures() {

    //Setting variable values
    housingPayments = parseInt(document.getElementById("housing-payments").value);
    housingPaymentsRate = ((housingPayments/monthlyIncome) * 100).toFixed(2);
    loans = parseInt(document.getElementById("loans").value);
    loansRate = ((loans/monthlyIncome) * 100).toFixed(2);
    healthInsurance = parseInt(document.getElementById("health-insurance").value);
    healthInsuranceRate = ((healthInsurance/monthlyIncome) * 100).toFixed(2);
    transportation = parseInt(document.getElementById("transportation").value);
    transportationRate = ((transportation/monthlyIncome) * 100).toFixed(2);
    cellPhoneBill = parseInt(document.getElementById("cell-phone-bill").value);
    cellPhoneBillRate = ((cellPhoneBill/monthlyIncome) * 100).toFixed(2);
    groceries = parseInt(document.getElementById("groceries").value);
    groceriesRate = ((groceries/monthlyIncome) * 100).toFixed(2);
    clothing = parseInt(document.getElementById("clothing").value);
    clothingRate = ((clothing/monthlyIncome) * 100).toFixed(2);
    primaryExpenses = housingPayments + loans + healthInsurance + 
        transportation + cellPhoneBill + groceries + clothing;

    document.getElementById("total-primary-expenditures").innerHTML = primaryExpenses;
}

//Total Utilities
function totalUtilities() {

    //Setting variable values
    gas = parseInt(document.getElementById("gas").value);
    gasRate = ((gas/monthlyIncome) * 100).toFixed(2);
    electric = parseInt(document.getElementById("electric").value);
    electricRate = ((electric/monthlyIncome) * 100).toFixed(2);
    water = parseInt(document.getElementById("water").value);
    waterRate = ((water/monthlyIncome) * 100).toFixed(2);
    cableInternet = parseInt(document.getElementById("cable-internet").value);
    cableInternetRate = ((cableInternet/monthlyIncome) * 100).toFixed(2);
    utilities = gas + electric + water + cableInternet;

    document.getElementById("total-utilities").innerHTML = utilities;
}

//Total Secondary Expenses
function totalSecondaryExpenses() {

    //Setting variable values
    monthlySubscriptions = parseInt(document.getElementById("monthly-subscriptions").value);
    monthlySubscriptionsRate = ((monthlySubscriptions/monthlyIncome) * 100).toFixed(2);
    miscellaneous = parseInt(document.getElementById("miscellaneous").value);
    miscellaneousRate = ((miscellaneous/monthlyIncome) * 100).toFixed(2);
    secondaryExpenses = monthlySubscriptions + miscellaneous;

    document.getElementById("total-secondary-expenses").innerHTML = secondaryExpenses;
}

//Total Savings
function totalSavings() {

    //Setting variable values
    primarySavings =  parseInt(document.getElementById("primary-savings").value);
    primarySavingsRate = ((primarySavings/monthlyIncome) * 100).toFixed(2);
    emergencyFunds =  parseInt(document.getElementById("emergency-funds").value);
    emergencyFundsRate = ((emergencyFunds/monthlyIncome) * 100).toFixed(2);
    vacationFunds =  parseInt(document.getElementById("vacation-funds").value);
    vacationFundsRate = ((vacationFunds/monthlyIncome) * 100).toFixed(2);
    savings = primarySavings + emergencyFunds + vacationFunds;

    document.getElementById("total-savings").innerHTML = savings;
}


function printReport() {

    //Income
    document.getElementById("income-report").innerHTML = monthlyIncome;

    //Primary expenses
    document.getElementById("primary-expenses-report").innerHTML = primaryExpenses;

    //Primary Expenses Rate
    primaryExpensesRate = ((primaryExpenses / monthlyIncome) * 100).toFixed(1);
    document.getElementById("primary-expenses-rate").innerHTML = primaryExpensesRate;

    //Utilities
    document.getElementById("utilities-report").innerHTML = utilities;

    //Utilities Rate
    utilitiesRate = ((utilities / monthlyIncome) * 100).toFixed(1);
    document.getElementById("utilities-rate").innerHTML = utilitiesRate;

    //Secondary Expenses
    document.getElementById("secondary-expenses-report").innerHTML = secondaryExpenses;

    //Secondary Expenses Rate
    secondaryExpensesRate = ((secondaryExpenses / monthlyIncome) * 100).toFixed(1);
    document.getElementById("secondary-expenses-rate").innerHTML = secondaryExpensesRate;

    //Savings
    document.getElementById("savings-report").innerHTML = savings;

    //Savings Rate
    savingsRate = ((savings / monthlyIncome) * 100).toFixed(1);
    document.getElementById("savings-rate").innerHTML = savingsRate;

    //Determine efficiency of primary savings rate
    if (primarySavingsRate < 20) {
            document.getElementById("savings-analysis").innerHTML = "inefficient";
    }
    else {
        document.getElementById("savings-analysis").innerHTML = "efficient";
    }

    //Excess Funds
    excessFunds = monthlyIncome - primaryExpenses - utilities - secondaryExpenses - savings;
    document.getElementById("excess-funds-report").innerHTML = excessFunds;

    //Excess Funds Rate
    excessFundsRate = ((excessFunds / monthlyIncome) * 100).toFixed(1);
    document.getElementById("excess-funds-rate").innerHTML = excessFundsRate;
}

google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawUserChart);

function drawUserChart() {

let data = new google.visualization.DataTable();
data.addColumn('string', 'Category');
data.addColumn('number', 'Percentage');
data.addRows([
    ['Primary Expenses', primaryExpenses],
    ['Utilities', utilities],
    ['Secondary Expenses', secondaryExpenses],
    ['Savings', savings],
    ['Excess Funds', excessFunds]
]);

let options = {
    title: "Monthly Spending by Category",
    backgroundColor: "#F7F5E6",
    pieSliceBorderColor: "#F7F5E6"
};

let userChart = new google.visualization.PieChart(document.getElementById('userChart'));
userChart.draw(data, options);
}

function drawUserChartTwo() {
    let data = google.visualization.arrayToDataTable([
      ["Category", "Percentage Spent On", { role: "style" } ],
      ["Housing", parseFloat(housingPaymentsRate), "blue"],
      ["Loans", parseFloat(loansRate), "blue"],
      ["Health Insurance", parseFloat(healthInsuranceRate), "blue"],
      ["Transportation", parseFloat(transportationRate), "blue"],
      ["Cell Phone", parseFloat(cellPhoneBillRate), "blue"],
      ["Groceries", parseFloat(groceriesRate), "blue"],
      ["Clothing", parseFloat(clothingRate), "blue"],
      ["Gas", parseFloat(gasRate), "red"],
      ["Electric", parseFloat(electricRate), "red"],
      ["Water", parseFloat(waterRate), "red"],
      ["Cable/Internet", parseFloat(cableInternetRate), "red"],
      ["Monthly Subscriptions", parseFloat(monthlySubscriptionsRate), "orange"],
      ["Miscellaneous", parseFloat(miscellaneousRate), "orange"],
      ["Primary Savings", parseFloat(primarySavingsRate), "green"],
      ["Emergency Funds", parseFloat(emergencyFundsRate), "green"],
      ["Vacation Funds", parseFloat(vacationFundsRate), "green"],
      ["ExcessFunds", parseFloat(excessFundsRate), "purple"]


    ]);

    let view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    let options = {
      title: "Spending comparison chart",
      height: 600,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    let userChartTwo = new google.visualization.ColumnChart(document.getElementById("userChartTwo"));
    userChartTwo.draw(view, options);
}