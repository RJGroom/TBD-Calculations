
<?php
include 'comm.php';

$Username = $_GET['initUsername'];
$InitPassword = $_GET['initPassword'];
$ConPassword = $_GET['confirmPassword'];

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
    $sql = "INSERT into users (username, password) VALUES ('$Username', '$InitPassword')";

    if($conn->query($sql) === TRUE)
    {
	    echo "Created User";
    }
    else
    {
	    echo "Sorry could not create user";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name = "register" method = "GET">
        <input type = "text" name = "email" placeholder = "Email Address"/><br/>
        <input type = "text" name = "initUsername" placeholder = "Username"/><br/>
        <input type = "password" name = "initPassword" placeholder = "Password"/><br/>
        <input type = "password" name = "confirmPassword" placeholder = "Confirm Password"/><br/>
        <input type = "submit" value = "Register"/>
    </form>
</body>
</html>
