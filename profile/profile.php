<?php
session_start();
require('../login/comm.php');
require('functions.php');
?>


<?php
if(isset($_SESSION['username'])) 
{
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

    <div class="profile-header profile-section">
        <a class="sign-out-link" href="../login/logout.php">Sign Out</a>
    </div>

    <div class="profile-main-info profile-section">
        <h4 class="main-info-heading">Welcome, <?php echo $userData['fName'] ?> </h4>
        <p class="main-info-para">Your monthly income is <span style="color: white">$5000</span></p>
        <p class="main-info-para">You save <span style="color: white">1000</span> each month which amounts to <span style="color: white">10%</span> of your income.</p>
        <p class="main-info-para">You have <span id="leftoverExcessFunds" style="color: white"></span> left of your <span id="excessFunds" style="color: white"></span> of excess funds</p>

        <p class="main-info-para">Input recent spendings: </p>
        <p class="main-info-para">$
                <input
                class="spending-input"
                id="spendingInput"
                type="number"
                value="0"
                min="0"
            />
        </p>
        <button class="confirm-btn" onclick="calculateExcessFunds()">Confirm</button>
    </div>

    <div class="profile-tips profile-section">
        <h4 class="tips-heading">Tips tailored for you</h4>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
        <p class="tip-item">Here is a tip</p>
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
        <h3 class="open-update-data-icon">O</h3>
    </div>

    <div class="update-data" id="updateData">
        <h3 class="close-update-data-tab" onclick="closeUpdateData()">X</h3>

        <form class="updateDataForm" action="profile.php" method="post">
            <h3>Income</h3>
            <input class="update-input" placeholder="Primary monthly income" name="primaryIncome" />
            <input class="update-input" placeholder="Secondary monthly income" name="secondaryIncome" />

            <h3>Primary expenses</h3>
            <input class="update-input" placeholder="Housing payments" name="housing" />
            <input class="update-input" placeholder="Loans" name="loans" />
            <input class="update-input" placeholder="Health insurance" name="healthInsurance" />
            <input class="update-input" placeholder="Transportation" name="transportation" />
            <input class="update-input" placeholder="Cell Phone Bill" name="cellphoneBill"/>
            <input class="update-input" placeholder="Groceries" name="groceries" />
            <input class="update-input" placeholder="Clothing" name="clothing" />

            <h3>Utilities</h3>
            <input class="update-input" placeholder="Gas" name="gas" />
            <input class="update-input" placeholder="Electric" name="electric" />
            <input class="update-input" placeholder="Water" name="water" />
            <input class="update-input" placeholder="Cable/Internet" name="cableInternet" />

            <h3>Secondary expenses</h3>
            <input class="update-input" placeholder="Monthly subscriptions" name="monthlySubscriptions" />
            <input class="update-input" placeholder="Miscellaneous" name="miscellaneous" />  

            <h3>Savings</h3>
            <input class="update-input" placeholder="Primary savings" name="primarySavings" />
            <input class="update-input" placeholder="Emergency funds" name="emergencyFunds" />
            <input class="update-input" placeholder="Vacation funds" name="vacationFunds" />

            <input type="submit" value="Update">
        </form>
    </div>

   </div>

   <?php
 
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
            vacationFunds = $vacationFunds

            WHERE username = '" . $_SESSION['username'] . "'";

       if (mysqli_query($conn, $sql)) {
           echo "sucess";
       }
       else {
           echo "Failure to update";
       }
?>

   <script src="profile.js"></script>
</body>
</html>