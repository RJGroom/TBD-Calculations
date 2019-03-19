<?php 

require('../login/comm.php');

function getUserInfo($conn, $username) {
    $userInfo;
    $sql = "SELECT username, password, id, isAdmin, fName, lName, email FROM Users WHERE username ='" . $username . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $userInfo['username'] = $row['username'];
            $userInfo['password'] = $row['password'];
            $userInfo['id'] = $row['id'];
            $userInfo['isAdmin'] = $row['isAdmin'];
            $userInfo['fName'] = $row['fName'];
            $userInfo['lName'] = $row['lName'];
            $userInfo['email'] = $row['email'];
        }
        return $userInfo;
    }
    else {
        echo "User not found";
    }
}

function getUserData($conn, $username) {
    $userData;
    $sql = "SELECT primaryIncome, secondaryIncome, housing, loans, healthInsurance, transportation, 
    cellphoneBill, groceries, clothing, gas, electric, water, cableInternet, monthlySubscriptions,
    miscellaneous, primarySavings, emergencyFunds, vacationFunds, excessFunds, leftoverExcessFunds
    FROM expenses WHERE username ='" . $username . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $userData['primaryIncome'] = $row['primaryIncome'];
            $userData['secondaryIncome'] = $row['secondaryIncome'];
            $userData['housing'] = $row['housing'];
            $userData['loans'] = $row['loans'];
            $userData['healthInsurance'] = $row['healthInsurance'];
            $userData['transportation'] = $row['transportation'];
            $userData['cellphoneBill'] = $row['cellphoneBill'];
            $userData['groceries'] = $row['groceries'];
            $userData['clothing'] = $row['clothing'];
            $userData['gas'] = $row['gas'];
            $userData['electric'] = $row['electric'];
            $userData['water'] = $row['water'];
            $userData['cableInternet'] = $row['cableInternet'];
            $userData['monthlySubscriptions'] = $row['monthlySubscriptions'];
            $userData['miscellaneous'] = $row['miscellaneous'];
            $userData['primarySavings'] = $row['primarySavings'];
            $userData['emergencyFunds'] = $row['emergencyFunds'];
            $userData['vacationFunds'] = $row['vacationFunds'];
            $userData['excessFunds'] = $row['excessFunds'];
            $userData['leftoverExcessFunds'] = $row['leftoverExcessFunds'];
        }
        return $userData;
    }
    else {
        echo "User not found";
    }
}

?>