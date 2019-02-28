 <?php
/*
session_start();
if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == TRUE)
{
    echo "Welcome, " . $_SESSION['username'] . "!<br/>";
}
else
{
    echo "Welcome, Guest";
}
**/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--sup-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TBG Calculations</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="Charts.js"></script>
</head>
<body>
    <div class="logo">tbg</div>

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
            <a href="./index.php" class="navLink">
                <img class="navIcon" src="Icons/house-outline.svg" title="Home">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription"><span style="font-weight:bold">Log in</span> to save your records and keep track of your spending habits</p>
            <a href="./login/login.php" class="navLink">
                <img class="navIcon" src="Icons/006-login-square-arrow-button-outline.svg" title="Login">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a <span style="font-weight:bold">graphical representation</span> of your spending and saving habits</p>
            <a href="graphs.html" class="navLink">
                <img class="navIcon" src="Icons/005-graph-1.svg" title="View-Graph">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a list of <span style="font-weight:bold">budgeting tips</span> and advice to help improve your spending habits</p>
            <a href="tips.html" class="navLink">
                <img class="navIcon" src="Icons/007-elemental-tip.svg" title="Budgeting-Tips">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription"><span style="font-weight:bold">Contact</span> TBD Calculations with any of your questions, comments, or concerns</p>
            <a href ="./contact/contact.html" class="navLink">
                <img class="navIcon" src="Icons/001-contact.svg" title="Contact">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a list of the different <span style="font-weight:bold">language and currency</span> preferences available</p>
            <img class="navIcon" src="Icons/008-worlwide.svg" title="Language-Currency">
        </div>

    </div>

    <div class="container">
        <div class="section1">

            <div class="header-image-container">
                <div class="header-image"></div>
                <h2 class="header-main-text">TBG Calculations</h2>
                <p class="header-sub-text">Budget management done right.</p>
                <div class="scrollIconContainer" href="#section2">
                    <a href="#section2">Scroll</a>
                    <img class="scrollIcon" src="Icons/angle-arrow-down.svg">
                </div>
            </div>

        </div>

        <div class="section2">
            <a name="section2"></a>
            <div class="infoSection">
                <div class="main-text-content" id="main-info-content">
                    <h3 class="info-header">Managing Your <br>
                         Budget</h3>
                    <p class="info-para">tbg calculations provides you with the proper tools for analyzing and
                        adjusting your budget to best accomodate your needs.</p>
                    <a href="./budgetAssessment/budgetAssessment.html">
                        <button class="btn">Plan Your Budget</button>
                    </a>
                </div>
            </div>
            <div class="management-steps">
                <div class="steps-container" id="steps-container">
                    <h3 class="management-header">It's As Simple As</h3>
                    <h3 class="management-step"><span class="step-number">01.</span> Complete our expenditure assessment</h3>
                    <h3 class="management-step"><span class="step-number">02.</span>  Utilize our budget tips resources</h3>
                    <h3 class="management-step"><span class="step-number">03.</span>  Stick with it</h3>
                </div>
            </div>
            <div class="triangle-tab"></div>
        </div>

        <div class="section3">
            <div class="sampleChart" id="sampleChart"></div>
            <div class="sampleLineChart" id="sampleLineChart"></div>
        </div>

        <div class="section4">
            <div class="tip-info-section">
                <div class="tip-text-content" id="tip-text-content">
                    <h3 class="tip-info-header">First Time?</h3>
                    <p class="tip-info-para">tbg calculations provides foundational knowledge for those with
                        little to no experience with budget management. From common practices to useful tips, these guidelines
                        will assist you in developing a budget that is financially viable and tailored to help you make the most
                        of your money.
                    </p>
                    <button class="btn">Take Our Advice</button>
                </div>
            </div>

            <div class="budget-tips-section">
                <div class="divider"></div>
                <h3 class="tip-section-title">Budget Tips</h3>
                <p class="budget-tip">"<span id="tip">Always keep your budget information up-to-date</span>"</p>
                <div class="dollar-sign-container">
                    <p class="dollar-sign">$</p>
                    <div class="cover"></div>
                </div>
            </div>
        </div>

        <div class="section5">
            <div class="social-bar">
                <h3 class="social-bar-heading">Follow Us</h3>

                <div class="icon-bar">

                    <a href="https://www.instagram.com/tbgcalculations/" class="social-icon">
                        <img class="social-icon" src="./Icons/instagram-social-network-logo-of-photo-camera.svg" title="instagram">
                    </a>

                    <a href="https://www.facebook.com/TBGCalculations" class="social-icon">
                        <img class="social-icon" src="./Icons/facebook.svg" title="facebook">
                    </a>

                    <a href="https://twitter.com/TBGCalculations" class="social-icon">
                        <img class="social-icon" src="./Icons/twitter-logo-on-black-background.svg" title="twitter">
                    </a>

                </div>
            </div>
        </div>

        <div class="section6">
            <div class="footer-section">
                <h3 class="footer-title">Navigation</h3>
                <a href="./index.php">Home</a>
                <br>
                <a href="./login/login.html">Login</a>
                <br>
                <a href="./graphs/graphs.html">Graphs</a>
                <br>
                <a href="./tips/tips.html">Tips</a>
                <br>
                <a href="./contact/contact.html">Contact</a>
            </div>

            <div class="footer-section">
                <h3 class="footer-title">Languages</h3>
                <a href="#">English</a>
                <br>
                <a href="#">Spanish</a>
                <br>
                <a href="#">French</a>
                <br>
                <a href="#">Portuguese</a>
            </div>

            <div class="footer-section">
                <h3 class="footer-title">Contact</h3>
                <a href="#">Contact Us</a>
                <br>
                <a href="#">Subscribe To Email</a>
                <br>
                <a href="#">FAQ</a>
                <br>
            </div>

            <div class="footer-section">
                <h3 class="footer-title">Connect</h3>
                <a href="https://www.instagram.com/tbgcalculations">Instagram</a>
                <br>
                <a href="https://www.facebook.com/TBGCalculations">Facebook</a>
                <br>
                <a href="https://twitter.com/TBGCalculations">Twitter</a>
            </div>
        </div>

    </div>

    <script src="index.js"></script>
    <script src="budgetTips.js"></script>
    <script src="scrollEffects.js"></script>
</body>
</html>