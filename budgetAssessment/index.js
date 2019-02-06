var income = 0;
var monthlyIncome = income/12;
var primaryExpenses = 0;
var primaryExpensesRate = 0;
var utilities = 0;
var utilitiesRate = 0;
var secondaryExpenses = 0;
var secondaryExpensesRate = 0;
var savings = 0;
var savingsRate = 0;
var excessFunds = income - primaryExpenses - utilities - secondaryExpenses - savings

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


function printReport() {

    //Income
    income =
    parseInt(document.getElementById("primary-income").value) + parseInt(document.getElementById("secondary-income").value);
    document.getElementById("income-report").innerHTML = income;
    document.getElementById("income-report-monthly").innerHTML = income/12;

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
    primaryExpensesRate = (primaryExpenses / income) * 100;
    document.getElementById("primary-expenses-rate").innerHTML = primaryExpensesRate;

    //Utilities
    utilities = 
    parseInt(document.getElementById("gas").value) +
    parseInt(document.getElementById("electric").value) +
    parseInt(document.getElementById("water").value) +
    parseInt(document.getElementById("cable-internet").value);
    document.getElementById("utilities-report").innerHTML = utilities;

    //Utilities Rate
    utilitiesRate = (utilities / income) * 100;
    document.getElementById("utilities-rate").innerHTML = utilitiesRate;

    //Secondary Expenses
    secondaryExpenses =
    parseInt(document.getElementById("monthly-subscriptions").value) +
    parseInt(document.getElementById("miscellaneous").value);
    document.getElementById("secondary-expenses-report").innerHTML = secondaryExpenses;

    //Secondary Expenses Rate
    secondaryExpensesRate = (secondaryExpenses / income) * 100;
    document.getElementById("secondary-expenses-rate").innerHTML = secondaryExpensesRate;

    //Savings
    savings =
    parseInt(document.getElementById("primary-savings").value) +
    parseInt(document.getElementById("emergency-funds").value) +
    parseInt(document.getElementById("vacation-funds").value);
    document.getElementById("savings-report").innerHTML = savings;

    savingsRate = (savings / income) * 100;
    document.getElementById("savings-rate").innerHTML = savingsRate;
}

