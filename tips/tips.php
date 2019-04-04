<?php
require('../login/comm.php');

$blogData;
$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
$i = 0;
if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        $blogData[$i]['title'] = $row['title'];
        $blogData[$i]['subtitle'] = $row['subtitle'];
        $blogData[$i]['date'] = $row['date'];
        $blogData[$i]['author'] = $row['author'];
        $blogData[$i]['article'] = $row['article'];
        $blogData[$i]['id'] = $row['id'];

        $i++;
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

    <!-- Post One -->
    <div class="blog-article-container">
        <div class="blog-article">
            <h3 class="blog-title"> <?php echo $blogData[0]['title'] ?> </h3>
            <h4 class="blog-subtitle"> <?php echo $blogData[0]['subtitle'] ?> </h4>
            <div class="date-author-container">
                <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogData[0]['date'] ?> </p>
                <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogData[0]['author'] ?> </p>
            </div>
            <p class="blog-text"> <?php echo $blogData[0]['article'] ?> </p>
        </div>
    </div>

    <!-- Post Two -->
    <div class="blog-article-container">
        <div class="blog-article">
            <h3 class="blog-title"> <?php echo $blogData[1]['title'] ?> </h3>
            <h4 class="blog-subtitle"> <?php echo $blogData[1]['subtitle'] ?> </h4>
            <div class="date-author-container">
                <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogData[1]['date'] ?> </p>
                <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogData[1]['author'] ?> </p>
            </div>
            <p class="blog-text"> <?php echo $blogData[1]['article'] ?> </p>
        </div>
    </div>

    <!-- Post Three -->
    <div class="blog-article-container">
        <div class="blog-article">
            <h3 class="blog-title"> <?php echo $blogData[2]['title'] ?> </h3>
            <h4 class="blog-subtitle"> <?php echo $blogData[2]['subtitle'] ?> </h4>
            <div class="date-author-container">
                <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogData[2]['date'] ?> </p>
                <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogData[2]['author'] ?> </p>
            </div>
            <p class="blog-text"> <?php echo $blogData[2]['article'] ?> </p>
        </div>
    </div>

    <!-- Post Four -->
    <div class="blog-article-container">
        <div class="blog-article">
            <h3 class="blog-title"> <?php echo $blogData[3]['title'] ?> </h3>
            <h4 class="blog-subtitle"> <?php echo $blogData[3]['subtitle'] ?> </h4>
            <div class="date-author-container">
                <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogData[3]['date'] ?> </p>
                <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogData[3]['author'] ?> </p>
            </div>
            <p class="blog-text"> <?php echo $blogData[3]['article'] ?> </p>
        </div>
    </div>

    <!-- Post Five -->
    <div class="blog-article-container">
        <div class="blog-article">
            <h3 class="blog-title"> <?php echo $blogData[4]['title'] ?> </h3>
            <h4 class="blog-subtitle"> <?php echo $blogData[4]['subtitle'] ?> </h4>
            <div class="date-author-container">
                <p class="blog-date"><span style="font-weight: bold">Date:</span> <?php echo $blogData[4]['date'] ?> </p>
                <p class="blog-author"><span style="font-weight: bold">Author:</span> <?php echo $blogData[4]['author'] ?> </p>
            </div>
            <p class="blog-text"> <?php echo $blogData[4]['article'] ?> </p>
        </div>
    </div>



    </div>

    <script src="tips.js"></script>

</body>
</html>