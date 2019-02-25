let excessFunds = 4000;
let leftoverExcessFunds = excessFunds;

document.getElementById('leftoverExcessFunds').innerHTML = leftoverExcessFunds;
document.getElementById('excessFunds').innerHTML = excessFunds;

const calculateExcessFunds = () => {
   let input = document.getElementById('spendingInput').value;
    if (input <= leftoverExcessFunds) {
        leftoverExcessFunds = leftoverExcessFunds - input;
        document.getElementById('leftoverExcessFunds').innerHTML = leftoverExcessFunds;
    }
    else {
        window.alert('You do not have enough leftover funds');
    }
}

const openUpdateData = () => {
    document.getElementById('updateData').style.right = "0";
}

const closeUpdateData = () => {
    document.getElementById('updateData').style.right = "-100vw";
}