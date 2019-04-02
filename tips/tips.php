<?php
require('../login/comm.php');

$blogPosts;
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        $blogPosts['title'] = $row['title'];
        $blogPosts['subtitle'] = $row['subtitle'];
        $blogPosts['date'] = $row['date'];
        $blogPosts['author'] = $row['author'];
        $blogPosts['article'] = $row['article'];
        $blogPosts['id'] = $row['id'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tips</title>
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style.css">
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
            <a href="../index.php" class="navLink">
                <img class="navIcon" src="../Icons/house-outline.svg" title="Home">
            </a>
        </div>

        <div class="navSection">
            <p class="navDescription"><span style="font-weight:bold">Log in</span> to save your records and keep track of your spending habits</p>
            <a href="../login/login.php" class="navLink">
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
            <a href="./tips.html" class="navLink">
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

    <div class="blog-container">


    <div class="blog-article-container">
        <h3 class="blog-title"> <?php echo $blogPosts['title'] ?> </h3>
        <h4 class="blog-subtitle"> <?php echo $blogPosts['subtitle'] ?> </h4>
        <div class="date-author-container">
            <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogPosts['date'] ?> </p>
            <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogPosts['author'] ?> </p>
        </div>
        <p class="blog-article"> <?php echo $blogPosts['article'] ?> </p>
    </div>
    </div>

    <script src="tips.js"></script>

</body>
</html>