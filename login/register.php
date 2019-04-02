
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

if(empty($Username) || empty($FirstName) || empty($LastName) || empty($Email) || empty($InitPassword) || empty($ConPassword))
{
    header('Refresh: 5; registration.php');
    echo "Please enter in all information";
}
else if($InitPassword <> $ConPassword)
{
    header('Refresh: 5; registration.php');
    echo "Passwords do not match.";
}
else if($result->num_rows > 0)
{
    header('Refresh: 5; registration.php');
    echo "Username already taken. Please try another.";
}
else
{
    $sql = "INSERT into users (username, password, fName, lName, email) VALUES ('$Username', '$InitPassword', '$FirstName', '$LastName', '$Email')  ";
    $sql2 = "INSERT into expenses (username) VALUE ('$Username')";
    $result = $conn->query($sql2);
    if($conn->query($sql) === TRUE)
    {
        session_start();
        include_once("comm.php");

        $sql = "SELECT * FROM users WHERE username = '$Username' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row =  mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];

            $_SESSION['username'] = $Username;
            $_SESSION['id'] = $id;
            $_SESSION['isLoggedIn'] = TRUE;
            header("Location: ../profile/profile.php");
       // header("Location: ../index.php");
    }
    else
    {
        echo "Sorry could not create user";
    }
}
?>