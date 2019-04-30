<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <title>Register</title>
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <link rel="stylesheet" href="style.css">
</head>

<div class="navBar" id="navBar">

        <div class="navSection">
            <h3 class="menu-text" id="menuText">Menu</h3>
            <div class="menuIcon" onclick="toggleNav()" title = "Open Menu">
                <div class="menuBar topBar" id="topBar"></div>
                <div class="menuBar middleBar" id="middleBar"></div>
                <div class="menuBar bottomBar" id="bottomBar"></div>
            </div>
        </div>

        <div class="navSection">
            <p class="navDescription" id="navTextOne">Go back to our <span style="font-weight:bold">homepage</span></p>
            <a href="../index.php" class="navLink">
                <img class="navIcon" src="../Icons/house-outline.svg" title="Home">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription" id="navTextTwo"><span style="font-weight:bold">Log in</span> to save your records and keep track of your spending habits</p>
            <a href=
            "
            <?php
                if(isset($_SESSION['username'])){       
                    echo "../profile/profile.php";
                }
                else echo "../login/login.php";
                ?>
            " class="navLink">
                <img class="navIcon" src="../Icons/006-login-square-arrow-button-outline.svg" title="Login">
            </a>
        </div>

        <div class="navSection">
        <p class="navDescription">Fill out your information for a <span style="font-weight:bold">one-time</span> assessment
                of your budget</p>
            <a href="../budgetAssessment/budgetAssessment.html" class="navLink">
                <img class="navIcon" src="../Icons/005-graph-1.svg" title="View-Graph">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription" id="navTextFour">View a list of <span style="font-weight:bold">budgeting tips</span> and advice to help improve your spending habits</p>
            <a href="
            <?php
            if(isset($_SESSION['username'])){  
                if ($userInfo['isAdmin'] == 1) {
                    echo "../tips/tipsadmin.php";
                }
                else {
                    echo "../tips/tips.php";
                }
            }
            else {
                echo "../tips/tips.php";
            }
            ?>
            " 
            class="navLink">
                <img class="navIcon" src="../Icons/007-elemental-tip.svg" title="Budgeting-Tips">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription" id="navTextFive"><span style="font-weight:bold">Contact</span> TBD Calculations with any of your questions, comments, or concerns</p>
            <a href ="./contact/contact.php" class="navLink">
                <img class="navIcon" src="../Icons/001-contact.svg" title="Contact">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription" id="navTextSix">View a list of the different <span style="font-weight:bold">language and currency</span> preferences available</p>
            <img class="navIcon" src="../Icons/008-worlwide.svg" title="Language-Currency">
        </div>

    </div>

<body class="registrationPage">
    <div class="registration-div">
    <p class="registrationHeader">Register</p>
    <form class= "registrationForm" name="register" method="GET" action="register.php">
        <!--<input type = "text" name = "email" placeholder = "Email Address"/><br/>-->
        <p class="gap"></p>
        <p class="inputHeader userName">Username:</p>
        <input class="loginInput registerInput" type="text" name="initUsername" placeholder="Username" size="27"/><br/>
        <p class="inputHeader firstName">First Name:</p>
        <input class="registerInput" type="text" name="FirstName" placeholder="First Name" size="27"/><br/>
        <p class="inputHeader lastName">Last Name:</p>
        <input class="registerInput" type="text" name="LastName" placeholder="Last Name" size="27"/><br/>
        <p class="inputHeader E-mail">E-mail:</p>
        <input class="registerInput" type="text" name="Email" placeholder="E-mail" size="27"/><br/>
        <p class="inputHeader enterPassword">Enter Password:</p>
        <input class="loginInput registerInput" type="password" name="initPassword" placeholder="Password" size="27"/><br/>
        <p class="inputHeader confirmPassword">Confirm Password</p>
        <input class="registerInput" type="password" name="confirmPassword" placeholder="Confirm Password" size="27"/><br/>
        <p class="gap"></p>
        <input class="registerBtn" type="submit" value="Register"/>
        <p class="gap"></p>
    </form>
    </div>
</body>
</html>