<?php
    session_start();
    if(empty($_POST['username']))
    {
        //echo "Please fill in all fields.";
    }
    else if(isset($_POST['login']))
    {
        include_once("comm.php");
        $Username = strip_tags($_POST['username']);
        $Password = strip_tags($_POST['password']);

        $Username = stripslashes($Username);
        $Password = stripslashes($Password);

        $Username = mysqli_real_escape_string($conn, $Username);
        $Password = mysqli_real_escape_string($conn, $Password);

        $sql = "SELECT * FROM users WHERE username = '$Username' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row =  mysqli_fetch_array($query);
        $id = $row['id'];
        $isAdmin  = $row['isAdmin'];
        $db_password = $row['password'];
        
        if($Password == $db_password)
        {
            $_SESSION['username'] = $Username;
            $_SESSION['id'] = $id;
            $_SESSION['isAdmin'] = $isAdmin;
            $_SESSION['isLoggedIn'] = TRUE;
            header("Location: ../profile/profile.php");
        }
        else
        {
            echo "Login failed. Please check that your username and password are both correct.";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <title>Login</title>
</head>

<body class="loginPage">

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
    <p class="navDescription">Fill out your information for a <span style="font-weight:bold">one-time</span> assessment
                of your budget</p>
        <a href="../budgetAssessment/budgetAssessment.html" class="navLink">
            <img class="navIcon" src="../Icons/005-graph-1.svg" title="View-Graph">
        </a>
    </div>

    <div class="navSection">
        <p class="navDescription">View a list of <span style="font-weight:bold">budgeting tips</span> and advice to help improve your spending habits</p>
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
        " class="navLink">
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
<div class="register-div">
    <form class="loginForm" action= "login.php" method= "post">
        <p class="loginParagraph loginHeader">Login</p>
        <p class="login-input-title">Username:</p>
        <input class= "loginInput" type= "text" name= "username" placeholder= "Username" size= "27"/><br/>
        <p class= "login-input-title">Password:</p>
        <input class= "loginInput" type= "password" name= "password" placeholder= "Password" size= "27"><br/>
        <input class= "loginInput loginBtn" name= "login" type= "submit" value= "Login"/><br/>
    </form>
    <a href= "./registration.php"><button class="registerBtnLogin">Register</button></a>
</div>

    <script src="login.js"></script>
</body>
</html>