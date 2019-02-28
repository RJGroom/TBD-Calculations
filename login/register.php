<?php
include 'comm.php';

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
	    echo "Created User";
    }
    else
    {
	    echo "Sorry could not create user";
    }
}
?>