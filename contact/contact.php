<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto"
        rel="stylesheet">
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="logo">tbg</div>

    <div class="navBar" id="navBar">

        <div class="navSection">
            <h3 class="menu-text">Menu</h3>
            <div class="menuIcon" onclick="toggleNav()" title="Open Menu">
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
            <p class="navDescription"><span style="font-weight:bold">Log in</span> to save your records and keep track
                of your spending habits</p>
            <a href="../login/login.php" class="navLink">
                <img class="navIcon" src="../Icons/006-login-square-arrow-button-outline.svg" title="Login">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a <span style="font-weight:bold">graphical representation</span> of your
                spending and saving habits</p>
            <a href="../graphs/graphs.php" class="navLink">
                <img class="navIcon" src="../Icons/005-graph-1.svg" title="View-Graph">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a list of <span style="font-weight:bold">budgeting tips</span> and advice to
                help improve your spending habits</p>
            <a href="../tips/tips.html" class="navLink">
                <img class="navIcon" src="../Icons/007-elemental-tip.svg" title="Budgeting-Tips">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription"><span style="font-weight:bold">Contact</span> TBD Calculations with any of your
                questions, comments, or concerns</p>
            <a href="./contact.php" class="navLink">
                <img class="navIcon" src="../Icons/001-contact.svg" title="Contact">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription">View a list of the different <span style="font-weight:bold">language and
                    currency</span> preferences available</p>
            <img class="navIcon" src="../Icons/008-worlwide.svg" title="Language-Currency">
        </div>
    </div>

    <div class="contact-header">
    </div>

    <div class="contact-faq">
        <h3 class="faq-header">Frequently Asked Questions</h3>

        <div class="faq-block">
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">Q: </span>
                Can I save my budget information to review at a later date?</p>
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">A: </span>
                Yes, use the login/create an account link to create a profile that will
                store your budgeting data for future reference.</p>
        </div>

        <div class="faq-block">
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">Q: </span>
                Are there any budgeting tips to help me develop a new budget plan?</p>
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">A: </span>
                Of course! Our site has a budgeting advice page that provides you with tips and
                resources to help you make the most of your money.</p>
        </div>

        <div class="faq-block">
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">Q: </span>
                What do you do with the information I provide you? Is my data private?</p>
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">A: </span>
                The data we collect from you is simply for your records. We do not share it with
                any third parties, and as a matter of fact, we don't even review it ourselves!</p>
        </div>

        <div class="faq-block">
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">Q: </span>
                Is there a TBG Calculations mobile app?</p>
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">A: </span>
                There is no TBG Calculations app in the App Store, however, we are working on
                updating our webpage to make it more mobile-friendly!</p>
        </div>

        <div class="faq-block">
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">Q: </span>
                Do I have to make an account to get a budget analysis?</p>
            <p class="faq-para"><span style="font-weight: bold; color: #ffb515">A: </span>
                Nope! Click on the "Plan Your Budget" link from the homepage for a one-time
                budget analysis report!</p>
        </div>

    </div>

    <div class="contact-form-section">
        <div class="contact-image">

        </div>
        <form class="contact-form">
            <h3 class="contact-form-heading">Questions, Comments, Concerts? Contact Us.</h3>
            <p class="contact-form-line">
                Hello, my name is
                <input class="contact-form-input" type="text" placeholder="Enter Name" />
            </p>
            <p class="contact-form-line">
                You can reach me at
                <input class="contact-form-input" type="text" placeholder="Enter E-mail" />
            </p>
            <p class="contact-form-line">
                I am contacting you because...
            </p>
            <textarea class="contact-form-textarea" placeholder="Enter your message"></textarea>
            <div class="contact-submit-wrapper">
                <button class="contact-submit">Send Message</button>
            </div>
        </form>
    </div>

    <div class="meet-the-team">
        <h3 class="meet-the-team-heading">Meet the developers</h3>
        <div class="profile-container">
            <div class="profile profile1">
                <div class="profile-overlay">
                    <h3 class="profile-name">Ryan Groom</h3>
                    <p class="profile-about">Senior at Indiana University of Pennsylvania</p>
                    <p class="profile-about">Favors front-end web development</p>
                    <p class="profile-about">E-mail: email@example.com</p>
                </div>
            </div>
            <div class="profile profile2">
                <div class="profile-overlay">
                    <h3 class="profile-name">Jonah Downs</h3>
                    <p class="profile-about">Senior at Indiana University of Pennsylvania</p>
                    <p class="profile-about">Favors back-end PHP</p>
                    <p class="profile-about">E-mail: email@example.com</p>
                </div>
            </div>
            <div class="profile profile3">
                <div class="profile-overlay">
                    <h3 class="profile-name">Eric Ritchie</h3>
                    <p class="profile-about">Senior at Indiana University of Pennslyvania</p>
                    <p class="profile-about">Favors java programming</p>
                    <p class="profile-about">E-mail: email@example.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-grid">
        <div class="footer-section-wrapper">
        <div class="footer-section">
            <h3 class="footer-title">Navigation</h3>
            <a href="../index.php">Home</a>
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

    <script src="contact.js"></script>
</body>

</html>