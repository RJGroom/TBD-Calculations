<?php
include 'comm.php';

$Username = $_REQUEST['loginUsername'];
$Password = $_REQUEST['loginPassword'];

$sql = "SELECT * FROM users WHERE username = '$Username' AND password = '$Password'";
$result = $conn->query($sql);

if($result->num_rows == 0)
{
    echo "login failed.";
}
else
{
    echo "login successful. Welcome " . $Username;
}

?>