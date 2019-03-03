<?php
include 'comm.php';
if(empty($_POST['initUsername']) || empty($_POST['FirstName']) || empty($_POST['LastName']) || empty($_POST['Email'])
|| empty($_POST['initPassword']) || empty('confirmPassword'))
{
    echo "Please fill in all fields";
}
else if(isset($_POST['login.php'])) 
{
    $Username = $_REQUEST['initUsername'];
    $FirstName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    $Email = $_REQUEST['Email'];
    $InitPassword = $_REQUEST['initPassword'];
    $ConPassword = $_REQUEST['confirmPassword'];

    $sql = "SELECT * FROM users WHERE username = '$Username'";
    $result = $conn->query($sql);

    if($InitPassword <> $ConPassword)
    {
        echo "Passwords do not match.";
    }
    else if($result->num_rows > 0)
    {
        echo "Username already taken. Please try another.";
    }
    else
    {
        $sql = "INSERT into users (username, password, fName, lName, email) VALUES ('$Username', '$InitPassword', '$FirstName', '$LastName', '$Email')  ";

        if($conn->query($sql) === TRUE)
        {
            header("Location: ../index.php");   }
        else
        {
	        echo "Sorry could not create user";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="registrationPage">
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
</body>
</html>