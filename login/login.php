<?php
    session_start();
    if(empty($_POST['username']))
    {
        echo "Please fill in all fields.";
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
        $db_password = $row['password'];
        
        if($Password == $db_password)
        {
            $_SESSION['username'] = $Username;
            $_SESSION['id'] = $id;
            $_SESSION['isLoggedIn'] = TRUE;
            header("Location: ../index.php");
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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body class="loginPage">
    <p class="loginHeader">Login</p>
    <form class="loginForm" action= "login.php" method= "post">
        <p>Username:</p>
        <input class= "loginInput" type= "text" name= "username" placeholder= "Username" size= "27"/><br/>
        <p>Password:</p>
        <input class= "loginInput" type= "password" name= "password" placeholder= "Password" size= "27"><br/>
        <input class= "loginInput loginBtn" name= "login" type= "submit" value= "Login"/><br/>
    </form>  
    <a href= "./registration.php"><button class="registerBtnLogin">Register</button></a>
</body>
</html>