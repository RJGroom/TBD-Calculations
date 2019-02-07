<?php
include 'comm.php';

$Username = $_REQUEST['initUsername'];
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
    $sql = "INSERT into users (username, password) VALUES ('$Username', '$InitPassword')";
    echo "Created User";
}
?>