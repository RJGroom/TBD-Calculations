<?php
    session_start();

    if(isset($_POST['login']))
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
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: ../index.html");
        }
        else
        {
            echo "Login failed. Please check that your username and password are both correct.";
        }
    }
    /*
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
    **/

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
    <form action = "login.php" method = "post">
        <input type = "text" name = "username" placeholder = "Username"/><br/>
        <input type = "password" name = "password" placeholder = "Password"/><br/>
        <input name = "login" type = "submit" value = "Login"/>
    </form>    
    <a href = "register.html"><button>Register</button></a>
</body>
</html>