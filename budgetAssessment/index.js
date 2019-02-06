var income = 0;
var primaryExpenses = 0;
var primaryExpensesRate = 0;
var utilities = 0;
var utilitiesRate = 0;
var secondaryExpenses = 0;
var secondaryExpensesRate = 0;
var savings = 0;
var savingsRate = 0;

function printReport() {

    //Income
    income =
    parseInt(document.getElementById("primary-income").value) + parseInt(document.getElementById("secondary-income").value);
    document.getElementById("income-report").innerHTML = income;

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