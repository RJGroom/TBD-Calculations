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
    $userSpending = getUserSpending($conn, $_SESSION['username']);
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
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <link rel="stylesheet" href="profile.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="profile.js"></script>
</head>
<body>

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

    <!-- Google Charts Script -->
    <script type="text/javascript">

    let primaryIncome = <?php echo $userData['primaryIncome'] ?>;
    let secondaryIncome = <?php echo $userData['secondaryIncome'] ?>;
    let housing = <?php echo $userData['housing'] ?>;
    let loans = <?php echo $userData['loans'] ?>;
    let healthInsurance = <?php echo $userData['healthInsurance'] ?>;
    let transportation = <?php echo $userData['transportation'] ?>;
    let cellphoneBill = <?php echo $userData['cellphoneBill'] ?>;
    let groceries = <?php echo $userData['groceries'] ?>;
    let clothing = <?php echo $userData['clothing'] ?>;
    let gas = <?php echo $userData['gas'] ?>;
    let electric = <?php echo $userData['electric'] ?>;
    let water = <?php echo $userData['water'] ?>;
    let cableInternet = <?php echo $userData['cableInternet'] ?>;
    let monthlySubscriptions = <?php echo $userData['monthlySubscriptions'] ?>;
    let miscellaneous = <?php echo $userData['miscellaneous'] ?>;
    let primarySavings= <?php echo $userData['primarySavings'] ?>;
    let emergencyFunds = <?php echo $userData['emergencyFunds'] ?>;
    let vacationFunds = <?php echo $userData['vacationFunds'] ?>;
    let excessFunds = <?php echo $userData['excessFunds'] ?>;
    let leftoverExcessFunds = <?php echo $userData['leftoverExcessFunds'] ?>;
    let housingRate = (housing/(primaryIncome + secondaryIncome)) * 100;
    let loansRate = (loans/(primaryIncome + secondaryIncome)) * 100;
    let healthInsuranceRate = (healthInsurance/(primaryIncome + secondaryIncome)) * 100;
    let transportationRate = (transportation/(primaryIncome + secondaryIncome)) * 100;
    let cellphoneBillRate = (cellphoneBill/(primaryIncome + secondaryIncome)) * 100;
    let groceriesRate = (groceries/(primaryIncome + secondaryIncome)) * 100;
    let clothingRate = (clothing/(primaryIncome + secondaryIncome)) * 100;
    let gasRate = (gas/(primaryIncome + secondaryIncome)) * 100;
    let electricRate = (electric/(primaryIncome + secondaryIncome)) * 100;
    let waterRate = (water/(primaryIncome + secondaryIncome)) * 100;
    let cableInternetRate = (cableInternet/(primaryIncome + secondaryIncome)) * 100;
    let monthlySubscriptionsRate = (monthlySubscriptions/(primaryIncome + secondaryIncome)) * 100;
    let miscellaneousRate = (miscellaneous/(primaryIncome + secondaryIncome)) * 100;
    let primarySavingsRate = (primarySavings/(primaryIncome + secondaryIncome)) * 100;
    let emergencyFundsRate = (emergencyFunds/(primaryIncome + secondaryIncome)) * 100;
    let vacationFundsRate = (vacationFunds/(primaryIncome + secondaryIncome)) * 100;
    let excessFundsRate = (excessFunds/(primaryIncome + secondaryIncome)) * 100;
    let leftoverExcessFundsRate = (leftoverExcessFunds/(primaryIncome + secondaryIncome)) * 100;
    let primaryExpenses = housing + loans + healthInsurance + transportation + cellphoneBill + groceries + clothing;
    let utilities = gas + electric + water + cableInternet;
    let secondaryExpenses = monthlySubscriptions + miscellaneous;
    let savings = primarySavings + emergencyFunds + vacationFunds;

    let januarySpending = <?php echo $userSpending['januarySpending'] ?>;
    let februarySpending = <?php echo $userSpending['februarySpending'] ?>;
    let marchSpending = <?php echo $userSpending['marchSpending'] ?>;
    let aprilSpending = <?php echo $userSpending['aprilSpending'] ?>;
    let maySpending = <?php echo $userSpending['maySpending'] ?>;
    let juneSpending = <?php echo $userSpending['juneSpending'] ?>;
    let julySpending = <?php echo $userSpending['julySpending'] ?>;
    let augustSpending = <?php echo $userSpending['augustSpending'] ?>;
    let septemberSpending = <?php echo $userSpending['septemberSpending'] ?>;
    let octoberSpending = <?php echo $userSpending['octoberSpending'] ?>;
    let novemberSpending = <?php echo $userSpending['novemberSpending'] ?>;
    let decemberSpending = <?php echo $userSpending['decemberSpending'] ?>;

   

    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);
    google.charts.setOnLoadCallback(drawChart3);
    
    function drawChart() {
        let data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        data.addColumn('number', 'Percentage');
        data.addRows([
            ['Primary Expenses', primaryExpenses],
            ['Monthly Utilities', utilities],
            ['Secondary Expenses', secondaryExpenses],
            ['Monthly Savings', savings],
            ['Excess Funds', excessFunds]
        ]);
let options = {
    title: "Monthly Spending by Category",
    backgroundColor: "white",
    pieSliceBorderColor: "white"
};
let sampleChart = new google.visualization.PieChart(document.getElementById('sampleChart'));
sampleChart.draw(data, options);
}
function drawChart2() {
    let data = google.visualization.arrayToDataTable([
      ['Month', 'Target Spending Goal', 'Your Spending'],
      ['Jan',  30,      januarySpending],
      ['Feb',  60,      februarySpending],
      ['Mar',  90,      marchSpending],
      ['Apr',  120,     aprilSpending],
      ['May',  30,      maySpending],
      ['Jun',  60,      juneSpending],
      ['Jul',  90,      julySpending],
      ['Aug',  120,     augustSpending],
      ['Sep',  30,      septemberSpending],
      ['Oct',  60,      octoberSpending],
      ['Nov',  90,      novemberSpending],
      ['Dec',  120,    decemberSpending]
    ]);
    let options = {
      title: 'Target Spending Goal vs. Your Spending',
      curveType: 'function',
      legend: { position: 'bottom' },
      backgroundColor: "white"
    };
    let chart = new google.visualization.LineChart(document.getElementById('sampleLineChart'));
    chart.draw(data, options);
  }
  function drawChart3() {
    let data = google.visualization.arrayToDataTable([
      ["Category", "Percentage Allocated", { role: "style" } ],
      ["Housing", housingRate , "blue"],
      ["Loans", loansRate, "blue"],
      ["Health Insurance", healthInsuranceRate, "blue"],
      ["Transportation", transportationRate, "blue"],
      ["Cell Phone", cellphoneBillRate, "blue"],
      ["Groceries", groceriesRate, "blue"],
      ["Clothing", clothingRate, "blue"],
      ["Gas", gasRate, "red"],
      ["Electric", electricRate, "red"],
      ["Water", waterRate, "red"],
      ["Cable/Internet", cableInternetRate, "red"],
      ["Monthly Subscriptions", monthlySubscriptionsRate, "orange"],
      ["Miscellaneous", miscellaneousRate, "orange"],
      ["Primary Savings", primarySavingsRate, "green"],
      ["Emergency Funds", emergencyFundsRate, "green"],
      ["Vacation Funds", vacationFundsRate, "green"],
      ["ExcessFunds", excessFundsRate, "purple"]
    ]);
    let view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);
    let options = {
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
      chartArea: {top: '20', width: '90%', height: '60%'},
      hAxis: {textStyle:{fontSize: '15'},
        slantedText: 'true',
        slantedTextAngle: '90',
        },
    };
    let sampleChartThree = new google.visualization.ColumnChart(document.getElementById("sampleChartThree"));
    sampleChartThree.draw(view, options);
}
  window.onresize = function(){
      drawChart3();
      drawChart2();
      drawChart();
  }
    </script>


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
            <a href="
            <?php
                if(isset($_SESSION['username'])){       
                    echo "./profile.php";
                }
                else echo "../login/login.php";
                ?>
            " class="navLink">
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
             <a href="../tips/tips.php" class="navLink">
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
            echo round(($userData['primarySavings'] / ($userData['primaryIncome'] + $userData['secondaryIncome'])) * 100, 0);
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
        <?php
        if($_SESSION['isAdmin'] == 1)
        {
            ?>
            <a href = "contactUsComments.php">View user comments</a>
            <?php
        }
        ?>
        <br />
        <h3 class="info-header">Funds Calculator</h3>
        <div class="spending-calculator">
        <p class="main-info-para">Input recent spendings: </p>
        <p class="main-info-input">$</p>
        <form class="spending-input-field" method="POST" action=""> 
            <input
            class="spending-input"
            name="spending"
            type="number"
            value="0"
            min="0"
            size= "10"
            />

            <input class="submit" type="submit" value="Submit" name="submit" />
        </form>
        

        <!-- WORK IN THISSSS -->
        <?php 

            if(isset($_POST['spending'])) {
            $spending = $_POST['spending'];
            $leftoverExcessFunds = $userData['leftoverExcessFunds'] - $spending;

            echo $leftoverExcessFunds;

            $sql = "UPDATE expenses SET
            leftoverExcessFunds = $leftoverExcessFunds
            WHERE username = '" . $_SESSION['username'] . "'";

            $januarySpending = $userSpending['januarySpending'] + $spending;
            $februarySpending = $userSpending['februarySpending'] + $spending;
            $marchSpending = $userSpending['marchSpending'] + $spending;
            $aprilSpending = $userSpending['aprilSpending'] + $spending;
            $maySpending = $userSpending['maySpending'] + $spending;
            $juneSpending = $userSpending['juneSpending'] + $spending;
            $julySpending = $userSpending['julySpending'] + $spending;
            $augustSpending = $userSpending['augustSpending'] + $spending;
            $septemberSpending = $userSpending['septemberSpending'] + $spending;
            $octoberSpending = $userSpending['octoberSpending'] + $spending;
            $novemberSpending = $userSpending['novemberSpending'] + $spending;
            $decemberSpending = $userSpending['decemberSpending'] + $spending;

            if (date('m') == 1) {
                $sql2 = "UPDATE spending SET
                januarySpending = $januarySpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 2) {
                $sql2 = "UPDATE spending SET
                februarySpending = $februarySpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 3) {
                $sql2 = "UPDATE spending SET
                marchSpending = $marchSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 4) {
                $sql2 = "UPDATE spending SET
                aprilSpending = $aprilSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 5) {
                $sql2 = "UPDATE spending SET
                maySpending = $maySpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 6) {
                $sql2 = "UPDATE spending SET
                juneSpending = $juneSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 7) {
                $sql2 = "UPDATE spending SET
                julySpending = $julySpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 8) {
                $sql2 = "UPDATE spending SET
                augustSpending = $augustSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 9) {
                $sql2 = "UPDATE spending SET
                septemberSpending = $septemberSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 10) {
                $sql2 = "UPDATE spending SET
                octoberSpending = $octoberSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 11) {
                $sql2 = "UPDATE spending SET
                novemberSpending = $novemberSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }
            else if (date('m') == 12) {
                $sql2 = "UPDATE spending SET
                decemberSpending = $decemberSpending
                WHERE username = '" . $_SESSION['username'] . "'";
            }



            $resultOne = mysqli_query($conn, $sql);
            $resultTwo = mysqli_query($conn, $sql2);


            if($resultOne) {
                echo "<meta http-equiv='refresh' content='0'>";
            }
            else {
            }

        }
        ?>

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
            
            <input class="update-submit" type="submit" value="Update Data">
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

        </div>
        </div>
        </form>
    </div>
        <div class="profile-tips-section">
            <h3 class="profile-tips-header">Profile tips section</h3>
            <p class="profile-tips">
                <?php
                if ($userData['primaryIncome'] > 0){
            echo "According to the 20% rule, you should save at least 20% of your total income.";
                }
                ?>
            </p>
            <p class="profile-tips"> 
            <?php 
            if ($userData['primaryIncome'] > 0){
                echo "You are currently saving " . round(($userData['primarySavings']/($userData['primaryIncome'] + $userData['secondaryIncome'])) * 100, 0) . "% of your income.";
                }
                ?> 
            </p>
            <p class="profile-tips"> <?php 
            if ($userData['primaryIncome'] > 0){
                    if (($userData['primarySavings']/($userData['primaryIncome'] + $userData['secondaryIncome'])) * 100 < 20) {
                        echo "You need to save $" . ((($userData['primaryIncome'] + $userData['secondaryIncome']) * 0.2) - $userData['primarySavings']) . " more each month to satisfy the 20% rule.";
                    }
                    else 
                    {
                        echo "Your current savings rate is efficient";
                    }
                }
                 ?>
            </p>

            <p class="profile-tips"> <?php
                    $excessFunds = $userData['primaryIncome'] + $userData['secondaryIncome'] - 
                    $userData['housing'] - $userData['loans'] - $userData['healthInsurance'] -
                    $userData['transportation'] - $userData['cellphoneBill'] - $userData['groceries'] - 
                    $userData['clothing'] - $userData['gas'] - $userData['electric'] - $userData['water'] - 
                    $userData['cableInternet'] - $userData['monthlySubscriptions'] - $userData['miscellaneous'] - 
                    $userData['primarySavings'] - $userData['emergencyFunds'] - $userData['vacationFunds'];

                if ($userData['primaryIncome'] > 0){
                    if (($excessFunds/($userData['primaryIncome'] + $userData['secondaryIncome'])) * 100 > 20)
                    {
                        echo "You currently have more than 20% of your total income leftover, you may want to consider investing
                        more into your savings or emergency funds";
                    }
            }
                ?>
            </p>

            <p class="profile-tips">
                <?php
                if ($userData['primaryIncome'] > 0){
                    echo "Always keep your budgeting information up to date";
                }
                else {
                    echo "Please click on the update data tab on right right of the page to input your information";
                    echo "All values should be recorded as monthly income and expenses";
                }
                ?>
                    </p>
        </div>

   </div>

</body>
<!-- bananas -->

</html>

