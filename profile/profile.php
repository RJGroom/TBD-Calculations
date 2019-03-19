<?php
session_start();
require('../login/comm.php');
require('functions.php');
?>


<?php
if(isset($_SESSION['username'])) 
{
    $userInfo = getUserInfo($conn, $_SESSION['username']);
    $userData = getUserData($conn, $_SESSION['username']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="profile.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="profileCharts.js"></script>
</head>
<body>


   <div class="profile-container">

    <!-- Nav Bar -->
<div class="navBar" id="navBar">

        <div class="navSection">
            <h3 class="menu-text">Menu</h3>
            <div class="menuIcon" onclick="toggleNav()" title = "Open Menu">
                <div class="menuBar topBar" id="topBar"></div>
                <div class="menuBar middleBar" id="middleBar"></div>
                <div class="menuBar bottomBar" id="bottomBar"></div>
            </div>
        </div>
    
        <div class="navSection">
            <p class="navDescription">Go back to our <span style="font-weight:bold">homepage</span></p>
            <a href="../index.php" class="navLink">
                <img class="navIcon" src="../Icons/house-outline.svg" title="Home">
            </a>
        </div>
    
        <div class="navSection">
            <p class="navDescription"><span style="font-weight:bold">Log in</span> to save your records and keep track of your spending habits</p>
            <a href="./login.php" class="navLink">
                <img class="navIcon" src="../Icons/006-login-square-arrow-button-outline.svg" title="Login">
            </a>
        </div>
    
         <div class="navSection">
             <p class="navDescription">View a <span style="font-weight:bold">graphical representation</span> of your spending and saving habits</p>
              <a href="../graphs/graphs.php" class="navLink">
                 <img class="navIcon" src="../Icons/005-graph-1.svg" title="View-Graph">
             </a>
         </div>
    
         <div class="navSection">
             <p class="navDescription">View a list of <span style="font-weight:bold">budgeting tips</span> and advice to help improve your spending habits</p>
             <a href="../tips/tips.html" class="navLink">
                 <img class="navIcon" src="../Icons/007-elemental-tip.svg" title="Budgeting-Tips">
             </a>
         </div>
    
          <div class="navSection">
             <p class="navDescription"><span style="font-weight:bold">Contact</span> TBD Calculations with any of your questions, comments, or concerns</p>
              <a href ="../contact/contact.php" class="navLink">
                  <img class="navIcon" src="../Icons/001-contact.svg" title="Contact">
              </a>
         </div>
    
          <div class="navSection">
                <p class="navDescription">View a list of the different <span style="font-weight:bold">language and currency</span> preferences available</p>
                <img class="navIcon" src="../Icons/008-worlwide.svg" title="Language-Currency">
            </div>
    
        </div>

    <div class="profile-main-info profile-section">
        <h4 class="main-info-heading">Welcome, <?php echo $userInfo['fName'] ?> </h4>
        <p class="not-you-para">Not you?
            <a class="sign-out-link" href="../login/logout.php">Sign Out</a>
        </p>
        <h3 class="info-header">Your Info:</h3>
        <p class="main-info-para">Monthly Income: <span style="font-weight: bold">$<?php echo $userData['primaryIncome'] + $userData['secondaryIncome'] ?></span></p>
        <p class="main-info-para">Monthly Savings: <span style="font-weight: bold">$<?php echo $userData['primarySavings'] ?></span> <br />
        saving <span style="font-weight: bold"> 
        
        <?php 
            if($userData['primaryIncome'] > 0) {
            echo round(($userData['primarySavings'] / ($userData['primaryIncome'] + $userData['secondaryIncome'])) * 100, 2);
            }
        ?>%</span> of your income</p>

        <p class="main-info-para">You pay <span style="font-weight: bold">$<?php echo $userData['gas'] +
                                                                                    $userData['electric'] +
                                                                                    $userData['water'] +
                                                                                    $userData['cableInternet']
        
        ?></span> in utilities every month <br />

        <p class="main-info-para">You have <span style="font-weight: bold">$<?php echo $userData['leftoverExcessFunds'] ?></span> left of your <span style="font-weight: bold">$<?php echo $userData['excessFunds'] ?></span> of excess funds</p>

        <p class="main-info-para">You are saving <span style="font-weight: bold">$<?php echo $userData['vacationFunds'] ?></span> every month towards your next vacation <br />

        <br />
        <br />
        <br />
        <h3 class="info-header">Funds Calculator</h3>
        <div class="spending-calculator">
        <p class="main-info-para">Input recent spendings: </p>
        <p class="main-info-para">$
                <input
                class="spending-input"
                id="spendingInput"
                type="number"
                value="0"
                min="0"
                size= "10"
            />
        </p>
        <button class="confirm-btn" onclick="">Confirm</button>
        </div>
    </div>

    <div class="profile-graph-one profile-section">
        <div class="sample-chart" id="sampleChart"></div>
    </div>

    <div class="profile-graph-two profile-section">
        <div class="sample-chart" id="sampleChartThree"></div>
    </div>

    <div class="profile-graph-three profile-section">
        <div class="sample-chart" id="sampleLineChart"></div>
    </div>

    <div class="open-update-data-tab" onclick="openUpdateData()">
        <p class="open-update-data-text">Update Data</p>
    </div>

    <div class="update-data" id="updateData">

    <h3 class="close-update-data-tab" onclick="closeUpdateData()">X</h3>
        <form class="updateDataForm" action="profile.php" method="post" name="updateDataForm">

        <div class="form-container">
        <div class="update-data-column-one">
            <h3 class="update-header">Income</h3>
            <label class="input-header">Primary Income</label> <br />
            <input class="update-input" placeholder="Primary monthly income" name="primaryIncome" value="<?php echo $userData['primaryIncome'] ?>"/> <br />
            <label class="input-header">Secondary Income</label> <br />
            <input class="update-input" placeholder="Secondary monthly income" name="secondaryIncome" value="<?php echo $userData['secondaryIncome'] ?>" />
        </div>

        <div class="update-data-column-two">
            <h3 class="update-header">Primary expenses</h3>
            <label class="input-header">Housing Payments</label> <br />
            <input class="update-input" placeholder="Housing payments" name="housing" value="<?php echo $userData['housing'] ?>" /> <br />
            <label class="input-header">Loans</label> <br />
            <input class="update-input" placeholder="Loans" name="loans" value="<?php echo $userData['loans'] ?>"/> <br />
            <label class="input-header">Health Insurance</label> <br />
            <input class="update-input" placeholder="Health insurance" name="healthInsurance" value="<?php echo $userData['healthInsurance'] ?>" /> <br />
            <label class="input-header">Transportation</label> <br />
            <input class="update-input" placeholder="Transportation" name="transportation" value="<?php echo $userData['transportation'] ?>" /> <br />
            <label class="input-header">Cellphone Bill</label> <br />
            <input class="update-input" placeholder="Cell Phone Bill" name="cellphoneBill" value="<?php echo $userData['cellphoneBill'] ?>" /> <br />
            <label class="input-header">Groceries</label> <br />
            <input class="update-input" placeholder="Groceries" name="groceries" value="<?php echo $userData['groceries'] ?>" /> <br />
            <label class="input-header">Clothing</label> <br />
            <input class="update-input" placeholder="Clothing" name="clothing" value="<?php echo $userData['clothing'] ?>" />
        </div>

        <div class="update-data-column-three">
            <h3 class="update-header">Utilities</h3>
            <label class="input-header">Gas</label> <br />
            <input class="update-input" placeholder="Gas" name="gas" value="<?php echo $userData['gas'] ?>" /> <br />
            <label class="input-header">Electric</label> <br />
            <input class="update-input" placeholder="Electric" name="electric" value="<?php echo $userData['electric'] ?>" /> <br />
            <label class="input-header">Water</label> <br />
            <input class="update-input" placeholder="Water" name="water" value="<?php echo $userData['water'] ?>" /> <br />
            <label class="input-header">Cable/Internet</label> <br />
            <input class="update-input" placeholder="Cable/Internet" name="cableInternet" value="<?php echo $userData['cableInternet'] ?>" />
        </div>

        <div class="update-data-column-four">
            <h3 class="update-header">Secondary expenses</h3>
            <label class="input-header">Monthly Subscriptions</label> <br />
            <input class="update-input" placeholder="Monthly subscriptions" name="monthlySubscriptions" value="<?php echo $userData['monthlySubscriptions'] ?>" /> <br />
            <label class="input-header">Miscellaneous</label> <br />
            <input class="update-input" placeholder="Miscellaneous" name="miscellaneous" value="<?php echo $userData['miscellaneous'] ?>" />  
        </div>

        <div class="update-data-column-five">
            <h3 class="update-header">Savings</h3>
            <label class="input-header">Primary Savings</label> <br />
            <input class="update-input" placeholder="Primary savings" name="primarySavings" value="<?php echo $userData['primarySavings'] ?>" /> <br />
            <label class="input-header">Emergency Funds</label> <br />
            <input class="update-input" placeholder="Emergency funds" name="emergencyFunds" value="<?php echo $userData['emergencyFunds'] ?>" /> <br />
            <label class="input-header">Vacation Funds</label> <br />
            <input class="update-input" placeholder="Vacation funds" name="vacationFunds" value="<?php echo $userData['vacationFunds'] ?>" /> <br />

            <input class="update-submit" type="submit" value="Update Data">
        </div>
        </div>
        </form>
    </div>
        <div class="profile-tips-section">
            <h3>Profile tips section</h3>
        </div>

   </div>

   <?php
 
 if(isset($_POST['primaryIncome']) && isset($_POST['secondaryIncome'])
 && isset($_POST['housing']) && isset($_POST['loans']) && isset($_POST['healthInsurance'])
 && isset($_POST['transportation']) && isset($_POST['cellphoneBill']) && isset($_POST['groceries'])
 && isset($_POST['clothing']) && isset($_POST['gas']) && isset($_POST['electric'])
 && isset($_POST['water']) && isset($_POST['cableInternet']) && isset($_POST['monthlySubscriptions'])
 && isset($_POST['miscellaneous']) && isset($_POST['primarySavings']) && isset($_POST['emergencyFunds'])
 && isset($_POST['vacationFunds']))
 {
    $primaryIncome = $_POST['primaryIncome'];
    $secondaryIncome = $_POST['secondaryIncome'];
    $housing = $_POST['housing'];
    $loans = $_POST['loans'];
    $healthInsurance = $_POST['healthInsurance'];
    $transportation = $_POST['transportation'];
    $cellphoneBill = $_POST['cellphoneBill'];
    $groceries = $_POST['groceries'];
    $clothing = $_POST['clothing'];
    $gas = $_POST['gas'];
    $electric = $_POST['electric'];
    $water = $_POST['water'];
    $cableInternet = $_POST['cableInternet'];
    $monthlySubscriptions = $_POST['monthlySubscriptions'];
    $miscellaneous = $_POST['miscellaneous'];
    $primarySavings = $_POST['primarySavings'];
    $emergencyFunds = $_POST['emergencyFunds'];
    $vacationFunds = $_POST['vacationFunds'];
    
    $excessFunds = $primaryIncome + $secondaryIncome - $housing - $loans - $healthInsurance -
                   $transportation - $cellphoneBill - $groceries - $clothing - $gas -
                   $electric - $water - $cableInternet - $monthlySubscriptions -
                   $miscellaneous - $primarySavings - $emergencyFunds - $vacationFunds;

    $sql = "UPDATE expenses SET
            primaryIncome = $primaryIncome,
            secondaryIncome = $secondaryIncome,
            housing = $housing,
            loans = $loans,
            healthInsurance = $healthInsurance,
            transportation = $transportation,
            cellphoneBill = $cellphoneBill,
            groceries = $groceries,
            clothing = $clothing,
            gas = $gas,
            electric = $electric,
            water = $water,
            cableInternet = $cableInternet,
            monthlySubscriptions = $monthlySubscriptions,
            miscellaneous = $miscellaneous,
            primarySavings= $primarySavings,
            emergencyFunds = $emergencyFunds,
            vacationFunds = $vacationFunds,
            excessFunds = $excessFunds,
            leftoverExcessFunds = $excessFunds

            WHERE username = '" . $_SESSION['username'] . "'";

       if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0'>";
       }
       else {
       }
    }
?>

   <script src="profile.js"></script>
</body>
</html>