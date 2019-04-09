<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
    <title>Register</title>
    <link rel="stylesheet" href="../navbar/navbarstyle.css">
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