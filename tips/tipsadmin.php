<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tips</title>
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
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

    <?php

    if (! empty($_POST)) {
        require('../login/comm.php');

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $article = $_POST['article'];

    $sql = "INSERT INTO blog (title, subtitle, date, author, article)
            VALUES ('$title', '$subtitle', '$date', '$author', '$article')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Post submitted";
    }
    else {
        echo $sql;
        echo mysqli_error($conn);
    }

    }

    ?>

    <div class="form-container">
        <form class="blog-form" method="POST" action="">
            <label class="blog-label">Title</label>
            <input type="text" name="title" placeholder="Title" />
            <label class="blog-label">Subtitle</label> 
            <input type="text" name="subtitle" placeholder="Subtitle" />
            <label class="blog-label">Date</label>
            <input type="date" name="date" />
            <label class="blog-label">Author</label>
            <input type="text" name="author" placeholder="Author" />
            <label class="blog-label">Article</label>
            <textarea class="blog-post" name="article">Write article here</textarea>
            <input type="submit" value="Post Article"/>
        </form>

    </div>

</body>
</html>