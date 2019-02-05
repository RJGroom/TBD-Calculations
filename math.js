function MonthlyIncomeFromYearlySalary()    {
  
    let monthlyIncome = console.log(User1.yearlySalary) / 12;
    console.log("Monthly Income = " + monthlyIncome.toFixed(2));
}
function subscriptionAndBillsDeductions(){
     //Get method for monthly income
    //Get method for monthly bills
     //Get method for subscriptions 
    let excessFunds = console.log(User1.monthlyIncome) - console.log(User1.monthlyBills) - console.log(User1.subscriptions);
    console.log("Excess Montly Funds = " + excessFunds.toFixed(2))
}

var User1 = {
    userName: "user1",
    password: "password1",
    yearlySalary: 30000,
    monthlyBills: 1000,
    subscriptions: 150
}

var User2 = {
    username: "user2",
    password: "password2",
    yearlySalary: 15000,
    montlyBills: 750,
    subscriptions: 100
}