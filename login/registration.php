<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name = "register" method = "GET" action = "register.php">
        <!--<input type = "text" name = "email" placeholder = "Email Address"/><br/>-->
        <p class = "userName">Username:</p>
        <input type = "text" name = "initUsername" placeholder = "Username"/><br/>
        <p class = "firstName">First Name:</p>
        <input type = "text" name = "initFirstName" placeholder = "First Name"/><br/>
        <p class = "lastName">Last Name:</p>
        <input type = "text" name = "initLastName" placeholder = "Last Name"/><br/>
        <p class = "E-mail">E-mail:</p>
        <input type = "text" name = "initEmail" placeholder = "E-mail"/><br/>
        <p class = "enterPassword">Enter Password:</p>
        <input type = "password" name = "initPassword" placeholder = "Password"/><br/>
        <p class = "confirmPassword">Confirm Password</p>
        <input type = "password" name = "confirmPassword" placeholder = "Confirm Password"/><br/>
        <p class = "gap"></p>
        <input type = "submit" value = "Register"/>
    </form>
</body>
</html>